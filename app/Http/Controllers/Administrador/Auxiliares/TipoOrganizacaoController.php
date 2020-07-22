<?php

namespace App\Http\Controllers\Administrador\Auxiliares;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Administrador\Auxiliares\TipoOrganizacao\TipoOrganizacao;

class TipoOrganizacaoController extends Controller
{
    public function getLista(){

        $tipoOrganizacoes = TipoOrganizacao::paginate('10');
        return view('administrador.auxiliares.tipoOrganizacao.lista', compact('tipoOrganizacoes'));

    }

    public function getNovo(){

        return view('administrador.auxiliares.tipoOrganizacao.novo');
    }

    public function postNovo(Request $request){

       

        //
        $rules = [
            'tipo_organizacao' => 'required|unique:tipo_organizacao,tipo_organizacao'
        ];
    
        $customMessages = [
            'required' => 'Tipo de organização é um campo Obrigatório!',
            'unique'   => 'Já existe um campo com esse nome!'
        ];
    
        $this->validate($request, $rules, $customMessages);
        //
        

        TipoOrganizacao::Create([
            'tipo_organizacao' => $request->tipo_organizacao
        ]);

        return redirect()->route('administrador.auxiliares.tipoOrganizacao.lista.get')->with('status', 'cadastrado com sucesso');

    }
}
