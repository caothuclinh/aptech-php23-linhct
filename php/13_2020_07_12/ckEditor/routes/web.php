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
Route::group(['prefix' =>'admin'],function(){
	// trang users
	Route::group(['prefix' =>'users'],function(){
	 	Route::get('trang-chu','UserController@index')->name('users.index');
		Route::get('chi-tiet-nguoi-dung/{id}','UserController@show')->name('users.show');
		Route::get('sua-thong-tin-nguoi-dung/{id}','UserController@edit')->name('users.edit');
		Route::PUT('sua-thong-tin-nguoi-dung/{id}','UserController@update')->name('users.update');
		Route::DELETE('xoa-nguoi-dung/{user}','UserController@destroy')->name('users.delete');
		Route::get('them-moi-nguoi-dung','UserController@create')->name('users.create');
		Route::PATCH('them-moi-nguoi-dung','UserController@store')->name('users.store');
 	});
		// trang blog
 	route::group(['prefix' => 'blogs'],function(){
		Route::get('trang-chu','BlogController@index')->name('blogs.index');
		Route::get('chi-tiet-bai-viet/{blog}','BlogController@show')->name('blogs.show');
		Route::get('sua-thong-tin-bai-viet/{blog}','BlogController@edit')->name('blogs.edit');
		Route::PUT('sua-thong-tin-bai-viet/{blog}','BlogController@update')->name('blogs.update');
		Route::DELETE('xoa-bai-viet/{blog}','BlogController@destroy')->name('blogs.delete');
		Route::get('them-moi-bai-viet','BlogController@create')->name('blogs.create');
		Route::PATCH('them-moi-bai-viet','BlogController@store')->name('blogs.store');
 	});
 		// trang san pham / products
 	route::group(['prefix' => 'products'],function(){
		Route::get('trang-chu','ProductController@index')->name('products.index');
		Route::get('chi-tiet-san-pham/{product}','ProductController@show')->name('products.show');
		Route::get('sua-thong-tin-san-pham/{product}','ProductController@edit')->name('products.edit');
		Route::PUT('sua-thong-tin-san-pham/{product}','ProductController@update')->name('products.update');
		Route::DELETE('xoa-mot-san-pham/{product}','ProductController@destroy')->name('products.delete');
		Route::get('them-moi-mot-san-pham','ProductController@create')->name('products.create');
		Route::PATCH('them-moi-mot-san-pham','ProductController@store')->name('products.store');
 	});
 	
});

