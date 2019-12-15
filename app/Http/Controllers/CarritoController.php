<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\ProdCart;


class CarritoController extends Controller
{
    public function agregarPasaje(Request $request) {
        $cantid=$request->cantid;
        $userid=Auth::id();
        $product_id=$request->id_producto;

        $prodCart = new ProdCart();
        $prodCart->pasajes_id = $product_id;
        $prodCart->user_id = $userId;
        $prodCart->quantity = $cantid;

        $prodCart->save();
    }
}
