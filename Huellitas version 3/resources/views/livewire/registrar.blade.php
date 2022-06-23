<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

    <section id="service" class="relative services-area py-120 ">
        <div class="grid grid-cols-6 gap-4">
            <div class="col-start-3 col-end-5">
                <h2 class="title">¿Qué animal tienes?</h2>
                @foreach($informacion as $animal)
                <button class="relative px-6 py-3 group " wire:click="activar({{$animal->id}})">
                    <span class="absolute inset-0 w-full h-full transition duration-300 ease-out transform translate-x-1 translate-y-1 bg-cyan-700 group-hover:-translate-x-0 group-hover:-translate-y-0"></span>
                    <span class="absolute inset-0 w-full h-full bg-white border-2 border-cyan-700 group-hover:bg-cyan-700"></span>
                    <span class="relative text-cyan-700 group-hover:text-cyan-100"> {{$animal->tipo}}</span>
                </button>
                @endforeach


                @if($mostrar)
                <h1>Relle el formulario con la información de su mascota</h1>


                <form action="{{route('mascota.store')}}" method="POST">
                    @csrf


                    <div class="flex justify-center">
                        <div class="mb-3 xl:w-96">
                            <select name="especie" class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">

                                <option value="{{$animals->id}}">{{$animals->tipo}}</option>

                            </select>
                            <label>¿Qué mascota tienes?</label>
                        </div>
                    </div>


                    <div class="flex justify-center">
                        <div class="mb-3 xl:w-96">
                            <select name="raza" class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                @foreach ($razas as $raza)
                                <option value="{{$raza->id}}">{{$raza->raza}}</option>
                                @endforeach
                            </select>
                            <label>¿Qué mascota tienes?</label>
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
                            <select name="edad" class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example" required>
                                <option value="" selected>Seleccionar edad</option>
                                <option value="0 - 3 meses">0 - 3 meses</option>
                                <option value="4 - 6 meses">4 - 6 meses</option>
                                <option value="7 - 9 meses">7 - 9 meses</option>
                                <option value="1 año o más">1 año o más</option>
                            </select>
                            <label>¿Qué edad tiene su mascota??</label>
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <div class="mb-3 xl:w-96">
                            <select name="sexo" class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example" required>
                                <option value="" selected>Seleccionar sexo</option>
                                <option value="Macho">Macho</option>
                                <option value="Hembra">Hembra</option>

                            </select>
                            <label>¿Cuál es el sexo de su mascota?</label>
                        </div>
                    </div>

                    <button type="submit" class="inline-block px-6 py-2.5 bg-blue-400 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-500 hover:shadow-lg focus:bg-blue-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-600 active:shadow-lg transition duration-150 ease-in-out">Registrar</button>

                </form>

                @endif
            </div>
        </div>
    </section>
</div>