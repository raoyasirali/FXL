<?php

//main wellcome screen of website
Route::get('/', function () {
    return view('index');
});
//Sentimental Analysis route
Route::get('sentimental', 'ReviewController@sentiment');
//Admin Routes
Route::get('a_login', "AdminController@login");

Route::get('a_menu', "AdminController@a_menu")->middleware('superadmin');

Route::get('b_details_pdf', "AdminController@viewBusinesses")->middleware('superadmin');

Route::get('b_signup_request', "AdminController@viewSignupRequests")->middleware('superadmin');

Route::get('b_approve/{id}', "AdminController@approveBusinesses")->middleware('superadmin');

Route::get('b_disapprove/{id}', "AdminController@disapproveBusinesses")->middleware('superadmin');

Route::get('b_delete/{id}', "AdminController@deleteBusinesses")->middleware('superadmin');

Route::get('b_download_pdf', "AdminController@b_download_pdf")->middleware('superadmin');

Route::get('c_details_pdf', "AdminController@viewCustomers")->middleware('superadmin');

Route::get('c_delete/{id}', "AdminController@deleteCustomers")->middleware('superadmin');

Route::get('c_download_pdf', "AdminController@c_download_pdf")->middleware('superadmin');

//Email Routes
Route::get('feedback', "SendEmailController@index")->middleware('superadmin');

Route::post('sendEmail', "SendEmailController@send")->middleware('superadmin');
Route::post('cReportIssue', "SendEmailController@report")->middleware('superadmin');



Route::get('viewSales', "AdminController@viewSales")->middleware('superadmin');

Route::get('s_download_excel', "AdminController@s_download_excel")->middleware('superadmin');


Route::post('a_chklogin', "AdminController@chkAlogin");


Route::get('a_logout',"AdminController@a_logout")->middleware('superadmin');

// Customer routes

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Customer products view route
Route::post('foodCategory','ProductController@ViewProducts')->middleware('authenticated');

Route::get('viewAllProducts', 'ProductController@AllCatProducts')->middleware('authenticated');

Route::get('viewAllProProducts', 'ProductController@AllProProducts')->middleware('authenticated');
Route::get('orderHistory', 'ProductController@userOrderHistory')->middleware('authenticated');
Route::get('orderCancel', 'ProductController@userCancelOrderPage')->middleware('authenticated');
Route::get('u_cancel/{oid}', 'ProductController@userCancelOrder')->middleware('authenticated');
Route::get('backToCat','ProductController@ViewProducts')->middleware('authenticated');


Route::get('viewCustMenuAgain','ProductController@ViewMenu')->middleware('authenticated');
//search in budget budget
Route::post('searchBProducts','ProductController@searchBProducts')->middleware('authenticated');
//online payment routes
Route::get('onlinePay', 'CartController@viewOnlineForm')->middleware('authenticated');
Route::get('stripe', 'StripePaymentController@stripe')->middleware('authenticated');
Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');


//Review Routes

 Route::get('Reviews/{id}','ReviewController@showReviewScreen')->middleware('authenticated');
 
// //Add Review Form 

Route::get('yourReview','ReviewController@showReviewForm')->middleware('authenticated');

Route::post('addReview','ReviewController@addNewReview')->middleware('authenticated');

Route::get('AllReview','ReviewController@showAllReviewScreen')->middleware('authenticated');

Route::get('PosReview','ReviewController@showPosReviewScreen')->middleware('authenticated');

Route::get('NegReview','ReviewController@showNegReviewScreen')->middleware('authenticated');

Route::get('NeuReview','ReviewController@showNeuReviewScreen')->middleware('authenticated');



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


Route::get('welcome', function () {
    return view('welcome');
});
Route::get('wellcome', function () {
    return view('wellcomeScreen');
});


// Route::get('master', function () {
//     return view('master');
// });



// Business Admin Routes
Route::post('b_chklogin', "BusinessController@chkBlogin");

Route::post('b_register', "BusinessController@bregister");

Route::get('b_signup', "BusinessController@showSignupPage");

Route::get('b_resetpwd', "BusinessController@showResetpwdPage");

Route::get('b_resest_pwd', "BusinessController@resetPwd");

Route::get('b_sales_p', "BusinessController@showSales")->middleware('businessadmin');

Route::get('b_login', "BusinessController@showLoginPage");
//Order 
Route::get('o_view_o', "BusinessController@viewOrderRequests")->middleware('businessadmin');

Route::get('o_approve/{id}', "BusinessController@approveOrder")->middleware('businessadmin');

Route::get('o_disapprove/{id}', "BusinessController@disapproveOrder")->middleware('businessadmin');

Route::get('b_s_download_excel', "BusinessController@b_s_download_excel")->middleware('businessadmin');

Route::get('b_menu',"BusinessController@b_menu")->middleware('businessadmin');

Route::get('b_add_p', "BusinessController@showAddPage")->middleware('businessadmin');

Route::get('b_home', "BusinessController@showHome")->middleware('businessadmin');

Route::post('add_p_server',"ProductController@create")->middleware('businessadmin');

Route::get('p_view_p', "ProductController@viewProduct")->middleware('businessadmin');

Route::post('update/{id}', "ProductController@updateProduct")->middleware('businessadmin');

Route::get('edit/{id}', "ProductController@showEditProduct")->middleware('businessadmin');
//promotion page
Route::get('addPro/{id}', "ProductController@showPromoProduct")->middleware('businessadmin');
Route::post('promo/{id}', "ProductController@addpromoProduct")->middleware('businessadmin');
Route::get('b_pro_view_p', "ProductController@bviewProProduct")->middleware('businessadmin');
Route::get('removePro/{id}', "ProductController@removeProProduct")->middleware('businessadmin');

Route::get('delete/{id}', "ProductController@deleteProduct")->middleware('businessadmin');

Route::get('b_logout',"BusinessController@b_logout")->middleware('businessadmin');
//Ajax
// Route::get('select2-autocomplete-ajax', 'ProductController@dataAjax');
Route::post('/autocomplete/fetch', 'ProductController@fetch')->name('autocomplete.fetch');
//GoogleCharts Library

Route::get('sales_chart',"LaravelGoogleGraph@index")->middleware('superadmin');
//Firebase Route
Route::get('firebase','FirebaseController@index');