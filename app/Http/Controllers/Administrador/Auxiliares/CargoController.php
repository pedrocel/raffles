<?php

namespace App\Http\Controllers\Administrador\Auxiliares;

use App\Models\Administrador\Auxiliares\Cargo\Cargo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CargoController extends Controller
{
    public function getLista(){

        $id_organizacao = Auth::user()->id;
        $cargos = Cargo::where('id_organizacao', $id_organizacao)->paginate('10');

        return view('administrador.auxiliares.');
    }
}
