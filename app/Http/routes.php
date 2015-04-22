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

//Room
Route::get('/viewManageRoom', 'RoomController@index');
Route::get('/viewFormRoom', 'RoomController@create');
Route::post('/addRoom', 'RoomController@store');
Route::get('/delRoom/{id}', ['as' => 'delRoom', 'uses' => 'RoomController@destroy']);
Route::get('/editRoom/{id}', ['as' => 'editRoom', 'uses' => 'RoomController@edit']);
Route::any('/updateRoom/{id}', ['as' => 'updateRoom', 'uses' => 'RoomController@update']);

// Stock
Route::get('/viewManageStock', 'StockController@index');
Route::get('/viewFormStock', 'StockController@create');
Route::post('/addStock', 'StockController@store');
Route::get('/delStock/{id}', ['as' => 'delStock', 'uses' => 'StockController@destroy']);
Route::get('/editStock/{id}', ['as' => 'editStock', 'uses' => 'StockController@edit']);
Route::any('/updateStock/{id}', ['as' => 'updateStock', 'uses' => 'StockController@update']);

// Home
Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);


