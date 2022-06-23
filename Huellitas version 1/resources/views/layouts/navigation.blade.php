
<nav class="green lighten-1">
  <div class="nav-wrapper ">
    <a href="{{url('/dashboard')}}" class="brand-logo">Inicio</a>
    <ul class="right hide-on-med-and-down">
        
      
      <li><a class="dropdown-trigger" href="{{route('perfil')}}" data-target="dropdown1">{{ Auth::user()->name }} </a></li>
      <li class="col s12 m2"><a href="#">
        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Cerrar Sesion') }}
                            </x-dropdown-link>
                        </form>
        </a></li>
    </ul>
  </div>
</nav>

