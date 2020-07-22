<?php

namespace App\Models\Administrador\Auxiliares\Etnia;

use Illuminate\Database\Eloquent\Model;

class Etnia extends Model
{
    protected $table = 'etnia';

    protected $fillable = [
         'id', 'nome_etnia'
    ];
}
