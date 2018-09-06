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
//视频模块
Route::get('/', 'Video\HomeController@index')->name('home');

//登录退出
Route::get('login', 'LoginController@login')->name('login');
Route::post('login', 'LoginController@store')->name('login');
Route::get('logout', 'LoginController@logout')->name('logout');

//用户管理
Route::resource('user', 'UserController');
//工具类
Route::group(['namespace' => "Util", 'prefix' => 'util', 'as' => 'util.'], function () {
    Route::any('code/send', 'CodeController@send')->name('code.send');
});

//后台管理
Route::group(['middleware' => ['auth.admin'], 'prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function () {
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('config/{name}/edit', 'ConfigController@edit')->name('config.edit');
    Route::post('config/{name}', 'ConfigController@update')->name('config.update');
});
