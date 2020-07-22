<?php

namespace App\Models\Candidato;

use App\User;
use Illuminate\Database\Eloquent\Model;

class UsuarioIdioma extends Model
{
    protected $table = 'usuario_idioma';

    protected $fillable = [
        'id_usuario', 'id_idioma'];

    public function usuario(){

        return $this->hasOne(User::class, 'id', 'id_usuario');

    }

    public function idioma(){

        return $this->hasOne(Idioma::class, 'id', 'id_idioma');

    }

}
