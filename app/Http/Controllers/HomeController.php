<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('index')->with('autos',Producto::paginate(12));
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
    public function admin()
    {
        return view('admin.admin')->with('contenido',Producto::paginate(12));
    }
}
