<?php

namespace App\Models\Administrador\Auxiliares\Cargo;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table = 'cargo';

    protected $fillable = [
         'id', 'nome_cargo'
    ];
}
