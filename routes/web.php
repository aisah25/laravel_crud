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

Route::get('/pertanyaan/create','PertanyaansController@create');
Route::post('/pertanyaan/{pertanyaan}','PertanyaansController@show');
Route::get('/pertanyaan','PertanyaansController@index');