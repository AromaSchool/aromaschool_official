<?php

namespace App\Http\Controllers\Mail;

use App\Mail\ContactMe;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactMeController extends Controller
{
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
                'title' => 'required',
                'content' => 'required',
                'mail' => 'required|email',
                'recaptcha' => 'required|recaptcha',
            ]
        );

        if ($validator->fails()) {
            return response()->json($validator->messages(), 400);
        }

        Mail::to(\env('MAIL_USERNAME'))
          ->send(new ContactMe(
              $request->name,
              $request->department,
              $request->phone,
              $request->mail,
              $request->title,
              $request->content
          ));

        if (Mail::failures()) {
            return response(Mail::failures(), 400);
        }

        return response('', 201);
    }
}
