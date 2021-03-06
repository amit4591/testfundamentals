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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/


Route::get('/user', function (Request $request){
    return $request->user();
})->middleware('auth:api');


Route::resource('/v1/tasks', v1\TaskController::class);

//api/v1/tasks

Route::group(['prefix' => 'api/v1', 'middleware' => 'auth:api'], function () {
    Route::post('/short', 'UrlMapperController@store');
});