<?php

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

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');


Route::get('/categories', 'HomeController@show')->name('category');

Route::get('/save', 'HomeController@add')->name('save');
Route::post('/save', 'HomeController@create')->name('save');

Route::get('cate/del/{id}', 'HomeController@delete')->name('cate/del/{id}');

Route::get('edite', 'HomeController@new')->name('edite');
Route::get('cate/edit/{id}', 'HomeController@update')->name('cate/edit/{id}');
Route::get('cate/delete/{id}', 'HomeController@update')->name('cate/edit/{id}');



