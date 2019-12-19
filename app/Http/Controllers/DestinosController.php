<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destinos;

class DestinosController extends Controller
{
    public function index() {
        $destinos = Destinos::where('id','<>','1')->get();
        return view('destinos.index')->with(["destinos" => $destinos]);
    }

    public function manage($option, $id = null) {
        $destino = null;
        if ($id) {
            $destino = Destinos::where("id", $id)->first();
        }

        return view('destinos.manage')->with(["id" => $id, "option" => $option, "id" => $id, "destino" => $destino]);
    }

    public function save(Request $request) {
        
        $message = 'Mensaje...';

        if($request["id"]) {
            if( Destinos::where('id', $request["id"])
                ->update([
                    'name' => $request["name"],
                    'precio' => $request["precio"],
                    'foto' => $request["foto"],
                    'title' => $request["title"],
                    'descrip' => $request["descrip"],
                    'full_title' => $request["full_title"],
                    'full_descrip' => $request["full_descrip"]
                ])){
                    $message = 'Registro Modificado correctamente';
            }
        } else {
            $destino = new Destinos();

            $destino->name = $request["name"];
            $destino->precio = $request["precio"];
            $destino->foto = $request["foto"];
            $destino->title = $request["title"];
            $destino->descrip = $request["descrip"];
            $destino->full_title = $request["full_title"];
            $destino->full_descrip = $request["full_descrip"];        
            
            if ($destino->save()) {
                $message = 'Registro almacenado correctamente.';
            }
        }

        return redirect('/admin')->with('flash_message', $message);        
    }

    public function delete($id) {
        $destino = Destinos::find($id);

        if($destino->delete()){
            $message = "Registro eliminado correctamente";
        } else {
            $message = "El Registro no pudo ser elimininado";
        }

        return response()->json([
            'message' => $message
        ]);
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
