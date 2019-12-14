<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destinos;

class DestinosController extends Controller
{
    public function create(Request $request) {        

        $destinos = Destinos::get();
        return view('pasajes.create')->with(["destinos" => $destinos]);
    }

    public function view($id) {
        $destino = Destinos::where("id", $id)
        ->first();

        return view('destinos.view')->with(["id" => $id, "destino" => $destino]);
    }

}
