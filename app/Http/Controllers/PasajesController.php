<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasajes;
use App\Destinos;

class PasajesController extends Controller
{
    public function create(Request $request) {        

        $destinos = Destinos::get();
        return view('pasajes.create')->with(["destinos" => $destinos]);
    }

    public function save(Request $request) {
        $pasaje = new Pasajes();

        $pasaje->name = $request["name"];
        $pasaje->descrip = $request["descrip"];
        $pasaje->id_origen = $request["id_origen"];
        $pasaje->id_destino = $request["id_destino"];
        $pasaje->precio = $request["precio"];
        $pasaje->foto = $request["foto"];        
        
        if ($pasaje->save()) {
            // 
        }

        // return view('pasajes.index');
    }


    public function show($id) {
        $pasaje = Pasajes::where("id", $id)
                        ->first();

        return view('pasajes.show')->with(["id" => $id, "pasaje" => $pasaje]);
    }
}
