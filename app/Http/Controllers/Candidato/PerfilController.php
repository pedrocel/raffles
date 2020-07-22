<?php

namespace App\Http\Controllers\Candidato;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class PerfilController extends Controller
{
    public function getInformacaoCandidato(){
        $auth = Auth::user()->id;
        $usuario = User::where('id', $auth)->first();


        return view('candidato.configuracao.dadosPessoais.informacoes', compact('usuario'));
    }

    public function postInformacaoCandidato(Request $request){
        $auth = Auth::user()->id;

        $usuario = User::where('id', $auth)->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return Redirect::back()->withErrors(['Editado com Sucesso']);


    }
}
