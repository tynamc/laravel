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

Route::get('/', function()
{
	return View::make('test/demo');
});

Route::get('/welcome', 'HomeController@showWelcome');

Route::get('users', function()
{
    $users = User::all();

    return View::make('users')->with('users', $users);
});

Route::get('demo', function()
{
    $r = Config::get('app.timezone');
    return $r;
});