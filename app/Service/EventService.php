<?php

declare(strict_types=1);

namespace App\Service;

use App\Models\Event;

class EventService
{
    public function getEvent(int $id): ?Event
    {
        $event = Event::where('id', $id)->first();

        return $event;
    }

    public function getEvents(?string $lastIndex, int $limit, string $orderBy, $orderDirection, ?string $search): array
    {
        $query = Event::select(['id', 'title', 'date'])->where('visible', '=', true)->limit($limit);

        if ($search !== null) {
            $query->where(\DB::raw('CONCAT(title,date)'), 'like', '%' . $search . '%');
        }

        if ($orderDirection == 'asc') {
            $query->orderBy($orderBy)->orderBy('id');

            if ($lastIndex !== null) {
                $lastIndex = \explode(',', $lastIndex);
                $query->where($orderBy, '>', $lastIndex[0]);
                $query->orWhere([
                    [$orderBy, '=', $lastIndex[0]],
                    ['id', '>', $lastIndex[1]],
                ]);
            }
        } else {
            $query->orderByDesc($orderBy)->orderByDesc('id');

            if ($lastIndex !== null) {
                $lastIndex = \explode(',', $lastIndex);
                $query->where($orderBy, '<', $lastIndex[0]);
                $query->orWhere([
                    [$orderBy, '=', $lastIndex[0]],
                    ['id', '<', $lastIndex[1]],
                ]);
                $query;
            }
        }

        $result = $query->get();
        $length = \count($result);

        return [
            'lastIndex' => $length ? "{$result[$length - 1]->{$orderBy}},{$result[$length - 1]->id}" : null,
            'list' => $result
        ];
    }
}
