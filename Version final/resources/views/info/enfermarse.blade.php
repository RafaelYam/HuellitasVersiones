@extends('layouts.miapp')
@section('informacion')

<div class=" fondo container">
   <div>
    <h1>La probabilidad de enfermarse del {{$mascota->raza}} es de:</h1>
    <p>{{$mascota->sintomas}}</p>
   </div>
</div>


@endsection