<div class="grid grid-cols-6 gap-4">
    <div class="col-start-3 col-end-5">
        <form>
            <div class="form-group">
                <input type="hidden" wire:model="cuidado_id">

                <label for="exampleFormControlInput1">Tipo de cuidado:</label>
                <input type="text" class="form-control
      block
      w-full
      px-3
      py-1.5
      text-base
      font-normal
      text-gray-700
      bg-white bg-clip-padding
      border border-solid border-gray-300
      rounded
      transition
      ease-in-out
      m-0
      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput1" placeholder="Escribir..." wire:model="tipocuidado">
                @error('tipocuidado') <span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2">Descripción:</label>
                <input type="text" class="form-control
      block
      w-full
      px-3
      py-1.5
      text-base
      font-normal
      text-gray-700
      bg-white bg-clip-padding
      border border-solid border-gray-300
      rounded
      transition
      ease-in-out
      m-0
      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput2" placeholder="Escribir..." wire:model="descripcion">
                @error('descripcion') <span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <div class="py-5">
            <button wire:click.prevent="store()" class="inline-block px-6 py-2.5 bg-blue-400 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-500 hover:shadow-lg focus:bg-blue-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-500 active:shadow-lg transition duration-150 ease-in-out">Actualizar</button>
            <button wire:click.prevent="cancel()" class="inline-block px-6 py-2.5 bg-blue-400 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-500 hover:shadow-lg focus:bg-blue-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-500 active:shadow-lg transition duration-150 ease-in-out">Cancelar</button>
        
            </div>
            
        </form>

    </div>
</div>