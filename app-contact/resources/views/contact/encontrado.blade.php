@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Agregar Cliente</span>
                    <a href="/api/contacto" class="btn btn-primary btn-sm">Volver a lista...</a>
                </div>

                <div class="card-body">

                    <!--    @if(session('messaje'))
                    <div class="alert alert-success">{{ session('menssaje')}}</div>

                    @endif
                    -->

                    <form  method="POST" action="{{route('actualizar',$contacto->id)}}" >
                        @method('PUT')
                    </div>
                    <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Actualizar Cliente</span>
                </div>
                        <label for="email"class="form-control mb-2 font-weight-bold">id</label><input type="text" name="id" placeholder="id" value="{{$contacto->id}}" class="form-control mb-2" />
                        <label for="email"class="form-control mb-2 font-weight-bold">email</label><input type="text" name="email" placeholder="example@gmail.com" value="{{$contacto->email}}" class="form-control mb-2" />
                        <label for="email"class="form-control mb-2 font-weight-bold" >password</label><input type="text" name="password" placeholder="password" value="{{$contacto->password}}"class="form-control mb-2" />
                        <label for="email"class="form-control mb-2 font-weight-bold">nombre</label><input type="text" name="nombre" placeholder="nombre" value="{{$contacto->nombre}}"class="form-control mb-2" />
                        <label for="email"class="form-control mb-2 font-weight-bold" >last_name</label><input type="text" name="last_name" placeholder="apellido" value="{{$contacto->last_name}}" class="form-control mb-2" />                      
                        <label for="email"class="form-control mb-2 font-weight-bold" >Fecha de  nacimiento</label><input type="text" name="fecha_nacimiento" placeholder="e.x 1968-00-01" value="{{$contacto->fecha_nacimiento}}"class="form-control mb-2" />
                        <label for="email"class="form-control mb-2 font-weight-bold" >personal phone</label><input type="text" name="personal_phone" placeholder="personal phone" value="{{$contacto->personal_phone}}" class="form-control mb-2" />
                        <label for="email"class="form-control mb-2 font-weight-bold" >contact_phone</label><input type="text" name="contact_phone" placeholder="contact phone"value="{{$contacto->contact_phone}}" class="form-control mb-2" />
                        <label for="email"class="form-control mb-2 font-weight-bold" >direcion</label><input type="text" name="direccion" placeholder="direccion" value="{{$contacto->direccion}}"class="form-control mb-2" />
                        <label for="email"class="form-control mb-2 font-weight-bold" >sexo</label><input type="text" name="sexo" placeholder="sexo" value="{{$contacto->sexo}}"class="form-control mb-2" />
                        <label for="email"class="form-control mb-2 font-weight-bold" >estado</label><input type="text" name="estado" placeholder="estado" value="{{$contacto->estado}}"class="form-control mb-2" />
                        <label for="email"class="form-control mb-2 font-weight-bold" >ciudad</label><input type="text" name="ciudad" placeholder="ciudad" value="{{$contacto->ciudad}}"class="form-control mb-2" />
                        <label for="email"class="form-control mb-2 font-weight-bold" >suburbio</label><input type="text" name="suburbio" placeholder="suburbio"value="{{$contacto->suburbio}}" class="form-control mb-2" />
                        <label for="email"class="form-control mb-2 font-weight-bold" >zip_code</label><input type="text" name="zip_code" placeholder="zip_code" value="{{$contacto->zip_code}}"class="form-control mb-2" />
                        <label for="email"class="form-control mb-2 font-weight-bold" >avatar</label><input type="text" name="avatar" placeholder="avatar"value="{{$contacto->avatar}}" class="form-control mb-2" />
                        <label for="email"class="form-control mb-2 font-weight-bold" >recordar_token</label><input type="text" name="recordar_token" placeholder="recordar_token"value="{{$contacto->recordar_token}}" class="form-control mb-2" />
                        <label for="email"class="form-control mb-2 font-weight-bold" >status</label><input type="text" name="status" placeholder="status" value="{{$contacto->status}}"class="form-control mb-2" />
                        <button type="submit" class="btn btn-outline-primary btn-block">Actualizar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection