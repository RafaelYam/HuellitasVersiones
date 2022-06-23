<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <link rel="stylesheet" href="{{asset('css/estilos.css') }}">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>


  <link rel="stylesheet" href="{{asset('css/estilos.css') }}">





  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="{{ asset('js/dobleinput.js') }}" defer></script>
  @livewireStyles
</head>

<body class="font-sans antialiased">

  <div class=" ">
    @include('layouts.navigation')
    @yield('informacion')

  </div>
  <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Programador:</h5>
          <p class="grey-text text-lighten-4">Jesus Rafael Yam Tamayo</p>
          <h5 class="white-text">Diseñadora:</h5>
          <p class="grey-text text-lighten-4">Fernanda Jacqueline Tzec Quijano</p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Contacto</h5>
          <ul>
            <li><a class="grey-text text-lighten-3" href="#!">informacion@huellitas.com</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Instagram</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Youtube</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Twitter</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        © 2022 Todos los derechos reservados
        <a class="grey-text text-lighten-4 right" href="#!">Instituo Tecnológico Nacional de México</a>
      </div>
    </div>
  </footer>
  @livewireScripts
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script>
    $(document).ready(function() {
      $('.modal').modal();
    });
  </script>
  <script>
    $(document).ready(function() {
      $('.carousel').carousel();
    });
  </script>
  <script>
    $(document).ready(function() {
      $('.sidenav').sidenav();
    });
  </script>

</body>

</html>