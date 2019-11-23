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

// Rota da API disponibilizada para inserir novos registros de aeronaves
// Para mais detalhes verificar o método 'apiCreate" na Controller 'AirplaneController'
Route::post("/apiCreate", "AirplaneController@apiCreate");

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



