<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

$api = app(\Dingo\Api\Routing\Router::class);

#默认配置指定的是v1版本，可以直接通过 {host}/api/version 访问到
$api->version('v1', ['namespace' => 'App\Http\Controllers\Api'], function ($api) {
    $api->get('users', 'UserController@users');

    //获取文章列表
    $api->get('contents', 'ContentController@index');

    $api->get('contents/{id}', 'ContentController@show');

    //幻灯片
    $api->get('slides/{limit?}', 'SlideController@index');

    $api->get('categorys', 'CategoryController@index');

    $api->post('login', 'AuthController@login');
    $api->get('logout', 'AuthController@logout');
    $api->get('me', 'AuthController@me');
});