<?php

namespace App\Http\Controllers\Candidato;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function candidato()
    {
        return view('dashboard.candidato');
    }
}



