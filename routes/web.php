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

Route::get('/', 'PublicController@getWelcome')->name('welcome');
Route::get('/bilhete/{id_rifa}', 'PublicController@getBilhetes')->name('public.raffle.bilhetes.get');
Route::get('/comprar/{id_rifa}', 'PublicController@getComprar')->name('public.raffle.comprar.get');
Route::post('/comprar/{id_rifa}', 'PublicController@postComprar')->name('public.raffle.comprar.post');

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('login.get');

Route::middleware(['auth'])->group(function () {

Route::get('/administrador/rifas/lista', 'RifaController\RifaController@getRaffles')->name('administrador.rifas.lista.get');

Route::get('/administrador/rifas/novo', 'RifaController\RifaController@getNewRaffle')->name('administrador.rifas.novo.get');
Route::post('/administrador/rifas/novo', 'RifaController\RifaController@postNewRaffle')->name('administrador.rifas.novo.post');

    Route::get('/administrador/rifas/venda/{id}', 'RifaController\RifaController@getVenda')->name('administrador.rifas.venda.get');
    Route::post('/administrador/rifas/venda/{id}', 'RifaController\RifaController@postVenda')->name('administrador.rifas.venda.post');

Route::get('/administrador/rifas/bilhetes/{id_rifa}', 'RifaController\RifaController@getBillets')->name('administrador.rifas.bilhetes.get');
Route::get('/administrador/rifas/detalhe/{id_bilhete}', 'RifaController\RifaController@getDetail')->name('administrador.rifas.detalhe.get');

Route::get('/dashboard/candidato', 'Candidato\HomeController@candidato')->name('home');

Route::get('curriculo/idioma/novo', 'Curriculo\Idioma\IdiomaController@getNovo');

Route::get('/dashboard/home', 'DashboardController@versionone')->name('home');
Route::get('/dashboard/v2', 'DashboardController@versiontwo')->name('v2');
Route::get('/dashboard/v3', 'DashboardController@versionthree')->name('v3');

Route::get('/candidato/informacoes/editar', 'Candidato\PerfilController@getInformacaoCandidato')->name('candidato.configuracao.dadosPessoais.informacoes.get');
Route::post('/candidato/informacoes/editar', 'Candidato\PerfilController@postInformacaoCandidato')->name('candidato.configuracao.dadosPessoais.informacoes.post');

Route::get('/candidato/curriculo/curso/lista', 'Candidato\CursoController@getListaCurso')->name('candidato.curriculo.curso.lista.get');
Route::get('/candidato/curriculo/curso/novo', 'Candidato\CursoController@getNovoCurso')->name('candidato.curriculo.curso.novo.get');
//Route::post('/candidato/curriculo/curso/novo', 'Candidato\CursoController@postNovoCurso')->name('candidato.curriculo.curso.novo.post');


Route::get('/candidato/curriculo/curso/editar/{id_curso}', 'Candidato\CursoController@getEditarCurso')->name('candidato.curriculo.curso.editar.get');
Route::post('/candidato/curriculo/curso/editar/{id_curso}', 'Candidato\CursoController@postEditarCurso')->name('candidato.curriculo.curso.editar.post');

Route::post('/candidato/curriculo/curso/excluir/{id_curso}', 'Candidato\CursoController@postExcluirCurso')->name('candidato.curriculo.curso.excluir.post');

//completo
    Route::get('/candidato/curriculo/completo/lista', 'Candidato\CurriculoController@getLista')->name('candidato.curriculo.curriculo.lista.get');

//experiencia profissional
Route::get('/candidato/curriculo/experiencia/lista', 'Candidato\ExperienciaProfissionalController@getLista')->name('candidato.curriculo.experiencia.lista.get');
Route::get('/candidato/curriculo/experiencia/novo', 'Candidato\ExperienciaProfissionalController@getNovo')->name('candidato.curriculo.experiencia.novo.get');
Route::post('/candidato/curriculo/experiencia/novo', 'Candidato\ExperienciaProfissionalController@postNovo')->name('candidato.curriculo.experiencia.novo.post');


//idiomas

    Route::get('/candidato/vagas/lista', 'Candidato\InscricaoController@getLista')->name('candidato.vagas.lista.get');
    Route::get('/candidato/vagas/detalhes/{id_vaga}', 'Candidato\InscricaoController@getDetalhes')->name('candidato.vagas.detalhes.get');

    Route::get('/candidato/curriculo/idioma/lista', 'Candidato\IdiomaController@getLista')->name('candidato.curriculo.idioma.lista.get');
    Route::get('/candidato/curriculo/idioma/novo', 'Candidato\IdiomaController@getNovo')->name('candidato.curriculo.idioma.novo.get');
    Route::post('/candidato/curriculo/idioma/novo', 'Candidato\IdiomaController@postNovo')->name('candidato.curriculo.idioma.novo.post');

    Route::get('/candidato/curriculo/idioma/editar/{id_idioma}', 'Candidato\IdiomaController@getEditar')->name('candidato.curriculo.idioma.editar.get');
    Route::post('/candidato/curriculo/idioma/editar/{id_idioma}', 'Candidato\IdiomaController@postEditar')->name('candidato.curriculo.idioma.editar.post');

    Route::get('/gestor/vaga/lista/{id_organizacao}', 'Gestor\Vaga\VagaController@getListaVaga')->name('gestor.vaga.lista.get');
    Route::get('/gestor/vaga/candidatos/lista/{id_vaga}', 'Gestor\Vaga\VagaController@getListaCandidatos')->name('gestor.vaga.candidatos.lista.get');
    Route::get('/gestor/vaga/novo/{id_organizacao}', 'Gestor\Vaga\VagaController@getNovaVaga')->name('gestor.vaga.novo.get');
    Route::post('/gestor/vaga/novo/{id_organizacao}', 'Gestor\Vaga\VagaController@postNovaVaga')->name('gestor.vaga.novo.post');



Route::get('/administrador/organizacao/lista', 'Administrador\OrganizacaoController@getLista')->name('administrador.organizacao.lista.get');
Route::get('/administrador/organizacao/novo', 'Administrador\OrganizacaoController@getNovo')->name('administrador.organizacao.get');
Route::post('/administrador/organizacao/novo', 'Administrador\OrganizacaoController@postNovo')->name('administrador.organizacao.novo.post');

Route::get('/administrador/auxiliares/tipoOrganizacao/lista', 'Administrador\Auxiliares\TipoOrganizacaoController@getLista')->name('administrador.auxiliares.tipoOrganizacao.lista.get');
Route::get('/administrador/auxiliares/tipoOrganizacao/novo', 'Administrador\Auxiliares\TipoOrganizacaoController@getNovo')->name('administrador.auxiliares.tipoOrganizacao.novo.get');
Route::post('/administrador/auxiliares/tipoOrganizacao/novo', 'Administrador\Auxiliares\TipoOrganizacaoController@postNovo')->name('administrador.auxiliares.tipoOrganizacao.novo.post');

Route::get('/administrador/auxiliares/etnia/lista', 'Administrador\Auxiliares\EtniaController@getLista')->name('administrador.auxiliares.etnia.lista.get');
Route::get('/administrador/auxiliares/etnia/novo', 'Administrador\Auxiliares\EtniaController@getNovo')->name('administrador.auxiliares.etnia.novo.get');
Route::post('/administrador/auxiliares/enia/novo', 'Administrador\Auxiliares\EtniaController@postNovo')->name('administrador.auxiliares.etnia.novo.post');

});



Route::get('/registro/{idOrganizacao}', '\App\Http\Controllers\Auth\RegisterController@getRegistro')->name('registro.get');
Route::post('/registro/{idOrganizacao}', '\App\Http\Controllers\Auth\RegisterController@postRegistro')->name('registro.post');

