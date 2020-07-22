<?php

namespace App\Http\Controllers\Curriculo\Idioma;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IdiomaController extends Controller
{
    public function getNovo(){

        return view('curriculo.idioma.novo');
    }
}
