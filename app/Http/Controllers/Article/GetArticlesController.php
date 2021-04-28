<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use App\Service\ArticleService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GetArticlesController extends Controller
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
    public function __invoke(Request $request)
    {
        $params = [
            'search' => $request->search,
            'lastIndex' => $request->lastIndex,
            'limit' => $request->limit ?? 30,
            'orderBy' => $request->orderBy ?? 'createdAt',
            'orderDirection' => $request->orderDirection ?? 'desc',
            'categoryId' => $request->categoryId,
            'keywordId' => $request->keywordId,
        ];
        $validator = Validator::make(
            $params,
            [
                'limit' => 'numeric|min:1',
                'orderBy' => 'in:title,createdAt,authorName,hits',
                'orderDirection' => 'in:desc,asc',
                'categoryId' => 'exists:article_categories,id|nullable',
                'keywordId' => 'exists:article_keywords,id|nullable',
            ]
        );

        if ($validator->fails()) {
            return response()->json($validator->messages(), 400);
        }

        $response = $this->service->getArticles(
            $params['lastIndex'],
            $params['limit'],
            $params['orderBy'],
            $params['orderDirection'],
            $params['search'],
            $params['categoryId'],
            $params['keywordId']
        );

        return $response;
    }
}
