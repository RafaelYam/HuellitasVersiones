
<form>
    <div class="form-group">
        <input type="hidden" wire:model="animal_id">
        <label for="exampleFormControlInput1">Title</label>
        <input type="text" class="form-control" wire:model="tipo" id="exampleFormControlInput1" placeholder="Enter Title">
        @error('tipo') <span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <button wire:click.prevent="store()" class="btn btn-dark">Update</button>
    <button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</button>
</form>
