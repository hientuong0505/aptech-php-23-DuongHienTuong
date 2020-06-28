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

Route::get('get-method', function () {
    echo "Day la method Get";
    echo "<form> action='delete-method' method='post'";
    echo csrf_field();
    echo "<input type='hidden' value='delete' name='_method'>";
    echo "<input type='submit' value='submit'>";
    echo "</form>";
});

Route::post('post-method', function(){
    echo "Day la post Method";
});

Route::put('put-method', function(){
    echo "Day la putss Method";
});

Route::patch('patch-method', function(){
    echo "Day la Patch Method";
});

Route::delete('delete-method', function(){
    echo "Day la delete Method";
});

