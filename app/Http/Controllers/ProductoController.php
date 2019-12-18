<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producs = Producto::paginate(12);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function listado()
    {
        $productos = Producto::all();
        return view('productos', compact('productos'));
    }
    public function agregar(Request $datos) {
      //validaciones de los datos del formulario de agregar productos
      $validaciones = [
        'nombre' => 'required|max:100',
        'precio' => 'required|integer',
        'descripcion' => 'max:150',
        // 'featured_img' => 'required|file|image',
      ];
      // $mensajes = [];
        $this->validate($datos, $validaciones);

        $ruta = $datos->file('featured_img')->store('public');
        $imagen = basename($ruta);
        $productoNuevo = new Producto();
        $productoNuevo->name = $datos['nombre'];
        $productoNuevo->price = $datos['precio'];
        $productoNuevo->description = $datos['descripcion'];
        $productoNuevo->user_id = $datos['user_id'];
        $productoNuevo->featured_img = $imagen;

        $productoNuevo->save();

        return redirect('/home');

    }

    public function detalle($id){
      $producto = Producto::find($id);
      return view('detalleProducto', compact('producto'));
    }

    public function editar($id){
      $producto = Producto::find($id);
      return view('admin.editarProducto', compact('producto'));
    }

    public function actualizar(Request $datos){
      $validaciones = [
        'id' => 'required',
        'nombre' => 'required|max:100',
        'precio' => 'required|integer',
        'descripcion' => 'max:150',
        // 'foto' => 'required|file|image';
      ];
      // $mensajes = [];
        $this->validate($datos, $validaciones);

        $ruta = $datos->file('foto')->store('public');
        $imagen = basename($ruta);

        $productoEditado = Producto::find($datos["id"]);
        $productoEditado->name = $datos['nombre'];
        $productoEditado->price = $datos['precio'];
        $productoEditado->description = $datos['descripcion'];
        $productoEditado->avatar = $imagen;

        $productoEditado->save();

        return redirect('/productos');
    }


    public function show(Producto $id){
        return view('productos.detalle')->with('producto',$id);
    }


     public function search(Request $request)
    {
        //
        if($request->has('buscar')){
            $products = Producto::where('name','LIKE','%' . $request->get('buscar') . '%')->paginate(8);
        }else{
            $producs = Producto::paginate(8);
        }
        $products->appends($request->only('buscar'));
        return view('index')->with('productos',$products);
    }

    public function store(Request $request)
       {
           //
       }


    public function edit(Producto $producto)
    {
        //
    }


    public function update(Request $request, Producto $producto)
    {
        //
    }


    public function destroy(Producto $producto)
    {
        //
    }
}
