
<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">Tipo de cuidado:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Escribir..." wire:model="tipocuidado">
        @error('tipocuidado') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Descripción:</label>
        <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Escribir..." wire:model="descripcion">
        @error('descripcion') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
   
    <button wire:click.prevent="store()" class="btn btn-success">Save</button>
</form>
     