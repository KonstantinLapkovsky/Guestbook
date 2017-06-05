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
Route::get('/userpage', 'MessageController@create');
Route::post('/messages/create', 'MessageController@store');
Route::get('/messages', 'MessageController@index');

Route::post('/register', 'RegisterController@store');

Route::get('/', 'SessionController@create')->name('home');
Route::post('/login', 'SessionController@store');
Route::get('/logout', 'SessionController@destroy');

Route::prefix('admin')->group(function() {
	Route::get('/', 'Auth\AdminLoginController@showLoginForm');
	Route::post('/login', 'Auth\AdminLoginController@login');
	Route::get('/messages/{message}', 'MessageController@show');
//	Route::post('/register', 'AdminRegisterController@store');
	Route::get('/logout', 'Auth\AdminLoginController@logout');
	Route::get('/messages', 'MessageController@index');
});


