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
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="{{ asset('js/dobleinput.js') }}" defer></script>


    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{ asset('css/slick.css')}}">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="{{ asset('css/LineIcons.css')}}">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">

    <!--====== tailwind css ======-->
    <link rel="stylesheet" href="{{ asset('css/tailwind.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
<script src="https://cdn.tailwindcss.com"></script>
<script>
  tailwind.config = {
    theme: {
      extend: {
        fontFamily: {
          sans: ['Inter', 'sans-serif'],
        },
      }
    }
  }
</script>

  @livewireStyles
</head>

<body class="font-sans antialiased">

  <div class=" ">
    @include('layouts.navigation')
    @yield('informacion')

  </div>
  
  <footer id="footer" class="bg-gray-100 footer-area">
        <div class="mb-16 footer-widget">
            <div class="container">
                <div class="row">
                    <div class="w-full">
                        <div class="items-end justify-between block mb-8 footer-logo-support md:flex">
                            <div class="flex items-end footer-logo">
                                <a class="mt-8" href="index.html"><img src="http://assets.stickpng.com/thumbs/58aeffe0c869e092af51ee77.png"  width="60" alt="Logo"></a>

                                <ul class="flex mt-8 ml-8 footer-social">
                                    <p>Redes sociales:    </p>
                                    <li><a href="javascript:void(0)"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni-twitter-original"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni-instagram-original"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni-linkedin-original"></i></a></li>
                                </ul>
                            </div> <!-- footer logo -->
                            
                        </div> <!-- footer logo support -->
                    </div>
                </div> <!-- row -->
                <div class="row">
                    <div class="w-full sm:w-1/2 md:w-1/4 lg:w-1/6">
                        <div class="mb-8 footer-link">
                            <h6 class="footer-title">Página:</h6>
                            <ul>
                                <li><a href="javascript:void(0)">Sobre nosotros</a></li>
                                <li><a href="javascript:void(0)">Contacto</a></li>
                                <li><a href="javascript:void(0)">Políticas de privacidad</a></li>

                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
                        <div class="mb-8 footer-link">
                            <h6 class="footer-title">Programador:</h6>
                            <ul>
                                <li><a href="javascript:void(0)">Jesus Rafael Yam Tamayo</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="w-full sm:w-5/12 md:w-1/3 lg:w-1/4">
                        <div class="mb-8 footer-link">
                            <h6 class="footer-title">Diseñadora:</h6>
                            <ul>
                                <li><a href="javascript:void(0)">Fernanda Jacqueline Tzec Quijano</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="w-full sm:w-7/12 md:w-1/2 lg:w-1/3">
                        <div class="mb-8 footer-newsletter">
                            <h6 class="footer-title">Suscribete y recibe notificaciones de nuevas mascotas añadidas:</h6>
                            <div class="newsletter">
                                <form action="#" class="relative mb-4">
                                    <input type="text" placeholder="Your Email" class="w-full py-3 pl-6 pr-12 duration-300 bg-gray-200 border border-gray-200 rounded-full focus:border-blue-600 focus:outline-none">
                                    <button type="submit" class="absolute top-0 right-0 mt-3 mr-6 text-xl text-blue-600">
                                        <i class="lni-angle-double-right"></i>
                                    </button>
                                </form>
                            </div>
                            
                        </div> <!-- footer newsletter -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer widget -->
        
        <div class="bg-blue-900 footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="w-full">
                        <div class="py-6 text-center">
                            <p class="text-white">
                                Programación web 
                                <a class="text-blue-500 duration-300 hover:text-blue-500" rel="nofollow" href="https://tailwindtemplates.co">Tecnológico Nacional De México, Campus Motul</a> 
                            </p>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer copyright -->
    </footer>
  @livewireScripts
  <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
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



    <!--====== BACK TO TOP PART START ======-->

    <a class="back-to-top" href="#"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TO TOP PART ENDS ======-->


    <!--====== jquery js ======-->
    <script src="{{ asset('js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js')}}"></script>

    <!--====== Ajax Contact js ======-->
    <script src="{{ asset('js/ajax-contact.js')}}"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="{{ asset('js/jquery.easing.min.js')}}"></script>
    <script src="{{ asset('js/scrolling-nav.js')}}"></script>

    <!--====== Validator js ======-->
    <script src="{{ asset('js/validator.min.js')}}"></script>

    <!--====== Magnific Popup js ======-->
    <script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>

    <!--====== Slick js ======-->
    <script src="{{ asset('js/slick.min.js')}}"></script>

    <!--====== Main js ======-->
    <script src="{{ asset('js/main.js')}}"></script>
</body>

</html>