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

Route::get('/viewManageOrder', 'UserController@viewManageOrder');
Route::get('/viewManageRoomBooking', 'UserController@viewManageRoomBooking');
Route::get('/viewManageLend', 'UserController@viewManageLend');
Route::get('/viewManageBring', 'UserController@viewManageBring');
Route::get('/viewManageRepair', 'UserController@viewManageRepair');
Route::get('/viewFormStock', 'UserController@viewFormStock');
Route::get('/viewFormMaterial', 'UserController@viewFormMaterial');
Route::get('/viewFormDevice', 'UserController@viewFormDevice');

Route::get('/viewFormOrder', 'UserController@viewFormOrder');
Route::get('/viewFormRoomBooking', 'UserController@viewFormRoomBooking');
Route::get('/viewFormLend', 'UserController@viewFormLend');
Route::get('/viewFormBring', 'UserController@viewFormBring');
Route::get('/viewFormRepair', 'UserController@viewFormRepair');

//RoomLab
Route::get('/viewManageRoom', 'RoomLabController@index');
Route::get('/viewFormRoom', 'RoomLabController@create');
Route::post('/addRoomLab','RoomLabController@store');
Route::get('/delRoomLab/{id}',['as'=>'delRoom','uses'=>'RoomLabController@destroy']
);
Route::get('/editRoomLab/{id}',['as'=>'editRoom','uses'=>'RoomLabController@edit']
);
Route::any('/updateRoomLab/{id}',['as'=>'updateRoom','uses'=>'RoomLabController@update']);

//
Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


