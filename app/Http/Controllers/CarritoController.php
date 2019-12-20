<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Carrito;
use App\Transaccion;
use App\TransaccionesItem;

class CarritoController extends Controller
{
    public function add(Request $request) {
        
        $cantid = $request->cantid;
        $userid = Auth::id();
        $destino_id=$request->id_producto;

        $prodCart = new Carrito();
        $prodCart->user_id = $userid;
        $prodCart->destino_id = $destino_id;        
        $prodCart->quantity = $cantid;

        $prodCart->save();

        return redirect('/carrito/index'); 
    }

    public function delete($id) {
        $item = Carrito::find($id);

        if($item->delete()){
            $message = "Registro eliminado correctamente";
        } else {
            $message = "El Registro no pudo ser elimininado";
        }

        return response()->json([
            'message' => $message
        ]);
    }

    public function save(){
        $carrito = Carrito::where('user_id', Auth::id())
        ->with('destino')
        ->with('user')
        ->get();

        $total = 0;
        foreach($carrito as $item) {
            $total += $item->destino->precio;
        }

        $transaccion = new Transaccion();
        $transaccion->user_id = Auth::id();
        $transaccion->total = $total;

        $messsage = "";

        if ($transaccion->save()) {
            foreach ($carrito as $item) {
                $itemTransaccion = new TransaccionesItem();
                $itemTransaccion->transaccion_id = $transaccion->id;
                $itemTransaccion->destino_id = $item->destino->id;
                $itemTransaccion->cantidad = $item->quantity;
                $itemTransaccion->precio = $item->destino->precio;
                $itemTransaccion->save();
            }
            Carrito::where('user_id', Auth::id())->delete();
            $messsage = "Compra Exitosa";

            return view('transacciones.confirm')->with(["flash_message" => $messsage, "transaccion" => $transaccion]);
        }
        
        return redirect()->back()->with(["flash_message" => $messsage]); 
    }

    function index() {
        $carrito = Carrito::where('user_id', Auth::id())
        ->with('destino')
        ->with('user')
        ->get();

        return view('carrito.index')->with(["carrito" => $carrito]);
    }
}
