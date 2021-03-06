<?php

use think\Route;

Route::group('admin', function () {
    Route::get('login', 'admin/Login/loginForm');
    Route::post('login', 'admin/Login/login');
    Route::any('logout', 'admin/Login/logout');
    Route::get('/', 'admin/Index/index');
    Route::get(':type_id/:id', 'admin/Index/edit');
    Route::put(':type_id/:id', 'admin/Index/update');
});

Route::group('mobile', function () {
    Route::get('colleges', 'mobile/Index/colleges');
    Route::get('/', 'mobile/Index/index');
    Route::get(':id', 'mobile/Index/read');
});

Route::get('colleges', 'index/Index/colleges');
Route::get('/', 'index/Index/index');
Route::get(':id', 'index/Index/read');
