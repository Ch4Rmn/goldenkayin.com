<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function send(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject'   => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Mail::raw($data['message'], function ($message) use ($data) {
            $message->to('gkasingapore@gmail.com')
                ->subject($data['subject'] . ' - Contact Form Message from ' . $data['name'])
                ->replyTo($data['email']);
        });

        return back()->with('success', 'Your Email has been sent!, we will get back to you soon.');
    }
}
