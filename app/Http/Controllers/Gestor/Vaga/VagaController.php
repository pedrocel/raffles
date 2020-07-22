<?php

namespace App\Http\Controllers\Gestor\Vaga;

use App\Models\Administrador\Auxiliares\Setor\Setor;
use App\Models\Candidato\UsuarioVaga;
use App\Models\Vaga;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class VagaController extends Controller
{
    public function getListaVaga($id_organizacao)
    {
        $vagas = Vaga::with('setor')
            ->where('id_organizacao', $id_organizacao)
            ->paginate(20);
        return view('gestor.vaga.lista', compact('vagas'));
    }

    public function getNovaVaga($id_organizacao)
    {
        $setores = Setor::select('nome_setor', 'id')->get();


        return view('gestor.vaga.novo')->with(['setores' =>  $setores, 'id_organizacao' => $id_organizacao]);
    }

    public function postNovaVaga(Request $request, $id_organizacao)
    {
        $vaga = Vaga::create([
           'nome_vaga' => $request->nome_vaga,
           'requisitos' => $request->requisitos,
           'id_setor' => $request->id_setor,
           'criado_por' => Auth::user()->id,
           'id_organizacao' => $id_organizacao
        ]);

        return redirect()->route('gestor.vaga.lista.get');
    }


    public function getListaCandidatos($id_vaga){
        $usuarios = UsuarioVaga::where('id_vaga', $id_vaga)->with('usuario', 'vagas')->paginate(20);

        return view('gestor.vaga.candidatos.lista', compact('usuarios'));
    }

}
