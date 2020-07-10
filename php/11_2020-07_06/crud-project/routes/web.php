<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'users'],function(){

	Route::get('show','UserController@index');
	Route::get('{user}/show','UserController@show');

	Route::DELETE('delete/{user}','UserController@destroy');
	// sửa thông tin người dùng
	Route::get('edit/{user}','UserController@edit');
	Route::PATCH('update/{user}','UserController@update');
	// them người dùng mới
	Route::get('create','UserController@create');
	Route::PATCH('store','UserController@store');
	Route::get('nhanvien', 'UserController@getNhanVien');
	Route::get('quantri', 'UserController@getQuanTri');
	
});
