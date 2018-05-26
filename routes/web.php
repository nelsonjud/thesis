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
	if (Auth::check()) {
    	return view('pages.home');
	}

	return view('auth.login');
    // return view('welcome');
});

Route::resource('announcement','AnnouncementController');

// Route::get('create-announcement', ['uses' => 'AnnouncementController@create']);

// Route::resource('passports','PassportController');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
