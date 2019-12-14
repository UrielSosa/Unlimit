@extends('layouts.principal')
@section('titulo')
    <title>Carrito de {{ Auth::user()->first_name}}</title>
@endsection
@section('contenido')
  <h3 style="margin-bottom:20vh;" class="text-center mt-3">PROXIMAMENTE</h3>

  <style>
  footer{
  margin-top: 33vh;}
  </style>
@endsection
