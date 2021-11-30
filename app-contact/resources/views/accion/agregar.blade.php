@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Agregar Cliente</span>
                    <a href="contacto" class="btn btn-primary btn-sm">Volver a lista...</a>
                </div>

                    <div class="card-body">
                        @if(session('messaje'))
                            <div class="alert alert-success">{{ session('messaje')}}</div>
                        @endif
                        </div>
                        <form method="POST" action="contacto">
                        @csrf
                    
                    
                    @error('email')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                           El email es obligatorio
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    @enderror

    @if($errors->has('password'))
    
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    La passwaord es obligatoria
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    @endif
</div>
                    <label for="email" class="form-control mb-2 font-weight-bold">email<span style="color:red">*</span><input type="text" name="email" placeholder="example@gmail.com" class="form-control mb-2"  /></label>
                    
                        <label for="email"class="form-control mb-2 font-weight-bold" >password<span style="color:red">*</span></label> <input type="text" name="password" placeholder="password" class="form-control mb-2" />
                        <label for="email"class="form-control mb-2 font-weight-bold" >nombre<span style="color:red">*</span></label><input type="text" name="nombre" placeholder="nombre" class="form-control mb-2" />
                        <label for="email"class="form-control mb-2 font-weight-bold">last_name<span style="color:red">*</span></label><input type="text" name="last_name" placeholder="apellido" class="form-control mb-2" />                      
                        <label for="email"class="form-control mb-2 font-weight-bold" >Fecha de nacimiento<span style="color:red">*</span></label> <input type="text" name="fecha_nacimiento" placeholder="e.x 1968-00-01" class="form-control mb-2" />
                        <label for="email"class="form-control mb-2 font-weight-bold" >personal phone<span style="color:red">*</span></label><input type="text" name="personal_phone" placeholder="personal phone" class="form-control mb-2" />
                        <label for="email"class="form-control mb-2 font-weight-bold" >contact phone<span style="color:red">*</span></label> <input type="text" name="contact_phone" placeholder="contact phone" class="form-control mb-2" />
                        <label for="email"class="form-control mb-2 font-weight-bold" >direccion</label><input type="text" name="direccion" placeholder="direccion" class="form-control mb-2" />
                        <label for="email"class="form-control mb-2 font-weight-bold" >sexo</label><input type="text" name="sexo" placeholder="sexo" class="form-control mb-2" />
                        <label for="email"class="form-control mb-2 font-weight-bold" >estado</label>  <input type="text" name="estado" placeholder="estado" class="form-control mb-2" />
                        <label for="email"class="form-control mb-2 font-weight-bold" >ciudad</label><input type="text" name="ciudad" placeholder="ciudad" class="form-control mb-2" />
                        <label for="email"class="form-control mb-2 font-weight-bold" >suburbio</label><input type="text" name="suburbio" placeholder="suburbio" class="form-control mb-2" />
                        <label for="email"class="form-control mb-2 font-weight-bold" >zip_code<span style="color:red">*</span></label> <input type="text" name="zip_code" placeholder="zip_code" class="form-control mb-2" />
                        <label for="email"class="form-control mb-2 font-weight-bold" >avatar</label><input type="text" name="avatar" placeholder="avatar" class="form-control mb-2" />
                        <label for="email"class="form-control mb-2 font-weight-bold" >recordar_token</label> <input type="text" name="recordar_token" placeholder="recordar_token" class="form-control mb-2" />
                        <label for="email"class="form-control mb-2 font-weight-bold" >status</label> <input type="text" name="status" placeholder="status" class="form-control mb-2" />
                        <button type="submit" class="btn btn-primary btn-block">Agregar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection