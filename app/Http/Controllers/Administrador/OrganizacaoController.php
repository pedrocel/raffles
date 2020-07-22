<?php

namespace App\Http\Controllers\Administrador;
use App\Models\Organizacao;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Administrador\Auxiliares\TipoOrganizacao\TipoOrganizacao;
use \stdClass;


class OrganizacaoController extends Controller
{
    public function getLista(){

        $organizacoes = Organizacao::with('tipoOrganizacao')->paginate('10');
        return view('administrador.organizacao.lista', compact('organizacoes'));
    }

    public function getNovo(){

        $tipo_org = TipoOrganizacao::select('tipo_organizacao', 'id')->get();
        
            return view('administrador.organizacao.novo', compact('tipo_org'))->with(['tipo_org' => $tipo_org]);
    }

    public function postNovo(Request $request){

        $this->validate($request, [
            'tipo_organizacao' => 'required|integer'
        ]);

        
        Organizacao::Create([
            'nome_organizacao' => $request->nome_organizacao,
            'rota_organizacao' => $request->rota_organizacao,
            'tipo_organizacao' => $request->tipo_organizacao,
            'foto_organizacao' => $request->foto_organizacao,
            'ativo'            => 1
        ]);

        // dd($request->all());

        return redirect()->route('administrador.organizacao.lista.get')->with('st', $st);

    }

    // public function store(Request $request){
    //         $validatedData = $request->validate([ 
    //                  'product_line_id' => 'required|integer', 
    //                       'description' => 'required|alpha_num', 
    //                            'expiration_time' => 'required|date',   
    //                               'price' =>['required',     'regex:/^\d+([.,]\d{1,X})?$]/'] ]);
    //                                   $data = [      'product_line_id' => request('product_line_id'),  
    //                                       'description' => request('description'),  
    //                                           'expiration_time' => request('expiration_time'), 
    //                                                'price' => request('price') ];
    //                                                    Product::create($data); 
    //                                                       return back();  } 

}
