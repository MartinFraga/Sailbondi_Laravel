<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destinos;


class MainController extends Controller
{
    public function index() {

        $destinos = Destinos::where('id','<>','1')->get();

        return view('index')->with(["destinos" => $destinos]);

        // return view('index');
    }

    public function faqs() {
        return view('faqs');
    }

    public function contact() {
        return view('contact');
    }



    public function colonia() {
        return view('colonia');
    }

    public function punta() {
        return view('punta');
    }

}

