<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactAuthController extends Controller
{
    public function contact()
    {
        return view('contact-us');
    }

    public function sendEmail(Request $request)
    {
        $details = [
            'name' => $request->name,
            'email'=> $request->email,
            'phone' =>$request->phone,
            'message' =>$request->message,
        ];
        Mail::to('ngoctai190497@gmail.com')->send(new ContactMail($details));
        return back()->while('message_sent','You message has been sent successfully!');
    }
}
