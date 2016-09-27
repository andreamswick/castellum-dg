<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/items', 'ItemsController@index');
Route::post('/items', 'ItemsController@store');
Route::get('/items/create', 'ItemsController@create');
Route::get('/items/{item}/edit', 'ItemsController@edit');
Route::patch('/items/{item}', 'ItemsController@update');
Route::delete('/items/{item}', 'ItemsController@destroy');
