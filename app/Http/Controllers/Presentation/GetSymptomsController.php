<?php

namespace App\Http\Controllers\Presentation;

use App\Http\Controllers\Controller;
use App\Service\PresentationService;
use Illuminate\Http\Request;

class GetSymptomsController extends Controller
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
        $response = $this->service->getSymptoms();

        if ($response->isNotEmpty()) {
            return $response;
        }
    }
}
