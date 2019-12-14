<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    /*Listado de usuarios*/
    public function index()
    {
        return view('admin.list_users')->with('users', User::paginate(10));
    }

    /*Vista de detalle del usuario*/
    public function show(User $id)
    {
        return view('usuario.perfil')->with('user',$id);
    }

    /*Vista de editar perfil*/
    public function edit(User $id)
    {
        return view('usuario.edit')->with('user',$id);
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
