<?php

declare(strict_types=1);

namespace App\Service;

use App\Models\Teacher;
use App\Models\TeacherCategory;
use Illuminate\Database\Eloquent\Collection;

class TeacherService
{
    public function getTeacherCategories(): Collection
    {
        return TeacherCategory::all();
    }

    public function getTeachers(): Collection
    {
        $teachers = Teacher::with('category')
            ->where('visible', '=', true)
            ->orderBy('priority')
            ->orderBy('id')
            ->get();

        foreach ($teachers as $teacher) {
            if ($teacher->image) {
                $teacher->image = env('APP_URL') . '/storage/teachers/' . $teacher->image;
            }
        }

        return $teachers;
    }
}
