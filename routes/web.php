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

Route::get('/home/busca/{buscar}', 'AirplaneController@buscaEspecifica')->name('buscaEspecifica');

Route::get('/home/exibe/{buscar}', 'AirplaneController@exibe')->name('aviaoExibe');

Route::get('/cadastro', function () {
    return view('cadastro');
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
