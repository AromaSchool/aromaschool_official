<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use App\Service\CourseService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GetCourseBatchesController extends Controller
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
        $params = [
            'courseId' => $request->courseId,
            'classroomId' => $request->classroomId,
            'scheduleId' => $request->scheduleId,
        ];
        $validator = Validator::make(
            $params,
            [
                'courseId' => 'required|exists:courses,id|nullable',
                'classroomId' => 'exists:course_classrooms,id|nullable',
                'scheduleId' => 'exists:course_schedules,id|nullable',
            ]
        );

        if ($validator->fails()) {
            return response()->json($validator->messages(), 400);
        }

        $response = $this->service->getCourseBatches(
            $params['courseId'],
            $params['classroomId'],
            $params['scheduleId'],
        );

        if ($response->isNotEmpty()) {
            return $response;
        }

        return response('', 204);
    }
}
