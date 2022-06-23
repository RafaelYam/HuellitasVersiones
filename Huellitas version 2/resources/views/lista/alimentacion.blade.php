@extends('layouts.miapp')
@section('informacion')
<div>
  <h4>Alimentación para tu mascota</h4>
  @foreach ($alimentos as $alimento)
    <div>
      <h4>Alimento:</h4>
      <p>{{$alimento->nombre}}</p>
    </div>
    <div>
      <h4>Ventajas de consumirlo:</h4>
      <p>{{$alimento->ventajas}}</p>
    </div>
    <div>
      <h4>Está compuesto por:</h4>
      <p>{{$alimento->secompone}}</p>
    </div>
  @endforeach
</div>

@endsection