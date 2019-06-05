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

Route::get('/homeBase', 'AirplaneController@index');

Route::post('/registerContact', 'AirplaneController@registerContact')->name('registerContact');

Route::get('/home/busca/{buscar}', 'AirplaneController@buscaEspecifica')->name('buscaEspecifica');

Route::get('/home/exibe/{buscar}', 'AirplaneController@exibe')->name('aviaoExibe');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



// ROTAS DO PAINEL DO ADM
Route::get('/cadastro', function () {
    return view('cadastro');
})->name('cadastro')->middleware('auth');

Route::get('/editar', function () {
    return view('editar');
})->name('editar')->middleware('auth');

Route::get('/estatisticas', 'AirplaneController@statistics')->name('listar')->middleware('auth');

Route::get('/listar', 'AirplaneController@indexTableADM')->name('listar')->middleware('auth');

Route::get('/edit', 'AirplaneController@edit')->name('edit')->middleware('auth');

Route::get('/listarContatos', 'AirplaneController@contactList')->name('listarContatos')->middleware('auth');

Route::get('/aircraftReport', 'AirplaneController@pdfReport')->name('aircraftReport')->middleware('auth');

Route::resource('controller', 'AirplaneController')->middleware('auth');

