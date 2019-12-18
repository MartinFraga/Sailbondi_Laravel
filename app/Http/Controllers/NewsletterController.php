<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    
    public function create()
    {
        return view('newsletter');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'provincia' => 'required',
        ]);

        
        return redirect()->back()->with('flash_message', 'Gracias por tu mensaje.' );

    }

}