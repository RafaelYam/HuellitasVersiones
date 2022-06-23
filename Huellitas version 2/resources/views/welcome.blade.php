@extends('layouts.miapp')
@section('informacion')
<header
  class="flex items-center justify-center h-96 mb-12 bg-fixed bg-center bg-cover custom-img">
  <div class=" shadow-stone-400 p-5 text-2xl text-white bg-blue-300 bg-opacity-50 rounded-xl">
        <h1 class="nombre">Huellitas:</h1>
        <br>
        <h4 class="segundo-nombre">Veterinario en casa</h5>
  </div>
</header>




<!-- component -->
<div class=" flex flex-wrap items-center justify-center">
    
    <div class="shadow-stone-400 flex-shrink-0 m-6 relative overflow-hidden bg-blue-400 rounded-lg max-w-xs shadow-lg">
      <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
        <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white"/>
        <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white"/>
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
        <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white"/>
        <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white"/>
      </svg>
      <div class="relative pt-10 px-10 flex items-center justify-center">
        <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
        <img class="relative w-40" src="https://cdn-icons-png.flaticon.com/512/5276/5276963.png" alt="">
      </div>
      <div class="relative text-white px-6 pb-6 mt-6">
        <span class="block font-semibold text-xl">Registrar</span>
        <div class="flex justify-between">
          <span class="block opacity-75 -mb-1">A tu mascota</span>
          <a href="{{route('mascota.create')}}"><span class="block bg-white rounded-full text-blue-200 text-xs font-bold px-3 py-2 leading-none flex items-center">Registra</span></a>
        </div>
      </div>
    </div>
    <div class="flex-shrink-0 shadow-stone-400 m-6 relative overflow-hidden bg-blue-400 rounded-lg max-w-xs shadow-lg">
      <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
        <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white"/>
        <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white"/>
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


  <section id="pricing" class="bg-gray-100 pricing-area py-120">
        <div class="container">
            <div class="justify-center row">
                <div class="w-full mx-4 lg:w-1/2">
                    <div class="pb-10 text-center section-title">
                        <h4 class="title">Our Pricing</h4>
                        <p class="text">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="justify-center row">
                <div class="w-full sm:w-3/4 md:w-3/4 lg:w-1/3">
                    <div class="single-pricing">
                        <div class="text-center pricing-header">
                            <h5 class="sub-title">Basic</h5>
                            <span class="price">$ 199</span>
                            <p class="year">per year</p>
                        </div>
                        <div class="mb-8 pricing-list">
                            <ul>
                                <li><i class="lni-check-mark-circle"></i> Carefully crafted components</li>
                                <li><i class="lni-check-mark-circle"></i> Amazing page examples</li>
                                <li><i class="lni-check-mark-circle"></i> Super friendly support team</li>
                                <li><i class="lni-check-mark-circle"></i> Awesome Support</li>
                            </ul>
                        </div>
                        <div class="text-center pricing-btn">
                            <a class="main-btn" href="javascript:void(0)">GET STARTED</a>
                        </div>
                        <div class="bottom-shape">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 350 112.35"><defs><style>.color-1{fill:#2bdbdc;isolation:isolate;}.cls-1{opacity:0.1;}.cls-2{opacity:0.2;}.cls-3{opacity:0.4;}.cls-4{opacity:0.6;}</style></defs><title>bottom-part1</title><g id="bottom-part"><g id="Group_747" data-name="Group 747"><path id="Path_294" data-name="Path 294" class="cls-1 color-1" d="M0,24.21c120-55.74,214.32,2.57,267,0S349.18,7.4,349.18,7.4V82.35H0Z" transform="translate(0 0)"/><path id="Path_297" data-name="Path 297" class="cls-2 color-1" d="M350,34.21c-120-55.74-214.32,2.57-267,0S.82,17.4.82,17.4V92.35H350Z" transform="translate(0 0)"/><path id="Path_296" data-name="Path 296" class="cls-3 color-1" d="M0,44.21c120-55.74,214.32,2.57,267,0S349.18,27.4,349.18,27.4v74.95H0Z" transform="translate(0 0)"/><path id="Path_295" data-name="Path 295" class="cls-4 color-1" d="M349.17,54.21c-120-55.74-214.32,2.57-267,0S0,37.4,0,37.4v74.95H349.17Z" transform="translate(0 0)"/></g></g></svg>
                        </div>
                    </div> <!-- single pricing -->
                </div>
                
                <div class="w-full sm:w-3/4 md:w-3/4 lg:w-1/3">
                    <div class="single-pricing pro">
                        <div class="absolute top-0 right-0 w-40 -mr-20 pricing-baloon">
                            <img src="assets/images/baloon.svg" alt="baloon">
                        </div>
                        <div class="pricing-header">
                            <h5 class="sub-title">Pro</h5>
                            <span class="price">$ 399</span>
                            <p class="year">per year</p>
                        </div>
                        <div class="mb-8 pricing-list">
                            <ul>
                                <li><i class="lni-check-mark-circle"></i> Carefully crafted components</li>
                                <li><i class="lni-check-mark-circle"></i> Amazing page examples</li>
                                <li><i class="lni-check-mark-circle"></i> Super friendly support team</li>
                                <li><i class="lni-check-mark-circle"></i> Awesome Support</li>
                            </ul>
                        </div>
                        <div class="text-center pricing-btn">
                            <a class="main-btn" href="javascript:void(0)">GET STARTED</a>
                        </div>
                        <div class="bottom-shape">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 350 112.35"><defs><style>.color-2{fill:#0067f4;isolation:isolate;}.cls-1{opacity:0.1;}.cls-2{opacity:0.2;}.cls-3{opacity:0.4;}.cls-4{opacity:0.6;}</style></defs><title>bottom-part1</title><g id="bottom-part"><g id="Group_747" data-name="Group 747"><path id="Path_294" data-name="Path 294" class="cls-1 color-2" d="M0,24.21c120-55.74,214.32,2.57,267,0S349.18,7.4,349.18,7.4V82.35H0Z" transform="translate(0 0)"/><path id="Path_297" data-name="Path 297" class="cls-2 color-2" d="M350,34.21c-120-55.74-214.32,2.57-267,0S.82,17.4.82,17.4V92.35H350Z" transform="translate(0 0)"/><path id="Path_296" data-name="Path 296" class="cls-3 color-2" d="M0,44.21c120-55.74,214.32,2.57,267,0S349.18,27.4,349.18,27.4v74.95H0Z" transform="translate(0 0)"/><path id="Path_295" data-name="Path 295" class="cls-4 color-2" d="M349.17,54.21c-120-55.74-214.32,2.57-267,0S0,37.4,0,37.4v74.95H349.17Z" transform="translate(0 0)"/></g></g></svg>
                        </div>
                    </div> <!-- single pricing -->
                </div>
                
                <div class="w-full sm:w-3/4 md:w-3/4 lg:w-1/3">
                    <div class="single-pricing enterprise">
                        <div class="absolute top-0 left-0 w-32 mt-3 ml-3 pricing-flower">
                            <img src="assets/images/flower.svg" alt="flower">
                        </div>
                        <div class="text-right pricing-header">
                            <h5 class="sub-title">Enterprise</h5>
                            <span class="price">$ 799</span>
                            <p class="year">per year</p>
                        </div>
                        <div class="mb-8 pricing-list">
                            <ul>
                                <li><i class="lni-check-mark-circle"></i> Carefully crafted components</li>
                                <li><i class="lni-check-mark-circle"></i> Amazing page examples</li>
                                <li><i class="lni-check-mark-circle"></i> Super friendly support team</li>
                                <li><i class="lni-check-mark-circle"></i> Awesome Support</li>
                            </ul>
                        </div>
                        <div class="text-center pricing-btn">
                            <a class="main-btn" href="javascript:void(0)">GET STARTED</a>
                        </div>
                        <div class="bottom-shape">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 350 112.35"><defs><style>.color-3{fill:#4da422;isolation:isolate;}.cls-1{opacity:0.1;}.cls-2{opacity:0.2;}.cls-3{opacity:0.4;}.cls-4{opacity:0.6;}</style></defs><title>bottom-part1</title><g id="bottom-part"><g id="Group_747" data-name="Group 747"><path id="Path_294" data-name="Path 294" class="cls-1 color-3" d="M0,24.21c120-55.74,214.32,2.57,267,0S349.18,7.4,349.18,7.4V82.35H0Z" transform="translate(0 0)"/><path id="Path_297" data-name="Path 297" class="cls-2 color-3" d="M350,34.21c-120-55.74-214.32,2.57-267,0S.82,17.4.82,17.4V92.35H350Z" transform="translate(0 0)"/><path id="Path_296" data-name="Path 296" class="cls-3 color-3" d="M0,44.21c120-55.74,214.32,2.57,267,0S349.18,27.4,349.18,27.4v74.95H0Z" transform="translate(0 0)"/><path id="Path_295" data-name="Path 295" class="cls-4 color-3" d="M349.17,54.21c-120-55.74-214.32,2.57-267,0S0,37.4,0,37.4v74.95H349.17Z" transform="translate(0 0)"/></g></g></svg>
                        </div>
                    </div> <!-- single pricing -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>


<div class="nosotros row">
    <div class="col s4 offset-s4">
        <h1 class="titulo-nosotros" >Sobre Nostros</h1>
    </div>

    <div class="container row">
        <div class="col l5 m5 s5">
            <h4 class="subtitulo">Huellitas</h4>
            <p>Es una aplicación web que está diseñada para tener una fácil accesibilidad a información sobre el cuidado de nuestras mascotas,
                está pensada en esas personas que no tienen la posibilidad de visitar un veterinario o que no tengan el tiempo de hacerlo.
            </p>
        </div>
        <div class="col l2 m2 s2">

        </div>
        <div class="col l5 m5 s5">
            <h4 class="subtitulo">Objetivos</h4>
            <p>Es una aplicación web que está diseñada para tener una fácil accesibilidad a información sobre el cuidado de nuestras mascotas,
                está pensada en esas personas que no tienen la posibilidad de visitar un veterinario o que no tengan el tiempo de hacerlo.
            </p>
        </div>
    </div>

    <div class="container row">
        <div class="col l5 m5 s5">
            <h4 class="subtitulo">Misión</h4>
            <p>Es una aplicación web que está diseñada para tener una fácil accesibilidad a información sobre el cuidado de nuestras mascotas,
                está pensada en esas personas que no tienen la posibilidad de visitar un veterinario o que no tengan el tiempo de hacerlo.
            </p>
        </div>
        <div class="col l2 m2 s2">

        </div>
        <div class="col l5 m5 s5">
            <h4 class="subtitulo">Visión</h4>
            <p>Es una aplicación web que está diseñada para tener una fácil accesibilidad a información sobre el cuidado de nuestras mascotas,
                está pensada en esas personas que no tienen la posibilidad de visitar un veterinario o que no tengan el tiempo de hacerlo.
            </p>
        </div>
    </div>

</div>

@endsection