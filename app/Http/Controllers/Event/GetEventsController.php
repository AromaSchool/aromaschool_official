<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use App\Service\EventService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GetEventsController extends Controller
{
    protected $service;

    public function __construct(EventService $service)
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
            'orderBy' => $request->query('orderBy') ?? 'id',
            'orderDirection' => $request->query('orderDirection') ?? 'desc',
        ];
        $validator = Validator::make(
            $params,
            [
                'limit' => 'numeric|min:1',
                'orderBy' => 'in:id,title,date',
                'orderDirection' => 'in:desc,asc',
            ]
        );

        if ($validator->fails()) {
            return response()->json($validator->messages(), 400);
        }
        $response = $this->service->getEvents(
            $params['lastIndex'],
            $params['limit'],
            $params['orderBy'],
            $params['orderDirection'],
            $params['search']
        );

        return $response;
    }
}
