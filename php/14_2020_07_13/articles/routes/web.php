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
Route::get('trang-chu','ArticleController@index')->name('articles.index');
Route::get('chi-tiet-bai-viet/{article}','ArticleController@show')->name('articles.show');

Route::get('them-moi-bai-viet','ArticleController@create')->name('articles.create');
Route::PATCH('them-moi-bai-viet','ArticleController@store')->name('articles.store');
Route::DELETE('xoa-bai-viet/{article}','ArticleController@destroy')->name('articles.delete');

Route::get('sua-bai-viet/{article}','ArticleController@edit')->name('articles.edit');
Route::PUT('sua-bai-viet/{article}','ArticleController@store')->name('articles.update');
Route::get('restore-bai-viet','ArticleController@restore')->name('articles.restore');
Route::POST('restore-bai-viet/{article}','ArticleController@restored')->name('articles.stored_at');



