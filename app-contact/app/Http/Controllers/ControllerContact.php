<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contacto;
class ControllerContact extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactos = contacto::all();

        return view('contact.contacto',compact('contactos'));
        //return view('contact.contacto',compact('contactos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //crea por metodo rest
        //$rulesreport($request);
        $request->validate([    
            'email' => 'required|email',
            'password' => 'required|min:10',
            'nombre' => 'required|min:3',
            'last_name' => 'required|min:4',
            'fecha_nacimiento' => 'required|date',
            'personal_phone' => 'required|min:10',
            'contact_phone' => 'required|min:10',
            'zip_code' => 'required|min:6'
        ]);
        /*$request->validate([    
            'email' => 'required',
            'password' => 'required',
            'nombre' => 'required',
            'last_name' => 'required',
            'fecha_nacimiento' => 'required',
            'personal_phone' => 'required',
            'contact_phone' => 'required',
            'zip_code' => 'required'
        ]);*/

        $contacto = new contacto();
        $contacto->email = $request->email;
        $contacto->password = $request->password;
        $contacto->nombre = $request->nombre;
        $contacto->last_name = $request->last_name;
        $contacto->fecha_nacimiento = $request->fecha_nacimiento;
        $contacto->personal_phone = $request->personal_phone;
        $contacto->contact_phone = $request->contact_phone;
        $contacto->direccion = $request->direccion;
        $contacto->sexo = $request->sexo;
        $contacto->estado = $request->estado;
        $contacto->ciudad = $request->ciudad;
        $contacto->suburbio = $request->suburbio;
        $contacto->zip_code = $request->zip_code;
        $contacto->avatar = $request->avatar;
        $contacto->recordar_token = $request->recordar_token;

        $contacto->save();

        /*
        ['email','password','nombre','last_name','fecha_nacimiento',
    'personal_phone','contact_phone','direccion','sexo','estado','ciudad','suburbio',
    'zip_code','avatar','recordar_token'];
        
        */
        return view('accion.agregar')->with('messaje','Cliente Creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //obtiene un solo registro
        $contacto = contacto::findOrFail($request->id);
        $contacto->get();
        //return $contacto;
       // return view('accion.buscar',compact('contacto'));
        return view('contact.encontrado',compact('contacto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $contacto = contacto::findOrFail($request->id);
        $contacto->email = $request->email;
        $contacto->password = $request->password;
        $contacto->nombre = $request->nombre;
        $contacto->last_name = $request->last_name;
        $contacto->fecha_nacimiento = $request->fecha_nacimiento;
        $contacto->personal_phone = $request->personal_phone;
        $contacto->contact_phone = $request->contact_phone;
        $contacto->direccion = $request->direccion;
        $contacto->sexo = $request->sexo;
        $contacto->estado = $request->estado;
        $contacto->ciudad = $request->ciudad;
        $contacto->suburbio = $request->suburbio;
        $contacto->zip_code = $request->zip_code;
        $contacto->avatar = $request->avatar;
        $contacto->recordar_token = $request->recordar_token;

        $contacto->save();

        return $contacto;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $contacto = contacto::destroy($request->id);
        //return $contacto;
        //return view('contact.deletecontact',('contacto'));
        return back();
    }

    
    public function getAvatar(Request $request){
       // $avatar = contacto::select('avatar')->where('id', '=', $request->$id)->count();
       //$sql = 'SELECT avatar FROM contacto WHERE id' = '$request->id';
       //$avatar = DB::select($sql);
        $articulo = contacto::findOrFail($request->id);
       //$articulo->avatar = $request->avatar;
        return $articulo;
    }
        public function deleteData(Request $request){
        //cambia el estatus de usuario
       // $id = contacto()->id;

        $usuario = contacto::find($request->id);
        $usuario->status = 0;
        $usuario->save();
       // return $usuario; 

        return back()->with('message','usuario borrado');
    }

    public function restablecerData(Request $request){
        //cambia el estatus de usuario
      //  $id = contacto()->id;

        $usuario = contacto::find($request->id);
        $usuario->status = 1;
        $usuario->save();
        if($usuario == true){
        $response = response()->json(['status'=>true,'message'=>'se renovo el acceso correctamente']/*,$this->sucessStatus*/);
        }else{
            $response = response()->json(['status'=>false,'message'=>'se renovo el acceso correctamente']);
        }
        //return $response;
        return back()->with('message','se renovo el acceso correctamente');
    }
    public function rulesreport(Request $request)
    {
     /*   $reglas=[    
            'email' => 'required|email',
            'password' => 'required|confirmed|min:10',
            'nombre' => 'required|confirmed|min:3',
            'last_name' => 'required|confirmed|min:4',
            'fecha_nacimiento' => 'required|confirmed|date',
            'personal_phone' => 'required|confirmed|min:10',
            'contact_phone' => 'required|confirmed|min:10',
            'zip_code' => 'required|confirmed|min:6'
        ];*/
        $request->validate([    
            'email' => 'required',
            'password' => 'required|confirmed|min:10',
            'nombre' => 'required|confirmed|min:3',
            'last_name' => 'required|confirmed|min:4',
            'fecha_nacimiento' => 'required|confirmed|date',
            'personal_phone' => 'required|confirmed|min:10',
            'contact_phone' => 'required|confirmed|min:10',
            'zip_code' => 'required|confirmed|min:6'
        ]);

        return back();
        
    }
    
    public function messages(){
        return [
            //'establecimiento.required' => 'Seleccione un Establecimiento',
            
            'email.required' => 'Ingrese un correo valido',
            'password.required' => 'Ingrese la contraseña',
            'nombre.required' => 'Ingrese el nombre',
            'last_name.required' => 'ingrese el apellido',
            'fecha_nacimiento,required' => 'Ingrese formato valido',
            'personal_phone.required' => 'Ingrese el telefono personal',
            'contact_phone.required' => 'Ingrese el teledono de contacto',
            'zip_code.required' => 'Ingrese el codigo postal'     
        ];


    }
}
