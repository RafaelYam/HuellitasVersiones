@extends('layouts.miapp')
@section('informacion')


<section id="service" class="relative services-area p-24 mb-64 container">


	@if($mascota->vacuna=="No")
	<div class=" flex-col justify-center content-end flow-root">
		<div class="float-right bg-red-500 shadow-lg mx-auto w-96 max-w-full text-sm pointer-events-auto bg-clip-padding rounded-lg block mb-3" id="static-example" role="alert" aria-live="assertive" aria-atomic="true" data-mdb-autohide="false">
			<div class="bg-red-500  flex justify-between items-center py-2 px-3 bg-clip-padding border-b border-red-400 rounded-t-lg">
				
				<p class="font-bold text-white flex items-center">
					
				⚠️ Vacunas!
				</p>
				<div class="flex items-center">
					<p class="text-white opacity-90 text-xs">💉</p>
					<button type="button" class="btn-close btn-close-white box-content w-4 h-4 ml-2 text-white border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-white hover:opacity-75 hover:no-underline" data-mdb-dismiss="toast" aria-label="Close"></button>
				</div>
			</div>
			<div class="p-3 bg-red-500  rounded-b-lg break-words text-white">
				{{$mascota->nombre}} Aún no tiene todas sus vacunas :c
			</div>
		</div>
	</div>

	@endif

	<div class="max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0">

		<!--Main Col-->
		<div id="profile" class="w-full lg:w-3/5 rounded-lg lg:rounded-l-lg lg:rounded-r-none shadow-2xl bg-white  mx-6 lg:mx-0">


			<div class="p-4 md:p-12 text-center lg:text-left">
				<!-- Image for mobile view-->
				<div class="block lg:hidden rounded-full shadow-xl mx-auto -mt-16 h-48 w-48 bg-cover bg-center" style="background-image: url({{$mascota->raza->fotoperfil}})"></div>

				<h1 class="text-3xl font-bold pt-8 lg:pt-0">Nombre: {{$mascota->nombre}}</h1>
				<div class="mx-auto lg:mx-0 w-4/5 pt-3 border-b-2 border-green-500 opacity-25"></div>
				<p class="pt-4 text-base font-bold flex items-center justify-center lg:justify-start"> Raza: {{$mascota->raza->raza}}</p>
				<p class="pt-4 text-base font-bold flex items-center justify-center lg:justify-start"> ¿Cuénta con todas sus vacunas?: {{$mascota->vacuna}}</p>
				<p class="pt-4 text-base font-bold flex items-center justify-center lg:justify-start"> Edad: {{$mascota->edad}}</p>
				<p class="pt-4 text-base font-bold flex items-center justify-center lg:justify-start"> Sexo: {{$mascota->sexo}}</p>

				<p class="pt-8 text-sm">Puedes realizar modificaciones a los datos de tu mascota con los iconos de abajo</p>

				<div class="pt-12 pb-8 flex">
					<div class=" sm:block md:flex lg:flex">
						<a href="{{route('mascota.edit', $mascota->id)}}"><button class="flex bg-blue-400 w-32 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded-full">
								<svg xmlns="http://www.w3.org/2000/svg" class="mr-4 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
									<path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
								</svg>
								Editar
							</button></a>

						<button class="ml-8 flex bg-blue-400 w-32 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded-full" data-bs-toggle="modal" data-bs-target="#exampleModal">
							<svg xmlns="http://www.w3.org/2000/svg" class="mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								<path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
							</svg>
							Eliminar
						</button>
					</div>
					<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog relative w-auto pointer-events-none">
							<div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
								<div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
									<h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">Confirmar Eliminación</h5>
									<button type="button" class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body relative p-4">
									¿Estás seguro que quieres eliminar a esta mascota?
								</div>
								<div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
									<button type="button" class="px-6
          py-2.5
          bg-purple-600
          text-white
          font-medium
          text-xs
          leading-tight
          uppercase
          rounded
          shadow-md
          hover:bg-purple-700 hover:shadow-lg
          focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0
          active:bg-purple-800 active:shadow-lg
          transition
          duration-150
          ease-in-out" data-bs-dismiss="modal">Cancelar</button>
									<form action="{{route('mascota.destroy', $mascota->id)}}" method='POST'>
										@csrf
										@method('delete')

										<button type="submit" class="px-6
      py-2.5
      bg-blue-600
      text-white
      font-medium
      text-xs
      leading-tight
      uppercase
      rounded
      shadow-md
      hover:bg-blue-700 hover:shadow-lg
      focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
      active:bg-blue-800 active:shadow-lg
      transition
      duration-150
      ease-in-out
      ml-1">Eliminar</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="mx-auto lg:mx-0 w-4/5 pt-3 border-b-2 border-green-500 opacity-25"></div>
				<div class="max-w-sm bg-white rounded-lg content-center">
					<p class="pt-4 pb-4  font-bold flex items-center justify-center lg:justify-start">Escanea el código QR y descarga un pdf con toda la información de tu mascota, incluyendo vacunas, alimentación, etc.</p>
					<img class=" rounded-t-lg sm-w6 md:w-32 lg:w-48" src="https://i.ibb.co/L58X344/huellitasveterinario-ml.png" alt="product image" />

					<div class=" py-6">
						<div class="flex items-center mb-5">
							<a target="_blank" href="https://qrfy.mobi/p/TgzFk-D" class="underline">
								<p class=" text-sm">O haz click aqui para descargar</p>
							</a>
						</div>

					</div>
				</div>


			</div>

		</div>

		<!--Img Col-->
		<div class="w-full lg:w-2/5">
			<!-- Big profile image for side bar (desktop) -->
			<img src="{{$mascota->raza->fotoperfil}}" class="rounded-none lg:rounded-lg shadow-2xl hidden lg:block">
			<!-- Image from: http://unsplash.com/photos/MP0IUfwrn0A -->

		</div>


	</div>


	<script src="https://unpkg.com/popper.js@1/dist/umd/popper.min.js"></script>
	<script src="https://unpkg.com/tippy.js@4"></script>


</section>
<script>
	$(document).ready(function() {
		$('.tooltipped').tooltip();
	});
</script>

@endsection