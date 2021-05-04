<?php

declare(strict_types=1);

namespace App\Service;

use Carbon\Carbon;
use App\Models\CourseSetting;
use App\Models\CourseBatch;
use Illuminate\Database\Eloquent\Collection;

class CourseService
{
    public function getCourseBatches(
        int $courseId,
        ?int $classroomId,
        ?int $scheduleId
    ): Collection {
        $query = null;
        if (\in_array($courseId, [12, 13, 14])) {
            $query = CourseBatch::where('course_id', '=', $courseId)
                ->where('off_shelf_date', '>=', Carbon::now())
                ->where('visible', '=', true)
                ->orderBy('start_date');
        } else {
            $query = CourseSetting::where('course_id', '=', $courseId)
                ->where('off_shelf_date', '>=', Carbon::now())
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
        }

        return $query->get();
    }
}
