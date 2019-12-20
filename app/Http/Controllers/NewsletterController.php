<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsletter;

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

        $newsletter = new Newsletter();

        $newsletter->nombre = $request["name"];
        $newsletter->email = $request["email"];
        $newsletter->provincia = $request["provincia"];
        $newsletter->municipio = $request["municipio"];        
        $newsletter->save();

        return redirect()->back()->with('flash_message', 'Gracias por registrarte.' );

    }

}