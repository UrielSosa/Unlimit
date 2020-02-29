<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Category;

class HomeController extends Controller
{
    public function index()
    {
        return view('index')->with('productos',Producto::paginate(12));
    }
    public function carrito()
    {
        return view('usuario/carrito');
    }
    public function perfil()
    {
        return view('usuario/perfil');
    }
    public function preguntas()
    {
        return view('usuario/preguntas');
    }
}
