<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Service\TeacherService;
use Illuminate\Http\Request;

class GetTeacherCategoriesController extends Controller
{
    protected $service;

    public function __construct(TeacherService $service)
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
        $response = $this->service->getTeacherCategories();

        if ($response->isNotEmpty()) {
            return $response;
        }

        return response('', 204);
    }
}
