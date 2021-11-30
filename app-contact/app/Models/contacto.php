<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class contacto extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = ['email','password','nombre','last_name','fecha_nacimiento',
    'personal_phone','contact_phone','direccion','sexo','estado','ciudad','suburbio',
    'zip_code','avatar','recordar_token','status'];

    protected $dates=['email_verified_at','created_at','updated_at','deleted_at'];
    
    protected $table ='contacto';

}
