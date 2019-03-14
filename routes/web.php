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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/proveedor', 'ProveedorController');
Route::resource('/ordencompra', 'OrdenController');
Route::resource('/pendientegsi', 'PendienteController');
Route::get('/porcargar', 'PageController@porcargar')->name('porcargar');
Route::get('/porenviar', 'PageController@porenviar')->name('porenviar');
Route::get('/cargado', 'PageController@cargado')->name('cargado');
