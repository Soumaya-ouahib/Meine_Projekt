<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Mail;

class ContactController extends Controller
{
    public function contact(){

        return view('contact');
    }

    public function sendEmail(Request $request)
    {
        $details =[
            'name'=> $request->name,
            'phone'=> $request->phone,
            'email'=> $request->email,
            'msg'=> $request->msg
        ];

        Mail::to('soumia.ouahib12@gmail.com')->send(new ContactMail($details));
        return back()->with('message_sent','Your message has been sent successefully');
    }
    //
}
