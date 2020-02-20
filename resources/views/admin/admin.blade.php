@extends('layouts.principal')
@section('titulo')
    <title>Bienvenido administradoruno</title>
@endsection
@section('contenido')
  <div class="col-12 row text-white mt-2">
      <div class="col-4">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-center ">
                <a href=""><li class="breadcrumb-item active" id="usuarios">Administrar Usuarios</li></a>
            </ol>
            <ol class="breadcrumb text-center">
                <a href=""><li class="breadcrumb-item active" id="categorias">Administrar Categorias</li></a>
            </ol>
            <ol class="breadcrumb text-center">
                <a href=""><li class="breadcrumb-item active" id="productos">Administrar Productos</li></a>
            </ol>
              {{-- <ol class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page"><a href="/agregarProducto" class="">Agregar</a></li>
              </ol> --}}
          </nav>
      </div>
      <div class="col-8 text-white mt-2
      mb-2 ">
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
                  @forelse ($contenido ?? '' as $con)
                      <tr>
                            {{-- {{dd($con)}} --}}
                            <td class="text-center">{{$con->id}}</td>
                            <td class="pl-5"><div class="pr-2 text-center">{{$con->name}}</div> <div class="text-center"><a href="/producto/{{$con->id}}"><img src="{{ Storage::url('img/productos/'. $con->featured_img )}}" width="80px" height="80px" alt="..."></a></div></td>
                            <td class="text-center my-auto"><a class="btn btn-info" href="/producto/{{$con->id}}"><ion-icon name="search"></ion-icon></a></td>
                            <td class="text-center"><a class="btn btn-info" href="/producto/edit/{{$con->id}}"><ion-icon name="brush"></ion-icon></a></td>
                            <td class="text-center">
                                <form action="/producto/delete" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{$con->id}}">
                                    <button class="btn btn-info" type="submit"><ion-icon name="trash"></ion-icon></button>
                                </form>
                            </td>
                            {{-- <td class="text-center"><a href=""><ion-icon name="add"></ion-icon></a></td> --}}
                          </tr>
                  @empty
                        <div class="text-center bg-dark h4 p-2">Esta categoria no tiene ningun producto asociado</div>
                  @endforelse
                      </tbody>
                  </table>
      </div>
  </div>

@endsection
