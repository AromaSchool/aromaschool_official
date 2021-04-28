<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Service\NewsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GetNewsListController extends Controller
{
    protected $service;

    public function __construct(NewsService $service)
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
        ];
        $validator = Validator::make(
            $params,
            [
                'limit' => 'numeric|min:1',
                'orderBy' => 'in:title,createdAt',
                'orderDirection' => 'in:desc,asc',
                'categoryId' => 'exists:news_categories,id|nullable',
            ]
        );

        if ($validator->fails()) {
            return response()->json($validator->messages(), 400);
        }
        $response = $this->service->getList(
            $params['lastIndex'],
            $params['limit'],
            $params['orderBy'],
            $params['orderDirection'],
            $params['search'],
            $params['categoryId']
        );

        return $response;
    }
}
