@extends('layouts.principal')
@section('titulo')
    <title>Detalle Producto</title>
@endsection
@section('contenido')
  <<div class="card text-white bg-secondary  mt-3" style="max-width: 18rem;">
    <div class="card-header">Nombre del Producto:</div>
    <p>{{$producto->name}}</p>
    <div class="card-img-top">
      <img src="{{ Storage::url('img/productos/'. $producto->featured_img )}}" alt="foto producto">
    </div>
    <div class="card-body">
      <p> $ {{$producto->price}}</p>
      <p>{{$producto->description}}</p>
    </div>
  </div>

@endsection
