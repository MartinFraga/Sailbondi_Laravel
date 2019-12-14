<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destinos;
use App\Transaccion;
use App\Pasajes;

class TransaccionesController extends Controller
{
    public function create($destinoId) {        

        $destino = Destinos::where("id", $destinoId)->first();

        return view('transacciones.create')->with(["destino" => $destino]);
    }

    public function save(Request $request) {
        $transaccion = new Transaccion();
        
        $pasaje = Pasajes::where("destino_id", $request["destino"])->first();

        $transaccion->passenger_name = $request["passenger_name"];
        $transaccion->passenger_docnumber = $request["passenger_docnumber"];
        $transaccion->user_id = 1;
        $transaccion->total = 1;
        $transaccion->pasaje_id = $pasaje["id"];

        if ($transaccion->save()) {
            return view('transacciones.confirm')->with(["transaccion" => $transaccion]);
        }

        return view('transacciones.confirm')->with(["msg" => "error..."]);
    }

}
