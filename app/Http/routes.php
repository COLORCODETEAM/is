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

// Home
Route::get('home', 'HomeController@index');

// User
Route::get('/', 'UserController@index');

// Room
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

// Material
Route::get('/viewManageMaterial', 'MaterialController@index');
Route::get('/viewFormMaterial', 'MaterialController@create');
Route::post('/addMaterial', 'MaterialController@store');
Route::get('/delMaterial/{id}', ['as' => 'delMaterial', 'uses' => 'MaterialController@destroy']);
Route::get('/editMaterial/{id}', ['as' => 'editMaterial', 'uses' => 'MaterialController@edit']);
Route::any('/updateMaterial/{id}', ['as' => 'updateMaterial', 'uses' => 'MaterialController@update']);
Route::get('/listAvailableMaterialItems', 'MaterialController@listAvailableMaterialItems');
Route::get('/materialInformation/{id}', ['as' => 'materialInformation', 'uses' => 'MaterialController@materialInformation']);

// Device
Route::get('/viewManageDevice', 'DeviceController@index');
Route::get('/viewFormDevice', 'DeviceController@create');
Route::post('/addDevice', 'DeviceController@store');
Route::get('/delDevice/{id}', ['as' => 'delDevice', 'uses' => 'DeviceController@destroy']);
Route::get('/editDevice/{id}', ['as' => 'editDevice', 'uses' => 'DeviceController@edit']);
Route::any('/updateDevice/{id}', ['as' => 'updateDevice', 'uses' => 'DeviceController@update']);
Route::get('/listAvailableDeviceItems', 'DeviceController@listAvailableDeviceItems');
Route::get('/deviceInformation/{id}', ['as' => 'deviceInformation', 'uses' => 'DeviceController@deviceInformation']);

// Order
Route::get('/viewManageOrder', 'OrderController@index');
Route::get('/viewFormOrder', 'OrderController@create');
Route::post('/addOrder', 'OrderController@store');
Route::get('/delOrder/{id}', ['as' => 'delOrder', 'uses' => 'OrderController@destroy']);
Route::get('/editOrder/{id}', ['as' => 'editOrder', 'uses' => 'OrderController@edit']);
Route::any('/updateOrder/{id}', ['as' => 'updateOrder', 'uses' => 'OrderController@update']);
Route::get('/delOrderDetail/{id}', ['as' => 'delOrderDetail', 'uses' => 'OrderController@destroyDetail']);

// Room Booking
Route::get('/viewManageRoomBooking', 'RoomBookingController@index');
Route::get('/viewFormRoomBooking', 'RoomBookingController@create');
Route::post('/addRoomBooking', 'RoomBookingController@store');
Route::get('/delRoomBooking/{id}', ['as' => 'delRoomBooking', 'uses' => 'RoomBookingController@destroy']);
Route::get('/editRoomBooking/{id}', ['as' => 'editRoomBooking', 'uses' => 'RoomBookingController@edit']);
Route::any('/updateRoomBooking/{id}', ['as' => 'updateRoomBooking', 'uses' => 'RoomBookingController@update']);
Route::get('/bookingCalendar', 'RoomBookingController@bookingCalendar');
Route::get('/delRoomBookingDetail/{id}', ['as' => 'delRoomBookingDetail', 'uses' => 'RoomBookingController@destroyDetail']);

// Lend Device
Route::get('/viewManageLendDevice', 'LendDeviceController@index');
Route::get('/viewFormLendDevice', 'LendDeviceController@create');
Route::post('/addLendDevice', 'LendDeviceController@store');
Route::get('/delLendDevice/{id}', ['as' => 'delLendDevice', 'uses' => 'LendDeviceController@destroy']);
Route::get('/editLendDevice/{id}', ['as' => 'editLendDevice', 'uses' => 'LendDeviceController@edit']);
Route::any('/updateLendDevice/{id}', ['as' => 'updateLendDevice', 'uses' => 'LendDeviceController@update']);
Route::get('/delLendDeviceDetail/{id}', ['as' => 'delLendDeviceDetail', 'uses' => 'LendDeviceController@destroyDetail']);

// Bring Material
Route::get('/viewManageBringMaterial', 'BringMaterialController@index');
Route::get('/viewFormBringMaterial', 'BringMaterialController@create');
Route::post('/addBringMaterial', 'BringMaterialController@store');
Route::get('/delBringMaterial/{id}', ['as' => 'delBringMaterial', 'uses' => 'BringMaterialController@destroy']);
Route::get('/editBringMaterial/{id}', ['as' => 'editBringMaterial', 'uses' => 'BringMaterialController@edit']);
Route::any('/updateBringMaterial/{id}', ['as' => 'updateBringMaterial', 'uses' => 'BringMaterialController@update']);
Route::get('/delBringMaterialDetail/{id}', ['as' => 'delBringMaterialDetail', 'uses' => 'BringMaterialController@destroyDetail']);

// Mapping Computer
Route::get('/viewManageMappingComputer', 'MappingComputerController@index');
Route::get('/viewFormMappingComputer', 'MappingComputerController@create');
Route::post('/addMappingComputer', 'MappingComputerController@store');
Route::get('/delMappingComputer/{id}', ['as' => 'delMappingComputer', 'uses' => 'MappingComputerController@destroy']);
Route::get('/editMappingComputer/{id}', ['as' => 'editMappingComputer', 'uses' => 'MappingComputerController@edit']);
Route::any('/updateMappingComputer/{id}', ['as' => 'updateMappingComputer', 'uses' => 'MappingComputerController@update']);

// Repair Device
Route::get('/viewManageRepair', 'RepairController@index');
Route::get('/viewFormRepair', 'RepairController@create');
Route::post('/addRepair', 'RepairController@store');
Route::get('/delRepair/{id}', ['as' => 'delRepair', 'uses' => 'RepairController@destroy']);
Route::get('/editRepair/{id}', ['as' => 'editRepair', 'uses' => 'RepairController@edit']);
Route::any('/updateRepair/{id}', ['as' => 'updateRepair', 'uses' => 'RepairController@update']);
Route::get('/delRepairDetail/{id}', ['as' => 'delRepairDetail', 'uses' => 'RepairController@destroyDetail']);

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);


