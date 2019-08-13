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

Route::view('/', 'index');

Route::prefix('buildings')->group(function () {
    Route::view('/index', 'assets.buildings.index');
    Route::get('/edit/{id}', 'BuildingsController@edit');
    Route::get('/create', 'BuildingsController@create');
});
