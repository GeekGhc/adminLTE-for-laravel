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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Admin'], function () {
    Route::get('/dashboard', 'AdminController@index'); //后台首页
    Route::get('/admin/profile','AdminController@adminInfo');//管理员资料
    Route::get('/admin/users','AdminController@userMember');//用户管理界面
    Route::get('/admin/article/index','ArticleController@index');//文章列表界面
    Route::get('/admin/article/create','ArticleController@create');//创建文章
});
