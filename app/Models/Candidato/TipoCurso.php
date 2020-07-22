<?php

namespace App\Models\Candidato;

use App\Models\Organizacao;
use Illuminate\Database\Eloquent\Model;

class TipoCurso extends Model
{
    protected $table = 'tipo_curso';

    protected $fillable = ['nome_tipo_curso'];

}
