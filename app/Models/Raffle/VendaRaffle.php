<?php

namespace App\Models\Raffle;

use App\Models\Organizacao;
use App\User;
use Illuminate\Database\Eloquent\Model;

class VendaRaffle extends Model
{
    protected $table = 'venda_raffle';

    protected $fillable = [
        'forma_pagamento', 'id_unidade', 'id_org', 'vendido_por'
    ];

    public function organizacao()
    {
        return $this->hasOne(Organizacao::class, 'id', 'id_org');
    }

    public function usuario()
    {
        return $this->hasOne(User::class, 'id', 'vendido_por');
    }

    public function bilhete()
    {
        return $this->hasOne(UnidadeRaffle::class, 'id', 'id_unidade');
    }
}
