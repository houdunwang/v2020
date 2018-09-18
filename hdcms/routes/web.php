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
Route::get('/', 'Edu\HomeController@index')->name('home');
Route::get('/home', 'Edu\HomeController@index')->name('home');

//在线教育
Route::group(['namespace' => 'Edu', 'prefix' => 'edu', 'as' => 'edu.'], function () {
    Route::resource('article', 'ArticleController');
    Route::get('article/zan/{article}', 'ArticleController@zan')->name('article.zan');

});
//公共控制器
Route::group(['prefix' => 'common', 'namespace' => "Common", 'as' => 'common.'], function () {
    Route::resource('comment', 'CommentController');
    Route::get('favorite', 'FavoriteController@make')->name('favorite.make');
    Route::get('zan', 'ZanController@make')->name('zan.make');
    Route::resource('notification', 'NotificationController');
});

//登录退出
Route::get('register', 'User\RegisterController@create')->name('register');
Route::post('register', 'User\RegisterController@store')->name('register');
Route::get('login', 'User\LoginController@login')->name('login');
Route::post('login', 'User\LoginController@store')->name('login');
Route::get('logout', 'User\LoginController@logout')->name('logout');

//用户
Route::group(['middleware' => [], 'prefix' => 'member', 'namespace' => 'User', 'as' => 'member.'], function () {
    Route::get('/', 'UserController@index')->name('index');
    Route::resource('user', 'UserController');
    Route::get('follow/{user}', 'UserController@follow')->name('follow');
});

//工具类
Route::group(['namespace' => "Util", 'prefix' => 'util', 'as' => 'util.'], function () {
    Route::any('code/send', 'CodeController@send')->name('code.send');
    Route::any('upload/make', 'UploadController@upload')->name('upload.make');
    Route::any('upload/lists', 'UploadController@lists')->name('upload.lists');
});

//后台管理
Route::group(['middleware' => ['auth.admin'], 'prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function () {
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('config/{name}/edit', 'ConfigController@edit')->name('config.edit');
    Route::post('config/{name}', 'ConfigController@update')->name('config.update');
});
