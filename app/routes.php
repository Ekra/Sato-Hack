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
<<<<<<< HEAD
	return View::make('layouts.master');
});

=======
	return View::make('hello');
});
Route::get('about', function()
{
  return View::make('about');
});
Route::get('contact', 'Pages@contact');
>>>>>>> c38a752649ee9d8ff0c1beb028772a14d4b39fcb
Route::resource('users', 'UsersController');
