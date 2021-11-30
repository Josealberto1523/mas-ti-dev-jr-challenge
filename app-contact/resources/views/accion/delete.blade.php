
@extends('layouts.app')

@section('content')
<H1>Borrar</H1>
<form method="POST" action="contacto/{id}">
    @method('DELETE')
        </div>
          <label for="">ingresa el id</label>
          <input type="text" name="id" placeholder="buscar por id" class="form-control mb-2" />
            <button type="submit" class="btn btn-outline-primary btn-block">borrar</button>
</form>
@endsection