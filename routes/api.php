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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/


Route::group(['prefix'=>'/v1','middleware' => 'cors'], function(){
	Route::get('/code/{code}',[
		'as'=>'code.send',
		'uses'=>'CodesController@CodeGet'
	]);
	Route::get('/datos/{nombre}/{apellido}/{telefono}/{telefono2}/{direccion}/{email}',[
		'as'=>'datos.send',
		'uses'=>'DatosController@SaveDatos'
	]);
});