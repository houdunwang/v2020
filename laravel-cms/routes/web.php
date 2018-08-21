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
Route::group(['middleware' => 'check.mail'], function () {
    Route::get('/', function (\Modules\Admin\Entities\Module $module) {
        $module = $module->getDefaultModule();
        $class = '\Modules\\' . $module['name'] . '\Http\Controllers\HomeController';
        return app()->build($class)->index();
    });
});
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::any('/upload', 'UploadController@make');
Route::any('/upload-simditor', 'UploadController@simditor');

//邮箱验证
Route::get('check_mail_show', 'UserController@checkMailShow')->name('check_mail_show');
Route::get('send_mail_token', 'UserController@sendMailToken')->name('send_mail_token');
Route::get('check_register_mail/{token}', 'UserController@checkUserMail')->name('check_register_mail');

//微信绑定
Route::any('wechat', 'WeChatController@handler');
