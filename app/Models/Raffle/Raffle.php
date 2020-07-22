<?php

namespace App\Models\Raffle;

use App\Models\Organizacao;
use Illuminate\Database\Eloquent\Model;

class Raffle extends Model
{
    protected $table = 'raffles';

    protected $fillable = [
        'premio', 'quantidade', 'id_status', 'criado_por', 'id_organizacao', 'foto'
    ];

    public function organizacao()
    {
        return $this->hasOne(Organizacao::class, 'id', 'criado_por');
    }

    public function status()
    {
        return $this->hasOne(StatusRaffle::class, 'id', 'id_status');
    }
}
