@extends('layouts.principal')
@section('titulo')
    <title>Registrarse</title>
@endsection
@section('contenido')
</div>
  <section class="cajadelogin" id="@php
   $id=chr(rand(ord("w"), ord("z")));
   echo $id;
  @endphp" >
<div class="container">
    <div class="row justify-content-center" id="divregister">
        <div class="col-md-8 mb-2">
            <div class="card register mt-3">
                <div class="card-header m-0 text-center text-white">{{ __('Registrate') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                          <div class="row">
                            <div class="form-group col-md-5 ">
                              <label for="first_name" class="col-form-label text-md-right">{{ __('Nombre') }}</label>

                              <div class="">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                                  <p class="invalid-feedback" id="errorNom"></p>

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                            </div>

                            <div class="form-group col-md-5">
                              <label for="last_name" class="">{{ __('Apellido') }}</label>

                              <div class="">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
                                  <p class="invalid-feedback" id="errorApe"></p>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                            </div>

                        <div class="form-group col-md-5">
                            <label for="email" class="col-form-label">{{ __('Ingresar E-Mail') }}</label>

                            <div class="">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                  <p class="invalid-feedback" id="errorEmail"></p>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-md-5">
                            <label for="password" class="col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                  <p class="invalid-feedback" id="errorPass"></p>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-md-5">
                            <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>

                            <div class="">
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                              <p class="invalid-feedback" id="errorConfPass"></p>
                            </div>
                        </div>

                        {{-- <div class="form-group col-md-5">
                          <div >
                            <label for="number">Numero de celular</label>

                            <input type="text" class="form-control" placeholder="+11-123456789" name="number" value="{{old('number')}}">
                          </div>
                                @error('number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}

                        <div class="form-group col-md-5">
                          <div class="form-group">
                            <label for="pais">¿De donde eres?</label>
                            <select id="pais" class="form-control" name="pais" required>
                            </select>
                            <br>
                            <div id="muncip">
                            </div>
                          </div>
                        </div>



                        {{-- <div class="form-group col-md-5">
                          <div class="form-group"><p>¿Fecha de nacimiento?</p>
                            <input type="date" class="form-control" name="fecha_nac" step="1" min="1980-01-01" max="2019-12-31" value="{{old('fecha_nac')}}" required>
                          </div>
                             @error('fecha_nac')
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                       </div>

                                <div class="form-group col-md-5">
                                  <div class="form-group">
                                    <label for="lugar">Sexo</label>
                                    <select class="form-control" name="sexo" value="{{old('sexo')}}" required>
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

                                <div class="form-group col-md-7">
                                      <div class="form-group">
                                        <label for="avatar"> Ingresar foto </label>
                                        <input name="avatar" type="file" class="form-control" id="avatar" value="" required>
                                      </div>
                                        @error('sexo')
                                          <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                          </span>
                                        @enderror
                                </div> --}}

                                <div class="form-group col-md-7">
                                    <div class="">
                                        <center>
                                      <button type="submit" class="btn btn-primary">
                                          {{ __('Registrarse') }}
                                      </button>
                                    </div>
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

<style>
#header{
  height: 14vh;
}

</style>

<script src="/js/register.js" charset="utf-8"></script>
@endsection
