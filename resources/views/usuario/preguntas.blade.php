@extends('layouts.principal')
@section('titulo')
    <title>Alguna duda {{ Auth::user()->first_name}}</title>
@endsection
@section('contenido')
  <h2 class="text-center">Preguntas Frecuentes</h2>
  <div class="container-fluid form-inline ">
    <br>
    <div class="dropdown">
      <button class="btn btn-info dropdown-toggle mt-4 pr-5 pl-5" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        Medios de pago
        <samp class="caret"></samp>
      </button>
      <ul class="dropdown-content mio ml-2" aria-labelledby="dropdownMenu1">
        <li role="presentation"><a role="item" href="#">¿Qué tipos de tarjetas aceptan?</a></li>
        <li role="presentation"><a role="item" href="#">¿Sólo utilizan tarjetas?</a></li>
        <li role="presentation"><a role="item" href="#">¿Utilizan crédito/débito?</a></li>
        <li role="presentation"><a role="item" href="#">¿Utilizan otros medios de pago?</a></li>
      </ul>
    </div>
    <br>
    <div class="dropdown ">
      <button class="btn btn-info dropdown-toggle mt-4 pr-5 pl-5" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        Entregas
        <samp class="caret"></samp>
      </button>
      <ul class="dropdown-content mio " aria-labelledby="dropdownMenu2">
        <li role="presentation"><a role="item" href="#">¿Hacen envios a todo el pais?</a></li>
        <li role="presentation"><a role="item" href="#">¿Cuánto tiempo tardan en llegar los envios?</a></li>
        <li role="presentation"><a role="item" href="#">¿Qué sucede si no llega mi compra?</a></li>
        <li role="presentation"><a role="item" href="#">¿Puedo ir a retirar yo el producto?</a></li>
      </ul>
    </div>
    <br>
    <div class="dropdown">
      <button class="btn btn-info dropdown-toggle mt-4 pr-5 pl-5" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        Proveedores
        <samp class="caret"></samp>
      </button>
      <ul class="dropdown-content mio " aria-labelledby="dropdownMenu3">
        <li role="presentation"><a role="item" href="#">¿Qué tipos de Proveedores poseen? </a></li>
        <li role="presentation"><a role="item" href="#">¿Son legítimos? </a></li>
        <li role="presentation"><a role="item" href="#">¿Cuáles son  los compromisos a cumplir con los proveedores?</a></li>
      </ul>
    </div>
  </div>
  {{-- PARA QUE SE VEA BIEN EL FOOTER EN FAQ --}}
  <style>
  footer{
  margin-top: 31vh;
}
  </style>

@endsection
