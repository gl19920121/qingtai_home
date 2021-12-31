<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('index'); // 首页
Route::get('/jobs', 'JobsController@index')->name('jobs'); // 职位招聘
Route::get('/jobs/{job}', 'JobsController@show')->name('jobs.show'); // 职位招聘-详情
Route::view('/service', 'service')->name('service'); // 服务内容
// Route::view('/strategy', 'strategy')->name('strategy'); // 职场攻略
// Route::view('/trends', 'trends')->name('trends'); // 公司动态
Route::view('/aboutus', 'aboutus')->name('aboutus'); // 企业简介
Route::view('/contact', 'contact')->name('contact'); // 联系我们
