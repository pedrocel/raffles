<?php

namespace App\Models\Candidato;

use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    protected $table = 'idioma';

    protected $fillable = [
        'idioma', 'nivel'];

    public function tipoCurso(){

        return $this->hasOne(TipoCurso::class, 'id', 'id_tipo_curso');

    }
}
