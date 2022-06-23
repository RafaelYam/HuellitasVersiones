<div>
    {{-- Stop trying to control. --}}
    <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">search</i>
          <input type="text" wire:model="criterio" id="autocomplete-input" class="autocomplete">
          <label class="active" for="autocomplete-input">Buscar Raza</label>
        </div>
      </div>
    
    
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg container">
        <table class="centered highlight responsive-table ">
            <thead class="">
                <tr>
                    <th>
                        Raza
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Información
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Picture
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($razas as $user)
                <tr class="border-b responsive-table dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
                    
                    <td class="px-6 py-4">
                    <a href="{{route('mascota.verinfo', $user->id)}}">{{$user->raza}}</a>
                    </td>
                    <td class="px-6 py-4">
                        Nombre Común
                    </td>

                    <td class="px-6 py-4 text-right">
                    <img src="{{$user->foto}}" alt="foto de {{$user->raza}}" width="70" height="60">
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>