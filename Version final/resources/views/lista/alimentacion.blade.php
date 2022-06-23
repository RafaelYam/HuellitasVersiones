@extends('layouts.miapp')
@section('informacion')
<section id="service" class="relative services-area py-120 ">
<div class="container">
  <h4 class="title">Alimentación para tu mascota</h4>
  <br>
  @foreach ($alimentos as $alimento)

  
    <div class="flex justify-center pb-8">
  <div class="flex flex-col md:flex-row md:max-w-xl rounded-lg bg-white shadow-lg">
    <img class=" w-full h-96 md:h-auto object-cover md:w-48 rounded-t-lg md:rounded-none md:rounded-l-lg" src="{{$alimento->foto}}" alt="" />
    <div class="p-6 flex flex-col justify-start">
      <h5 class="text-gray-900 text-xl font-medium mb-2">{{$alimento->nombre}}</h5>
      <p class="text-gray-700 text-base mb-4">
        {{$alimento->Info}}
      </p>
      <p class="text-gray-600 text-xs">{{$alimento->secompone}}</p>
    </div>
  </div>
</div>
  @endforeach
</div>
</section>
@endsection