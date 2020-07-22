<?php

namespace App\Models\Raffle;

use App\Models\Organizacao;
use Illuminate\Database\Eloquent\Model;

class UnidadeRaffle extends Model
{
    protected $table = 'unidade_raffle';

    protected $fillable = [
        'comprador_nome', 'comprador_telefone', 'id_status', 'criado_por', 'id_organizacao', 'id_rifa'
    ];

    public function organizacao()
    {
        return $this->hasOne(Organizacao::class, 'id', 'criado_por');
    }

    public function status()
    {
        return $this->hasOne(StatusRaffle::class, 'id', 'id_status');
    }

    public function rifa()
    {
        return $this->hasOne(Raffle::class, 'id', 'id_rifa');
    }
}
