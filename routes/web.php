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
    return view('master');
});
Route::get('wellcome', function () {
    return view('wellcomeScreen');
});

Route::get('b_menu', function () {
    return view('b_menu');
});

Route::get('b_add_p', "BusinessController@showAddPage");
Route::get('b_home', "BusinessController@showHome");
Route::post('add_p_server',"ProductController@create");
Route::get('p_view_p', "ProductController@viewProduct");