@extends('layouts.principal')
@section('script')
  <script src="/js/addCart.js" charset="utf-8"></script>
@endsection
@section('titulo')
    <title>Bienvenido {{ Auth::user()->first_name}}</title>
@endsection
@section('contenido')

<div class="row d-flex justify-content-around h-100">
  @foreach ($autos ?? '' as $producto)
  <div class=" col-12 col-md-3 p-0 m-2 h-100 ">
    <div class="card prodcard h-100">
      <div class="card-body">
        <img src="{{ url('storage/img/productos/'.$producto->featured_img)}}" class="card-img-top" alt="imagen">
        <h5 class="card-title m-0 p-0 pb-3 pt-5">{{$producto->name}}</h5>
        <p class="card-text">{{$producto->description}}</p>
        <div class="row">
          <a href="/producto/{{$producto->id}}" class="btn btn-outline-success relative-bottom mr-1"> Ver detalle <i class="search fas fa-search-plus"></i></a>
                <form class="addCart" action="" method="">
                  @csrf
                  <input type="hidden" name="product_id" value="{{ $producto->id }}">
                  <button type="submit" class="btn btn-outline-success relative-bottom">Add cart<i class="carrito fas fa-cart-plus"></i></button>
                </form>
        </div>
      </div>
    </div>
  </div>
    @endforeach
  
</div>

{{-- <div class="card-deck">
  @foreach ($autos ?? '' as $producto)
    <div class="card">
      <img class="card-img-top" src="{{ url('storage/img/productos/'.$producto->featured_img)}}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">{{$producto->name}}</h5>
        <p class="card-text">{{$producto->description}}</p>
        <p class="card-text"><small class="text-muted">
          <div class="row">
            <a href="/producto/{{$producto->id}}" class="btn btn-outline-success relative-bottom mr-1"> Ver detalle <i class="search fas fa-search-plus"></i></a>
                  <form class="addCart" action="" method="">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $producto->id }}">
                    <button type="submit" class="btn btn-outline-success relative-bottom">Add cart<i class="carrito fas fa-cart-plus"></i></button>
                  </form>
          </div></small></p>
      </div>
    </div>
  @endforeach
</div> --}}
    

  {{-- <div class="card-group ">
      <div class="row d-flex justify-content-around hover">
        @foreach ($autos ?? '' as $auto)
        
          <div class="card col-12 col-md-3 p-0 m-2 prodcard">
          <img src="{{ url('storage/img/productos/'.$auto->featured_img)}}" class="card-img-top" alt="imagen">

            <div class="card-body row m-0 p-0 pb-3 pt-3">
              <h5 class="col-12 mb-2 text-center">{{$auto->name}} </h5>  
              <a href="/producto/{{$auto->id}}" class="btn btn-outline-success relative-bottom mr-1"> Ver detalle <i class="search fas fa-search-plus"></i></a>
              <form class="addCart" action="" method="">
                @csrf
                <input type="hidden" name="product_id" value="{{ $auto->id }}">
                <button type="submit" class="btn btn-outline-success relative-bottom">Add cart<i class="carrito fas fa-cart-plus"></i></button>
              </form>
          </div>
        </div>
      @endforeach
      </div>
    </div> --}}
  <div class="mx-auto" style="width: 200px;">
    {{ $autos->links()}}
  </div>
@endsection
