@extends('layouts.app')


@section('content')
{{--$contactos--}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="card">   
        <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Listas de clientes</span>
                    <a href="agregar" class="btn btn-primary ">agregar cliente</a>           
                    <a href="borrar" class="btn btn-danger ">borrar cliente definitivo</a>           
                    <a href="buscar" class="btn btn-primary ">buscar cliente</a>      
                </div>

                
            @if(session('messaje'))
                    <div class="alert alert-success">{{ session('messaje')}}</div>

                    @endif      
                <table class="table">
                    <thead class="thead-dark">
                            <th scope="col">#</th>
                                    <th scope="col">email</th>
                                    <th scope="col">nombre</th>
                                    <th scope="col">last_name</th>
                                    <th scope="col">fecha_nacimiento</th>
                                    <th scope="col">personal_phone</th>
                                    <th scope="col">contact_phone</th>
                                    <th scope="col">direccion</th>
                                    <th scope="col">sexo</th>
                                    <th scope="col">estado</th>
                                    <th scope="col">ciudad</th>
                                    <th scope="col">suburbio</th>
                                    <th scope="col">zip_code</th>
                                    <th scope="col">avatar</th>
                                    <th scope="col">recordar_token</th>
                                    <th scope="col">status</th>
                                    <th scope="col">accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            @foreach($contactos as $contact)
                            <th>   
                            <tr>
                                <td>
                                {{$contact->id}}  
                                </td>
                                <td>
                                {{$contact->email}}
                                </td>
                                <td>
                                {{$contact->nombre}}
                            </td>
                                <td>
                                {{$contact->last_name}}
                            </td>
                            <td>
                                {{$contact->fecha_nacimiento}}
                            </td>
                            <td>
                                {{$contact->personal_phone}}
                            </td>
                            <td>
                                {{$contact->contact_phone}}
                            </td>
                            <td>
                                {{$contact->direccion}}
                            </td>
                            <td>
                                {{$contact->sexo}}
                            </td>
                            <td>
                                {{$contact->estado}}
                            </td>
                            <td>
                                {{$contact->ciudad}}
                            </td>
                            <td>
                                {{$contact->suburbio}}
                            </td>
                            <td>
                                {{$contact->zip_code}}
                            </td>
                            <td>
                                {{$contact->avatar}}
                            </td>
                            <td>
                                {{$contact->recordar_token}}
                            </td>
                            
                            <td>
                                {{$contact->status}}
                            </td>
                            <td>
                                
                                @if($contact->status == 0)
                                
                                <a href="cambiar/{{$contact->id}}" class="btn btn-warning btn-block">restablecer</a>
                            
                                @else
                                <a href="status/{{$contact->id}}" class="btn btn-danger btn-block">borrar</a>
                            
                            @endif
                            
                            </td>
                            <td>
                                <a href="{{route('subir')}}" class="btn btn-outline-success btn-block">cambiar avatar</a>
                            </td>
                            </tr>                                
                            </th>
                                @endforeach
                                
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

