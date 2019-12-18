@extends('layouts.principal')
@section('titulo')
    <title>Detalle Producto</title>
@endsection
@section('contenido')

  {{-- <div class="card text-white bg-secondary prodcard mt-3 mb-3" style="max-width: 18rem;">
    <div class="card-header">Nombre del Producto:</div>
    <p>{{$producto->name}}</p>
    <div class="card-img-top">
      <img src="{{ Storage::url('img/productos/'. $producto->featured_img )}}" alt="foto producto">
    </div>
    <div class="card-body">
      <p> $ {{$producto->price}}</p>
      <p>{{$producto->description}}</p>
    </div>
  </div> --}}

  {{-- Nuevo --}}

  <div class="card text-white bg-secondary prodcard mt-3 mb-3" style="max-width: 1740px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="{{ Storage::url('img/productos/'. $producto->featured_img )}}" class="card-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <hr>
          <p style="max-width: 1740px;">{{$producto->description}}</p>
          <hr>
          <p class="card-text"> $ {{$producto->price}}</p>
        </div>
      </div>
    </div>
  </div>

@endsection
