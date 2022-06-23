@extends('layouts.miApp')
@section('informacion')

<div class="fondo">
    <h1>Detalles de mi mascota</h1>

    <div>
        <div>
            <p>Nombre: {{$mascota->nombre}}</p>
        </div>
        <div>
        <p>{{$mascota->raza->raza}}</p>
        </div>
        <div>
            <p>Edad: {{$mascota->edad}}</p>
        </div>
        <div>
            <p>Sexo: {{$mascota->sexo}}</p>
        </div>
    </div>
    <div>
        <a href="{{route('mascota.edit', $mascota->id)}}" class="btn-floating btn-small waves-effect  indigo lighten-1 tooltipped" data-position="bottom" data-tooltip="Editar"><i class="material-icons"></i></a>
        <form action="{{route('mascota.destroy', $mascota->id)}}" method='POST'>
            @csrf
            @method('delete')

            <button type="submit">Eliminar</button>

        </form>

        
        <a href="{{route('mascota.destroy', $mascota->id)}}">eliminar</a>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.tooltipped').tooltip();
    });
</script>

@endsection