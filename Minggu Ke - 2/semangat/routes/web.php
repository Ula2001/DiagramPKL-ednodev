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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/suplier', 'suplierController@index');
Route::get('/suplier/add', 'suplierController@create');
Route::post('/suplier/adding', 'suplierController@store');
Route::get('/suplier/delete/{id}', 'suplierController@destroy');
Route::get('/suplier/edit/{id}', 'suplierController@edit');
Route::post('/suplier/update/{id}', 'suplierController@update');
