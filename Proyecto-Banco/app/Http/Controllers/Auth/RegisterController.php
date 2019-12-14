<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre' => 'required|string|max:255|unique:users',
            'apellidos' => 'required|string|max:255',
            'pass' => 'required|string|min:6',
            'fecha_nac' => 'required|string|date|max:255',
            'curp' => 'required|string|max:255|unique:users',
            'rfc' => 'required|string|max:255|unique:users',
            'calle' => 'required|string|max:255',
            'colonia' => 'required|string|max:255',
            'exterior' => 'required|string|max:255',
            'interior' => 'required|string|max:255',
            'c_postal' => 'required|string|max:255',
            'entre_calles' => 'required|string|max:255',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'nombre' => $data['nombre'],
            'apellidos' => $data['apellidos'],
            'password' => $data['pass'],
            'fecha_nacimiento' => $data['fecha_nac'],
            'curp' => $data['curp'],
            'rfc' => $data['rfc'],
            'calle' => $data['calle'],
            'colonia' => $data['colonia'],
            'exterior' => $data['exterior'],
            'interior' => $data['interior'],
            'codigo_postal' => $data['c_postal'],
            'entre_calles' => $data['entre_calles'],
        ]);
    }
}
