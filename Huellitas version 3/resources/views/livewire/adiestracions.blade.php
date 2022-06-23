<div>
    {{-- In work, do what you enjoy. --}}

    <section id="service" class="relative services-area py-120 container">
        <h4 class="title">Entrenemos a tu mascota!</h4>
        <h4>Selecciona un entrenemiento para empezar</h4>
        <div class="grid grid-cols-6 gap-4">

            <div class="col-start-1 col-end-3">
                @foreach($adiestracions as $adiestracion)
                <ul class="py-3"><button class="relative px-6 py-3 group " wire:click="activar({{$adiestracion->id}})">
                        <span class="absolute inset-0 w-full h-full transition duration-300 ease-out transform translate-x-1 translate-y-1 bg-cyan-700 group-hover:-translate-x-0 group-hover:-translate-y-0"></span>
                        <span class="absolute inset-0 w-full h-full bg-white border-2 border-cyan-700 group-hover:bg-cyan-700"></span>
                        <span class="relative text-cyan-700 group-hover:text-cyan-100" > {{$adiestracion->nombre}}</span>
                    </button></ul>
                @endforeach
            </div>

            <div class="col-start-4 col-end-7">

                @if($mostrar)
              
                @foreach($informacion as $informa)

                <div class="flex justify-center">
                    <div class="block rounded-lg shadow-lg bg-white max-80 text-justify">
                        <div class="py-3 px-6 border-b border-gray-300">
                        <h5 class="text-gray-900 text-xl font-medium mb-2">{{$informa->nombre}}</h5>
                        </div>
                        <div class="p-6">
                            
                            <p class="text-gray-700 text-base mb-4">
                                {{$informa->instrucciones}}
                            </p>

                        </div>
                        <div class="py-3 px-6 border-t border-gray-300 text-gray-600">
                           El tiempo de aprendizaje es de {{$informa->tiempoaprendizaje}} semanas
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>

        </div>


    </section>
</div>