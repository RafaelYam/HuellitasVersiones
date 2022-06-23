<div class="grid grid-cols-6 gap-4">
    <div class="col-start-3 col-end-5">
    <form>
        <div class="form-group">
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

        <button wire:click.prevent="store()" class="btn btn-success">Save</button>
    </form>
   </div>

</div>