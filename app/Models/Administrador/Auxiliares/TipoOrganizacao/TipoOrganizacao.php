<?php

namespace App\Models\Administrador\Auxiliares\TipoOrganizacao;

use Illuminate\Database\Eloquent\Model;

class TipoOrganizacao extends Model
{
    protected $table = 'tipo_organizacao';

    protected $fillable = [
         'id', 'tipo_organizacao'
    ];
}
