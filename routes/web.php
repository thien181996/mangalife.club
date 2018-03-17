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
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/manga-category', function () {
    return view('manga-category');
});
Route::get('/manga-author', function () {
    return view('manga-author');
});
Route::get('/manga-translate', function () {
    return view('manga-translate');
});

Route::get('/panel/user', 'admin\UserController@listUser')->name('panel.listUser');
