@extends('layouts.miapp')
@section('informacion')
<section id="service" class="relative services-area py-120 ">
    <div class="text-center title pb-8">
        <h1>Información sobre el {{$mascota->raza}}</h1>
    </div>
    
  
    <div class="container sm:shadow-lg pb-6 mx-auto">
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
    <div class="flex float-right ">
        <div class="mt-8 block lg:hidden rounded-full shadow-xl mx-auto  h-48 w-48 bg-cover bg-center" style="background-image: url({{$mascota->foto}})"></div>
        <img src="{{$mascota->foto}}" class="ml-64 rounded-none lg:rounded-lg shadow-2xl hidden lg:block" width="250">
    </div>
    <div class="flex "><p>{{$mascota->informa}}</p></div>
    
  </div>
</div>

    <div>




        <div class="container my-12 mx-auto px-4 md:px-12">
            <div class="flex flex-wrap -mx-1 lg:-mx-4">

                <!-- Column -->
                <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                    <!-- Article -->
                    <article class="overflow-hidden rounded-lg shadow-lg">
                        @foreach ($animal as $id)
                        <a href="{{route('animal.adiestracion',$id->id)}}" id="img-contenedor" class="img-contenedor">
                            <img alt="Placeholder" class="block h-auto w-full" src="https://i.ibb.co/q0YDFQ8/Picsart-22-06-08-16-23-16-643.jpg">
                        </a>
                        @endforeach

                        <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                            <h1 class="text-lg">
                                <a class="no-underline hover:underline text-black" href="{{route('animal.adiestracion',$id->id)}}">
                                    Adiestración
                                </a>
                            </h1>
                            <p class="text-grey-darker text-sm">
                                A entrenar!
                            </p>
                        </header>
                    </article>
                    <!-- END Article -->
                </div>
                <!-- END Column -->

                <!-- Column -->
                <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                    <!-- Article -->
                    <article class="overflow-hidden rounded-lg shadow-lg">
                    
                    <a href="{{route('especie.anadir',$mascota->id)}}" id="img-contenedor" class="img-contenedor">
                            <img alt="Placeholder" class="block h-auto w-full" src="https://i.ibb.co/dt8g0By/Picsart-22-06-08-15-35-59-529-1.jpg" width="600" height="400">
                        </a>
                        

                        <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                            <h1 class="text-lg">
                            
                                <a class="no-underline hover:underline text-black" href="{{route('especie.anadir',$mascota->id)}}">
                                    Registrar mascota
                                </a>
                                
                            </h1>
                            <p class="text-grey-darker text-sm">
                                Si, esta es mi mascota!
                            </p>
                        </header>
                    </article>
                    <!-- END Article -->

                </div>
                <!-- END Column -->

                <!-- Column -->
                <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                    <!-- Article -->
                    <article class="overflow-hidden rounded-lg shadow-lg">

                        <a href="{{route('animal.vacunas',$id->id)}}" id="img-contenedor" class="img-contenedor">
                            <img alt="Placeholder" class="block h-auto w-full" src="https://i.ibb.co/vztWhFT/Picsart-22-06-08-16-31-31-067.jpg">
                        </a>

                        <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                            <h1 class="text-lg">
                                <a class="no-underline hover:underline text-black" href="{{route('animal.vacunas',$id->id)}}">
                                    Vacunas
                                </a>
                            </h1>
                            <p class="text-grey-darker text-sm">
                                Hay que protegerlo <3 </p>
                        </header>
                    </article>
                    <!-- END Article -->

                </div>
                <!-- END Column -->

                <!-- Column -->
                <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                    <!-- Article -->
                    <article class="overflow-hidden rounded-lg shadow-lg">


                        <button type="button" class=" active:shadow-lg transition duration-150 ease-in-out" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                            <img  alt="Placeholder" class="block h-auto w-full" src="https://i.ibb.co/z8BSHyc/Picsart-22-06-08-16-25-31-926.jpg" width="600" height="400">
                        </button>



                        <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                            <h1 class="text-lg">
                                <button type="button" class="no-underline hover:underline text-black active:shadow-lg transition duration-150 ease-in-out" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                    Datos curiosos
                                </button>
                                <a class="" href="#">
                                   
                                </a>
                            </h1>
                            <p class="text-grey-darker text-sm">
                                Sabías qué...?
                            </p>
                        </header>


                    </article>
                    <!-- END Article -->
                    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
                        <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
                            <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                                <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                                    <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
                                        ¿sabías qué...?
                                    </h5>
                                    <button type="button" class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body relative p-4">
                                    @foreach($curioso as $dato)
                                    <p>{{$dato->dato}}</p>
                                    @endforeach
                                </div>
                                <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                                    <button type="button" class="inline-block px-6 py-2.5 bg-blue-400 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out" data-bs-dismiss="modal">
                                        Cerrar
                                    </button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Column -->

                <!-- Column -->
                <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                    <!-- Article -->
                    <article class="overflow-hidden rounded-lg shadow-lg">

                        <a id="img-contenedor" class="img-contenedor" href="{{route('mascota.alimento',$mascota->animal_id)}}">
                            <img alt="Placeholder" class="block h-auto w-full" src="https://i.ibb.co/hV2G77B/Picsart-22-06-08-16-27-27-038.jpg">
                        </a>

                        <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                            <h1 class="text-lg">
                                <a class="no-underline hover:underline text-black" href="{{route('mascota.alimento',$mascota->animal_id)}}">
                                    Alimentación
                                </a>
                            </h1>
                            <p class="text-grey-darker text-sm">
                                Comida Nutritiva!
                            </p>
                        </header>
                    </article>
                    <!-- END Article -->

                </div>
                <!-- END Column -->

                <!-- Column -->
                <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                    <!-- Article -->
                    <article class="overflow-hidden rounded-lg shadow-lg">

                        <a  id="img-contenedor" class="img-contenedor" href="{{route('mascota.cuidadogeneral')}}">
                            <img alt="Placeholder" class="block h-auto w-full" src="https://www.eltiempo.com/files/image_640_428/uploads/2018/11/23/5bf8bd23c8fc0.jpeg">
                        </a>

                        <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                            <h1 class="text-lg">
                                <a class="no-underline hover:underline text-black" href="{{route('mascota.cuidadogeneral')}}">
                                    Cuidados
                                </a>
                            </h1>
                            <p class="text-grey-darker text-sm">
                                Mantenlo sano!
                            </p>
                        </header>
                    </article>
                    <!-- END Article -->

                </div>
                <!-- END Column -->

            </div>
        </div>

    </div>

</section>



<script>
    $(document).ready(function() {
        $('.carousel').carousel();
    });
</script>
<script>
    $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        indicators: true
    });
</script>
@endsection