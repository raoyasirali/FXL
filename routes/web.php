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

//Route::get('b_details_pdf', "AdminController@b_details_pdf");

Route::get('a_login', "AdminController@login");

Route::get('b_details_pdf', "AdminController@viewBusinesses");

Route::get('b_download_pdf', "AdminController@b_download_pdf");

//Email Routes
Route::get('feedback', "SendEmailController@index");

Route::post('sendEmail', "SendEmailController@send");




Route::get('a_chklogin', "AdminController@chkAlogin");

Route::get('/', function () {
    return view('welcome');
});
Route::get('wellcome', function () {
    return view('wellcomeScreen');
});

Route::get('b_menu', function () {
    return view('b_menu');
});

Route::get('a_menu', function () {
    return view('a_menu');
});

Route::get('master', function () {
    return view('master');
});

Route::get('b_chklogin', "BusinessController@chkBlogin");

Route::post('b_register', "BusinessController@bregister");

Route::get('b_signup', "BusinessController@showSignupPage");

Route::get('b_resetpwd', "BusinessController@showResetpwdPage");

Route::get('b_login', "BusinessController@showLoginPage");

Route::get('b_add_p', "BusinessController@showAddPage");

Route::get('b_home', "BusinessController@showHome");

Route::post('add_p_server',"ProductController@create");

Route::get('p_view_p', "ProductController@viewProduct");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
