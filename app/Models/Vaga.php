<?php

namespace App\Models;

use App\Models\Administrador\Auxiliares\Setor\Setor;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    protected $table = 'vaga';

    protected $fillable = [
        'nome_vaga', 'requisitos', 'id_setor', 'criado_por', 'id_organizacao'
    ];

    public function setor()
    {
        return $this->hasOne(Setor::class, 'id', 'id_setor');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'criado_por');
    }

    public function organizacao()
    {
        return $this->hasOne(Organizacao::class, 'id', 'criado_por');
    }
}
