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

Route::post('paciente', function(){
	return datatables()
		->eloquent(App\Persona::query())
		->addColumn('btn', 'paciente/action')
		->rawColumns(['btn'])
		->toJson();
});

Route::post('examenes', function(){
	return datatables()
		->eloquent(App\Examen::query())
		->addColumn('btn', 'examen/action')
		->rawColumns(['btn'])
		->toJson();
});
