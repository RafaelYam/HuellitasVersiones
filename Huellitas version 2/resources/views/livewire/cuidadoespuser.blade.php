<div>
    {{-- In work, do what you enjoy. --}}
    <div>
        
        @if($isOpen)
            @include('livewire.cuidadoesp.update')
        @else
            @include('livewire.cuidadoesp.create')
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
</div>
