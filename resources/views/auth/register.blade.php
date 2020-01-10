@extends('layouts.principal')
@section('script')
    <script src="/js/register.js" charset="utf-8"></script>
@endsection
@section('titulo')
    <title>Registrarse</title>
@endsection
@section('contenido')
</div>
</div>
  <section class="cajadeRegister" id="{{chr(rand(ord("a"), ord("g")))}}">
    <div class="container">
      <div class="row justify-content-center mx-auto" id="divregister">
        <div class="col-md-8 mb-2">
          <div class="card register mt-3">
            <div class="card-header m-0 text-center text-white">{{ __('Registrate') }}</div>
            <div class="card-body text-white">
              <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                <div class="row mx-auto">
                  
                      <div class="form-group col-md-5 ">
                        <div class="">
                          <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" autocomplete="first_name" placeholder="Nombre" autofocus>
                          <p class="invalid-feedback" id="errorNom"></p>
                          @error('first_name')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                      </div>

                        <div class="form-group col-md-5">
                          <div class="">
                            <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" autocomplete="last_name" placeholder="Apellido" autofocus>
                            <p class="invalid-feedback" id="errorApe"></p>
                              @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                          </div>
                        </div>

                        <div class="form-group col-md-5">
                          <div class="">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="Ingresar E-mail">
                            <p class="invalid-feedback" id="errorEmail"></p>
                            @error('email')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                          </div>
                        </div>

                        <div class="form-group col-md-5">
                          <div class="">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="Contraseña">
                            <p class="invalid-feedback" id="errorPass"></p>
                            @error('password')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                            @enderror                  
                          </div>
                        </div>

                        <div class="form-group col-md-5">
                          <div class="">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" placeholder="Confirmar Contraseña">
                            <p class="invalid-feedback" id="errorConfPass"></p>
                          </div>
                        </div>

                        <div class="form-group col-md-5">
                          <div class="">
                            <input type="text" class="form-control" placeholder="+11-123456789" name="number" value="{{old('number')}}" placeholder="Teléfono">
                            <p class="invalid-feedback" id="errorConfPass"></p>
                            @error('number')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                          </div>
                        </div>

                        <div class="form-group col-md-5">
                          <div class="form-group">
                            <label for="pais">¿De donde eres?</label>
                            <select id="pais" class="form-control" name="pais"></select><br>
                            <div id="muncip"></div>
                          </div>
                        </div> 

                        <div class="form-group col-md-5">
                          <div class="form-group"><p>¿Fecha de nacimiento?</p>
                            <input type="date" class="form-control" name="fecha_nac" step="1" min="1980-01-01" max="2019-12-31" value="{{old('fecha_nac')}}">
                            @error('fecha_nac')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                          </div>
                        </div>

                        <div class="form-group col-md-5">
                          <div class="form-group">
                            <label for="lugar">Sexo</label>
                              <select class="form-control" name="sexo" id="sexo" value="{{old('sexo')}}">
                                <option >Mujer</option>
                                <option>Hombre</option>
                                <option>Otro</option>
                              </select>
                          </div>
                          @error('sexo')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>

                        <div class="form-group col-md-5">
                          <div class="form-group">
                            <label for="avatar"> Ingresar foto </label>
                            <input name="avatar" type="file" class="form-control" id="avatar" value="">
                          </div>
                          @error('avatar')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div> 

                        <div class="form-group col-md-7">
                          <div class="text-center">
                            <button type="submit" class="btn btn-primary">
                              {{ __('Registrarse') }}
                            </button>
                          </div>
                        </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection 
