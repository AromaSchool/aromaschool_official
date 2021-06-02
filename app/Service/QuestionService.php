<?php

declare(strict_types=1);

namespace App\Service;

use App\Models\Question;
use App\Models\QuestionCategory;
use Illuminate\Database\Eloquent\Collection;

class QuestionService
{
    public function getQuestionCategories(): Collection
    {
        return QuestionCategory::orderBy('priority')->get();
    }

    public function getQuestions(int $categoryId): Collection
    {
        return Question::orderBy('priority')
            ->where('category_id', '=', $categoryId)
            ->get();
    }
}
