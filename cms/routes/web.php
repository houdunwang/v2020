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
Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('user/show_token', 'UserController@showToken')->name('user.show_token');
Route::post('user/send_token', 'UserController@send')->name('user.send_token');
Route::get('user/check_mail/{token}', 'UserController@checkMail')->name('user.check_mail');

Route::group(['prefix' => 'util', 'namespace' => 'Util'], function () {
    Route::post('upload', 'UploadController@upload')->name('upload');
    Route::any('upload/lists', 'UploadController@lists')->name('upload.lists');
});
//文章系统路由列表
Route::group(['namespace' => 'Article', 'prefix' => 'article', 'middleware' => ['user.check_mail']], function () {
    Route::get('home', 'HomeController@home');
});

Route::group(['middleware' => ['auth.admin'], 'prefix' => 'admin'], function () {
    Route::get('/', 'Admin\HomeController@index')->name('admin');
    //配置项
    Route::get('config/{name}/edit', 'Admin\ConfigController@edit')->name('config.edit');
    Route::put('config/{name}', 'Admin\ConfigController@update')->name('config.update');
});



