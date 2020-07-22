<?php

namespace App\Http\Controllers\RifaController;

use App\Models\Candidato\Curso;
use App\Models\Organizacao;
use App\Models\Raffle\Raffle;
use App\Models\Raffle\StatusRaffle;
use App\Models\Raffle\UnidadeRaffle;
use App\Models\Raffle\VendaRaffle;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RifaController extends Controller
{
    public function getRaffles(){

        $rifas = Raffle::with('status', 'organizacao')->get();

        return view('administrador.rifas.lista', compact('rifas'));
    }

    public function getNewRaffle(){

        $status = StatusRaffle::get();

        return view('administrador.rifas.novo')->with(['status' => $status]);
    }

    public function postNewRaffle(Request $request){

        $org = User::where('id', Auth::user()->id)->first();

        $rifa = Raffle::create([
            'premio'=> $request->premio,
            'quantidade' => $request->quantidade,
            'id_status'=> 1,
            'criado_por'=> Auth::user()->id,
            'id_organizacao'=> $org->id_organizacao,
            'foto'=> "ada"
        ]);

        for ($i=0; $i < $request->quantidade; $i++) {
            UnidadeRaffle::create([
                'comprador_nome'=> "Vazio",
                'comprador_telefone'=> "Vazio",
                'id_status'=> 3,
                'criado_por'=> Auth::user()->id,
                'id_organizacao'=> $org->id_organizacao,
                'id_rifa'=>$rifa->id
            ]);
        }

        return redirect()->route('administrador.rifas.lista.get')->with(['status' => 'Rifa Criado com sucesso!']);

    }

    public function getBillets($id_rifa){

        $bilhetes = UnidadeRaffle::where('id_rifa', $id_rifa)->with('status', 'organizacao', 'rifa')->get();

        return view('administrador.rifas.bilhetes', compact('bilhetes'));
    }

    public function getDetail($id_bilhete){

        $bilhete = UnidadeRaffle::where('id', $id_bilhete)->with('rifa', 'status')->first();

        return view('administrador.rifas.detalhe', compact('bilhete'));
    }

    public function getVenda($id){

        $org = User::where('id', Auth::user()->id)->first();

        $bilhete = UnidadeRaffle::where('id', $id)->with('rifa', 'status')->first();

        return view('administrador.rifas.venda', compact('bilhete'));
    }

    public function postVenda(Request $request, $id){

        $org = User::where('id', Auth::user()->id)->first();

        $unidade = UnidadeRaffle::where('id', $id)->first();

        UnidadeRaffle::where('id', $id)->update([
            'comprador_nome' => $request->comprador_nome ,
            'comprador_telefone' => $request->comprador_telefone,
            'id_status'=> 6
        ]);

        VendaRaffle::create([
            'forma_pagamento'=> "transferência",
            'id_org'=> $org->id_organizacao,
            'vendido_por'=> Auth::user()->id,
            'id_unidade'=> $unidade->id
        ]);

        return redirect()->route('administrador.rifas.lista.get')->with(['status' => 'Rifa vendida com sucesso!']);
    }
}
