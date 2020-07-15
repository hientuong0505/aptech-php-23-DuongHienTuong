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

Route::get('/users','UserController@index')->name('users.index'); //Trang chu

//Xem 1 Nguoi Dung
Route::get('/users/{user}','UserController@show')->where('user','[0-9]+')->name('users.show');

//Xoa NgDung
Route::delete('/users/{user}','UserController@destroy')->name('users.destroy')->where('user','[0-9]+');

//Tao
Route::post('/users', 'UserController@store')->name('users.store');
Route::get('/users/create', 'UserController@create')->name('users.create');

//Edit nguoi dung
Route::get('/users/{user}/edit', 'UserController@edit')->name('users.edit')->where('user','[0-9]+');
Route::put('users/{user}', 'UserController@update')->name('users.update')->where('user','[0-9]+');
