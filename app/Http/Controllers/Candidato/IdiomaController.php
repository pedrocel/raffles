<?php

namespace App\Http\Controllers\Candidato;

use App\Models\Candidato\Idioma;
use App\Models\Candidato\UsuarioIdioma;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class IdiomaController extends Controller
{
    public function getLista(){

        $idiomas = UsuarioIdioma::where('id_usuario', Auth::user()->id)->with('idioma')->paginate(10);

        return view('candidato.curriculo.idioma.lista', compact('idiomas'));
    }

    public function getNovo(){

        return view('candidato.curriculo.idioma.novo');
    }

    public function postNovo(Request $request){

        $idioma = Idioma::create([
            'idioma' => $request->idioma,
            'nivel' => $request->nivel
        ]);

        UsuarioIdioma::create([
            'id_usuario' => Auth::user()->id,
            'id_idioma' => $idioma->id
        ]);

        return redirect()->route('candidato.curriculo.idioma.lista.get')->with(['status' => 'Idioma Criado com sucesso!']);

    }

    public function getEditar($id_idioma){

        $idioma = Idioma::where('id', $id_idioma)->first();

        return view('candidato.curriculo.idioma.editar', compact('idioma'));
    }

    public function postEditar(Request $request, $id_idioma){

        $idioma = Idioma::where('id', $id_idioma)->update([
            'idioma' => $request->idioma,
            'nivel' => $request->nivel
        ]);

        return redirect()->route('candidato.curriculo.idioma.lista.get')->with(['status' => 'Idioma Editado com sucesso!']);

    }


}
