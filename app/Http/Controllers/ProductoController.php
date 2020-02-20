<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Category;
use App\User;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $producs = Producto::paginate(12);
    }

    public function detalle(Producto $id){
      return view('productos.detalle', ['producto'=> $id]);
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

        $ruta = $datos->file('featured_img')->store('public/img/productos');
        $imagen = basename($ruta);
        $productoNuevo = new Producto();
        $productoNuevo->name = $datos['nombre'];
        $productoNuevo->price = $datos['precio'];
        $productoNuevo->description = $datos['descripcion'];
        $productoNuevo->user_id = $datos['user_id'];
        $productoNuevo->category_id = 1;
        $productoNuevo->featured_img = $imagen;

        $productoNuevo->save();

        return redirect('/');

    }

    public function editar(Producto $id){
      return view('admin.editarProducto', ['producto'=> $id]);
    }

    public function actualizar(Request $request){
      $validaciones = [
        'id' => 'required',
        'nombre' => 'required|max:100',
        'precio' => 'required',
        'descripcion' => 'max:150',
      ];
        $this->validate($request, $validaciones);

        $ruta = $request->file('featured_img')->store('public/img/productos');
        $imagen = basename($ruta);

        $productoEditado = Producto::find($request["id"]);
        $productoEditado->name = $request['nombre'];
        $productoEditado->price = $request['precio'];
        $productoEditado->description = $request['descripcion'];
        $productoEditado->featured_img = $imagen;

        $productoEditado->update();

        return redirect('/');

    }

    public function search(Request $request){
        if($request->has('buscado')){
            $products = Producto::where('name','LIKE','%' . $request->get('buscado') . '%')->paginate(8);
        }else{
            $producs = Producto::paginate(8);
        }
        $products->appends($request->only('buscado'));
        return view('index')->with('autos',$products);
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


    public function destroy(Request $request)
    {
        $producto= Producto::find($request->input('product_id'));
        $producto->delete();
        return redirect('/admin');
    }
}
