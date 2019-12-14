@extends('layouts.principal')
@section('titulo')
    <title>Agregar Producto</title>
@endsection
@section('contenido')
  <center>
<div class="list-group row mb-3 mt-3 card rounded-top" style="width: 18rem;">
  <h3 class="text-center card-header text-body">Agregar un producto</h3>

  <form class="" action="/agregarProducto" method="post" enctype="multipart/form-data">
    @csrf
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>

    <div class="list-group-item active rounded-top col-md-10">
      <label class="text-center" for="Nombre">Nombre</label><br>
      <input type="text" name="nombre" value="{{old('nombre')}}">
    </div>

    <div class="list-group-item col-md-10">
      <label for="Precio" class="text-center">Precio</label><br>
      <input type="number" name="precio" value="{{old('precio')}}">
    </div>

    <div class="list-group-item col-md-10">
      <label for="Descripcion" class="text-center">Descripcion</label><br>
      <input type="text" name="descripcion" value="{{old('descripcion')}}">
    </div>

    <div class="list-group-item col-md-10">
      <label for="Foto" class="text-center">Foto</label> <br>
      <input type="file" name="featured_img" value="">
    </div>

    <div class="list-group-item col-md-10 mb-2">
      <input class="btn btn-success" type="submit" name="enviar" value="Agregar">
    </div>

  </form>
</div>

@endsection
