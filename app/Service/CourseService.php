<?php

declare(strict_types=1);

namespace App\Service;

use Carbon\Carbon;
use App\Models\Course;
use App\Models\CourseSetting;
use App\Models\CourseBatch;
use App\Models\CourseCustomer;
use App\Models\CourseSignUp;
use App\Models\OauthUserCourse;
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
                ->with(['batches' => function ($q) use ($courseId) {
                    $q->where('visible', '=', true)
                        ->where('course_id', '=', $courseId)
                        ->where('off_shelf_date', '>=', Carbon::now());
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

    public function signUpCourse(
        string $name,
        string $phone,
        string $mail,
        string $comment,
        array $courses
    ): void {
        try {
            \DB::beginTransaction();
            $courseCustomer = CourseCustomer::create([
                'name' => $name,
                'phone' => $phone,
                'mail' => $mail,
                'comment' => $comment,
            ]);
            $courseCustomer->save();

            foreach ($courses as $course) {
                $courseSignUp = CourseSignUp::create([
                    'course_customer_id' => $courseCustomer->id,
                    'course_id' => $course,
                ]);
                $courseSignUp->save();
            }
            \DB::commit();
        } catch (\Throwable $th) {
            \DB::rollBack();
            throw $th;
        }
    }

    public function getOnlineCourses(?int $userId)
    {
        $today = Carbon::today();
        $userCourses = OauthUserCourse::where('user_id', '=', $userId)
            ->where('start_date', '<=', $today)
            ->where('end_date', '>=', $today)
            ->pluck('course_id')
            ->toArray();

        $courses = Course::with('videosCategories.videos')
            ->where('category_id', '=', 3)
            ->get();

        foreach ($courses as &$course) {
            if (!\in_array($course->id, $userCourses)) {
                foreach ($course->videosCategories as &$videosCategory) {
                    foreach ($videosCategory->videos as &$video) {
                        if ($video->paid) {
                            $video->makeHidden('url');
                        }
                    }
                }
            }
        }

        return $courses;
    }
}
