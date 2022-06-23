<div>
    {{-- Do your work, then step back. --}}
    <div>
        @if($isOpen)
            @include('livewire.especie.update')
        @else
            @include('livewire.especie.create')
        @endif
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Tipo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($animals as $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->tipo }}</td>
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