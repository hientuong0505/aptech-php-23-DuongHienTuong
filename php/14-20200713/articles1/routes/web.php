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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/articles', 'ArticleController@index')->name('articles.index');




Route::get('/articles/{article}','ArticleController@show')->where('article','[0-9]+')->name('articles.show');


Route::delete('/articles/{article}','ArticleController@destroy')->name('articles.destroy')->where('article','[0-9]+');


Route::post('/articles', 'ArticleControllerr@store')->name('articles.store');
Route::get('/articles/create', 'ArticleController@create')->name('articles.create');


Route::get('/articles/{article}/edit', 'ArticleController@edit')->name('articles.edit')->where('article','[0-9]+');
Route::put('articles/{article}', 'ArticleController@update')->name('articles.update')->where('article','[0-9]+');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
