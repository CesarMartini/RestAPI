<?php

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Route;

/**
 * Nota: Agrupar rotas de api sob o diretório Api\v1 nas controllers
 */

Route::group(['prefix' => 'v1'], function () {
    Route::middleware('auth:api')->get('/user', function (Request $request) {
        return $request->user();
    });
});

// [POST] AUTENTICAR USUÁRIO CADASTRADO
Route::group([ 'prefix' => 'v1', 'namespace' => 'Api\v1'], function (){ 
    Route::group(['middleware' => ['guest:api']], function () {
        Route::post('login', 'AuthController@login');
        Route::get('user', 'AuthController@getUser');
    });
}); 

// DADOS
Route::group(['prefix' => 'v1', 'namespace' => 'Api\v1'], function () {
    Route::group(['middleware' => 'auth:api'], function() {
        Route::apiResource('/dados', 'DadosController');
    });
});