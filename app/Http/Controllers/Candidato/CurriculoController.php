<?php

namespace App\Http\Controllers\Candidato;

use App\Models\Candidato\Idioma;
use App\Models\Candidato\UsuarioCurso;
use App\Models\Candidato\UsuarioExperiencia;
use App\Models\Candidato\UsuarioIdioma;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CurriculoController extends Controller
{
    public function getLista(){
        $usuario = User::where('id', Auth::user()->id)->first();
        $idiomas = UsuarioIdioma::with('idioma')->where('id_usuario', Auth::user()->id)->get();
        $experiencias = UsuarioExperiencia::with('experiencia');
        $cursos = UsuarioCurso::with('curso')->where('id_usuario', Auth::user()->id)->get();


        return view('candidato.curriculo.curriculo.lista',compact('idiomas', 'experiencias', 'cursos', 'usuario'));
    }
}
