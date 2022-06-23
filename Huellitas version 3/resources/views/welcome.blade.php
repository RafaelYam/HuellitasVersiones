@extends('layouts.miapp')
@section('informacion')

<header class="header-area">
    <div id="home" class="relative z-10 header-hero" style="background-image: url(https://blog.clubviva.cl/wp-content/uploads/2021/06/shutterstock_1689740593-1024x517.jpg)">
        <div class="container">
            <div class="justify-center row">
                <div class="w-full lg:w-5/6 xl:w-2/3">
                    <div class="pt-48 pb-64 text-center header-content">
                        <h3 class="mb-5 text-3xl font-semibold leading-tight text-gray-900 md:text-5xl">Huellitas: Un veterinario en casa</h3>
                        <p class="px-5 mb-10 text-xl text-gray-700">Huellitas, es una aplicación web diseñada para las personas que estan teniendo por primera vez a sus mascotas y no tienen mucho conocimiento de como deben de cuidarlos, otra función es actuar como un veterinario en caso de que no puedas acudir a uno.</p>
                        <ul class="flex flex-wrap justify-center">
                            <li><a class="mx-3 main-btn gradient-btn" href="javascript:void(0)">Sobre Nosotros</a></li>
                            <li><a class="mx-3 main-btn video-popup" href="https://www.youtube.com/watch?v=r44RKWyfcFw">Contacto </a></li>
                        </ul>
                    </div> <!-- header content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="absolute bottom-0 z-20 w-full h-auto -mb-1 header-shape">
            <img src="http://www.parcdusoleil.com.uy/images/onda-blanca-2.png" alt="shape">
        </div>
    </div> <!-- header content -->


</header>




<!-- 3 cards -->
<section id="Información" class=" pricing-area py-8">
<div class="justify-center row">
            <div class="w-full mx-4 lg:w-1/2">
                <div class="pb-10 text-center section-title">
                    <h4 class="title">Nuestra Información</h4>
                    <p class="text">En estos 3 apartados podrás encontrar todo lo que necesitas saber para el cuidado de tu mascota!</p>
                </div> <!-- section title -->
            </div>
        </div>
<div class=" flex flex-wrap items-center justify-center">
    

    <div class="shadow-stone-400 flex-shrink-0 m-6 relative overflow-hidden bg-blue-400 rounded-lg max-w-xs shadow-lg">
        <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
            <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
            <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
        </svg>
        <div class="relative pt-10 px-10 flex items-center justify-center">
            <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
            <img class="relative w-40" src="https://cdn-icons-png.flaticon.com/512/3047/3047886.png" alt="">
        </div>
        <div class="relative text-white px-6 pb-6 mt-6">
            <span class="block font-semibold text-xl">Información</span>
            <div class="flex justify-between">
                <span class="block  opacity-75 -mb-1">De razas</span>
                <a href="{{route('mascota.lista')}}"><span class="block bg-white rounded-full text-blue-400 text-xs font-bold px-3 py-2 leading-none flex items-center">Aprende</span></a>
            </div>
        </div>
    </div>
    <div class="shadow-stone-400 flex-shrink-0 m-6 relative overflow-hidden bg-blue-200 rounded-lg max-w-xs shadow-lg">
        <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
            <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
            <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
        </svg>
        <div class="relative pt-10 px-10 flex items-center justify-center">
            <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
            <img class="relative w-40" src="https://cdn-icons-png.flaticon.com/512/5276/5276963.png" alt="">
        </div>
        <div class="relative text-white px-6 pb-6 mt-6">
            <span class="block font-semibold text-xl">Registrar</span>
            <div class="flex justify-between">
                <span class="block opacity-75 -mb-1">A tu mascota</span>
                <a href="{{route('registrar.mascota')}}"><span class="block bg-white rounded-full text-blue-200 text-xs font-bold px-3 py-2 leading-none flex items-center">Registra</span></a>
            </div>
        </div>
    </div>
    <div class="flex-shrink-0 shadow-stone-400 m-6 relative overflow-hidden bg-blue-400 rounded-lg max-w-xs shadow-lg">
        <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
            <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
            <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
        </svg>
        <div class="relative pt-10 px-10 flex items-center justify-center">
            <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
            <img class="relative w-40" src="https://cdn-icons-png.flaticon.com/512/3047/3047886.png" alt="">
        </div>
        <div class="relative text-white px-6 pb-6 mt-6">
            <span class="block font-semibold text-xl">Enfermedades</span>
            <div class="flex justify-between">
                <span class="block opacity-75 -mb-1">y sintomas</span>
                <a href="{{route('mascota.sintomas')}}"><span class="block bg-white rounded-full text-blue-400 text-xs font-bold px-3 py-2 leading-none flex items-center">Conoce</span></a>
            </div>
        </div>
    </div>

</div>
</section>



<section id="Veterinarios" class="testimonial-area  py- ">
        <div class="container">            
            <div class="justify-center row">
                <div class="w-full mx-4 lg:w-1/2">
                    <div class="pb-10 text-center section-title">
                        <h4 class="title">Veterinarios</h4>
                        <p class="text">Para lograr la elaboración de esta aplicación con información confiable, tuvimos que recurrir a los conocimientos de varios veterinarios, para de esta forma poder brindarle a nuestros usuarios informacion de calidad.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            
            <div class="row">
                <div class="w-full">
                    <div class="row testimonial-active">
                        <div class="w-full lg:w-1/3">
                            <div class="text-center single-testimonial">
                                <div class="testimonial-image">
                                    <img src="https://hvnachomenes.com/wp-content/uploads/2019/08/unai-ibaseta-ficha.jpg" alt="Author">
                                </div>
                                <div class="testimonial-content">
                                    <p class="pb-5 mb-6 border-b border-gray-300">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed! Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                                    <h6 class="text-lg font-semibold text-gray-900">MVZ. Gabriel Ortega</h6>
                                    <span class="text-sm text-gray-700">gabriel.ortega@gmail.com</span>
                                </div>
                            </div> <!-- single testimonial -->
                        </div>
                        <div class="w-full lg:w-1/3">
                            <div class="text-center single-testimonial">
                                <div class="testimonial-image">
                                    <img src="https://res.cloudinary.com/dktx1oojk/image/upload/c_fill,g_face,w_500,h_500,f_auto,q_100/web/globalassets/es/fotos/uribe-kosta/rebeca.jpg" alt="Author">
                                </div>
                                <div class="testimonial-content">
                                    <p class="pb-5 mb-6 border-b border-gray-300">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed! Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                                    <h6 class="text-lg font-semibold text-gray-900">MVZ.Brook Carter</h6>
                                    <span class="text-sm text-gray-700">Carter1990@hotmail.com</span>
                                </div>
                            </div> <!-- single testimonial -->
                        </div>
                        <div class="w-full lg:w-1/3">
                            <div class="text-center single-testimonial">
                                <div class="testimonial-image">
                                    <img src="https://www.edx.org/static/18afddae77f96175cd5aa3ecc456672c/Aprende_Veterinaria_y_etologi__a.jpg" alt="Author">
                                </div>
                                <div class="testimonial-content">
                                    <p class="pb-5 mb-6 border-b border-gray-300">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed! Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                                    <h6 class="text-lg font-semibold text-gray-900">MVZ. Taylor Alison Swift</h6>
                                    <span class="text-sm text-gray-700">alison.swift@gmail.com</span>
                                </div>
                            </div> <!-- single testimonial -->
                        </div>
                        <div class="w-full lg:w-1/3">
                            <div class="text-center single-testimonial">
                                <div class="testimonial-image">
                                    <img src="https://veterinaria-rv.com/wp-content/uploads/2019/02/man.png" alt="Author">
                                </div>
                                <div class="testimonial-content">
                                    <p class="pb-5 mb-6 border-b border-gray-300">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed! Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                                    <h6 class="text-lg font-semibold text-gray-900">MVZ. Steve Harrington</h6>
                                    <span class="text-sm text-gray-700">steve-harrington@hotmail.com</span>
                                </div>
                            </div> <!-- single testimonial -->
                        </div>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>


<section id="pricing" class="py-7 pricing-area ">
    <div class="container">
        <div class="justify-center row">
            <div class="w-full mx-4 lg:w-1/2">
                <div class="pb-10 py-7text-center section-title">
                    <h4 class="title">Nuestra Página</h4>
                    <p class="text">Información útil que abarca lo que nuestra página busca hasta su misión y visión.</p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="justify-center row py-7">
            <div class="w-full sm:w-3/4 md:w-3/4 lg:w-1/3">
                <div class="single-pricing">
                    <div class="text-center pricing-header">
                        <h5 class="sub-title">Huellitas</h5>
                        <p class="year">¿Quiénes somos?</p>
                    </div>
                    <div class="mb-8 pricing-list">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                    </div>
                    <div class="text-center pricing-btn">
                        <a class="main-btn" href="javascript:void(0)">GET STARTED</a>
                    </div>
                    <div class="bottom-shape">
                        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 350 112.35">
                            <defs>
                                <style>
                                    .color-1 {
                                        fill: #2bdbdc;
                                        isolation: isolate;
                                    }

                                    .cls-1 {
                                        opacity: 0.1;
                                    }

                                    .cls-2 {
                                        opacity: 0.2;
                                    }

                                    .cls-3 {
                                        opacity: 0.4;
                                    }

                                    .cls-4 {
                                        opacity: 0.6;
                                    }
                                </style>
                            </defs>
                            <title>bottom-part1</title>
                            <g id="bottom-part">
                                <g id="Group_747" data-name="Group 747">
                                    <path id="Path_294" data-name="Path 294" class="cls-1 color-1" d="M0,24.21c120-55.74,214.32,2.57,267,0S349.18,7.4,349.18,7.4V82.35H0Z" transform="translate(0 0)" />
                                    <path id="Path_297" data-name="Path 297" class="cls-2 color-1" d="M350,34.21c-120-55.74-214.32,2.57-267,0S.82,17.4.82,17.4V92.35H350Z" transform="translate(0 0)" />
                                    <path id="Path_296" data-name="Path 296" class="cls-3 color-1" d="M0,44.21c120-55.74,214.32,2.57,267,0S349.18,27.4,349.18,27.4v74.95H0Z" transform="translate(0 0)" />
                                    <path id="Path_295" data-name="Path 295" class="cls-4 color-1" d="M349.17,54.21c-120-55.74-214.32,2.57-267,0S0,37.4,0,37.4v74.95H349.17Z" transform="translate(0 0)" />
                                </g>
                            </g>
                        </svg>
                    </div>
                </div> <!-- single pricing -->
            </div>

            <div class="w-full sm:w-3/4 md:w-3/4 lg:w-1/3">
                <div class="single-pricing pro">
                    
                    <div class="pricing-header">
                        <h5 class="sub-title">Misión</h5>
                        <p class="year">¿Qué buscamos?</p>
                    </div>
                    <div class="mb-8 pricing-list">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                    </div>
                    <div class="text-center pricing-btn">
                        <a class="main-btn" href="javascript:void(0)">GET STARTED</a>
                    </div>
                    <div class="bottom-shape">
                        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 350 112.35">
                            <defs>
                                <style>
                                    .color-2 {
                                        fill: #0067f4;
                                        isolation: isolate;
                                    }

                                    .cls-1 {
                                        opacity: 0.1;
                                    }

                                    .cls-2 {
                                        opacity: 0.2;
                                    }

                                    .cls-3 {
                                        opacity: 0.4;
                                    }

                                    .cls-4 {
                                        opacity: 0.6;
                                    }
                                </style>
                            </defs>
                            <title>bottom-part1</title>
                            <g id="bottom-part">
                                <g id="Group_747" data-name="Group 747">
                                    <path id="Path_294" data-name="Path 294" class="cls-1 color-2" d="M0,24.21c120-55.74,214.32,2.57,267,0S349.18,7.4,349.18,7.4V82.35H0Z" transform="translate(0 0)" />
                                    <path id="Path_297" data-name="Path 297" class="cls-2 color-2" d="M350,34.21c-120-55.74-214.32,2.57-267,0S.82,17.4.82,17.4V92.35H350Z" transform="translate(0 0)" />
                                    <path id="Path_296" data-name="Path 296" class="cls-3 color-2" d="M0,44.21c120-55.74,214.32,2.57,267,0S349.18,27.4,349.18,27.4v74.95H0Z" transform="translate(0 0)" />
                                    <path id="Path_295" data-name="Path 295" class="cls-4 color-2" d="M349.17,54.21c-120-55.74-214.32,2.57-267,0S0,37.4,0,37.4v74.95H349.17Z" transform="translate(0 0)" />
                                </g>
                            </g>
                        </svg>
                    </div>
                </div> <!-- single pricing -->
            </div>

            <div class="w-full sm:w-3/4 md:w-3/4 lg:w-1/3">
                <div class="single-pricing enterprise">
                    
                    <div class="text-right pricing-header">
                        <h5 class="sub-title">Visión</h5>
                        <p class="year">¿Qué pretedemos?</p>
                    </div>
                    <div class="mb-8 pricing-list">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                    </div>
                    <div class="text-center pricing-btn">
                        <a class="main-btn" href="javascript:void(0)">GET STARTED</a>
                    </div>
                    <div class="bottom-shape">
                        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 350 112.35">
                            <defs>
                                <style>
                                    .color-3 {
                                        fill: #4da422;
                                        isolation: isolate;
                                    }

                                    .cls-1 {
                                        opacity: 0.1;
                                    }

                                    .cls-2 {
                                        opacity: 0.2;
                                    }

                                    .cls-3 {
                                        opacity: 0.4;
                                    }

                                    .cls-4 {
                                        opacity: 0.6;
                                    }
                                </style>
                            </defs>
                            <title>bottom-part1</title>
                            <g id="bottom-part">
                                <g id="Group_747" data-name="Group 747">
                                    <path id="Path_294" data-name="Path 294" class="cls-1 color-1" d="M0,24.21c120-55.74,214.32,2.57,267,0S349.18,7.4,349.18,7.4V82.35H0Z" transform="translate(0 0)" />
                                    <path id="Path_297" data-name="Path 297" class="cls-2 color-1" d="M350,34.21c-120-55.74-214.32,2.57-267,0S.82,17.4.82,17.4V92.35H350Z" transform="translate(0 0)" />
                                    <path id="Path_296" data-name="Path 296" class="cls-3 color-1" d="M0,44.21c120-55.74,214.32,2.57,267,0S349.18,27.4,349.18,27.4v74.95H0Z" transform="translate(0 0)" />
                                    <path id="Path_295" data-name="Path 295" class="cls-4 color-1" d="M349.17,54.21c-120-55.74-214.32,2.57-267,0S0,37.4,0,37.4v74.95H349.17Z" transform="translate(0 0)" />
                                </g>
                            </g>
                        </svg>
                    </div>
                </div> <!-- single pricing -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>


<section id="call-to-action" class="relative overflow-hidden bg-blue-600 call-to-action">
        <div class="absolute top-0 left-0 w-1/2 h-full call-action-image">
            <img src="https://i0.wp.com/puppis.blog/wp-content/uploads/2022/01/5-Tips-para-trabajar-desde-casa-con-tu-mascota.jpg?fit=1200%2C800&ssl=1" alt="call-to-action">
        </div>
        
        <div class="container-fluid">
            <div class="justify-end row">
                <div class="w-full lg:w-1/2">
                    <div class="py-32 mx-auto text-center call-action-content">
                        <h2 class="mb-5 text-5xl font-semibold leading-tight text-white">¿Quisierás recibir recordatorios de tu mascota?</h2>
                        <p class="mb-6 text-white">Suscríbete de forma gratuita y recibe recordatorios de actividades que podrías relizar con tu mascota</p>
                        <form action="#" class="relative w-5/6 mx-auto md:w-2/3 call-newsletter">
                            <i class="absolute top-0 left-0 pt-3 pl-5 text-xl text-blue-600 lni-envelope"></i>
                            <input type="email" placeholder="ejemplo@email.com" class="w-full py-3 pl-12 pr-40 bg-white rounded-full focus:outline-none">
                            <button type="submit" class="absolute top-0 right-0 px-6 py-2 mt-1 mr-1 font-bold text-white duration-300 bg-blue-600 rounded-full hover:bg-blue-500">SUSCRÍBETE</button>
                        </form>
                    </div> <!-- slider-content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>


@endsection