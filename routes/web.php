<?php
//Admin Routes
Route::get('a_login', "AdminController@login");

Route::get('a_menu', function () {
    return view('a_menu');
});

Route::get('b_details_pdf', "AdminController@viewBusinesses");

Route::get('b_delete/{id}', "AdminController@deleteBusinesses");

Route::get('b_download_pdf', "AdminController@b_download_pdf");

Route::get('c_details_pdf', "AdminController@viewCustomers");

Route::get('c_delete/{id}', "AdminController@deleteCustomers");

Route::get('c_download_pdf', "AdminController@c_download_pdf");

//Email Routes
Route::get('feedback', "SendEmailController@index");

Route::post('sendEmail', "SendEmailController@send");



Route::get('viewSales', "AdminController@viewSales");

Route::get('s_download_excel', "AdminController@s_download_excel");


Route::get('a_chklogin', "AdminController@chkAlogin");



// Customer routes

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Customer products view route
Route::post('foodCategory','ProductController@ViewProducts')->middleware('authenticated');


Route::get('backToCat','ProductController@ViewProducts');


Route::get('viewCustMenuAgain','ProductController@ViewMenu')->middleware('authenticated');



//Review Routes

 Route::get('Reviews/{id}','ReviewController@showReviewScreen');
 
// //Add Review Form 

Route::get('yourReview','ReviewController@showReviewForm');

Route::post('addReview','ReviewController@addNewReview');



// Route::get('yourReview', function () {
//     return view('AddReviewForm');
// });




//Cart Routes
//Add to cart route
Route::get('addToCart/{id}','CartController@addToCart')->middleware('authenticated');

//View Cart Route 


Route::get('viewCart','CartController@viewCart');
//remove item from cart route
Route::get('RemoveCart/{id}','CartController@RemoveFromCart');


Route::get('viewCart','CartController@viewCart')->middleware('authenticated');
//remove item from cart route
Route::get('RemoveCart/{id}','CartController@RemoveFromCart')->middleware('authenticated');

Route::get('viewCart','CartController@viewCart')->middleware('authenticated');


Route::get('/', function () {
    return view('welcome');
});
Route::get('wellcome', function () {
    return view('wellcomeScreen');
});


Route::get('master', function () {
    return view('master');
});



// Business Admin Routes
Route::get('b_chklogin', "BusinessController@chkBlogin");

Route::post('b_register', "BusinessController@bregister");

Route::get('b_signup', "BusinessController@showSignupPage");

Route::get('b_resetpwd', "BusinessController@showResetpwdPage");

Route::get('b_resest_pwd', "BusinessController@resetPwd");



Route::get('b_login', "BusinessController@showLoginPage");

Route::get('b_menu', function () {
    return view('b_menu');
});

Route::get('b_add_p', "BusinessController@showAddPage");

Route::get('b_home', "BusinessController@showHome");

Route::post('add_p_server',"ProductController@create");

Route::get('p_view_p', "ProductController@viewProduct");

Route::get('delete/{id}', "ProductController@deleteProduct");

//GoogleCharts Library
Route::get('sales_chart',"LaravelGoogleGraph@index");