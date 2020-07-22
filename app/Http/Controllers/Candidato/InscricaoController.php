<?php

namespace App\Http\Controllers\Candidato;

use App\Models\Vaga;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InscricaoController extends Controller
{
    public function getLista(){

        $vagas = Vaga::with('setor', 'organizacao')->paginate(10);
        return view('candidato.vagas.lista', compact('vagas'));
    }

    public function getDetalhes($id_vaga){

        $vaga = Vaga::find($id_vaga)->with('setor', 'organizacao')->first();

        return view('candidato.vagas.detalhes', compact('vaga'));
    }

    public function getNovaInscricao(){
        $vaga = Vaga::with('setor', 'organizacao')->paginate(10);

        return view('canidato.vagas.inscricao.novo', compact('vaga'));
    }
}
