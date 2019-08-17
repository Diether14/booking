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

Route::prefix('buildings')->group(function () {
    Route::get('getall', 'BuildingsController@index');
    Route::get('show/{id}', 'BuildingsController@show');
    Route::delete('destroy/{id}', 'BuildingsController@destroy');
});

Route::prefix('properties')->group(function () {
    Route::get('getall', 'PropertiesController@index');
    Route::get('show/{id}', 'PropertiesController@show');
    Route::delete('destroy/{id}', 'PropertiesController@destroy');
});