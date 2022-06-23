@extends('layouts.miApp')
@section('informacion')

<ul class="collapsible">
    {{$animalc->count()}}
    @foreach ($animalc as $animal)
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>{{$animal->tipo}}</div>
      @foreach ($animal->raza as $raza)
        <div class="collapsible-body"><a href="{{route('mascota.verinfo', $raza->id)}}"><span>{{$raza->raza}}</span></a></div>
      @endforeach
    </li>
    @endforeach
  </ul>

<script>
      $(document).ready(function(){
    $('.collapsible').collapsible();
  });
       
</script>

@endsection