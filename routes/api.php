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

Route::get('proveedor', function(){
	
	return datatables()
	->eloquent(App\Proveedores::query())
	->toJson();
});

Route::get('ordencompra', function(){
	
	return datatables()
	->eloquent(App\Orden::query())
  ->addColumn('btn', 'actions')
  ->rawColumns(['btn'])
	->toJson();
});
