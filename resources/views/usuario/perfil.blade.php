@extends('layouts.principal')
@section('titulo')
    <title>Perfil de {{ Auth::user()->first_name}} {{ Auth::user()->last_name}}</title>
@endsection
@section('contenido')

  <div class="container mt-4 register">
      <div class="row">
    		{{-- <div class="col-sm-10"><center><h1>{{ Auth::user()->name }}</h1></div> --}}
      </div>
      <div class="row">
    		<div class="col-sm-3">


        <div class="text-center">
          <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
          <h6>Elegir foto...</h6>
          <input type="file" class="text-center center-block file-upload">
        </div><hr><br>


            {{-- <div class="panel panel-default">
              <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
              <div class="panel-body"><a href="">web del usuario </a></div>
            </div> --}}


            {{-- <ul class="list-group">
              <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
              <li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125</li>
              <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
              <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
              <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li>
            </ul> --}}

            <div class="panel panel-default">
              <div class="panel-heading">Social Media</div>
              <div class="panel-body">
              	<a href="#"><i class="fab fa-facebook fa-2x"></i></a>
                <a href="#"><i class="fab fa-github fa-2x"></i></a>
                <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                <a href="#"><i class="fab fa-pinterest fa-2x"></i></a>
                <a href="#"><i class="fab fa-google-plus fa-2x"></i></a>
              </div>
            </div>

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
                                {{-- <input type="text" class="form-control" name="first_name" placeholder="Nombre"> --}}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                              <label for="last_name"><h4>Apellido:
                                <g>{{ Auth::user()->last_name }}</g>
                              </h4></label>
                                {{-- <input type="text" class="form-control" name="last_name" placeholder="Segundo nombre"> --}}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                               <label for="mobile"><h4>Celular:
                                  <g>{{Auth::user()->number }}</g>
                               </h4></label>
                                {{-- <input type="text" class="form-control" name="celular" placeholder="1145364576"> --}}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                              <label for="email"><h4>Email:
                                <g>{{ Auth::user()->email }}</g>
                              </h4></label>
                                {{-- <input type="email" class="form-control" name="email" placeholder="you@email.com"> --}}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="password"><h4>Cambiar Contraseña</h4></label>
                                <input type="password" class="form-control col-md-5" name="password"  placeholder="Nueva Contraseña">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="password"><h4>Confirmar Contraseña</h4></label>
                                <input type="password" class="form-control col-md-5" name="password"  placeholder="Confirmar nueva Contraseña">
                            </div>
                        </div>
                        <div class="form-group">
                             <div class="col-md-12">
                                  <br>
                                	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Guardar</button>
                                 	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Restaurar</button>
                              </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>

@endsection
