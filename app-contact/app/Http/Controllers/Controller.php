<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\contacto;
use Illuminate\Http\Request;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function sdd(){
        return view('archivos.subir');
    }

    public function buscar(Request $request){
        
        return view('accion.buscar');
    
    }
    
    public function borrar(Request $request){
        
        return view('accion.delete');
    }
    
    public function agregar(){
        return view('accion.agregar');
    }
}
