@extends('layouts.miapp')
@section('informacion')

<div class=" fondo container">
   <div>
    <h1>Los sintomas más comunes en esta raza son:</h1>
    <p>{{$mascota->sintomas}}</p>
   </div>
</div>


@endsection