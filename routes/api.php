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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::get('/visits', function (Request $request) {
    $query = \App\Visit::select('id', 'name as title', 'start', 'end');

    if ($request->has('start')) {
        $query->where('start', '>=', $request->start);
    }
    if ($request->has('end')) {
        $query->where('end', '<=', $request->end);
    }

    return $query->get()->each(function ($item, $key) {
        $item->url = env('APP_URL') . '/visits/' . $item->id;
    });
});
