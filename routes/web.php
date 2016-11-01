<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'FrontController@index');
Route::get('contacto', 'FrontController@contacto');
Route::get('sobre', 'FrontController@sobre');


Route::get('indexAdmin', 'BackController@index');

Route::get('classificacao', 'ClassificacaoController@index');
Route::get('agenda', 'FrontController@agenda');

Route::get('equipa', 'EquipaController@create');
Route::resource('equipas', 'EquipaController');
Route::get('equipaLista', 'EquipaController@index');

Route::get('jogador', 'JogadorController@create');
Route::resource('jogadores', 'JogadorController');
Route::get('jogadorLista', 'JogadorController@index');

Route::get('edicao', 'EdicaoController@create');
Route::resource('edicoes', 'EdicaoController');
Route::get('edicaoLista', 'EdicaoController@index');

Route::get('jogo', 'JogoController@store');