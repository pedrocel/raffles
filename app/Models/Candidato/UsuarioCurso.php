<?php

namespace App\Models\Candidato;

use App\User;
use Illuminate\Database\Eloquent\Model;

class UsuarioCurso extends Model
{
    protected $table = 'usuario_curso';

    protected $fillable = [
        'id_curso', 'id_usuario'];


    public function curso()
    {
        return $this->hasOne(Curso::class, 'id', 'id_curso');
    }

    public function usuario()
    {
        return $this->hasOne(User::class, 'id', 'id_usuario');
    }
}
