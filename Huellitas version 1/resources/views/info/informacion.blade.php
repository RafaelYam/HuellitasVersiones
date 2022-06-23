@extends('layouts.miApp')
@section('informacion')

<div class=" fondo container">
    <div>
        <div class="row">
       <div class="col s6">
       <h1>Información sobre el {{$mascota->raza}}</h1>
        <p>{{$mascota->informa}}</p>
       </div>
       <div class="col s6">
        <img src="{{$mascota->foto}}" width="250" alt="">
       </div>
       </div>

        <div class="carousel">
            <div class="carousel-item fotos">
                <a class="letras" href="{{route('mascota.create')}}">¡Esta es mi mascota! (registrar)</a>
            </div>
            <div class="carousel-item fotos">
                <a class="letras" href="{{route('sintomas', $mascota->id)}}">Síntomas más comunes</a>
            </div><div class="carousel-item fotos">
                <a class="letras" href="{{route('enfermarse', $mascota->id)}}">Porcentaje de probabilidad de enfermarse</a>
            </div>
            <div class="carousel-item fotos">
                <a class="letras" href="">Cuidados</a>
            </div>
           
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
    $('.carousel').carousel();
  });
      
</script>
@endsection