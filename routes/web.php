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

Route::post('/Fruits/create', 'FruitController@store');
Route::get('/Fruits/create', 'FruitController@create');
Route::get('Fruits/edit/{id}', 'FruitController@edit');
Route::post('Fruits/edit/{id}', 'FruitController@update');
Route::delete('Fruits/{id}', 'FruitController@destroy');
Route::get('Fruits/show/{id}', 'FruitController@show');
Route::get('Fruits', 'FruitController@index');

