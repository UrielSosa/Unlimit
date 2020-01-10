<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Category;
use App\User;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin', ['contenido'=>Producto::paginate(12), 'categorias'=>Category::paginate(12), 'usuarios'=>User::paginate(12)]);
    }

    public function create()
    {
        //return view(admin.add);
    }

    public function store(Request $request)
    {
        //
    }

    public function show(User $id)
    {
        return view('usuario.perfil')->with('user',$id);
    }

    public function edit(User $id)
    {
        return view('usuario.edit')->with('user',$id);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function search(Category $id){
        return view('admin.admin', ['contenido'=>Producto::where('category_id','LIKE',$id->id)->paginate(8), 'categorias'=>Category::paginate(12)]);
    }
}
