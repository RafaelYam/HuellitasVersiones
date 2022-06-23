@extends('layouts.miapp')
@section('informacion')

<div class="row">
    <div class="col s7">
        <p>Aqui van cuidados</p>
    </div>
    <div class="col s5">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <livewire:cuidadoespuser />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection