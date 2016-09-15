<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('artikel','ArtikelController@index');
Route::get('artikel/add','ArtikelController@add');
Route::post('artikel/save','ArtikelController@save');
Route::get('artikel/edit/{id}','ArtikelController@edit');
Route::post('artikel/update','ArtikelController@update');
Route::get('artikel/delete/{id}','ArtikelController@delete');
