@extends('layouts.principal')
@section('titulo')
    <title>Bienvenido {{ Auth::user()->first_name}}</title>
@endsection
@section('contenido')
{{-- {{dd($autos ?? '')}} --}}
  <div class="card-group ">
      <div class="row d-flex justify-content-around">
        @foreach ($autos ?? '' as $auto)
          <div class="card index col-12 col-md-3 p-0 m-2">
          <img src="{{ Storage::url('img/productos/'. $auto->featured_img )}}" class="card-img-top" alt="...">
            {{-- <img src="/img/productos/{{$auto->featured_img}}" class="card-img-top" alt="..."> --}}
            <div class="card-body">
              <div class="position-absolut">
              <a href="/detalleProducto/{{$auto->id}}" class="btn btn-outline-success relative-bottom"> Ver detalle <i class="carrito fas fa-cart-plus"></i></a>
            </div>
          </div>
        </div>
      @endforeach
      </div>
    </div>
  <div class="mx-auto" style="width: 200px;">
    {{ $autos->links()}}
  </div>

@endsection
