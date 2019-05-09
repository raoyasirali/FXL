<?php
//Admin Routes
Route::get('a_login', "AdminController@login");

Route::get('a_menu', function () {
    return view('a_menu');
});

Route::get('b_details_pdf', "AdminController@viewBusinesses");

Route::get('b_signup_request', "AdminController@viewSignupRequests");

Route::get('b_approve/{id}', "AdminController@approveBusinesses");

Route::get('b_disapprove/{id}', "AdminController@disapproveBusinesses");

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

Route::get('viewAllProducts', 'ProductController@AllCatProducts')->middleware('authenticated');
Route::get('backToCat','ProductController@ViewProducts')->middleware('authenticated');


Route::get('viewCustMenuAgain','ProductController@ViewMenu')->middleware('authenticated');




//Review Routes

 Route::get('Reviews/{id}','ReviewController@showReviewScreen')->middleware('authenticated');
 
// //Add Review Form 

Route::get('yourReview','ReviewController@showReviewForm')->middleware('authenticated');

Route::post('addReview','ReviewController@addNewReview')->middleware('authenticated');



// Route::get('yourReview', function () {
//     return view('AddReviewForm');
// });





//Cart Routes
//Add to cart route
Route::get('addToCart/{id}','CartController@addToCart')->middleware('authenticated');

//View Cart Route 

Route::get('placeorder','CartController@placeOrder')->middleware('authenticated');

Route::get('c_checkout','CartController@checkout')->middleware('authenticated');

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

Route::get('b_sales_p', "BusinessController@showSales");

Route::get('b_login', "BusinessController@showLoginPage");

Route::get('b_s_download_excel', "BusinessController@b_s_download_excel");

Route::get('b_menu', function () {
    return view('b_menu');
});

Route::get('b_add_p', "BusinessController@showAddPage");

Route::get('b_home', "BusinessController@showHome");

Route::post('add_p_server',"ProductController@create");

Route::get('p_view_p', "ProductController@viewProduct");

Route::post('update/{id}', "ProductController@updateProduct");

Route::get('edit/{id}', "ProductController@showEditProduct");

Route::get('delete/{id}', "ProductController@deleteProduct");

//GoogleCharts Library

Route::get('sales_chart',"LaravelGoogleGraph@index");
//Firebase Route
Route::get('firebase','FirebaseController@index');