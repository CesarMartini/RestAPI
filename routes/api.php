<?php

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1'], function () {
    Route::middleware('auth:api')->get('/user', function (Request $request) {
        return $request->user();
    });
});

/**
 * Agrupar rotas de api v1 routes sob o diretório Api\v1 nas controllers
 */
Route::group(['prefix' => 'v1', 'namespace' => 'Api\v1'], function () {
    Route::apiResource('/posts', 'PostController');
    Route::group(['prefix' => 'posts' ], function () {
        Route::apiResource('{post}/comments', 'CommentController');
    });
});

Route::get('/ok', function(){
    return ['status' => true];
});