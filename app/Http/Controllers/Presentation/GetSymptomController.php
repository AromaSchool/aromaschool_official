<?php

namespace App\Http\Controllers\Presentation;

use App\Http\Controllers\Controller;
use App\Service\PresentationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GetSymptomController extends Controller
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
    public function __invoke(Request $request, int $id)
    {
        $validator = Validator::make(
            [
                'id' => $id,
            ],
            [
                'id' => 'exists:symptoms',
            ]
        );

        if ($validator->fails()) {
            return response()->json($validator->messages(), 400);
        }

        return $this->service->getSymptom($id);
    }
}
