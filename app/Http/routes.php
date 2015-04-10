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
Route::get('/viewManageStock', 'UserController@viewManageStock');
Route::get('/viewManageMaterial', 'UserController@viewManageMaterial');
Route::get('/viewManageDevice', 'UserController@viewManageDevice');
Route::get('/viewManageRoom', 'UserController@viewManageRoom');
Route::get('/viewManageOrder', 'UserController@viewManageOrder');
Route::get('/viewManageRoomBooking', 'UserController@viewManageRoomBooking');
Route::get('/viewManageLend', 'UserController@viewManageLend');
Route::get('/viewManageBring', 'UserController@viewManageBring');
Route::get('/viewManageRepair', 'UserController@viewManageRepair');
Route::get('/viewFormStock', 'UserController@viewFormStock');
Route::get('/viewFormMaterial', 'UserController@viewFormMaterial');
Route::get('/viewFormDevice', 'UserController@viewFormDevice');
Route::get('/viewFormRoom', 'UserController@viewFormRoom');
Route::get('/viewFormOrder', 'UserController@viewFormOrder');
Route::get('/viewFormRoomBooking', 'UserController@viewFormRoomBooking');
Route::get('/viewFormLend', 'UserController@viewFormLend');
Route::get('/viewFormBring', 'UserController@viewFormBring');
Route::get('/viewFormRepair', 'UserController@viewFormRepair');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
