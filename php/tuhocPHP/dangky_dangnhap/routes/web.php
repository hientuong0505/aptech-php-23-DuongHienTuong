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

Route::get('/register','UserControllers@create');
Route::post('/register','UserControllers@store')->name('newRegister');

Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard')->name('dashboard');
Route::post('/admin-dashboard','AdminController@dashboard')->name('admin.dashboard');



