<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Service\NewsService;
use Illuminate\Http\Request;

class GetNewsController extends Controller
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
    public function __invoke(Request $request, int $id)
    {
        $response = $this->service->getNews($id);

        if ($response) {
            return $response;
        }

        return response('', 204);
    }
}
