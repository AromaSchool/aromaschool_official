<?php

namespace App\Http\Controllers\Presentation;

use App\Http\Controllers\Controller;
use App\Service\PresentationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GetPresentationsController extends Controller
{
    protected $service;

    public function __construct(PresentationService $service)
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
            'lastIndex' => $request->lastIndex,
            'limit' => $request->limit ?? 30,
            'orderBy' => $request->orderBy ?? 'semester',
            'orderDirection' => $request->orderDirection ?? 'desc',
            'symptomId' => $request->systemId,
        ];
        $validator = Validator::make(
            $params,
            [
                'limit' => 'numeric|min:1',
                'orderBy' => 'in:semester,graduation',
                'orderDirection' => 'in:desc,asc',
                'symptomId' => 'exists:symptoms,id|nullable'
            ]
        );

        if ($validator->fails()) {
            return response()->json($validator->messages(), 400);
        }

        return $this->service->getPresentations(
            $params['lastIndex'],
            $params['limit'],
            $params['orderBy'],
            $params['orderDirection'],
            $params['symptomId'],
        );
    }
}
