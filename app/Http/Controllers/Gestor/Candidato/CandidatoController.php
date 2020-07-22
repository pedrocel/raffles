<?php

namespace App\Http\Controllers\Gestor\Candidato;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CandidatoController extends Controller
{
    //
    public function getListaCandidatosReprovados($id_vaga, $id_organizacao){

        return view('gestor.candidato.listaCandidatosReprovados');
    }

    public function getListaCandidatosAprovados($id_vaga, $id_organizacao){

        return view('gestor.candidato.listaCandidatosAprovados');
    }

    public function getListaCandidatosPorVaga($id_vaga, $id_organizacao){

        return view('gestor.candidato.listaCandidatos');
    }

}
