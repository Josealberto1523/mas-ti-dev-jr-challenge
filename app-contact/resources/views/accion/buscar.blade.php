
@extends('layouts.app')

@section('content')
<form method="GET" action="contacto/{id}">
        </div>
          <label for="">ingresa el id</label>
          <input type="text" name="id" placeholder="buscar por id" class="form-control mb-2" />
            <button type="submit" class="btn btn-outline-primary btn-block">buscar</button>
</form>
@endsection