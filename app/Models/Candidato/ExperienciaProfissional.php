<?php

namespace App\Models\Candidato;

use App\Models\Organizacao;
use Illuminate\Database\Eloquent\Model;

class ExperienciaProfissional extends Model
{
    protected $table = 'experiencia_profissional';

    protected $fillable = [
        'nome_empresa', 'cargo', 'funcao', 'inicio_trabalho', 'fim_trabalho', 'atual'];

    protected $dates = ['inicio_trabalho', 'fim_trabalho'];

//    public function organizacao(){
//
//        return $this->hasOne(Organizacao::class, 'id', 'id_organizacao');
//
//    }
}
