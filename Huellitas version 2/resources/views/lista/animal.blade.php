@extends('layouts.miapp')
@section('informacion')

<div class="lista-animal container row">
  <div class="titulo-lista col l9 s6 m6">
    <h2>Seleccionar raza para anilizar</h2>
  </div>

  <div class="buscador-raza col l3 s6 m6">
    <br><br>
    
    <a class="btn-large fourth  btn modal-trigger" href="#modal1"><i class="material-icons left">search</i>Buscar</a>
    <!-- Modal Structure -->
    <div id="modal1" class="modal">
      <div class="modal-content">
        <livewire:show-razas>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
      </div>
    </div>
  </div>
</div>
<div class="container tabla-animal  col l12 s6 m6">
  <ul class="collapsible">

    @foreach ($animalc as $animal)
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>{{$animal->tipo}}</div>
      @foreach ($animal->raza as $raza)
      <div class="collapsible-body"><a href="{{route('mascota.verinfo', $raza->id)}}"><span>{{$raza->raza}}</span></a></div>
      @endforeach
    </li>
    @endforeach
  </ul>
</div>
<script>
  $(document).ready(function() {
    $('.collapsible').collapsible();
  });
</script>

@endsection