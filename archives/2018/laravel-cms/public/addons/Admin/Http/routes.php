<?php
Route::group(['middleware' => 'web', 'prefix' => 'admin', 'namespace' => 'Modules\Admin\Http\Controllers'], function () {
    Auth::routes();
});

Route::group(['middleware' => ['web', 'auth:admin'], 'prefix' => 'admin', 'namespace' => 'Modules\Admin\Http\Controllers'], function () {
    Route::get('/', 'AdminController@index');
    //角色管理
    Route::resource('role', 'RoleController')->middleware("permission:admin,resource");
    Route::get('role/permission/{role}', 'RoleController@permission')->middleware("permission:admin");
    Route::post('role/permission/{role}', 'RoleController@permissionStore')->middleware("permission:admin");
});


//module-route
Route::group(['middleware' => ['web', 'auth:admin'], 'prefix' => 'admin', 'namespace' => "Modules\Admin\Http\Controllers"],
    function () {
        Route::get('module_update_cache', 'ModuleController@updateCache');
        Route::get('module_set_default/{module}','ModuleController@setDefault');
        Route::resource('module', 'ModuleController')->middleware("permission:admin,resource");
    });