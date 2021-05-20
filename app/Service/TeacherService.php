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

    public function getTeacher(int $id): Teacher
    {
        return Teacher::find($id);
    }

    public function getTeachers(): Collection
    {
        $teachers = Teacher::with('category')
            ->where('visible', '=', true)
            ->orderBy('category_id')
            ->orderBy('priority')
            ->orderBy('id')
            ->get();

        foreach ($teachers as $teacher) {
            if ($teacher->image) {
                $teacher->image = \config('services.storage.url') . '/storage/teachers/' . $teacher->image;
            }
        }

        return $teachers;
    }
}
