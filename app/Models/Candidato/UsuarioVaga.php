<?php

namespace App\Models\Candidato;

use App\Models\Vaga;
use App\User;
use Illuminate\Database\Eloquent\Model;

class UsuarioVaga extends Model
{
    protected $table = 'usuario_vaga';

    protected $fillable = [
        'id_usuario', 'id_vaga'];

    public function usuario(){

        return $this->hasOne(User::class, 'id', 'id_usuario');

    }

    public function vaga(){

        return $this->hasOne(Vaga::class, 'id', 'id_vaga');

    }
}
