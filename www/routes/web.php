<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->group(['prefix' => 'api/v1', 'middleware' => 'jwt.auth'], function () use ($router) {
	
	//Sessions CRUD
	
	$router->get('sessions',  ['uses' => 'SessionController@showAllSessions', function() {$users = \App\User::all();return response()->json($users);}]);

	$router->get('sessions/{id}', ['uses' => 'SessionController@showOneSession', function() {$users = \App\User::all();return response()->json($users);}]);

	$router->post('sessions', ['uses' => 'SessionController@create', function() {$users = \App\User::all();return response()->json($users);}]);

	$router->delete('sessions/{id}', ['uses' => 'SessionController@delete', function() {$users = \App\User::all();return response()->json($users);}]);

	$router->put('sessions/{id}', ['uses' => 'SessionController@update', function() {$users = \App\User::all();return response()->json($users);}]);
	
	//Results CRUD
	
	$router->get('results',  ['uses' => 'ResultController@showAllResults', function() {$users = \App\User::all();return response()->json($users);}]);
	
	$router->get('results/{id}', ['uses' => 'ResultController@showOneResult', function() {$users = \App\User::all();return response()->json($users);}]);

	$router->post('results', ['uses' => 'ResultController@create', function() {$users = \App\User::all();return response()->json($users);}]);
	
	$router->get('check', ['uses' => 'AuthController@check', function() {$users = \App\User::all();return response()->json($users);}]);
});

$router->post('auth/login', ['uses' => 'AuthController@authenticate']);

$router->group(['middleware' => 'jwt.auth'], function() use ($router) {
    $router->get('users', function() {$users = \App\User::all();return response()->json($users);});
});