@extends('layouts.principal')
@section('titulo')
    <title>Editar Producto</title>
@endsection
@section('contenido')
<center>
<div class="list-group row mb-3 mt-3 rounded-top card border-secondary text-secondary index " style="width: 50rem;">
  <h3 class="text-center card-header text-body "> Editar producto</h3>

<form class="" action="/producto" enctype="multipart/form-data" method="POST">
    @csrf
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
    <input type="hidden" name="id" value="{{$producto->id}}">
    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
    <div class="list-group-item rounded-top col-md-10">
      <label for="Nombre">Nombre</label>
      <input type="text" name="nombre" value="{{$producto->name}}">
    </div>
    <div class="list-group-item rounded-top col-md-10">
      <label for="Precio">Precio</label>
      <input type="number" name="precio" value="{{$producto->price}}">
    </div>
    <div class="list-group-item rounded-top col-md-10">
      <label for="Descripcion">Descripcion</label>
      <input type="text" name="descripcion" value="{{$producto->description}}">
    </div>
    <div class="list-group-item rounded-top col-md-10">
      <label for="Foto">Foto</label>
      <input type="file" name="featured_img" value="{{$producto->featured_img}}">
    </div>
    
    <div class="list-group-item col-md-10 mb-4">
      <input class="btn btn-success" type="submit" name="enviar" value="Editar">
    </div>
  </form>
</div>
</center>
@endsection
