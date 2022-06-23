@extends('layouts.miapp')
@section('informacion')

<div class="fondo">
    <div>
        @role('admin')
        <!-- Modal Trigger -->
        <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Administrar especies</a>

        <!-- Modal Structure -->
        <div id="modal1" class="modal">
            <div class="modal-content">
                <h4>Actividades de administrador</h4>
            </div>
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <livewire:especies />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
            </div>
        </div>
        
    </div>
    
    @endrole
</div>
<div class="row">


    @foreach ($mascota as $animal)
    <div class="col s12 m6 l3">
        <div class="card deep-purple lighten-3">
            <div class="card-content white-text">
                <span class="card-title">{{$animal->nombre}}</span>
                <p>{{$animal->raza->raza}}</p>
            </div>
            <div class="card-action">
                <p>Au: {{$animal->user->name}}</p>
                <div>
                    <a href="{{route('mascota.verinfo', $animal->raza_id)}}" class="btn-floating btn-small waves-effect  indigo lighten-1 tooltipped" data-position="bottom" data-tooltip="Información"><i class="material-icons">pets</i></a>
                    <a href="{{route('mascota.show', $animal->id)}}" class="btn-floating btn-small waves-effect  indigo lighten-1 tooltipped" data-position="bottom" data-tooltip="Ver"><i class="material-icons">pets</i></a>
                    <a href="" class="btn-floating btn-small waves-effect  indigo lighten-1 tooltipped" data-position="bottom" data-tooltip="Enfermedades"><i class="material-icons">local_hospital</i></a>
                    <a href="" class="btn-floating btn-small waves-effect  indigo lighten-1 tooltipped" data-position="bottom" data-tooltip="Alimentación"><i class="material-icons">local_dining</i></a>

                </div>
            </div>
        </div>
    </div>
    @endforeach

    <div class="col s12 m6 l3">
        <div class="card deep-purple lighten-3">
            <div class="card-content white-text">
                <span class="card-title">¿Es momento de una nueva mascota?</span>
                <p>no es demasiado tarde para hacer crecer tu familia</p>
            </div>
            <div class="card-action">
                <a href="{{route('mascota.create')}}" class="waves-effect waves-light  indigo lighten-1 btn-small">Añadir nueva mascota</a>
            </div>
        </div>
    </div>

</div>
</div>


<script>
    $(document).ready(function() {
        $('.tooltipped').tooltip();
    });
</script>

@endsection