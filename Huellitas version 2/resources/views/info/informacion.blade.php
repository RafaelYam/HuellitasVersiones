@extends('layouts.miapp')
@section('informacion')

<div class=" fondo container">
    <div>
        <div class="row">
            <div class="col s6">
                <h1>Información sobre el {{$mascota->raza}}</h1>
                <p>{{$mascota->informa}}</p>

            </div>
            <div class="col s6">
                <img class="responsive-img" src="{{$mascota->foto}}" width="250" alt="">
            </div>
        </div>

    </div>
</div>
<section class="fondo">
    <div class="row ">
        <div class="card-info col s12 m2 l2">
            <button class="">
                <a class="fourth btn-large" href="{{route('animal.adiestracion',$mascota->id)}}">Adiestración</a>
            </button>
        </div>
        <div class="col s12 m3 l3">
            <p></p>
        </div>
        <div class="card-info col s12 m2 l2">
            <button data-target="modal2" class="btn-large fourth modal-trigger">cuidados</button>
            <div id="modal2" class="modal">
                <div class="row modal-content">
                    <div class="col s12 m5 s5">
                        <a href="{{route('mascota.cuidado')}}">
                            <div>
                                <h4>Cuidados especiales</h4>
                                <p>Aqui encontraras la sección de cuidados junto con la aportación de otros usuarios</p>
                            </div>
                        </a>
                    </div>
                    <div class="col s12 m5 s5">
                        <a href="{{route('mascota.cuidadogeneral')}}">
                            <div>
                                <h4>Cuidados generales</h4>
                                <p>Aqui encontraras la sección de cuidados junto con la aportación de otros usuarios</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
                </div>
            </div>
        </div>
        <div class="col s12 m3 l3">
            <p></p>
        </div>
        <div class="card-info col s12 m2 l2">
            <button data-target="modal3" class="btn-large fourth  modal-trigger">Vacuna</button>
            <div id="modal3" class="modal">
                <div class="modal-content">
                    <h4>Vacunas</h4>
                    @foreach($vacuna as $vacunas)


                    <div class="card sticky-action col s12 m4 s4">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="responsive-img activator" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" width="50" height="180">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">{{$vacunas->nombre}}<i class="material-icons right">more_vert</i></span>
                            <p>{{$vacunas->necesaria}}% Necesaria</p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">{{$vacunas->nombre}}<i class="material-icons right">close</i></span>
                            <br>
                            <p>{{$vacunas->informacion}}</p>
                        </div>
                    </div>

                    @endforeach

                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row ">
        <div class="col s12 m3 l3">
            <p></p>
        </div>
        <div class="card-info col s12 m2 l2">
            <button data-target="modal4" class="btn-large fourth  modal-trigger">Dato curioso</button>
            <!-- Modal Structure -->
            <div id="modal4" class="modal">
                <div class="modal-content">
                    {{$curioso}}

                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
                </div>
            </div>
        </div>

        <div class="col s12 m2 l2">
            <p></p>
        </div>

        <div class="card-info col s12 m2 l2">
             <a href="{{route('mascota.alimento',$mascota->animal_id)}}">Alimento</a>
        <div class="col s12 m3 l3">
            <p></p>
        </div>
    </div>
    
</section>


<script>
    $(document).ready(function() {
        $('.carousel').carousel();
    });
</script>
<script>
    $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        indicators: true
    });
</script>
@endsection