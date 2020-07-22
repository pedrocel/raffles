<?php

namespace App\Http\Controllers\Candidato;

use App\Models\Candidato\Curso;
use App\Models\Candidato\TipoCurso;
use App\Models\Candidato\UsuarioCurso;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CursoController extends Controller
{
    public function getListaCurso(){

        $cursos = Curso::where('id_usuario', Auth::user()->id)->paginate(10);

        return response()->json(['cursos' => $cursos], 200);

    }


    public function getNovoCurso(){

        $tipoCursos = TipoCurso::get();

        return view('candidato.curriculo.curso.novo')->with(['tipoCursos' => $tipoCursos]);

    }

    public function postNovoCurso(Request $request){

        $valida = $this->validate($request, [
            'nome_curso' => 'required',
            'instituicao' => 'required',
            'id_tipo_curso' => 'required',
            'inicio_curso' => 'required'
        ],
            [
                'nome_curso.required' => 'O Nome do Curso é Obrigatório!',
                'instituicao.required' => 'O Nome da Instituição é Obrigatória!',
                'id_tipo_curso.required' => 'O Tipo do Curso é Obrigatório!',
                'inicio_curso.required' => 'O Inicio do Curso é Obrigatório!',

            ]);

        if($valida != null ){
            return response()->json(['valida' => $valida]);
        }else
        $curso = Curso::create([
           'nome_curso' => $request->nome_curso ,
           'instituicao' => $request->instituicao,
           'id_tipo_curso' => $request->id_tipo_curso,
           'inicio_curso' => $request->inicio_curso,
           'fim_curso' => $request->fim_curso,
            'id_organizacao' => Auth::user()->id_organizacao,
            'id_usuario' => Auth::user()->id
        ]);

         UsuarioCurso::create([
            'id_usuario' => Auth::user()->id,
            'id_curso' => $curso->id
        ]);

        return response()->json(['success' => true,'message' => 'Curso criado com sucesso','data' => $curso, 'status' => 200], 200);

//        return redirect()->route('candidato.curriculo.curso.lista.get')->with(['status' => 'Curso Criado com sucesso!']);

    }



    public function getEditarCurso($id_curso){

        $curso = Curso::with('tipoCurso')->where('id', $id_curso)->where('id_usuario', Auth::user()->id)->first();
        $tipoCursos = TipoCurso::get();

        return view('candidato.curriculo.curso.editar', compact('curso', 'tipoCursos'))->with(['tipoCursos' => $tipoCursos]);
    }

    public function postEditarCurso(Request $request, $id_curso){

        Curso::where('id', $id_curso)->where('id_usuario', Auth::user()->id)->update([
            'nome_curso' => $request->nome_curso ,
            'instituicao' => $request->instituicao,
            'id_tipo_curso' => $request->id_tipo_curso,
            'inicio_curso' => $request->inicio_curso,
            'fim_curso' => $request->fim_curso,
            'id_organizacao' => Auth::user()->id_organizacao,
            'id_usuario' => Auth::user()->id
        ]);

        return redirect()->route('candidato.curriculo.curso.lista.get')->with(['status' => 'Curso Criado com sucesso!']);
    }

    public function postExcluirCurso($id_curso){

        Curso::where('id', $id_curso)->where('id_usuario', Auth::user()->id)->first()->delete();

        return redirect()->route('candidato.curriculo.curso.lista.get')->with(['status' => 'Curso Criado com sucesso!']);

    }
}
