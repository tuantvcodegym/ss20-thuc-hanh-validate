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

Route::get('index', 'ValidateController@index')->name('index');

Route::get('create', 'ValidateController@create')->name('create');
Route::post('create', 'ValidateController@store')->name('insert');

Route::get('{id}/edit', 'ValidateController@edit')->name('edit');
Route::post('{id}/edit', 'ValidateController@update')->name('update');

Route::get('{id}/destroy', 'ValidateController@destroy')->name('destroy');
