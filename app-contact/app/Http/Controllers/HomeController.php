<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contacto;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  /*  public function __construct()
    {
        $this->middleware('auth');
    }
*/
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$contactos = contacto::all();
        //return $contactos;
       // return view('contact.contacto',compact('contactos'));
     //   return view('archivos.subir');
    }
   /* public function sdd()
    {
        return view('archivos.subir');
    }*/

   /* public function deleteData(Request $request){
        //cambia el estatus de usuario
        $id = contacto()->id;

        $usuario = User::find($request->id);
        $usuario->status = 0;
        $usuario->save();
    }
*/
}
