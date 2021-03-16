<?php

declare(strict_types=1);

namespace App\Service;

use App\Exceptions;
use App\Models\Event;
use Illuminate\Http\Response;
use Illuminate\Database\Eloquent\Collection;

class EventService
{
    public function getEvent(int $id): ?Event
    {
        $event = Event::where('id', $id)->first();

        return $event;
    }

    public function getEvents($lastIndex, int $limit, string $orderBy, $orderDirection, ?string $search): array
    {
        $query = Event::select(['id', 'title', 'date'])->limit($limit);

        if ($search !== null) {
            $query->where(\DB::raw('CONCAT(title,date)'), 'like', '%' . $search . '%');
        }

        if ($orderDirection == 'asc') {
            $query->orderBy($orderBy);

            if ($lastIndex !== null) {
                $query->where($orderBy, '>', $lastIndex);
            }
        } else {
            $query->orderByDesc($orderBy);

            if ($lastIndex !== null) {
                $query->where($orderBy, '<', $lastIndex);
            }
        }

        $result = $query->get();
        $length = \count($result);

        return [
            'lastIndex' => $length ? $result[$length - 1]->{$orderBy} : null,
            'list' => $result
        ];
    }
}
