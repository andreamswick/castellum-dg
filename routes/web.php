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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index');

    Route::get('/items', 'ItemsController@index')->name('items.index');
    Route::post('/items', 'ItemsController@store')->name('items.store');
    Route::get('/items/create', 'ItemsController@create')->name('items.create');
    Route::get('/items/{item}', 'ItemsController@show')->name('items.show');
    Route::delete('/items/{item}', 'ItemsController@destroy')->name('items.destroy');
    Route::patch('/items/{item}', 'ItemsController@update')->name('items.update');
    Route::post('/items/{id}/restore', 'ItemsController@restore')->name('items.restore');
    Route::get('/items/{item}/edit', 'ItemsController@edit')->name('items.edit');
    Route::get('/items/{item}/purchased', 'ItemsController@purchased');

    Route::get('/visits', 'VisitsController@index')->name('visits.index');
    Route::post('/visits', 'VisitsController@store')->name('visits.store');
    Route::get('/visits/create', 'VisitsController@create')->name('visits.create');
    Route::get('/visits/{visit}', 'VisitsController@show')->name('visits.show');
    Route::delete('/visits/{visit}', 'VisitsController@destroy')->name('visits.destroy');
    Route::patch('/visits/{visit}', 'VisitsController@update')->name('visits.update');
    Route::post('/visits/{id}/restore', 'VisitsController@restore')->name('visits.restore');
    Route::get('/visits/{visit}/edit', 'VisitsController@edit')->name('visits.edit');

    Route::post('/visits/{visit}/comments', 'CommentsController@store')->name('comments.store');

    Route::get('/users', 'UsersController@index')->name('users.index');
    Route::get('/users/{user}', 'UsersController@show')->name('users.show');
    Route::get('/users/{user}/make-admin', 'UsersController@makeAdmin')->name('users.make-admin');
    Route::delete('/users/{user}', 'UsersController@destroy')->name('users.destroy');
    Route::patch('/users/{user}', 'UsersController@update')->name('users.update');
    Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');

    Route::get('/trash-bin', 'HomeController@trash')->name('trash-bin');

    Route::get('/seed-roles', function() {
        Spatie\Permission\Models\Role::create(['name' => 'admin']);

        Auth::user()->assignRole('admin');
    });
});
