<div>
    {{-- The whole world belongs to you. --}}

    <section id="service" class="relative services-area py-120 ">
        <div class=" ">
            <div class="container mx-auto">
                <div role="article" class=" py-4 md:px-8">
                    <div class="px-4 xl:px-0 py-6">

                        <div class="mt-4 lg:mt-0 lg:w-3/5">
                            <div>
                                <h1 class=" title text-3xl ml-2 lg:ml-0 lg:text-4xl font-bold text-gray-900 ">Cuidados necesarios para tu mascota</h1>
                            </div>
                        </div>


                    </div>
                    <div>

                        <div class="px-6 xl:px-0">
                            <div class=" grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 pb-6 gap-8 rounded ">
                                @foreach($mascotacuidado as $mcuidado)
                                <div role="cell" class="rounded-lg bg-gray-100 sm:shadow-lg dark:bg-blue-400 ">
                                    <div class="bg-white p-5 roun dark:bg-blue-400 ded-md relative h-full w-full">
                                        <!-- class="absolute inset-0 object-center object-cover h-full w-full"  -->
                                        <span><img class="bg-gray-200 p-2 mb-5 rounded-full" src="https://i.ibb.co/27R6nk5/home-1.png" alt="home-1" /></span>
                                        <h1 class="pb-4 text-2xl dark:text-white font-semibold">{{$mcuidado->nombre}}</h1>
                                        <div class="my-5">
                                            <div class="flex items-center pb-4 dark:border-blue-400 cursor-pointer w-full space-x-3">
                                                <h4 class="text-md dark:text-gray-100">{{$mcuidado->informacion}}</h4>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="container ">
            <div class="text-center py-6">
                <h1 class="title">Cuentanos los cuidados que le das a tu mascota</h1>
                <br>
                <p>Tu comentario tendrá que pasar por un proceso de validación para verlo en nuestra página</p>
            </div>

            @if($isOpen)
            @include('livewire.cuidadogen.update')
            @else
            @include('livewire.cuidadogen.create')
            @endif

            @if (sizeof($cuidados) > 0)
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full">
                                <thead class="border-b">
                                    <tr>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                            Tipo de cuidado
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Descripción
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                            Acciones
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cuidados as $value)
                                    <tr class="border-b">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $value->tipocuidado }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $value->descripcion }}</td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <button wire:click="edit({{ $value->id }})" class="inline-block px-6 py-2.5 bg-blue-400 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-500 hover:shadow-lg focus:bg-blue-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-500 active:shadow-lg transition duration-150 ease-in-out">Editar</button>
                                            <button type=" button" class="inline-block px-6 py-2.5 bg-blue-400 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-500 hover:shadow-lg focus:bg-blue-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-500 active:shadow-lg transition duration-150 ease-in-out" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Eliminar</button>
                                        </td>


                                        <!-- Modal -->
                                        <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog relative w-auto pointer-events-none">
                                                <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                                                    <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                                                        <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">
                                                            Confirmar eliminación
                                                        </h5>
                                                        <button type="button" class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body relative p-4">
                                                        ¿Estás seguro que deseas eliminar tu comentario de cuidados?
                                                    </div>
                                                    <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                                                        <button type="button" class="inline-block px-6 py-2.5 bg-blue-400 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-400 hover:shadow-lg focus:bg-blue-400 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out" data-bs-dismiss="modal">Cancelar</button>
                                                        <button wire:click="delete({{ $value->id }})" type="button" class="inline-block px-6 py-2.5 bg-red-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-500 hover:shadow-lg focus:bg-red-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-500 active:shadow-lg transition duration-150 ease-in-out ml-1">Eliminar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @endif

        </div>

    </section>


</div>