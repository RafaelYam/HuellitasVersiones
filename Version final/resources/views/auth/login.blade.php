<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="{{asset('css/login.css') }}">
    <link rel="icon" type="image/x-icon" href="https://i.ibb.co/8XwgtHC/58aeffe0c869e092af51ee77.png">




</head>

<body>




    <h2 class="titulo">Huellitas: Veterinario en casa</h2>
    <div class="container" id="container">
        <div class="form-container sign-up-container">

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h1>Regístrate:</h1>

                <span>Rellena el formulario con tus datos personales</span>
                <br>
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <x-input placeholder="Nombre" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                <x-input id="email" placeholder="Correo" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                <input type="password" placeholder="Contraseña" name="password" required autocomplete="new-password" />
                <input type="password" placeholder="Confirmar contraseña" name="password_confirmation" required />
                <button>{{ __('Registrarse') }}</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h1>Ingresar con tu correo:</h1>

                <span>O usa tu correo electrónico</span>
                <br>
                <x-auth-validation-errors  class="mb-4" :errors="$errors" />
                <x-input id="email" placeholder="Correo" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                <input type="password" placeholder="Contraseña" name="password" required autocomplete="current-password" />

                <button>
                    {{ __('Iniciar sesión') }}
                </button>
            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Hola, amigo!</h1>
                    <p>Ingresa tus datos personales y comienza tu aprendizaje con nosotros</p>
                    <br>
                    <p>Si ya estás registrado, inicia sesión</p>
                    <button class="ghost" id="signIn">Iniciar Seseión</button>
                    <div>
                        <br>
                        <button class="ghost"><a href="{{route('welcome')}}">Volver al Inicio</a></button>
                    </div>
                </div>
                <div class="overlay-panel overlay-right">

                    <h1>Bienvenido de vuelta!!</h1>
                    <p>Para mantenerte en contacto con nosotros, entra con tu información personal</p>
                    <br>
                    <p>Si no tienes una cuenta, regístrate</p>
                    <button class="ghost" id="signUp">Registrarse</button>
                    <div>
                        <br>
                        <button class="ghost"><a href="{{route('welcome')}}">Volver al Inicio</a></button>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <footer>
        <p>
            Creado por
            <a target="_blank" href="https://florin-pop.com">Rafael Yam Tamayo</a> y <a target="_blank" href="https://florin-pop.com">Fernanda Tzec Quijano</a>
            Proyecto final para la asignatura Programación Web.
        </p>
    </footer>
    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });
    </script>
</body>

</html>