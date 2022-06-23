@extends('layouts.miApp')
@section('informacion')






<form action="{{route('mascota.store')}}" method="POST">
    @csrf

    <div class="input-field col s12">
        <select name="">
            <option value="" disabled selected>Seleccionar</option>
            @foreach ($animal as $animalc)
            <option value="{{$animalc->tipo}}">{{$animalc->tipo}}</option>
            @endforeach
        </select>
        <label>¿Qué mascota tienes?</label>
    </div>

    <!-- Nombre -->
    <label for="Name">Nombre de la mascota</label>
    <input id="name" name="nombre" type="text">

    <!-- Raza -->
    <div class="input-field col s12">
        <select name="raza">
            <option value="" disabled selected>Seleccionar</option>
            @foreach ($animal2 as $animald)
            <option value="{{$animald->id}}">{{$animald->raza}}</option>
            @endforeach
        </select>
        <label>¿Qué mascota tienes?</label>
    </div>

    <!-- Edad -->
    <div class="input-field col s12">
        <select name="edad">
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
        <select name="sexo">
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