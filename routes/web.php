<?php
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/acoes', 'Site\AcaoController@index')->name('welcome');
Route::get('/acoes/{id}', 'Site\AcaoController@show')->name('welcome');
Route::get('/projetos', 'Site\ProjetoController@index')->name('welcome');
Route::get('/projetos/{id}', 'Site\ProjetoController@show')->name('welcome');
Route::get('/noticias', 'Site\NoticiaController@index')->name('welcome');
Route::get('/noticia/show/{id}', 'Site\NoticiaController@show')->name('welcome');
Route::get('/historia', 'Site\ParceiroController@index')->name('welcome');
Route::get('/editais', 'Site\EditalController@index')->name('welcome');
Route::get('/galerias', 'Site\GaleriaController@index')->name('welcome');
Route::get('/galeria/show/{id}', 'Site\GaleriaController@show')->name('welcome');
Route::get('/contatos', 'Site\ContatoController@index')->name('welcome');
Route::post('/contatos/{type}', 'Site\ContatoController@store')->name('welcome');
// Route::get('/get', 'Site\ContatoController@get')->name('welcome');
Route::get('/servico-01', 'Site\Servico01Controller@index')->name('servico01');
Route::get('/servico-02', 'Site\Servico02Controller@index')->name('servico02');
Route::get('/servico-03', 'Site\Servico03Controller@index')->name('servico03');
Route::get('/search', 'Site\SearchController@index')->name('search');

// Route::get('/projetos', function () {
//     return view('projetos');
// });
// Route::get('/editais', function () {
//     return view('editais');
// });
// Route::get('/noticias', function () {
//     return view('noticias');
// });
// Route::get('/parceiros', function () {
//     return view('parceiros');
// });
// Route::get('/contato', function () {
//     return view('contatos');
// });
// Route::get('/galerias', function () {
//     return view('galerias');
// });

Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/usuario', 'UserController@index')->name('usuario');
    Route::get('/usuario/create', 'UserController@create')->name('usuario.create');
    Route::post('/usuario/store', 'UserController@store')->name('usuario.store');
    Route::get('/usuario/edit/{user_id}', 'UserController@edit')->name('usuario.edit');
    Route::post('/usuario/update/{user_id}', 'UserController@update')->name('usuario.update');
    Route::get('/usuario/delete/{user_id}', 'UserController@delete')->name('usuario.delete');

    Route::get('/projeto', 'Admin\ProjetoController@index')->name('projeto');
    Route::get('/projeto/create', 'Admin\ProjetoController@create')->name('projeto.create');
    Route::post('/projeto/store', 'Admin\ProjetoController@store')->name('projeto.store');
    Route::get('/projeto/show/{id}', 'Admin\ProjetoController@edit')->name('projeto.show');
    Route::get('/projeto/edit/{id}', 'Admin\ProjetoController@edit')->name('projeto.edit');
    Route::post('/projeto/update/{id}', 'Admin\ProjetoController@update')->name('projeto.update');
    Route::get('/projeto/delete/{id}', 'Admin\ProjetoController@delete')->name('projeto.delete');

    Route::get('/noticia', 'Admin\NoticiaController@index')->name('noticia');
    Route::get('/noticia/create', 'Admin\NoticiaController@create')->name('noticia.create');
    Route::post('/noticia/store', 'Admin\NoticiaController@store')->name('noticia.store');
    // Route::get('/noticia/show/{id}', 'Admin\NoticiaController@edit')->name('noticia.show');
    Route::get('/noticia/edit/{id}', 'Admin\NoticiaController@edit')->name('noticia.edit');
    Route::post('/noticia/update/{id}', 'Admin\NoticiaController@update')->name('noticia.update');
    Route::get('/noticia/delete/{id}', 'Admin\NoticiaController@delete')->name('noticia.delete');

    Route::get('/multimidia', 'Admin\MultimidiaController@index')->name('multimidia');
    Route::get('/multimidia/create', 'Admin\MultimidiaController@create')->name('multimidia.create');
    Route::post('/multimidia/store', 'Admin\MultimidiaController@store')->name('multimidia.store');
    Route::get('/multimidia/show/{id}', 'Admin\MultimidiaController@edit')->name('multimidia.show');
    Route::get('/multimidia/edit/{id}', 'Admin\MultimidiaController@edit')->name('multimidia.edit');
    Route::post('/multimidia/update/{id}', 'Admin\MultimidiaController@update')->name('multimidia.update');
    Route::get('/multimidia/delete/{id}', 'Admin\MultimidiaController@delete')->name('multimidia.delete');

    Route::get('/edital', 'Admin\EditalController@index')->name('edital');
    Route::get('/edital/create', 'Admin\EditalController@create')->name('edital.create');
    Route::post('/edital/store', 'Admin\EditalController@store')->name('edital.store');
    Route::get('/edital/show/{id}', 'Admin\EditalController@edit')->name('edital.show');
    Route::get('/edital/edit/{id}', 'Admin\EditalController@edit')->name('edital.edit');
    Route::post('/edital/update/{id}', 'Admin\EditalController@update')->name('edital.update');
    Route::get('/edital/delete/{id}', 'Admin\EditalController@delete')->name('edital.delete');

    Route::get('/acao', 'Admin\ParceiroController@index')->name('parceiro');
    Route::get('/acao/create', 'Admin\ParceiroController@create')->name('parceiro.create');
    Route::post('/acao/store', 'Admin\ParceiroController@store')->name('parceiro.store');
    Route::get('/acao/show/{id}', 'Admin\ParceiroController@edit')->name('parceiro.show');
    Route::get('/acao/edit/{id}', 'Admin\ParceiroController@edit')->name('parceiro.edit');
    Route::post('/acao/update/{id}', 'Admin\ParceiroController@update')->name('parceiro.update');
    Route::get('/acao/delete/{id}', 'Admin\ParceiroController@delete')->name('parceiro.delete');

    Route::get('/minha-historia/create', 'Admin\MinhaHistoriaController@create')->name('minhahistoria');
    Route::post('/minha-historia/update/{type}', 'Admin\MinhaHistoriaController@update')->name('minhahistoria.update');

    Route::get('/fale', 'Admin\FaleController@index')->name('fale');
    Route::get('/contato', 'Admin\ContatoController@index')->name('contato');
});
