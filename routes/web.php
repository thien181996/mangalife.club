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

Route::get('/panel/', function () {
    return view('admin.layouts.main');
});
Route::get('/home', function () {
    return view('index');
});

Route::get('/manga-detail', function () {
    return view('manga-detail');
});
Route::get('/manga-read', function () {
    return view('manga-read');
});
//Liên hệ và quảng cáo
Route::get('/contact', function () {
    return view('contact');
});
//Chọn tag link danh mục
Route::get('/manga-category', function () {
    return view('manga-category');
});
//Chọn tag link tác giả
Route::get('/manga-author', function () {
    return view('manga-author');
});
//Chọn tag link nhóm dịch
Route::get('/manga-translate', function () {
    return view('manga-translate');
});
//Search
Route::get('/manga-search', function () {
    return view('manga-search');
});
//Mail
Route::get('/mail', function () {
    return view('mail');
});
//Mail Read
Route::get('/mail-read', function () {
    return view('mail-read');
});
//Manga Follow
Route::get('/manga-follow', function () {
    return view('manga-follow');
});
Route::get('/panel/user', 'admin\UserController@listUser')->name('panel.listUser');
