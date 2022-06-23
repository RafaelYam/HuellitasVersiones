<div>
    {{-- Stop trying to control. --}}
    <div class="row container px-6">
        <div class="mb-6 container sm:shadow-lg">
            <label for="email" class="font-bold block mb-2 text-4xl text-slate-600 ">Buscar Raza</label>
            <input wire:model="criterio" type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-teal-100 dark:border-teal-400 dark:placeholder-gray-400 dark:text-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buscar..." required>


            <div class="flex items-center justify-center">
        <div class="container">
        @if ($criterio=="")
            <div class="py-6">
            <p class=" underline decoration-sky-500 underline-offset-8 text-xl font-semibold text-center buscador">Creo que aún no has buscado nada</p>
            </div>
            @else
            <table class="w-full flex flex-row flex-no-wrap sm:bg-white rounded-lg overflow-hidden table-auto sm:shadow-lg my-5">
                <thead class="text-white">
                    @foreach($razas as $raza)
                    <tr class="bg-teal-400 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                        <th class="p-3 text-left">Nombre</th>
                        <th>Nombre coloquial</th>
                        <th class="p-3 text-left">¿Qué tan común es verlos?</th>
                        
                    </tr>
                    @endforeach
                </thead>
                <tbody class="flex-1 sm:flex-none">
                    @foreach($razas as $raza)
                    <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">
                        <td  href="{{route('mascota.verinfo',$raza->id)}}" class="border-grey-light border hover:bg-gray-100 p-3"><a class="text-teal-500" href="{{route('mascota.verinfo',$raza->id)}}">{{$raza->raza}}</a></td>
                        <td  href="{{route('mascota.verinfo',$raza->id)}}" class="border-grey-light border hover:bg-gray-100 p-3"><a class="text-teal-500" href="{{route('mascota.verinfo',$raza->id)}}">{{$raza->nombrecomun}}</a></td>
                        <td class="border-grey-light border hover:bg-gray-100 p-3 truncate"><a href="{{route('mascota.verinfo',$raza->id)}}">{{$raza->tipo}}</a></td>
                       
                    </tr>
                    @endforeach

                </tbody>
            </table>
            @endif
        </div>
    </div>

        </div>

    </div>

   






    <style>
        html,
        body {
            height: 100%;
        }

        @media (min-width: 640px) {
            table {
                display: inline-table !important;
            }

            thead tr:not(:first-child) {
                display: none;
            }
        }

        td:not(:last-child) {
            border-bottom: 0;
        }

        th:not(:last-child) {
            border-bottom: 2px solid rgba(0, 0, 0, .1);
        }
    </style>

</div>