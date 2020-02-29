<header class="container-fluid u_bg-azul" id="header">
    <div class="navbar">
      <a class="navbar-brand text-white ml-3 title"  href="{{ url('/') }}">
         Unlimit
      </a>
      @if (Auth::user())
      <nav class="nav ml-auto col-8">
        <ul class="nav d-flex col-12">
          <div class="page">
            <div class="page__demo">
              <label class="field a-field a-field_a1 page__field">
                <form action="/buscar" id="search" method="post">
                  @csrf
                  <input class="field__input a-field__input" id="inputB" placeholder="¿Que deseas buscar?" name="buscado">
                </form>
                  <span class="a-field__label-wrap" id="buscar">
                    <span class="a-field__label">Buscador</span>
                  </span>
              </label>
            </div>
          </div>
        </ul>
      </nav>
      <script>
        var inp = this.document.getElementById('inputB');
        var buscar = this.document.getElementById('buscar');
        inp.addEventListener('click', function(){
          buscar.style.display = 'none';
        })
      </script>
      @endif
      <nav class="nav m-0">
        @guest
          <div class="nav-item m-0">
            <a class="nav-link active" href="{{ route('login') }}"><h6>{{ __('Iniciar Sesion') }}</h6><i class="fas fa-sign-in-alt"></i></a>
          </div>
          @if (Route::has('register'))
            <div class="nav-item">
              <a class="nav-link active" href="{{ route('register') }}"><h6>{{ __('Registrate') }}</h6><i class="fas fa-money-check"></i></a>
            </div>
          @endif
          @else
            <div class="custom-control custom-switch mt-4 mr-2 ml-2">
              <input type="checkbox" class="custom-control-input" id="cambiarFondo">
              <i class="fas fa-moon mr-5"></i>
              <label class="custom-control-label" for="cambiarFondo">
                <i class="fas fa-cloud ml-1"></i>
              </label>
            </div>

            <div class="nav-item dropdown m-0">

              <a class="nav-link active dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <h6>{{ Auth::user()->first_name }} {{ Auth::user()->last_name}}</h6>
                <i class="fas fa-users-cog"></i>
                <span class="caret"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/perfil"> Perfil</a>
                <hr>
                @if(Auth::user()->rol === 9)
                  <a class="dropdown-item" href="/admin">Panel de admin</a>
                  <hr>
                  <a class="dropdown-item" href="/producto/agregar">Agregar producto</a>
                  <hr>
                  @endif
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Cerrar sesion') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </div>
          </nav>

          <nav class="nav m-0">
            <div class="nav-item m-0">
              <a href="/" class="nav-link active">
                <h6>Inicio</h6>
                <i class="fas fa-home"></i>
              </a>
            </div>

            <div class="nav-item m-0">
              <a href="/carrito" class="nav-link active">
                <h6>carrito</h6>
                <i class="fas fa-cart-plus"></i>
              </a>
            </div>

            <div class="nav-item m-0"
            ><a href="/preguntas" class="nav-link active">
              <h6>preguntas</h6>
              <i class="fas fa-question"></i>
            </a>
          </div>
        </nav>
        @endguest
      </nav>
    </div>

  </header>
