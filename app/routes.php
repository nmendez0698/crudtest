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
	return View::make('hello');
});

//Vista usuarios

Route::get('/', function()
{
	$users = User::all();
 
    return View::make('users')->with('users', $users);
    // return View::make('users');
});

//Funciones
Route::post('users/create', 'UserController@crearUser');
Route::post('users/update', 'UserController@updateUser');
Route::get('users/delete/{id}', 'UserController@borrarUser');
Route::get('users/edit/{id}', 'UserController@editUser');