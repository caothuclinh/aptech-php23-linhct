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
Route::get('users/index','UserController@index');
Route::get('users/show/{user}','UserController@show');
Route::POST('users/delete/{id}','UserController@destroy');
//them
Route::get('users/edit/{user}','UserController@edit');
Route::POST('users/update/{user}','UserController@update');
Route::get('users/create','UserController@create');
Route::POST('users/store','UserController@store');
