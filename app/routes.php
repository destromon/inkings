<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//user controller
Route::get('/', 'HomeController@index');
Route::resource('user', 'UserController');

//login controller
Route::get('login', 'LoginController@index');
Route::post('login', 'LoginController@doLogin');

//logout
Route::get('logout', function() {
	Auth::logout();
	return Redirect::to('login');
});

Event::listen('404', function() {
	return Response::error('404');
});