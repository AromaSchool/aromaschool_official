<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use App\Service\CourseService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SignUpCourseController extends Controller
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
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'phone' => 'required|regex:/(09)\d{8}/',
                'mail' => 'required|email',
                'courses' => 'required|array',
                'courses.*' => 'exists:courses,id',
                'recaptcha' => 'required|recaptcha',
            ]
        );

        if ($validator->fails()) {
            return response()->json($validator->messages(), 400);
        }

        $this->service->signUpCourse(
            $request->name,
            $request->phone,
            $request->mail,
            $request->comment ?? '',
            $request->courses,
        );
    }
}
