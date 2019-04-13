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

// Route::get/post('namaUrl', 'namaController@namaFungsi')

// show all
Route::get('kios/show','KiosController@index');
Route::get('koperasi/show','KoperasiController@index');

// show by id
Route::get('kios/show/{id}','KiosController@show');
Route::get('koperasi/show/{id}','KoperasiController@show');

// create
Route::post('kios/create','KiosController@create');
Route::post('koperasi/create','KoperasiController@create');

// edit
Route::post('kios/edit/{id}','KiosController@update');
Route::post('koperasi/edit/{id}','KoperasiController@update');

// delete
Route::get('kios/delete/{id}','KiosController@destroy');
Route::get('koperasi/delete/{id}','KoperasiController@destroy');








