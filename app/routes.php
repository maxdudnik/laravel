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

// Route::get('/', function () {
// 	return View::make('hello');
// });

Route::get('/', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');

Route::resource('users', 'UsersController');
Route::resource('sessions', 'SessionsController');

Route::get('step1', function () {
	return View::make('reg.step1');
});

Route::post('step2', function () {
	Input::flash();
	return View::make('reg.step2');
});

Route::post('step3', function () {
	Input::flash();
	return View::make('reg.step3');
});