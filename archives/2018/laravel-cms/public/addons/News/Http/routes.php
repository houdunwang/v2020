<?php

Route::group(['middleware' => 'web', 'prefix' => 'news', 'namespace' => 'Modules\News\Http\Controllers'], function()
{
    Route::get('/', 'NewsController@index');
});

 
//news-route
Route::group(['middleware' => ['web','auth:admin'],'prefix'=>'news','namespace'=>"Modules\News\Http\\Controllers"],
function () {
    Route::resource('news', 'NewsController');
});