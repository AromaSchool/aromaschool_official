<?php

namespace App\Http\Controllers\Question;

use App\Http\Controllers\Controller;
use App\Service\QuestionService;
use Illuminate\Http\Request;

class GetQuestionCategoriesController extends Controller
{
    protected $service;

    public function __construct(QuestionService $service)
    {
        $this->service = $service;
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $response = $this->service->getQuestionCategories();

        if ($response->isNotEmpty()) {
            return $response;
        }
    }
}
