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

////////////////////////////////////////
Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard')->name('dashboard');
Route::post('/admin-dashboard','AdminController@dashboard')->name('admin.dashboard');

Route::get('/logout','AdminController@log_out')->name('admin.logout');

//Danh muc san pham
Route::get('/add-product','CategoriesProduct@add_product')->name('add-product');
Route::get('/all-products','CategoriesProduct@all_products')->name('all-products');

//Luu danh muc san pham
Route::post('/save_categoryProduct','CategoriesProduct@save_categoryProduct')->name('save-categoryProduct');

//An hien cac danh muc san pham
Route::get('/activeProduct/{category_id}','CategoriesProduct@activeProduct')->name('activeProduct');
Route::get('/unactiveProduct/{category_id}','CategoriesProduct@unactiveProduct')->name('unactiveProduct');

//Update
Route::get('/edit-product/{category_id}','CategoriesProduct@edit_product')->name('edit-product');
Route::get('/delete-product/{category_id}','CategoriesProduct@delete_product')->name('delete-product');
Route::post('/update_categoryProduct/{category_id}','CategoriesProduct@update_categoryProduct')->name('update-categoryProduct');

//Product
Route::get('/add-product-sp','ProductController@add_product_sp')->name('add-product-sp');
Route::get('/all-products-sp','ProductController@all_products_sp')->name('all-products-sp');
Route::get('/edit-product-sp/{product_id}','ProductController@edit_product_sp')->name('edit-product-sp');
Route::get('/delete-product-sp/{product_id}','ProductController@delete_product_sp')->name('delete-product-sp');
Route::get('/activeProduct-sp/{product_id}','ProductController@activeProduct_sp')->name('activeProduct-sp');
Route::get('/unactiveProduct-sp/{product_id}','ProductController@unactiveProduct_sp')->name('unactiveProduct-sp');

Route::post('/save_Product-sp','ProductController@save_Product_sp')->name('save-Product-sp');
Route::post('/update_Product-sp/{product_id}','ProductController@update_Product_sp')->name('update-Product-sp');



