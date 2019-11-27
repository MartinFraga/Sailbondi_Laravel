<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasajes;


class PasajesController extends Controller
{
    public function index() {
        return view('pasajes.index');
    }


    public function show($id) {
        $pasaje = Pasajes::where("id", $id)
                        ->get();

        return view('pasajes.show')->with(["id" => $id, "pasaje" => $pasaje]);
    }
}
