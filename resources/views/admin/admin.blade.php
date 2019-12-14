@extends('layouts.principal')
@section('titulo')
    <title>admin</title>
@endsection
@section('contenido')
  <div class="col-12 row text-white mt-2">
      <div class="col-4">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page"><a href="" class="">listado</a></li>
              </ol>
              {{-- <ol class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page"><a href="/agregarProducto" class="">Agregar</a></li>
              </ol> --}}
          </nav>
      </div>
      <div class="col-8 text-white">
          <table class="table table-dark m-0">
              <thead>
                  <tr>
                      <th scope="col" class="text-center">ID</th>
                      <th scope="col" class="text-center">NOMBRE DE LA PRODUCTO</th>
                      <th scope="col" class="text-center">VER DETALLE</th>
                      <th scope="col" class="text-center">EDITAR PRODUCTO</th>
                      <th scope="col" class="text-center">BORRAR PRODUCTO</th>
                      {{-- <th><a href="" class="text-white">AGREGA <ion-icon name="add"></ion-icon></a></td></th> --}}
                  </tr>
              </thead>
              <tbody>
                  @foreach ($contenido ?? '' as $con)
                          <tr>
                            {{-- {{dd($con)}} --}}
                            <td class="text-center">{{$con->id}}</td>
                            <td class="pl-5">{{$con->name}}</td>
                            <td class="text-center"><a href="/detalleProducto/{{$con->id}}"><ion-icon name="search"></ion-icon></a></td>
                            <td class="text-center"><a href="/agregarProducto"><ion-icon name="brush"></ion-icon></a></td>
                            <td class="text-center"><a href=""><ion-icon name="trash"></ion-icon></a></td>
                            {{-- <td class="text-center"><a href=""><ion-icon name="add"></ion-icon></a></td> --}}
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
      </div>
  </div>
@endsection
