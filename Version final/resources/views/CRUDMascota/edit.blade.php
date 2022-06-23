@extends('layouts.miapp')
@section('informacion')


@if ($errors->any())
@foreach ($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
@endif
<section id="service" class="relative services-area py-120 container ">

    <div class="text-center py-4">
        <h1 class="title ">Edita los datos de tu mascota</h1>
    </div>
    <form action="{{route('mascota.update', $mascota->id)}}" method="post">
        @csrf
        @method('put')


        <div class="grid grid-cols-6 gap-4">


            <div class=" justify-center col-start-3 col-end-5">
                <div class="mb-3 xl:w-96">
                    <label>¿Cuál es la raza de tu mascota?</label>
                    <select name="raza" class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">

                        <option value="{{$mascota->raza_id}}">{{$mascota->raza->raza}}</option>
                        @foreach ($razas as $raza)
                        <option value="{{$raza->id}}">{{$raza->raza}}</option>
                        @endforeach

                    </select>

                </div>

                <div class="mb-3">
                    <label for="Name">Nombre de la mascota</label>
                    <input id="name" class=" form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
      " name="nombre" type="text" value="{{$mascota->nombre}}" required>
                </div>



                <div class="input-field col s12">
                    <div class="mb-3 xl:w-96">
                        <label>¿Tiene todas sus vacunas tu macota?</label>
                        <select name="vacuna" class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example" required>
                            <option value="{{$mascota->vacuna}}">{{$mascota->vacuna}}</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>

                    </div>
                </div>
                <!-- Edad -->
                <div class="mb-3 input-field col s12">
                    <label>Edad de la mascota</label>
                    <select name="edad" class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" required>
                        <option value="{{$mascota->edad}}">{{$mascota->edad}}</option>
                        <option value="0 - 3 meses">0 - 3 meses</option>
                        <option value="4 - 6 meses">4 - 6 meses</option>
                        <option value="7 - 9 meses">7 - 9 meses</option>
                        <option value="1 año o más">1 año o más</option>
                    </select>

                </div>



                <!-- Sexo -->
                <div class="input-field col s12">
                    <label>Sexo de la mascota</label>
                    <select name="sexo" class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" required>
                        <option value="{{$mascota->sexo}}">{{$mascota->sexo}}</option>
                        <option value="Macho">Macho</option>
                        <option value="Hembra">Hembra</option>

                    </select>

                </div>

                <div class="py-6 ml-60">
                    <button class="inline-block px-6 py-2.5 bg-blue-400 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-500 hover:shadow-lg focus:bg-blue-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-600 active:shadow-lg transition duration-150 ease-in-out" type="submit">Actualizar Datos</button>
                </div>
            </div>
        </div>

    </form>
</section>



<script>
    $(document).ready(function() {
        $('select').formSelect();
    });
</script>


@endsection