<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email',100)->nullable();
            $table->string('password',100)->nullable();
            $table->string('nombre',100)->nullable();
            $table->string('last_name',100)->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('personal_phone',20)->nullable();
            $table->string('contact_phone',20)->nullable();
            $table->text('direccion')->nullable();
            $table->string('sexo',1)->nullable();
            $table->string('estado',30)->nullable();
            $table->string('ciudad',80)->nullable();
            $table->string('suburbio',80)->nullable();
            $table->string('zip_code',8)->nullable();
            $table->string('avatar',150)->nullable();
            $table->string('recordar_token',100)->nullable();
            $table->boolean('status')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->softDeletes('deleted_at');
            //$table->timestamp('')->nullable();
            //$table->timestamps();
        });
        /*

        https://www.netireki.eus/crear-rest-api-con-laravel-step-1/#paso-1

        	id int(10) auto_increment NULL,
	email varchar(100) NOT NULL,
	password varchar(100) NOT NULL,
	nombre varchar(100) NOT NULL,
	last_name varchar(100) NOT NULL,
	fecha_nacimiento DATE NOT NULL,
	personal_phone varchar(20) NOT NULL,
	contact_phone varchar(20) NOT NULL,
	direccion TEXT NOT NULL,
	sexo varchar(1) NOT NULL,
	estado varchar(30) NOT NULL,
	ciudad varchar(80) NOT NULL,
	suburbio varchar(80) NOT NULL,
	zip_code varchar(8) NOT NULL,
	avatar varchar(150) NOT NULL,
	email_verified_at TIMESTAMP NOT NULL,
	recordar_token varchar(100) NOT NULL,
	created_at TIMESTAMP NOT NULL,
	updated_at TIMESTAMP NOT NULL,
	eliminado_en TIMESTAMP NOT NULL

    *****************
    Campo | Tipo | Nulo | Clave | Por defecto                          |
------------------|------------------|------|-----|---------------------------------|
id | int (11) unsigned | NO | PRI | NULL                             |
email | varchar (100) | SI | | NULL                             |
contraseña | varchar (100) | SI | | NULL                             |
nombre | varchar (100) | SI | | NULL                             |
last_name | varchar (100) | SI | | NULL                             |
fecha_nacimiento | fecha | SI | | NULL                             |
personal_phone | varchar (20) | SI | | NULL                             |
contact_phone | varchar (20) | SI | | NULL                             |
direccion | texto | SI | | NULL                             |
género | varchar (1) | SI | | NULL                             |
estado | varchar (30) | SI | | NULL                             |
ciudad | varchar (80) | SI | | NULL                             |
suburbio | varchar (80) | SI | | NULL                             |
zip_code | varchar (8) | SI | | NULL                             |
avatar | varchar (150) | SI | | https://via.placeholder.com/ 500 |
email_verified_at | marca de tiempo | SI | | NULL                             |
recordar_token | varchar (100) | SI | | NULL                             |
created_at | marca de tiempo | SI | | current_timestamp ()              |
updated_at | marca de tiempo | SI | | NULL                             |
eliminado_en | marca de tiempo | SI | | NULL      

        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacto');
    }
}
