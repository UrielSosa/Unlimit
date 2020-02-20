@extends('layouts.principal')
@section('titulo')
    <title>Editar Producto</title>
@endsection
@section('contenido')
<h3>Editar un producto</h3>

<form class="" action="/producto" enctype="multipart/form-data" method="POST">
    @csrf
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
    <input type="hidden" name="id" value="{{$producto->id}}">
    <label for="Nombre">Nombre</label>
    <input type="text" name="nombre" value="{{$producto->name}}">
    <label for="Precio">Precio</label>
    <input type="number" name="precio" value="{{$producto->price}}">
    <label for="Descripcion">Descripcion</label>
    <input type="text" name="descripcion" value="{{$producto->description}}">
    <label for="Foto">Foto</label>
    <input type="file" name="featured_img" value="{{$producto->featured_img}}">
    <input type="submit" name="enviar" value="Editar">
</form>

@endsection
