<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/home';

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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6|confirmed',
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
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'id_perfil' => 1,
            'id_cargo' => 2,
            'id_setor' => 5,
            'id_organizacao' => 1
        ]);

    }

    public function getRegistro($idOrganizacao){

        return view('candidato.registro.novo', compact('idOrganizacao'));
    }

    protected function postRegistro(Request $request, $idOrganizacao)
    {

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request['password']),
            'id_perfil' => 1,
            'id_cargo' => 2,
            'id_setor' => 5,
            'id_organizacao' => 1
        ]);

        return redirect()->route('login')->withErrors(['Criado com sucesso']);

    }


}
