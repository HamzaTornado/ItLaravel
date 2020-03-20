<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;


class SendEmailController extends Controller
{
    //
    public function index() {
        return view('contact');
    }

    public function sendemail(Request $request) {
        $this->validate($request ,[
            'name' => 'required',
            'email' => 'required | email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $data= array(
            'name'      =>$request->name,
            'email'     =>$request->email,
            'subject'   =>$request->subject,
            'bodymessage'   =>$request->message
        );
        //$mailid = $req->email;

        Mail::send('email.email_template', $data, function ($message) use($data){
        $message->to('hamzaze17@gmail.com');
        $message->subject($data['subject']);
        });
        //return back()->with('message','Successfully Send Your Mail Id.');

/*
        Mail::from($data['email'], 'News Information')
        ->to($data['email'])
        ->send(new SendMail($data));
*/
        return back()->with('success','Thank You For Contacting Us!');
    }


}
