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

Route::post('/register', 'RegisterController@store');
Route::get('/', 'RegisterController@create');

Route::get('/', 'SessionController@create');
Route::post('/login', 'SessionController@store');
Route::get('/logout', 'SessionController@destroy');


//Route::post('/login', 'SessionController@store');
//Route::get('/', 'SessionController@create');
