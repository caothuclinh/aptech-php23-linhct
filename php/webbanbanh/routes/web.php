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
Route::get('index',
	[
		'as' => 'trang-chu',
		'uses' =>'PageController@getIndex'
	]);
Route::get('loai-san-pham/{type}',
[
	'as' => 'loaisanpham',
	'uses' => 'PageController@getLoaiSp'
]);
Route::get('chi-tiet-san-pham/{id}',
[
	'as' => 'chitietsanpham',
	'uses' => 'PageController@getChiTiet'
]);

Route::get('lien-he',
[
	'as' => 'lienhe',
	'uses' => 'PageController@getLienHe'
]);

Route::get('gioi-thieu',
[
	'as' => 'gioithieu',
	'uses' => 'PageController@getGioiThieu'
]);
Route::get('add-to-cart/{id}',[
	'as' => 'themvaogiohang',
	'uses' =>'PageController@getAddToCart'
]);
Route::get('del-cart/{id}',[
	'as' => 'xoagiohang',
	'uses' => 'PageController@getDelItemCart'
]);
Route::get('dat-hang',[
	'as' => 'dathang',
	'uses' => 'PageController@getCheckout'
]);
Route::post('dat-hang',[
	'as' => 'dathang',
	'uses' => 'PageController@postCheckout'
]);
Route::get('dang-nhap',[
	'as' => 'login',
	'uses' => 'PageController@getLogin'
]);
Route::post('dang-nhap',[
	'as' => 'singin',
	'uses' => 'PageController@postLogin'
]);

Route::get('dang-ky',[
	'as' => 'signup',
	'uses' =>'PageController@getSignin'
]);
Route::post('dang-ky',[
	'as' => 'signup',
	'uses' =>'PageController@postSignin'
]);
Route::post('dang-xuat',[
	'as' =>'logout',
	'uses' => 'PageController@postLogOut'
]);
Route::get('search',[
	'as' => 'search',
	'uses' =>'PageController@getSearch'
]);
