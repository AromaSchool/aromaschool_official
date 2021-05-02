<?php

declare(strict_types=1);

namespace App\Service;

use App\Models\CourseSetting;
use Illuminate\Database\Eloquent\Collection;

class CourseService
{
    public function getCourseBatches(
        int $courseId,
        ?int $classroomId,
        ?int $scheduleId
    ): Collection {
        $query = CourseSetting::where('course_id', '=', $courseId)
            ->whereHas('batches', function ($q) use ($courseId) {
                $q->where('visible', '=', true)
                ->where('course_id', '=', $courseId);
            })
            ->with(['batches' => function ($q) use ($courseId) {
                $q->where('visible', '=', true)
                    ->where('course_id', '=', $courseId);
            }])
            ->with('classroom')
            ->with('schedule')
            ->orderBy('classroom_id')
            ->orderBy('schedule_id');

        if ($classroomId !== null) {
            $query->where('classroom_id', '=', $classroomId);
        }
        if ($scheduleId !== null) {
            $query->where('schedule_id', '=', $scheduleId);
        }

        return $query->get();
    }
}
