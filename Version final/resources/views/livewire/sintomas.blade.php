<div>
    {{-- The Master doesn't talk, he acts. --}}

    <section id="service" class="relative services-area py-120 container">
        <div class="title">Seleccione el sintoma que presenta su mascota para determinar su enfermedad</div>
        <br>
        <div class="grid grid-cols-6 gap-4">
            <div class="col-start-1 col-end-3">
                @foreach ($sintomas as $sintoma)
                <ul class="py-3"><button class="relative px-6 py-3 group " wire:click="activar({{$sintoma->id}})">
                        <span class="absolute inset-0 w-full h-full transition duration-300 ease-out transform translate-x-1 translate-y-1 bg-cyan-700 group-hover:-translate-x-0 group-hover:-translate-y-0"></span>
                        <span class="absolute inset-0 w-full h-full bg-white border-2 border-cyan-700 group-hover:bg-cyan-700"></span>
                        <span class="relative text-cyan-700 group-hover:text-cyan-100"> {{$sintoma->descripcion}}</span>
                    </button></ul>
                @endforeach

                <ul class="py-3"><button class="relative px-6 py-3 group " data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <span class="absolute inset-0 w-full h-full transition duration-300 ease-out transform translate-x-1 translate-y-1 bg-red-700 group-hover:-translate-x-0 group-hover:-translate-y-0"></span>
                        <span class="absolute inset-0 w-full h-full bg-white border-2 border-red-700 group-hover:bg-red-500"></span>
                        <span class="relative text-red-700 group-hover:text-white"> Si no encuentras los sintomas de <br> tu macota, presione aqui para ver a los <br> veterinarrios cercanos</span>
                    </button></ul>


            </div>
            <div class="col-start-4 col-end-7">

                @if($mostrar)
                <h1>Información</h1>
                @foreach($informacion as $informa)

                <div class="flex justify-center">
                    <div class="block rounded-lg shadow-lg bg-white max-80 text-justify">
                        <div class="py-3 px-6 border-b border-gray-300">
                            <h5 class="text-gray-900 text-xl font-medium mb-2">{{$informa->nombre}}</h5>
                        </div>
                        <div class="p-6">

                            <p class="text-gray-700 text-base mb-4">
                                {{$informa->descripcion}}
                            </p>

                        </div>
                        <div class="py-3 px-6 border-t border-gray-300 text-gray-600">
                            {{$informa->probabilidad}}% probabilidad de sobrevivir
                        </div>
                    </div>
                </div>
                @endforeach

                @endif


            </div>
            <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog relative w-auto pointer-events-none">
                    <div class="modal-content border-none shadow-lg relative flex flex-col ml-7 w-80 pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                        <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                            <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">Veterinarios Cercanos:</h5>
                            <button type="button" class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body items-center place-items-center p-4">
                            <iframe class="items-center place-items-center" width="290" height="350" src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d7444.753285262948!2d-89.2873064!3d21.0975451!3m2!1i1024!2i768!4f13.1!2m1!1sveterinarios%20motul%20yucatan!5e0!3m2!1ses-419!2smx!4v1654613799016!5m2!1ses-419!2smx" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                            <button type="button" class="px-6
      py-2.5
      bg-blue-400
      text-white
      font-medium
      text-xs
      leading-tight
      uppercase
      rounded
      shadow-md
      hover:bg-blue-500 hover:shadow-lg
      focus:bg-blue-500 focus:shadow-lg focus:outline-none focus:ring-0
      active:bg-blue-600 active:shadow-lg
      transition
      duration-150
      ease-in-out
      ml-1" data-bs-dismiss="modal">Cerrar</button>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>

        </div>
    </section>
</div>