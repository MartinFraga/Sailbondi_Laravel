<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactMessageController extends Controller
{
    
    public function create()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Mail::send('emails.contact-message', [
            'msg' => $request->message 


        ], function ($mail) use($request) {
            $mail->from($request->email, $request->name);

            $mail->to('martin.fraga@gmail.com')->subject('Contact Message');
        });

        return redirect()->back()->with('flash_message', 'Gracias por tu mensaje.' );

    }

}
