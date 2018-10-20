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

Route::middleware('api')->namespace('api')->group(function () {
	Route::prefix('papers')->group(function () {
		Route::post('all', 'PapersController@all')->name('api.papers.all');
		Route::post('{id}', 'PapersController@show')->name('api.papers.show');
	});
});
