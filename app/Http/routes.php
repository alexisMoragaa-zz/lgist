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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

/**Rutas Administrador*/
Route::get('c_stor','Views@clientStorage');
Route::resource('admin','AdminController');
Route::get('addStorage','AdminController@addStorage');
Route::post('CreateStorage','AdminController@CreateStorage');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
