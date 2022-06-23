@extends('layouts.miApp')
@section('informacion')


@if ($errors->any())
@foreach ($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
@endif





<form action="{{route('mascota.update', $mascota->id)}}" method="post">
    @csrf
    @method('put')
    <!-- Nombre -->
    <label for="Name">Nombre de la mascota</label>
    <input id="name" name="nombre" type="text" value="{{$mascota->nombre}}" required>

    <!-- Raza -->
    <div class="input-field col s12">
        <select name="raza">
            <option value="" disabled selected>Seleccionar</option>
            @foreach ($animal2 as $animald)
            <option class="Active" value="{{$animald->id}}">{{$animald->raza}}</option>
            @endforeach
        </select>
        <label>¿Qué mascota tienes?</label>
    </div>

    <!-- Edad -->
    <div class="input-field col s12">
        <select name="edad" value="{{$mascota->edad}}" required>
            <option value="" disabled selected>Seleccionar</option>
            <option value="0 - 3 meses">0 - 3 meses</option>
            <option value="4 - 6 meses">4 - 6 meses</option>
            <option value="7 - 9 meses">7 - 9 meses</option>
            <option value="1 año o más">1 año o más</option>
        </select>
        <label>Edad de la mascota</label>
    </div>

    <!-- Sexo -->
    <div class="input-field col s12">
        <select name="sexo" value="{{$mascota->sexo}}" required>
            <option value="" disabled selected>Seleccionar</option>
            <option value="Macho">Macho</option>
            <option value="Hembra">Hembra</option>
    
        </select>
        <label>Sexo de la mascota</label>
    </div>

    <button class="waves-effect waves-light small btn" type="submit">Enviar Datos</button>
</form>
<script>
    $(document).ready(function() {
        $('select').formSelect();
    });
</script>


@endsection