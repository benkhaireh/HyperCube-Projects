<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Mail\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class senderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function quote(Request $request)
    {
        $credentials = \Validator::make($request->all(), [
            'fullname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'service' => 'required',
            'message' => 'required',
        ], [
            'fullname.required' => "Your complete name is required",
            'email.required' => "Your e-mail address is required",
            'email.email' => "Your email address is not valid",
            'phone.required' => "Your mobile number is required",
            'service.required' => "Service selection is required",
            'message.required' => "Details of your project are required",
        ]);

        $recaptcha = $request->recaptcha;

        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $remoteip = $_SERVER['REMOTE_ADDR'];
        $data = [
            'secret' => "6Lfbj1EkAAAAAFoDiI5qeZGavajDAbFxXi4ha-JV",
            'response' => $recaptcha,
            'remoteip' => $remoteip
        ];
        $options = [
            'http' => [
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data)
            ]
        ];
        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        $resultJson = json_decode($result);

        if ($resultJson->success == true) {
            if ($credentials->passes()) {
                Mail::to('mohamed.khaireh@hypercube.dj')
                ->send(new Quote($request->except('_token')));
                return response()->json(['code' => 'SUCCESS', 'message' => "Well received. We will get back to you soon."]);
            }
            return response()->json(['code' => 'CREDENTIALS', 'message' => $credentials->errors()]);
        }

        return response()->json(['code' => 'UNKNOWN', 'message' => "Sorry, we got unknown error. Please try again!"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function message(Request $request)
    {
        $credentials = \Validator::make($request->all(), [
            'fullname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
            'subject' => 'required',
        ], [
            'fullname.required' => "Your complete name is required",
            'email.required' => "Your e-mail address is required",
            'email.email' => "Your email address is not valid",
            'phone.required' => "Your mobile number is required",
            'subject.required' => "The goal of your message is required",
            'message.required' => "Your message is required",
        ]);

        $recaptcha = $request->recaptcha;

        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $remoteip = $_SERVER['REMOTE_ADDR'];
        $data = [
            'secret' => "6Lfbj1EkAAAAAFoDiI5qeZGavajDAbFxXi4ha-JV",
            'response' => $recaptcha,
            'remoteip' => $remoteip
        ];
        $options = [
            'http' => [
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data)
            ]
        ];
        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        $resultJson = json_decode($result);

        if ($resultJson->success == true) {
            if ($credentials->passes()) {
                Mail::to('mohamed.khaireh@hypercube.dj')
                ->send(new Contact($request->except('_token')));
                return response()->json(['code' => 'SUCCESS', 'message' => "Well received. We will get back to you soon."]);
            }
            return response()->json(['code' => 'CREDENTIALS', 'message' => $credentials->errors()]);
        }

        return response()->json(['code' => 'UNKNOWN', 'message' => "Sorry, we got unknown error. Please try again!"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tracker(Request $request)
    {
        $mail = Mail::to('mohamed.khaireh@hypercube.dj')->send(new Contact($request->except('_token')));
        return response()->json(['mail' => $mail, 'code' => 'SUCCESS', 'message' => "Well received. We will get back to you soon."]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
