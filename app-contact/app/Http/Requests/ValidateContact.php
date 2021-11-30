<?php


namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateContact extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            
            'email' => 'required|email',
            'password' => 'required|confirmed|min:10',
            'nombre' => 'required|confirmed|min:3',
            'last_name' => 'required|confirmed|min:4',
            'fecha_nacimiento' => 'required|confirmed|date',
            'personal_phone' => 'required|confirmed|min:10',
            'contact_phone' => 'required|confirmed|min:10',
            'zip_code' => 'required|confirmed|min:6',
                    
        ];
    }
    /*
    public function rulesemail( Request $request )
    {
        $form=request()->all();

        $validaciones=[1=>['comprobar'=>'required|email'],2=>['password'=>'required|confirmed|min:6']];

        return $validaciones[ $form['restablecer'] ];
    }

    
> correo electrónico * valida la dirección de correo electrónico
> contraseña * valida la longitud mínima de 10
> nombre * valida la longitud mínima de 3
> last_name * valida la longitud mínima de 4
> fecha_nacimiento * valida el formato de fecha: AAAA-MM-DD
> personal_phone * valida 10 dígitos
> contact_phone * valida 10 dígitos
> zip_code * valida 6 dígitos
 */

    public function messages()
    {
        return [
            //'establecimiento.required' => 'Seleccione un Establecimiento',
            
            'email.required' => 'Ingrese un correo valido',
            'password.required' => 'Ingrese la contraseña',
            'nombre.required' => 'Ingrese el nombre',
            'last_name.required' => 'ingrese el apellido',
            'fecha_nacimiento,required' => 'Ingrese formato valido',
            'personal_phone.required' => 'Ingrese el telefono personal',
            'contact_phone.required' => 'Ingrese el teledono de contacto',
            'zip_code.required' => 'Ingrese el codigo postal',      
        ];


    }
}



