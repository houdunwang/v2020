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

Route::get('logout', 'LoginController@logout')->name('logout');
Route::get('login', "LoginController@login")->name('login');
Route::post('login', 'LoginController@store')->name('login');

Route::get('confirmEmailToken/{token}', 'UserController@confirmEmailToken')->name('confirmEmailToken');

Route::get('follow/{user}', 'UserController@follow')->name('user.follow');
//找回密码
Route::get('FindPasswordEmail', 'PasswordController@email')->name('FindPasswordEmail');
Route::post('FindPasswordSend', 'PasswordController@send')->name('FindPasswordSend');
Route::get('FindPasswordEdit/{token}', 'PasswordController@edit')->name('FindPasswordEdit');
Route::post('FindPasswordUpdate', 'PasswordController@update')->name('FindPasswordUpdate');

Route::resource('blog', 'BlogController');

Route::get('follower/{user}','FollowController@follower')->name('follow');
Route::get('following/{user}','FollowController@following')->name('following');