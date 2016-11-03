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
Route::auth();

Route::get('/images/{filename}', function ($filename)
{
	$path = storage_path('sampul').'/'.$filename;
	$file = \File::get($path);
	$type = \File::mimeType($path);
	$response = \Response::make($file);
	$response->header("Content-Type",$type);
	return $response;
});


Route::get('/','BlogController@index');
Route::get('home','BlogController@index');



Route::get('artikel','ArtikelController@index');
Route::get('artikel/add','ArtikelController@add');
Route::post('artikel/save','ArtikelController@save');
Route::get('artikel/edit/{id}','ArtikelController@edit');
Route::post('artikel/update','ArtikelController@update');
Route::get('artikel/delete/{id}','ArtikelController@delete');
Route::post('komentar','ArtikelController@komentar');
Route::get('hapuskomentar/{id}','ArtikelController@hapuskomentar');	

Route::get('blog','BlogController@index');
Route::get('{id}','BlogController@detail');
Route::get('{id}/pdf','BlogController@pdf');





