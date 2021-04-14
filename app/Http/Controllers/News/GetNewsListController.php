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
            'orderBy' => $request->orderBy ?? 'created_at',
            'orderDirection' => $request->orderDirection ?? 'desc',
            'category_id' => $request->category_id,
        ];
        $validator = Validator::make(
            $params,
            [
                'limit' => 'numeric|min:1',
                'orderBy' => 'in:title,created_at',
                'orderDirection' => 'in:desc,asc',
                'category_id' => 'exists:news_categories,id|nullable',
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
            $params['category_id']
        );

        return $response;
    }
}
