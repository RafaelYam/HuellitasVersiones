<div>
    {{-- The whole world belongs to you. --}}

    <section id="service" class="relative services-area py-120 ">
    <div class="bg-gray-100 dark:bg-gray-900">
            <div class="container mx-auto">
                <div role="article" class="bg-gray-100 dark:bg-gray-900 py-12 md:px-8">
                    <div class="px-4 xl:px-0 py-10">
                        <div class="flex flex-col lg:flex-row flex-wrap">
                            <div class="mt-4 lg:mt-0 lg:w-3/5">
                                <div>
                                    <h1 class="text-3xl ml-2 lg:ml-0 lg:text-4xl font-bold text-gray-900 dark:text-white tracking-normal lg:w-11/12">Frequently asked questions</h1>
                                </div>
                            </div>
                            <div class="lg:w-2/5 flex mt-10 ml-2 lg:ml-0 lg:mt-0 lg:justify-end">
                                <div class="pt-2 relative text-gray-600">
                                    <input class="focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none" type="search" name="search" placeholder="Search" />
                                    <button type="submit" class="focus:ring-2 focus:ring-offset-2 text-gray-600 focus:text-indigo-700 dark:text-indigo-400 focus:rounded-full focus:bg-gray-100 focus:ring-indigo-700 bg-white focus:outline-none absolute right-0 top-0 mt-5 mr-4">
                                      <img class="h-4 w-4" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-1-svg1.svg" alt="search">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                    
                    <div class="px-6 xl:px-0">
                        <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 pb-6 gap-8">
                        @foreach($mascotacuidado as $mcuidado)
                            <div role="cell" class="bg-gray-100 dark:bg-blue-800 ">
                                <div class="bg-white p-5 roun dark:bg-blue-800 ded-md relative h-full w-full">
                                    <!-- class="absolute inset-0 object-center object-cover h-full w-full"  -->
                                    <span><img class="bg-gray-200 p-2 mb-5 rounded-full" src="https://i.ibb.co/27R6nk5/home-1.png" alt="home-1" /></span>
                                    <h1 class="pb-4 text-2xl dark:text-white font-semibold">{{$mcuidado->nombre}}</h1>
                                    <div class="my-5">
                                        <div class="flex items-center pb-4 dark:border-blue-400 cursor-pointer w-full space-x-3">
                                           <img class="dark:bg-gray-400" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-1-svg2.svg" alt="bullet">
                                            <h4 class="text-md text-gray-900 dark:text-gray-100">{{$mcuidado->informacion}}</h4>
                                        </div>
                                        
                                    </div>
                                    <a class="hover:text-indigo-500 hover:underline absolute bottom-5 text-sm text-indigo-700 dark:text-indigo-400 font-bold cursor-pointer flex items-center" href="javascript:void(0)">
                                        <p>Show All</p>
                                        <div>
                                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-1-svg3.svg" alt="arrow">
                                        </div>
                                    </a>
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

        @if($isOpen)
            @include('livewire.cuidadogen.update')
        @else
            @include('livewire.cuidadogen.create')
        @endif
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                    <th>Tipo de cuidado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cuidados as $value)
                <tr>
                    <td>{{ $value->tipocuidado }}</td>
                    <td>
                        <button wire:click="edit({{ $value->id }})" class="btn btn-primary btn-sm">Edit</button>
                        <button wire:click="delete({{ $value->id }})" class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


  

    </section>

  
</div>


