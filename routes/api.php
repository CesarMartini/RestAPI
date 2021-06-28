<?php

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1'], function () {
    Route::middleware('auth:api')->get('/user', function (Request $request) {
        return $request->user();
    });
});

/**
 * Nota: Agrupar rotas de api sob o diretório Api\v1 nas controllers
 */

/*
// POSTS (ROTA DESATIVADA)
Route::group(['prefix' => 'v1', 'namespace' => 'Api\v1'], function () {
    Route::apiResource('/posts', 'PostController');
    Route::group(['prefix' => 'posts' ], function () {
        Route::apiResource('{post}/comments', 'CommentController');
    });
});
*/

// AUTENTICAR
Route::group([ 'prefix' => 'v1', 'namespace' => 'Api\v1'], function (){ 
    Route::group(['middleware' => ['guest:api']], function () {
        Route::post('login', 'AuthController@login');
    });
}); 

// DADOS
Route::group(['prefix' => 'v1', 'namespace' => 'Api\v1'], function () {
    Route::apiResource('/dados', 'DadosController');
});

