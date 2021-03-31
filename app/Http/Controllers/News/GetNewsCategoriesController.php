<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Service\NewsService;
use Illuminate\Http\Request;

class GetNewsCategoriesController extends Controller
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
        $response = $this->service->getNewsCategories();

        if ($response->isNotEmpty()) {
            return $response;
        }

        return response('', 204);
    }
}
