<?php

namespace App\Models\Raffle;

use App\Models\Organizacao;
use Illuminate\Database\Eloquent\Model;

class StatusRaffle extends Model
{
    protected $table = 'status_raffles';

    protected $fillable = [
        'nome_status'
    ];
}
