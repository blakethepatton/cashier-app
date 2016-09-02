<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// site routes
Route::get('/', 'SiteController@showHome');

//authentication routes
Route::auth();
Route::get('logout', 'Auth\LoginController@logout');

// subscription routes
Route::get('subscribe', 'SubscribeController@showSubscribe');
Route::post('subscribe', 'SubscribeController@processSubscribe');

Route::group(['middleware' => 'auth'], function() { 
	Route::get('welcome', 'SubscribeController@showWelcome')->middleware('subscribed');

	// account routes
	// show the account
	Route::get('account', 'AccountController@showAccount');

	// update the subscription
	Route::post('account/subscription', 'AccountController@updateSubscription');

	// update credit card
	Route::post('account/card', 'AccountController@updateCard');

	// download pdf
	Route::get('account/invoices/{invoice}', 'AccountController@downloadInvoice');

	// delete subscription
	Route::delete('account/subscription', 'AccountController@deleteSubscription');

});


// single post route
route::get('{slug}', 'SiteController@showPost');