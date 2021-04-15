<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use App\Service\ArticleService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UpdateArticleHitsController extends Controller
{
    protected $service;

    public function __construct(ArticleService $service)
    {
        $this->service = $service;
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, int $id)
    {
        $validator = Validator::make(
            [
                'id' => $id,
            ],
            [
                'id' => 'required|exists:articles,id',
            ]
        );

        if ($validator->fails()) {
            return response()->json($validator->messages(), 400);
        }

        $this->service->updateArticleHit($id);

        return response('', 201);
    }
}
