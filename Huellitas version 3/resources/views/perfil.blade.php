@extends('layouts.miapp')
@section('informacion')

<section id="service" class="relative services-area py-120 container">
    <h3 class="title">Veamos a tus mascotas!</h3>
    <div class="grid grid-cols-4 gap-4">
        @foreach ($mascota as $animal)


        <div class="max-w-xs">
            <div class="bg-white shadow-xl rounded-lg py-3">
                <div class="photo-wrapper p-2">
                    <img class="w-32 h-32 rounded-full mx-auto" src="{{$animal->raza->foto}}" alt="Mascotas">
                </div>
                <div class="p-2">
                    <h3 class="text-center text-xl text-gray-900 font-medium leading-8">{{$animal->nombre}}</h3>
                    <div class="text-center text-gray-400 text-xs font-semibold">
                        <p>Raza: {{$animal->raza->raza}}</p>
                    </div>
                    <table class="text-xs my-3">
                        <tbody>
                            <tr>
                                <td class="px-2 py-2 text-gray-500 font-semibold">Edad:</td>
                                <td class="px-2 py-2">
                                    <p>{{$animal->edad}}</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-2 py-2 text-gray-500 font-semibold">Sexo:</td>
                                <td class="px-2 py-2">{{$animal->sexo}}</td>
                            </tr>
                            <tr>
                                <td class="px-2 py-2 text-gray-500 font-semibold">Rareza:</td>
                                <td class="px-2 py-2">
                                    <p>{{$animal->raza->tipo}}
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="grid grid-cols-4 container ml-4">
                        <a href="{{route('mascota.verinfo', $animal->raza_id)}}">
                        <svg class="h-8 w-8 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        </a>

                        <a href="{{route('mascota.show', $animal->id)}}">
                        <svg class="h-8 w-8 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        </a>

                        <a href=""><svg class="h-8 w-8 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg></a>


                        <a href="">
                        <svg class="h-8 w-8 text-blue-400" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <circle cx="9" cy="19" r="2" />
                            <circle cx="17" cy="19" r="2" />
                            <path d="M3 3h2l2 12a3 3 0 0 0 3 2h7a3 3 0 0 0 3 -2l1 -7h-15.2" />
                        </svg>
                        </a>

                    </div>

                    <div class="text-center my-3">
                        <a class="text-xs text-indigo-500 italic hover:underline hover:text-indigo-600 font-medium" href="#">View Profile</a>
                    </div>

                </div>
            </div>
        </div>

        @endforeach


        <div class="max-w-xs">
            <div class="bg-white shadow-xl rounded-lg py-3">
                <div class="photo-wrapper p-2">
                    <img class="w-32 h-32 rounded-full mx-auto" src="{{$animal->raza->foto}}" alt="Mascotas">
                </div>
                <div class="p-2">
                    <h3 class="text-center text-xl text-gray-900 font-medium leading-8">Raza: Añadir mascota!</h3>
                    <div class="text-center text-gray-400 text-xs font-semibold">
                        <p></p>
                    </div>
                    <table class="text-xs my-3">
                        <tbody>
                            <tr>
                                <td class="px-2 py-2 text-gray-500 font-semibold">lorem:</td>
                                <td class="px-2 py-2">
                                    <p>lorem</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-2 py-2 text-gray-500 font-semibold">lorem:</td>
                                <td class="px-2 py-2">lorem</td>
                            </tr>
                            <tr>
                                <td class="px-2 py-2 text-gray-500 font-semibold">lorem:</td>
                                <td class="px-2 py-2">
                                    <p>lorem
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="text-center my-3">
                        <a class="text-xs text-indigo-500 italic hover:underline hover:text-indigo-600 font-medium" href="{{route('registrar.mascota')}}">Registrar mascota</a>
                    </div>

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

@endsection