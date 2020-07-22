<?php

namespace App\Models\Candidato;

use App\User;
use Illuminate\Database\Eloquent\Model;

class UsuarioExperiencia extends Model
{

    protected $table = 'usuario_experiencia_profissional';

    protected $fillable = [
        'id_usuario', 'id_experiencia'];


    public function experiencia()
    {
        return $this->hasOne(ExperienciaProfissional::class, 'id', 'id_experiencia');
    }

    public function usuario()
    {
        return $this->hasOne(User::class, 'id', 'id_usuario');
    }
}
