<?php

namespace App\Http\Controllers\Candidato;

use App\Models\Candidato\ExperienciaProfissional;
use App\Models\Candidato\UsuarioExperiencia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ExperienciaProfissionalController extends Controller
{
    public function getLista(){

        $experiencias = UsuarioExperiencia::where('id_usuario', Auth::user()->id)->with('experiencia')->paginate(10);

        return view('candidato.curriculo.experiencia.lista', compact('experiencias'));


    }

    public function getNovo(){

        return view('candidato.curriculo.experiencia.novo');

    }

    public function postNovo(Request $request){

        $experiencia = ExperienciaProfissional::create([
            'nome_empresa' => $request->nome_empresa,
            'cargo' => $request->cargo,
            'funcao' => $request->funcao,
            'inicio_trabalho' => $request->inicio_trabalho,
            'fim_trabalho' => $request->fim_trabalho,
            'atual' => 1
        ]);

        UsuarioExperiencia::create([
           'id_usuario' => Auth::user()->id,
            'id_experiencia' => $experiencia->id
        ]);

//        dd($request);
        return redirect()->route('candidato.curriculo.experiencia.lista.get')->with(['status' => 'Experiencia Criado com sucesso!']);

    }

    public function getEditar(){

    }

    public function postEditar(){

    }

    public function excluir(){

    }
}
