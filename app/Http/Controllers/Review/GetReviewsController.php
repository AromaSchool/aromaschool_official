<?php

namespace App\Http\Controllers\Review;

use App\Http\Controllers\Controller;
use App\Service\ReviewService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GetReviewsController extends Controller
{
    protected $service;

    public function __construct(ReviewService $service)
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
            'search' => $request->query('search'),
            'lastIndex' => $request->query('lastIndex'),
            'limit' => $request->query('limit') ?? 30,
            'orderBy' => $request->query('orderBy') ?? 'priority',
            'orderDirection' => $request->query('orderDirection') ?? 'asc',
        ];
        $validator = Validator::make(
            $params,
            [
                'limit' => 'numeric|min:1',
                'orderBy' => 'in:name,semester,graduation,priority',
                'orderDirection' => 'in:desc,asc',
            ]
        );

        if ($validator->fails()) {
            return response()->json($validator->messages(), 400);
        }
        $response = $this->service->getReviews(
            $params['lastIndex'],
            $params['limit'],
            $params['orderBy'],
            $params['orderDirection'],
            $params['search']
        );

        return $response;
    }
}
