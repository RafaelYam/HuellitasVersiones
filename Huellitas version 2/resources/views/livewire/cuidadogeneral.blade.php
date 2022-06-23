<div>
    {{-- The whole world belongs to you. --}}
    <div>
        
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
</div>
