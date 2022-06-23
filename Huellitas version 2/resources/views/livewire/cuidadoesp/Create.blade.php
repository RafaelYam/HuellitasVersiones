
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
    <div class="form-group">
        <label for="exampleFormControlInput3">Nombre del veterinario que le brindó la información:</label>
        <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Escribir..." wire:model="veterinario">
        @error('veterinario') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput4">Contacto del veterinario:</label>
        <input type="text" class="form-control" id="exampleFormControlInput4"  wire:model="contactoveterinario">
        @error('contactoveterinario') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <button wire:click.prevent="store()" class="btn btn-success">Save</button>
</form>
