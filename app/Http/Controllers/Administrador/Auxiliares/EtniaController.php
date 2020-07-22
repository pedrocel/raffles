<?php

namespace App\Http\Controllers\Administrador\Auxiliares;

use App\Models\Administrador\Auxiliares\Etnia\Etnia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class EtniaController extends Controller
{
    public function getLista(){

        $etnias = Etnia::paginate('10');

        return view('administrador.auxiliares.etnia.lista', compact('etnias'));
    }

    public function getNovo(){

        return view('administrador.auxiliares.etnia.novo');
    }

    public function postNovo(Request $request){


        $rules = [
            'nome_etnia' => 'required|unique:etnia,nome_etnia'
        ];

        $customMessages = [
            'nome_etnia.required' => 'Nome da Etnia é um campo Obrigatório!',
            'unique' => 'Já existe um campo com esse nome!'
        ];

        $this->validate($request, $rules, $customMessages);

        Etnia::Create([
            'nome_etnia' => $request->nome_etnia
        ]);

        return redirect()->route('administrador.auxiliares.etnia.lista.get')->with('status', 'cadastrado com sucesso');

    }

}
