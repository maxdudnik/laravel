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

Route::get('/', 'SessionsController@create');

Route::get('logout', 'SessionsController@destroy');

Route::resource('users', 'UsersController');
Route::resource('sessions', 'SessionsController');

Route::get('step1', function () {
    return View::make('reg.step1');
});

Route::post('step1', function () {

    $rules = [
        'username' => 'required|min:5|unique:users,username',
        'password' => 'required|min:5',
        'email' => 'required|email|unique:users,email',
    ];

    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()) {
        return Redirect::to('step1')->withInput()->withErrors($validator);
    }
    return Redirect::to('step2')->withInput();
});

Route::get('step2', function () {
    return View::make('reg.step2');
});

Route::post('step2', function () {

    $rules = [
        'firstname' => 'required|min:2',
        'lastname' => 'required|min:2',
    ];

    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()) {
        return Redirect::to('step2')->withInput()->withErrors($validator);
    }
    return Redirect::to('step3')->withInput();
});

Route::post('step3', function () {
    Input::flash();
    return View::make('reg.step3');
});
