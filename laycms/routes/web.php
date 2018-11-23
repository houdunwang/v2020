<?php
//HDPHP
//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('category','CategoryController@index');

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix' => 'content', 'as' => 'content.'], function () {
    Route::resource('category', 'CategoryController');
});
