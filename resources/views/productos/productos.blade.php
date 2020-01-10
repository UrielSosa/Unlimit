@extends('layouts.principal')

@section('contenido')
    <h3>Tus productos</h3>
    <ul>
      @foreach ($productos as $producto)
        <li>{{$producto->name}}</li>
        <p> <a href="/producto({{$producto->id}})"> Ver detalle</a> </p>
      @endforeach
    </ul>
@endsection
