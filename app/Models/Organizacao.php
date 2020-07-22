<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Administrador\Auxiliares\TipoOrganizacao\TipoOrganizacao;
class Organizacao extends Model
{
    protected $table = 'organizacao';

    protected $fillable = [
        'nome_organizacao', 'rota_organizacao','ativo', 'foto_organizacao'
    ];



}
