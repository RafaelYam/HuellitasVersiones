<div>
    {{-- Stop trying to control. --}}
    <div class="row">
        <div class="mb-6 container sm:shadow-lg">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-teal-400">Buscar Raza</label>
            <input wire:model="criterio" type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-teal-100 dark:border-teal-400 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buscar..." required>


            <div class="flex items-center justify-center">
        <div class="container">
            <table class="w-full flex flex-row flex-no-wrap sm:bg-white rounded-lg overflow-hidden table-auto sm:shadow-lg my-5">
                <thead class="text-white">
                    @foreach($razas as $raza)
                    <tr class="bg-teal-400 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                        <th class="p-3 text-left">Nombre</th>
                        <th class="p-3 text-left">Nombre coloquial</th>
                        <th class="p-3 text-left" width="110px">Foto</th>
                    </tr>
                    @endforeach
                </thead>
                <tbody class="flex-1 sm:flex-none">
                    @foreach($razas as $raza)
                    <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">
                        <td class="border-grey-light border hover:bg-gray-100 p-3"><a href="{{route('mascota.verinfo',$raza->id)}}">{{$raza->raza}}</a></td>
                        <td class="border-grey-light border hover:bg-gray-100 p-3 truncate">nombre</td>
                        <td class="border-grey-light border hover:bg-gray-100 p-3 text-red-400 hover:text-red-600 hover:font-medium cursor-pointer">
                            <img class="shrink-0 h-12 w-12 rounded-full" src="{{$raza->foto}}" alt="" />
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
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