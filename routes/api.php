<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['jwt.auth'], 'prefix' => 'v1'], function (){
    Route::get('/candidato/curriculo/curso/lista', 'Candidato\CursoController@getListaCurso')->name('candidato.curriculo.curso.lista.get');
    Route::post('/candidato/curriculo/curso/novo', 'Candidato\CursoController@postNovoCurso')->name('candidato.curriculo.curso.novo.post');

    Route::post('/auth/refresh', 'TokensController@refreshToken');
    Route::post('/auth/expire', 'TokensController@expireToken');
});


Route::group(['prefix' => 'v1'], function (){
    Route::post('/auth/login', 'TokensController@login');
    Route::get('/auth/logout', 'TokensController@logout');
});
