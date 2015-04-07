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


Route::get('/', 'UserController@index');
Route::get('/viewStock', 'UserController@viewStock');
Route::get('/viewMaterial', 'UserController@viewMaterial');
Route::get('/viewDevice', 'UserController@viewDevice');
Route::get('/viewRoom', 'UserController@viewRoom');
Route::get('/viewOrder', 'UserController@viewOrder');
Route::get('/viewRoomBooking', 'UserController@viewRoomBooking');
Route::get('/viewLend', 'UserController@viewLend');
Route::get('/viewBring', 'UserController@viewBring');
Route::get('/viewRepair', 'UserController@viewRepair');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
