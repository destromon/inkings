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
Route::get('/', 'HomeController@index');

//route to user.php
Route::get('user', 'UserController@index');
Route::post('user', 'UserController@store');
Route::get('user/create', 'UserController@create');
Route::get('user/edit/{id}', 'UserController@edit');
Route::get('user/update/{id}', 'UserController@edit');
Route::get('user/delete/{id}', 'UserController@delete');
