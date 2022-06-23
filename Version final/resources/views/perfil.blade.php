@extends('layouts.miapp')
@section('informacion')

<section id="service" class="relative services-area py-120 container">
    <h3 class="title">Veamos a tus mascotas!</h3>
    <div class="grid grid-cols-6 gap-4 container">
        <div></div>
        <div class="col-start-4 col-end-7">


            <div class="content-end">
                <a href="" class="content-end flow-root" type="button">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link class=" float-right inline-block px-6 py-2 border-2 border-blue-400 text-blue-400 font-medium text-xs leading-tight uppercase rounded-full hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" :href="route('logout')" onclick="event.preventDefault();
                                                  this.closest('form').submit();">
                            {{ __('Cerrar Sesión') }}
                        </x-dropdown-link>
                    </form>
                </a>
            </div>
            <br>
            <br>

            <div class="shadow-xl alert bg-yellow-100 rounded-lg py-5 px-6 mb-3 text-base text-yellow-700 inline-flex items-center w-full alert-dismissible fade show" role="alert">
                Promociones! Juguetes para tu mascota en Amazon! <strong class=" mr-1"><a href="https://www.amazon.com.mx/b?ie=UTF8&node=12478598011" target="_blank">. Ver ofertas</a> </strong>
                <button type="button" class=" btn-close box-content w-4 h-4 p-1 ml-auto text-yellow-900 border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-yellow-900 hover:opacity-75 hover:no-underline" data-bs-dismiss="alert" aria-label="Close">X</button>
            </div>

            <div class="shadow-xl alert bg-yellow-100 rounded-lg py-5 px-6 mb-3 text-base text-yellow-700 inline-flex items-center w-full alert-dismissible fade show" role="alert">
                Aprovecha los descuentos de estas marcas! <strong class=" mr-1"><a href="https://www.amazon.com.mx/b?ie=UTF8&node=12478598011" target="_blank">. Ir a las promociones</a> </strong>
                <button type="button" class=" btn-close box-content w-4 h-4 p-1 ml-auto text-yellow-900 border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-yellow-900 hover:opacity-75 hover:no-underline" data-bs-dismiss="alert" aria-label="Close">X</button>
            </div>
        </div>
    </div>

    <div class="justify-center row py-7 ">
        @foreach ($mascota as $animal)
        <div class="w-full sm:w-3/4 md:w-3/4 lg:w-1/3 px-6">

            <div class="max-w-s ">
                <div class="bg-white shadow-xl rounded-lg py-3 mt-6">
                    <div class="photo-wrapper p-2">
                        <a class="link" data-tippy-content="Ver perfil" href="{{route('mascota.show', $animal->id)}}">
                            <img class="w-32 h-32 rounded-full mx-auto" src="{{$animal->raza->foto}}" alt="Mascotas">
                        </a>
                    </div>
                    <div class="p-2">
                        <a href="{{route('mascota.show', $animal->id)}}">
                            <h3 class="text-center text-xl text-gray-900 font-medium leading-8">{{$animal->nombre}}</h3>
                        </a>
                        <div class="text-center text-gray-400 text-xs font-semibold">
                            <p>Raza: {{$animal->raza->raza}}</p>
                        </div>
                        <table class="text-xs my-3">
                            <tbody>
                                <tr>
                                    <td class="px-2 py-2 text-gray-500 font-semibold">
                                        <p>¿Tiene todas sus vacunas?:</p>
                                    </td>
                                    <td class="px-2 py-2">
                                        <p>{{$animal->vacunas}}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2 py-2 text-gray-500 font-semibold">
                                        <p>Edad:</p>
                                    </td>
                                    <td class="px-2 py-2">
                                        <p>{{$animal->edad}}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2 py-2 text-gray-500 font-semibold">
                                        <p>Sexo:</p>
                                    </td>
                                    <td class="px-2 py-2">
                                        <p>{{$animal->sexo}}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2 py-2 text-gray-500 font-semibold">
                                        <p>Rareza:</p>
                                    </td>
                                    <td class="px-2 py-2">
                                        <p>{{$animal->raza->tipo}}
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="grid grid-cols-4 container ml-4">


                            <a class="link" href="{{route('mascota.show', $animal->id)}}" data-tippy-content="Ver el perfil de la mascota"><svg class="h-6 fill-current text-gray-600 hover:text-green-700" role="img" viewBox="0 0 24 24" xmlns=""><svg class="h-8 w-8 text-blue-400" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                                        </svg>
                                    </svg></svg></a>

                            <a class="link" href="{{route('mascota.verinfo', $animal->raza_id)}}" data-tippy-content="Información de la raza"><svg class="h-6 fill-current text-gray-600 hover:text-green-700" role="img" viewBox="0 0 24 24" xmlns=""><svg class="h-8 w-8 text-blue-400" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                    </svg></svg></a>

                            <a class="link" href="{{route('mascota.sintomas')}}" data-tippy-content="Cuidados"><svg class="h-6 fill-current text-gray-600 hover:text-green-700" role="img" viewBox="0 0 24 24" xmlns=""><svg class="h-8 w-8 text-blue-400" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg></svg></a>


                            <a class="link" href="" data-tippy-content="Alimentación"><svg class="h-6 fill-current text-gray-600 hover:text-green-700" role="img" viewBox="0 0 24 24" xmlns=""><svg class="h-8 w-8 text-blue-400" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg></a>

                        </div>



                    </div>
                </div>
            </div>
        </div>
        @endforeach




    </div>

    <div class="max-w-xs container row">
        <div class="bg-white shadow-xl rounded-lg py-3">
            <div class="photo-wrapper p-2">
                <a href="{{route('registrar.mascota')}}" class="link" data-tippy-content="Registrar mascota">
                    <img class="w-32 h-32 rounded-full mx-auto" src="https://i.ibb.co/5vWBQdZ/golden-retriever-protagoniza-divertida-escena-obligar-gato-posar-foto-875281.jpg" alt="Mascotas">
                </a>
            </div>
            <div class="p-2">
                <h3 class="text-center text-xl text-gray-900 font-medium leading-8">Haz crecer a tu familia!</h3>
                <div class="text-center text-gray-400 text-xs font-semibold">
                    <br>
                    <a href="{{route('registrar.mascota')}}"> <button type="button" class="inline-block px-6 py-2 border-2 border-blue-400 text-blue-400 font-medium text-xs leading-tight uppercase rounded-full hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">Añadir nueva mascota</button></a>
                </div>
            </div>
        </div>
    </div>

</section>


<script>
    $(document).ready(function() {
        $('.tooltipped').tooltip();
    });
</script>

<script src="https://unpkg.com/popper.js@1/dist/umd/popper.min.js"></script>
<script src="https://unpkg.com/tippy.js@4"></script>
<script src="https://unpkg.com/popper.js@1/dist/umd/popper.min.js"></script>
<script src="https://unpkg.com/tippy.js@4"></script>
<script>
    //Init tooltips
    tippy('.link', {
        placement: 'bottom'
    })

    //Toggle mode
    const toggle = document.querySelector('.js-change-theme');
    const body = document.querySelector('body');
    const profile = document.getElementById('profile');


    toggle.addEventListener('click', () => {

        if (body.classList.contains('text-gray-900')) {
            toggle.innerHTML = "☀️";
            body.classList.remove('text-gray-900');
            body.classList.add('text-gray-100');
            profile.classList.remove('bg-white');
            profile.classList.add('bg-gray-900');
        } else {
            toggle.innerHTML = "🌙";
            body.classList.remove('text-gray-100');
            body.classList.add('text-gray-900');
            profile.classList.remove('bg-gray-900');
            profile.classList.add('bg-white');

        }
    });
</script>


@endsection