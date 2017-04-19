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

Route::get('/', 'TaskController@index');

Route::get('/create', 'TaskController@create');
Route::post('/create', 'TaskController@store');
Route::get('/tasks/{id}', 'TaskController@show');
Route::get('tasks', 'TaskController@show');
Route::get('tasks.index', 'TaskController@index');
Route::PATCH('edit/{id}', 'TaskController@update');
Route::get('edit/{id}', 'TaskController@edit');
//Route::post('/create', 'TaskController@store');