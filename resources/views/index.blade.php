@extends('layouts.principal')
@section('script')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{asset('js/master.js')}}"></script>
@endsection
@section('titulo')
    <title>Bienvenido {{ Auth::user()->first_name ?? ""}}</title>
@endsection
@section('contenido')

  <h2><button type="" id="button">sweet</button></h2>
<div class="row d-flex justify-content-around h-100">
  @foreach ($productos ?? '' as $producto)
  <div class=" col-12 col-md-3 p-0 m-2 h-100">
    <div class="card prodcard h-100">
      <h5 class="card-title m-0 p-0 pb-3 pt-3 text-center">{{$producto->name}}</h5>
      <div class="card-body">
        {{-- <img src="{{ url('storage/img/productos/'.$producto->featured_img) }}" class="card-img-top" alt="imagen"> --}}
        <img src="/images/home/erizo.jpg" class="card-img-top" alt="imagen">
        <h3 class="pt-1">$ {{ $producto->price}}</h3>
        <p class="card-text">{{$producto->description}}</p>
        <div class="row">
          <a href="/producto/{{$producto->id}}" class="btn btn-outline-success relative-bottom mr-1"> Ver detalle <i class="search fas fa-search-plus"></i></a>
                <form class="addCart mr-0" action="" method="">
                  @csrf
                  <input type="hidden" name="product_id" value="{{ $producto->id }}">
                  <button type="submit" class="btn btn-outline-success relative-bottom" onclick="swal('hello world')">Add cart<i class="carrito fas fa-cart-plus"></i></button>
                </form>
        </div>
      </div>
    </div>
  </div>
@endforeach
  
</div>
  <div class="mx-auto" style="width: 200px;">
    {{ $productos->links()}}
  </div>
@endsection
