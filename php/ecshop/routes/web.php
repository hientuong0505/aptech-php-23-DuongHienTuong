<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home')->middleware('auth');
Route::group(['middleware'=>'guest'], function () {
    Route::get('login','AdminController@loginAdmin')->name('login');
    Route::post('login','AdminController@postLoginAdmin');
});
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['prefix'=>'admin','middleware'=>'auth'], function () {
    
    //Danh muc
    Route::prefix('categories')->group(function () {

        Route::get('/',[
            'as' => 'categories.index',
            'uses' => 'CategoryController@index'
        ]);
    
        Route::get('/create',[
            'as' => 'categories.create',
            'uses' => 'CategoryController@create'
        ]);
        Route::post('/store',[
            'as' => 'categories.store',
            'uses' => 'CategoryController@store'
        ]);
    
        Route::get('/edit/{id}',[
            'as' => 'categories.edit',
            'uses' => 'CategoryController@edit'
        ]);
    
        Route::post('/update/{id}',[
            'as' => 'categories.update',
            'uses' => 'CategoryController@update'
        ]);
    
        Route::get('/delete/{id}',[
            'as' => 'categories.delete',
            'uses' => 'CategoryController@destroy'
        ]);
    });

    //Menu
    Route::prefix('menus')->group(function () {
        
        Route::get('/',[
            'as' => 'menus.index',
            'uses' => 'menuController@index'
        ]);
    
        Route::get('/create',[
            'as' => 'menus.create',
            'uses' => 'menuController@create'
        ]);
        Route::post('/store',[
            'as' => 'menus.store',
            'uses' => 'menuController@store'
        ]);
    
        Route::get('/edit/{id}',[
            'as' => 'menus.edit',
            'uses' => 'menuController@edit'
        ]);
    
        Route::post('/update/{id}',[
            'as' => 'menus.update',
            'uses' => 'menuController@update'
        ]);
    
        Route::get('/delete/{id}',[
            'as' => 'menus.delete',
            'uses' => 'menuController@destroy'
        ]);
    });

    //San pham
    Route::prefix('product')->group(function () {
    
        Route::get('/',[
            'as' => 'product.index',
            'uses' => 'ProductController@index'
        ]);
    
        Route::get('/create',[
            'as' => 'product.create',
            'uses' => 'ProductController@create'
        ]);
        Route::post('/store',[
            'as' => 'product.store',
            'uses' => 'ProductController@store'
        ]);

        Route::get('/edit/{id}',[
            'as' => 'product.edit',
            'uses' => 'ProductController@edit'
        ]);
        Route::post('/update/{id}',[
            'as' => 'product.update',
            'uses' => 'ProductController@update'
        ]);

        Route::get('/delete/{id}',[
            'as' => 'product.delete',
            'uses' => 'ProductController@destroy'
        ]);
    });

    //Slider
    Route::prefix('slider')->group(function () {
    
        Route::get('/',[
            'as' => 'slider.index',
            'uses' => 'SliderAdminController@index'
        ]);

        Route::get('/create',[
            'as' => 'slider.create',
            'uses' => 'SliderAdminController@create'
        ]);

        Route::post('/store',[
            'as' => 'slider.store',
            'uses' => 'SliderAdminController@store'
        ]);

        Route::get('/edit/{id}',[
            'as' => 'slider.edit',
            'uses' => 'SliderAdminController@edit'
        ]);
        Route::post('/update/{id}',[
            'as' => 'slider.update',
            'uses' => 'SliderAdminController@update'
        ]);

        Route::get('/delete/{id}',[
            'as' => 'slider.delete',
            'uses' => 'SliderAdminController@delete'
        ]);
    });
});


Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});


