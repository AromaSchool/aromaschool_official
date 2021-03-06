<?php

declare(strict_types=1);

namespace App\Service;

use App\Models\Review;

class ReviewService
{
    public function getReviews(
        ?string $lastIndex,
        int $limit,
        string $orderBy,
        string $orderDirection,
        ?string $search
    ): array {
        $query = Review::limit($limit);

        if ($search !== null) {
            $query->where(\DB::raw('CONCAT(name,semester,graduation)'), 'like', '%' . $search . '%');
        }

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
            $query->orderByDesc($orderBy)->orderByDesc('id');

            if ($lastIndex !== null) {
                $lastIndex = \explode(',', $lastIndex);
                $query->where(function ($query) use ($orderBy, $lastIndex) {
                    $query->where($orderBy, '<', $lastIndex[0]);
                    $query->orWhere([
                        [$orderBy, '=', $lastIndex[0]],
                        ['id', '<', $lastIndex[1]],
                    ]);
                    $query;
                });
            }
        }

        $result = $query->get();
        $length = \count($result);

        foreach ($result as $review) {
            if ($review->image) {
                $review->image = \config('services.storage.url') . '/storage/reviews/' . $review->image;
            }
        }

        return [
            'lastIndex' => $length ? "{$result[$length - 1]->{$orderBy}},{$result[$length - 1]->id}" : null,
            'list' => $result
        ];
    }
}
