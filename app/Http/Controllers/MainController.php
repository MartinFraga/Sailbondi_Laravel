<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('index');
    }

    public function faqs() {
        return view('faqs');
    }

    public function contact() {
        return view('contact');
    }

}

