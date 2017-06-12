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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/privacy','HomeController@privacy')->name('privacy');
Route::get('/terms-and-conditions','HomeController@terms')->name('terms');
Route::get('/contact-us','HomeController@contact')->name('contact-us');

//Pro requests
Route::get('/request-a-pro','ProrequestController@requestPro')->name('request-pro');
Route::post('/save-pro-request','ProrequestController@saveProrequest')->name('request-pro.save');

// Admin Users
Route::group(['prefix' => 'admin/users'], function () {
    Route::get('/','AdminController@index')->name('admin.users');
    Route::get('/{id}/edit', 'AdminController@editUser')->name('admin.editUser');
    Route::put('/{id}/update', 'AdminController@updateUser')->name('admin.updateUser');
});

//Admin prorequests
Route::group(['prefix' => 'admin/prorequests'], function(){
	Route::get('/','AdminController@proRequests')->name('admin.prorequests');
	Route::get('/{id}/edit','AdminController@editProrequest')->name('admin.editProrequest');
	Route::put('/{id}/update','AdminController@updateProrequest')->name('admin.updateProrequest');
});

// Resource routes
Route::get('/get_users','ResourceController@get_users');
Route::get('/get-pro-requests','ResourceController@get_prorequests');

