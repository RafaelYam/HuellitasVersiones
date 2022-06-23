
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro</title>
        <link rel="stylesheet" href="{{asset('css/login.css') }}">
    </head>

    <body>

        <h2>Huellitas: Veterinario en casa</h2>
        <div class="container" id="container">
            <div class="form-container sign-up-container">
            <form method="POST" action="{{ route('register') }}">
            @csrf
                    <h1>Registrate con:</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span>O usa tu correo electrónico</span>
                    <input type="text" placeholder="Nombre" name="name" :value="old('name')" required autofocus />
                    <input type="email" placeholder="Email" name="email" :value="old('email')" required />
                    <input type="password" placeholder="Contraseña" name="password" required autocomplete="new-password" />
                    <input type="password" placeholder="Confirmar contraseña" name="password_confirmation" required  />
                    <button>{{ __('Registrarse') }}</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form method="POST" action="{{ route('login') }}">
                @csrf
                    <h1>Inicia sesión con:</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span>O usa tu correo electrónico</span>
                    <input type="email" placeholder="Email" name="email" :value="old('email')" required autofocus />
                    <input type="password" placeholder="Password" name="password" required autocomplete="current-password" />
                    <a href="#">¿Olvidaste tu contraseña?</a>
                    <button>
                        {{ __('Iniciar sesión') }}
                    </button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
}
                    <div class="overlay-panel overlay-right">
                        <h1>Bienvenido de vuelta!!</h1>
                        <p>Para mantenerte en contacto con nosotros, entra con tu información personal</p>
                       
                        <button class="ghost" id="signUp">Registrarse</button>
                    </div>
                </div>
            </div>
        </div>

      
<form action="{{route('mascota.store')}}" method="POST">
    @csrf

    <div class="input-field col s12">
        <select name="">
            <option value="" disabled selected>Seleccionar</option>
            @foreach ($animal as $animalc)
            <option value="{{$animalc->tipo}}">{{$animalc->tipo}}</option>
            @endforeach
        </select>
        <label>¿Qué mascota tienes?</label>
    </div>

    <!-- Nombre -->
    <label for="Name">Nombre de la mascota</label>
    <input id="name" name="nombre" type="text">

    <!-- Raza -->
    <div class="input-field col s12">
        <select name="raza">
            <option value="" disabled selected>Seleccionar</option>
            @foreach ($animal2 as $animald)
            <option value="{{$animald->id}}">{{$animald->raza}}</option>
            @endforeach
        </select>
        <label>¿Qué mascota tienes?</label>
    </div>

    <!-- Edad -->
    <div class="input-field col s12">
        <select name="edad">
            <option value="" disabled selected>Seleccionar</option>
            <option value="0 - 3 meses">0 - 3 meses</option>
            <option value="4 - 6 meses">4 - 6 meses</option>
            <option value="7 - 9 meses">7 - 9 meses</option>
            <option value="1 año o más">1 año o más</option>
        </select>
        <label>Edad de la mascota</label>
    </div>

    <!-- Sexo -->
    <div class="input-field col s12">
        <select name="sexo">
            <option value="" disabled selected>Seleccionar</option>
            <option value="Macho">Macho</option>
            <option value="Hembra">Hembra</option>
    
        </select>
        <label>Sexo de la mascota</label>
    </div>

    <button class="waves-effect waves-light small btn" type="submit">Enviar Datos</button>
</form>
<script>
    $(document).ready(function() {
        $('select').formSelect();
    });
</script>


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