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


Route::group(['middleware' => 'auth'], function () {
    //
Route::get('c_stor','Views@clientStorage');
Route::resource('admin','AdminController');
Route::resource('client','ClientController');
Route::get('addStorage','AdminController@addStorage');
Route::post('CreateStorage','AdminController@CreateStorage');
Route::get('solicitudes','AdminController@solicitudes');
rOUTE::GET('despachoSolicitud','AdminController@despachoSolicitud');
Route::get('detalleSolicitud','AdminController@detalleSolicitud');
});


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
