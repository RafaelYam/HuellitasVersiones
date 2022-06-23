@extends('layouts.miApp')
@section('informacion')

<div class="nombre-pagina">
    <h1>Hospital de mascotas</h1>
   
</div>
<br>
<div class="fondo">
    <h1>Información sobre la página</h1>
    <br>
    <div class="texto-info">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
        but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised
        in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
        with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    </div>
</div>
<div class="lista">
    <h1>Cosas que puedes ver</h1>
    <div>
        <a href="{{route('mascota.lista')}}" class="btn-floating btn-small waves-effect  indigo lighten-1"><i class="material-icons">pets</i></a>
        <a class="btn-floating btn-small waves-effect  indigo lighten-1"><i class="material-icons">local_hospital</i></a>
        <a class="btn-floating btn-small waves-effect  indigo lighten-1"><i class="material-icons">local_dining</i></a>
    </div>
</div>

<div class="row cards">


    <div class="col s12 m4 l4">
        <h3>perros</h3>

        <li>P1</li>
        <li>P2</li>
        <li>P3</li>
    </div>
    <div class="col s12 m4 l4">
        <h3>Gatos</h3>

        <li>g1</li>
        <li>g2</li>
        <li>g3</li>
    </div>
    <div class="col s12 m4 l4">
        <h3>Otros animales</h3>

        <li>o1</li>
        <li>o2</li>
        <li>o3</li>
    </div>
    <div class="Boton" align="right">
        <a href="{{route('mascota.create')}}" class="waves-effect waves-light small btn">Muestranos a tu mascota</a>
    </div>
</div>
@endsection