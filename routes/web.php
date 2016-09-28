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

Route::get('/items', 'ItemsController@index')->name('items.index');
Route::post('/items', 'ItemsController@store')->name('items.store');
Route::get('/items/create', 'ItemsController@create')->name('items.create');
Route::get('/items/{item}', 'ItemsController@show')->name('items.show');
Route::delete('/items/{item}', 'ItemsController@destroy')->name('items.destroy');
Route::patch('/items/{item}', 'ItemsController@update')->name('items.update');
Route::get('/items/{item}/edit', 'ItemsController@edit')->name('items.edit');
Route::get('/items/{item}/purchased', 'ItemsController@purchased');

Route::get('/visits', 'VisitsController@index')->name('visits.index');
Route::post('/visits', 'VisitsController@store')->name('visits.store');
Route::get('/visits/create', 'VisitsController@create')->name('visits.create');
Route::get('/visits/{visit}', 'VisitsController@show')->name('visits.show');
Route::delete('/visits/{visit}', 'VisitsController@destroy')->name('visits.destroy');
Route::patch('/visits/{visit}', 'VisitsController@update')->name('visits.update');
Route::get('/visits/{visit}/edit', 'VisitsController@edit')->name('visits.edit');

Route::post('/visits/{visit}/comments', 'CommentsController@store')->name('comments.store');
