<?php

declare(strict_types=1);

namespace App\Service;

use Carbon\Carbon;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Utils\Strings;
use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Collection;

class ArticleService
{
    public function getArticleCategory(int $id): ArticleCategory
    {
        return ArticleCategory::find($id);
    }

    public function getArticleCategories(): Collection
    {
        return ArticleCategory::all();
    }

    public function getArticle(int $id): ?Article
    {
        $article = Article::with('category')->with('keywords')->find($id);

        if ($article) {
            if ($article->image) {
                $article->image = \config('services.storage.url') . "/storage/articles/$article->image";
            }
            if ($article->author_image) {
                $article->author_image = \config('services.storage.url') . "/storage/articles/author/$article->author_image";
            }
        }

        return $article;
    }

    public function getArticles(
        ?string $lastIndex,
        int $limit,
        string $orderBy,
        string $orderDirection,
        ?string $search,
        ?int $categoryId,
        ?int $keywordId
    ): array {
        $orderBy = Strings::camelToSnake($orderBy);

        $selected = [
            'id',
            'title',
            'category_id',
            'created_at',
            'hits',
            'image',
            'content',
        ];
        $query = Article::limit($limit)->with('category')->where('visible', '=', true);

        if ($categoryId !== null) {
            $query->whereHas('category', function ($q) use ($categoryId) {
                $q->where('id', '=', $categoryId);
            });
        }
        if ($keywordId !== null) {
            $query->whereHas('keywords', function ($q) use ($keywordId) {
                $q->where('id', '=', $keywordId);
            });
        }

        $fullIndex = '`title`, `content`, `author_name`, `author_bio`';
        $modifier = '';
        if ($search !== null) {
            $search = \stripslashes($search);
            $keywords = \preg_split('/\s+/', $search);
            foreach ($keywords as $keyword) {
                $modifier .= "+${keyword} ";
            }
            $modifier = \rtrim($modifier);
            $query->whereRaw(
                "ROUND(MATCH($fullIndex) AGAINST(? IN BOOLEAN MODE), 14)",
                $modifier
            );
            $selected[] = \DB::raw(
                "ROUND(MATCH($fullIndex) AGAINST(\"$modifier\" IN BOOLEAN MODE), 14) AS `score`"
            );
        }
        $query->select($selected);

        if ($orderDirection == 'asc') {
            $query->orderBy($orderBy)->orderBy('id');

            if ($lastIndex !== null) {
                $lastIndex = \explode(',', $lastIndex);
                $query->where(function ($query) use ($orderBy, $lastIndex) {
                    $query->where($orderBy, '>', $lastIndex[0]);
                    $query->orWhere([
                        [$orderBy, '=', $lastIndex[0]],
                        ['id', '>', $lastIndex[1]],
                    ]);
                });
            }
        } else {
            if ($search) {
                $query->orderByDesc('score')->orderByDesc('id');
            } else {
                $query->orderByDesc($orderBy)->orderByDesc('id');
            }

            if ($lastIndex !== null) {
                $lastIndex = \explode(',', $lastIndex);
                if ($search) {
                    $query->where(function ($query) use ($fullIndex, $lastIndex, $modifier) {
                        $query->where(
                            \DB::raw("ROUND(MATCH($fullIndex) AGAINST(\"$modifier\" IN BOOLEAN MODE), 14)"),
                            '<',
                            $lastIndex[0]
                        );
                        $query->orWhere([
                            [
                                \DB::raw("ROUND(MATCH($fullIndex) AGAINST(\"$modifier\" IN BOOLEAN MODE), 14)"),
                                '=',
                                $lastIndex[0]
                            ],
                            ['id', '<', $lastIndex[1]],
                        ]);
                    });
                } else {
                    $query->where(function ($query) use ($orderBy, $lastIndex) {
                        $query->where($orderBy, '<', $lastIndex[0]);
                        $query->orWhere([
                            [$orderBy, '=', $lastIndex[0]],
                            ['id', '<', $lastIndex[1]],
                        ]);
                    });
                }
            }
        }

        $result = $query->get();
        $length = \count($result);

        foreach ($result as $article) {
            if ($article) {
                if ($article->image) {
                    $article->image = \config('services.storage.url') . "/storage/articles/$article->image";
                }
            }
        }

        if ($search) {
            $lastIndex = $length ? "{$result[$length - 1]->score},{$result[$length - 1]->id}" : null;
        } else {
            $lastIndex = $length ? "{$result[$length - 1]->{$orderBy}},{$result[$length - 1]->id}" : null;
        }

        return [
            'lastIndex' => $lastIndex,
            'list' => $result
        ];
    }

    public function updateArticleHit(int $id): void
    {
        $ip = \Request::ip();
        $key = "article.$id.hit.from.$ip";
        try {
            \DB::beginTransaction();

            if (!Cache::has($key)) {
                $expiresAt = Carbon::now()->endOfDay();
                Cache::put($key, Carbon::now()->toDateString(), $expiresAt);

                $article = Article::find($id);
                $article->hits += 1;
                $article->save();
            }

            \DB::commit();
        } catch (\Throwable $th) {
            Cache::forget($key);
            \DB::rollBack();
            throw $th;
        }
    }
}
