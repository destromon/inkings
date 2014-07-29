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

Route::resource('user', 'UserController');

// Route::get('/', 'HomeController@index');

// //route to user.php
// Route::get('/user', 'UserController@index');
// //save
// Route::post('/user', 'UserController@store');
// //delete
// Route::delete('/user/{id}', 'UserController@destroy');

// //form
// Route::get('/user/create', 'UserController@create');
// //form edit
// Route::get('/user/{id}/edit', 'UserController@edit');
// //update
// Route::put('/user/{id}', 'UserController@update');

