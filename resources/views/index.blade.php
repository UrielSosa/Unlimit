@extends('layouts.principal')
@section('titulo')
    <title>Bienvenido {{ Auth::user()->first_name}}</title>
@endsection
@section('contenido')
<div class="cajadefondo" id="bodybg">
  <div class="card-group ">
      <div class="row d-flex justify-content-around" id="productos">
        @foreach ($autos ?? '' as $auto)
          <div class="card col-12 col-md-3 p-0 m-2 prodcard">
          <img src="{{ Storage::url('img/productos/'. $auto->featured_img )}}" class="card-img-top" alt="imagen">
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
</div>
@endsection
