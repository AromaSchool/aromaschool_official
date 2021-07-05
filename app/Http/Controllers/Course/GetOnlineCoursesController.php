<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use App\Service\CourseService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use GuzzleHttp\Client;
use GuzzleHttp\Cookie\CookieJar;

class GetOnlineCoursesController extends Controller
{
    protected $service;

    public function __construct(CourseService $service)
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
        $userId = $request->user ? $request->user['id'] : null;

        return $this->service->getOnlineCourses($userId);
    }
}
