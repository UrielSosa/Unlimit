<?php

namespace App\Http\Controllers;

use App\Carrito;
use App\Producto;

use Illuminate\Http\Request;

class CarritoController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Carrito $carrito)
    {
        return view('usuario.carrito', ['orders'=> Producto::all()]);
    }

    public function edit(Carrito $carrito)
    {
        //
    }

    public function update(Request $request, Carrito $carrito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carrito $carrito)
    {
        //
    }
}
