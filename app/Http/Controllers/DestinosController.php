<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destinos;

class DestinosController extends Controller
{
    public function index() {
        $destinos = Destinos::all();
        return view('destinos.index')->with(["destinos" => $destinos]);
    }

    public function manage($option, $id = null) {
        $destino = null;
        if ($id) {
            $destino = Destinos::where("id", $id)->first();
        }

        return view('destinos.manage')->with(["id" => $id, "option" => $option, "destino" => $destino]);
    }

    public function save($option) {

    }

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
