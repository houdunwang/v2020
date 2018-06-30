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

Route::get('/', 'IndexController@home')->name('home');
Route::resource('user', 'UserController');

Route::get('login', 'LoginController@login')->name('login');
Route::post('login', 'LoginController@store')->name('login');
Route::get('logout', 'LoginController@logout')->name('logout');

Route::resource('blog', 'BlogController');
Route::get('confirmMail/{token}', 'UserController@confirmMail')->name('confirmMail');

Route::get('passwordShow', 'PasswordController@show')->name('password.show');
Route::post('passwordSend', 'PasswordController@send')->name('password.send');
Route::get('passwordEdit/{token}', 'PasswordController@edit')->name('password.edit');
Route::post('passwordUpdate', 'PasswordController@update')->name('password.update');
