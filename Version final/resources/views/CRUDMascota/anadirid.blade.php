@extends('layouts.miapp')
@section('informacion')


@if ($errors->any())
@foreach ($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
@endif
<section id="service" class="relative services-area py-120 container ">

    <div class="text-center py-4">
        <h1 class="title ">Registremos a tu mascota!</h1>
    </div>



    <form action="{{route('mascota.store')}}" method="POST">
        @csrf


        <div class="flex justify-center">
            <div class="mb-3 xl:w-96 pt-6">
                <label>Tu mascota es un:</label>
                <select name="especie" class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">

                    <option value="{{$animals->id}}">{{$animals->tipo}}</option>

                </select>

            </div>
        </div>



        <div class="flex justify-center">
            <div class="mb-3 xl:w-96">
                <label>La raza de tu mascota es:</label>
                <select name="raza" class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                    <option value="{{$razas->id}}">{{$razas->raza}}</option>
                </select>

            </div>
        </div>


        <div class="flex justify-center">
            <div class="mb-3 xl:w-96">
                <label for="exampleFormControlInput1" class="form-label inline-block mb-2 text-gray-700">¿Cuál es el nombre de tu mascota?</label>
                <input name="nombre" type="text" class="
        form-control
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
      " id="exampleFormControlInput1" placeholder="Nombre" />
            </div>
        </div>

         <div class="flex justify-center">
                        <div class="mb-3 xl:w-96">
                        <label>¿Tiene todas sus vacunas tu macota?</label>
                            <select name="vacuna" class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example" required>
                                <option value="" selected>Seleccionar</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                            
                        </div>
                    </div>


        <div class="flex justify-center">
            <div class="mb-3 xl:w-96">
                <label>¿Qué edad tiene su mascota?</label>
                <select name="edad" class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example" required>
                    <option value="" selected>Seleccionar edad</option>
                    <option value="0 - 3 meses">0 - 3 meses</option>
                    <option value="4 - 6 meses">4 - 6 meses</option>
                    <option value="7 - 9 meses">7 - 9 meses</option>
                    <option value="1 año o más">1 año o más</option>
                </select>

            </div>
        </div>

        <div class="flex justify-center">
            <div class="mb-3 xl:w-96">
                <label>¿Cuál es el sexo de su mascota?</label>
                <select name="sexo" class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example" required>
                    <option value="" selected>Seleccionar sexo</option>
                    <option value="Macho">Macho</option>
                    <option value="Hembra">Hembra</option>

                </select>

            </div>
        </div>

        <div class="grid grid-cols-3 gap-4">
            <div></div>
            <div class="col-span-2 pl-3">
            <button type="submit" class=" px-6 py-2.5 bg-blue-400 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-500 hover:shadow-lg focus:bg-blue-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-600 active:shadow-lg transition duration-150 ease-in-out">Registrar</button>
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