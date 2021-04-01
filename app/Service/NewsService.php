<?php

declare(strict_types=1);

namespace App\Service;

use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Database\Eloquent\Collection;

class NewsService
{
    public function getNewsCategories(): Collection
    {
        return NewsCategory::all();
    }

    public function getNews(int $id): ?News
    {
        $news = News::with('category')->where('id', $id)->first();

        return $news;
    }

    public function getList(
        ?string $lastIndex,
        int $limit,
        string $orderBy,
        string $orderDirection,
        ?string $search,
        ?int $categoryId
    ): array {
        $selected = ['id', 'title', 'created_at', 'category_id'];
        $query = News::with('category')
            ->where('visible', '=', true)
            ->limit($limit);

        if ($categoryId !== null) {
            $query->whereHas('category', function ($q) use ($categoryId) {
                $q->where('id', '=', $categoryId);
            });
        }

        $modifier = '';
        if ($search !== null) {
            $keywords = \preg_split('/\s+/', $search);
            foreach ($keywords as $keyword) {
                $modifier .= "+${keyword} ";
            }
            $modifier = \rtrim($modifier);
            $query->whereRaw(
                'ROUND(MATCH(`title`, `content`) AGAINST(? IN BOOLEAN MODE), 14)',
                $modifier
            );
            $selected[] = \DB::raw("ROUND(MATCH(`title`, `content`) AGAINST(\"$modifier\" IN BOOLEAN MODE), 14) AS `score`");
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
                    $query->where(function ($query) use ($orderBy, $lastIndex, $modifier) {
                        $query->where(\DB::raw("ROUND(MATCH(`title`, `content`) AGAINST(\"$modifier\" IN BOOLEAN MODE), 14)"), '<', $lastIndex[0]);
                        $query->orWhere([
                            [\DB::raw("ROUND(MATCH(`title`, `content`) AGAINST(\"$modifier\" IN BOOLEAN MODE), 14)"), '=', $lastIndex[0]],
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
}
