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
Route::resource('user', 'UserController');

//login controller
Route::get('login', 'LoginController@index');
Route::post('login', 'LoginController@doLogin');

Route::get('logout', function() {
	Auth::logout();
	return Redirect::to('login');
});

