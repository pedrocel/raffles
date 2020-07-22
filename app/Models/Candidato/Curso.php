<?php

namespace App\Models\Candidato;

use App\Models\Administrador\Auxiliares\TipoOrganizacao\TipoOrganizacao;
use App\Models\Organizacao;
use App\Models\Candidato\TipoCurso;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{

    protected $table = 'cursos';

    protected $fillable = [
        'nome_curso', 'instituicao', 'concluido','id_organizacao','id_tipo_curso', 'inicio_curso', 'fim_curso', 'id_usuario'];

//    protected $dates = ['inicio_curso', 'fim_curso'];

    public function organizacao(){

        return $this->hasOne(Organizacao::class, 'id', 'id_organizacao');

    }

    public function tipoCurso(){

        return $this->hasOne(TipoCurso::class, 'id', 'id_tipo_curso');

    }

}
