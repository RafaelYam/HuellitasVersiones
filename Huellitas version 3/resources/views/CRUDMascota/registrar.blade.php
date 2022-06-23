@extends('layouts.miApp')
@section('informacion')

<section id="service" class="relative services-area py-120 ">
<div class="block p-6 rounded-lg shadow-lg bg-white max-w-md">
<form action="{{route('mascota.store')}}" method="POST">
    @csrf

    <div class="flex justify-center">
  <div class="mb-3 xl:w-96">
    <select class="form-select appearance-none
      block
      w-full
      px-3
      py-1.5
      text-base
      font-normal
      text-gray-700
      bg-white bg-clip-padding bg-no-repeat
      border border-solid border-gray-300
      rounded
      transition
      ease-in-out
      m-0
      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example" required>
        <option value="" selected>Seleccionar Raza</option>
        @foreach ($animal as $animalc)
            <option value="{{$animalc->tipo}}">{{$animalc->tipo}}</option>
            @endforeach
    </select>
  </div>
</div>
    
    <button type="submit" class="
      w-full
      px-6
      py-2.5
      bg-blue-600
      text-white
      font-medium
      text-xs
      leading-tight
      uppercase
      rounded
      shadow-md
      hover:bg-blue-700 hover:shadow-lg
      focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
      active:bg-blue-800 active:shadow-lg
      transition
      duration-150
      ease-in-out">Siguiente</button>
  </form>
</div>
</section>
@endsection