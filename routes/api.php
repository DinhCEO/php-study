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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/version', function (Request $request) {
    return response()->json([
        'version' => 'v 1.0.1'
    ])->setStatusCode(200);
});


Route::post('/users', 'Users\UserController@store');
Route::get('/user/{id}', 'Users\UserController@get');
Route::post('/user/queue', 'Users\UserController@testQueue');

Route::get('/flight/{id}', 'Flight\FlightController@get');
Route::post('/flight', 'Flight\FlightController@create');
