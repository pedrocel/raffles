<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::middleware(['auth'])->group(function () {

//    Route::get('curriculo/idioma/novo', 'Curriculo\Idioma\IdiomaController@getNovo');

    Route::get('/dashboard/candidato', 'Candidato\HomeController@candidato')->name('home');
//    Route::get('/dashboard/v2', 'DashboardController@versiontwo')->name('v2');
//    Route::get('/dashboard/v3', 'DashboardController@versionthree')->name('v3');



});

//
//
//Route::get('/registro/{idOrganizacao}', '\App\Http\Controllers\Auth\RegisterController@getRegistro')->name('registro.get');
//Route::post('/registro/{idOrganizacao}', '\App\Http\Controllers\Auth\RegisterController@postRegistro')->name('registro.post');
//
