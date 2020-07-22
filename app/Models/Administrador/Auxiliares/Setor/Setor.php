<?php

namespace App\Models\Administrador\Auxiliares\Setor;

use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    protected $table = 'setor';

    protected $fillable = [
        'nome_setor'
    ];
}
