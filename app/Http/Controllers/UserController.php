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

    public function update(Request $request,User $id)
    {
        $users = User::where('id', '!=', $id)->get();
        $rules = [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'avatar' => 'file|mimes:jpeg,bmp,png',
        ];

        if($request->input('password')){
            $rules['password'] = 'string|min:8|confirmed';
        }

        foreach ($users as $user) {
            if($user->email == $request->input('email')){
                $rules['email'] = 'required|string|email|max:255|unique:users';
            }
        }

        $this->validate($request, $rules);
        $user = $id;
        $user->first_name = ucwords(strtolower($request->input('first_name')));
        $user->last_name = ucwords(strtolower($request->input('last_name')));
        $user->email = $request->input('email');
        
        if($request->input('password')){
            $user->password = Hash::make($request->input('password'));
        }

        if($request->file('avatar')){
            $route = $request->file('avatar')->storePublicly('public/avatars');
            $namePoster = basename($route);
            $user->avatar = $namePoster;
        }
        $user->update();
        return redirect()->route('admin');
    }

    public function destroy($id)
    {
        //
    }
}
