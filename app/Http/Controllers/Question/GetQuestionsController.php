<?php

namespace App\Http\Controllers\Question;

use App\Http\Controllers\Controller;
use App\Service\QuestionService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GetQuestionsController extends Controller
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
        $validator = Validator::make(
            $request->all(),
            [
                'categoryId' => 'required|exists:question_categories,id',
            ]
        );

        if ($validator->fails()) {
            return response()->json($validator->messages(), 400);
        }

        $response = $this->service->getQuestions($request->categoryId);

        if ($response->isNotEmpty()) {
            return $response;
        }
    }
}
