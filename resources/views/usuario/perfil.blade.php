@extends('layouts.principal')
@section('titulo')
    <title>Perfil de {{ Auth::user()->first_name}} {{ Auth::user()->last_name}}</title>
@endsection
@section('contenido')
    <div class="container mt-4 register mb-4">
      <div class="row">
    		{{-- <div class="col-sm-10"><center><h1>{{ Auth::user()->name }}</h1></div> --}}
      </div>
      <div class="row">
    		<div class="col-sm-3">
        <div class="text-center" >
          <img src="{{ url('storage/avatars/'.Auth::user()->avatar ) }}" class="avatar img-circle img-thumbnail" alt="avatar" style="min-width: 220px; min-height: 200px;">
          <h6>Elegir foto...</h6>
          <input type="file" class="text-center center-block file-upload">
        </div>
        <hr>
        <br>
          </div>
      	<div class="col-sm-9">
            <div class="tab-content">
              <div class="tab-pane active">
                  <hr>
                  <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                      @csrf
                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="first_name text-center"><h4>Nombre:
                                    <g>{{ Auth::user()->first_name }}</g>
                                </h4></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                              <label for="last_name"><h4>Apellido:
                                <g>{{ Auth::user()->last_name }}</g>
                              </h4></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                              <label for="email"><h4>Email:
                                <g>{{ Auth::user()->email }}</g>
                              </h4></label>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>

@endsection
