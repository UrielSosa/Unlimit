<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;
    protected $redirectTo = '/login';

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'number' => [ 'min:10', 'max:11'],
            'sexo' => [ 'string',],
            'fecha_nac' => ['string'],
            'pais' => ['stri-ng'],
            'municipios' => ['string'],
        ]);
    }

    protected function create(array $data)
    {
        $ruta = $data['avatar']->store('public/avatars');
        $imagen = basename($ruta);

        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'rol' => 1,
            'number' => $data['number'],
            'sexo' => $data['sexo'],
            'fecha_nac' => $data['fecha_nac'],
            'pais' => $data['pais'],
            'municipios' => $data['municipios'],
            'avatar' => $imagen,
        ]);
    }
}
