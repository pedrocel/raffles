<?php

namespace App\Http\Controllers;

use App\Models\Raffle\Raffle;
use App\Models\Raffle\UnidadeRaffle;
use App\Models\Raffle\VendaRaffle;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    public function getWelcome(){

        $rifas = Raffle::with('status', 'organizacao')->get();

        return view('welcome', compact('rifas'));
    }

    public function getBilhetes($id_rifa){

        $rifa = Raffle::where('id', $id_rifa)->first();

        $bilhetes = UnidadeRaffle::where('id_rifa', $id_rifa)->with('rifa', 'status', 'organizacao')->get();

        return view('public.raffle.bilhetes', compact('bilhetes', 'rifa'));
    }

    public function getComprar($id_rifa){

        $bilhete = UnidadeRaffle::where('id', $id_rifa)->with('rifa', 'status')->first();


        return view('public.raffle.comprar', compact('bilhete'));
    }

    public function postComprar(Request $request, $id_rifa){

        $unidade = UnidadeRaffle::where('id', $id_rifa)->first();

        UnidadeRaffle::where('id', $id_rifa)->update([
            'comprador_nome' => $request->comprador_nome ,
            'comprador_telefone' => $request->comprador_telefone,
            'id_status'=> 4
        ]);

        VendaRaffle::create([
            'forma_pagamento'=> "transferência",
            'id_org'=> $unidade->id_organizacao,
            'vendido_por'=> 1,
            'id_unidade'=> $unidade->id
        ]);

        return redirect()->route('welcome')->with(['status' => 'Rifa Solicitada com sucesso!']);

    }
}
