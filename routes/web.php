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

Route::get('/panel/user','admin\UserController@listUser')->name('panel.listUser');
//START : AUTHOR
    Route::get('/panel/author','admin\AuthorController@listAuthor')->name('panel.listAuthor');
    Route::get('/panel/author/create','admin\AuthorController@createAuthor')->name('panel.createAuthor');
    Route::get('/panel/author/edit/{id}','admin\AuthorController@editAuthor')->name('panel.editAuthor');
    Route::get('/panel/author/delete/{id}','admin\AuthorController@deleteAuthor')->name('panel.deleteAuthor');
    Route::post('/panel/author/store','admin\AuthorController@storeAuthor')->name('panel.storeAuthor');
    Route::post('/panel/author/getSlug','admin\AuthorController@getSlugAuthor')->name('panel.getSlugAuthor');
    Route::get('/panel/author/stream/{fileDir}/{fileName}','admin\AuthorController@streamAuthor')->name('panel.streamAuthor');
//END : AUTHOR
//START : TRANSLATE GROUP
    Route::get('/panel/translate_group','admin\TranslateGroupController@listTranslateGroup')->name('panel.listTranslateGroup');
    Route::get('/panel/translate_group/create','admin\TranslateGroupController@createTranslateGroup')->name('panel.createTranslateGroup');
    Route::get('/panel/translate_group/edit/{id}','admin\TranslateGroupController@editTranslateGroup')->name('panel.editTranslateGroup');
    Route::get('/panel/translate_group/delete/{id}','admin\TranslateGroupController@deleteTranslateGroup')->name('panel.deleteTranslateGroup');
    Route::post('/panel/translate_group/store','admin\TranslateGroupController@storeTranslateGroup')->name('panel.storeTranslateGroup');
    Route::post('/panel/translate_group/getSlug','admin\TranslateGroupController@getSlugTranslateGroup')->name('panel.getSlugTranslateGroup');
    Route::get('/panel/translate_group/stream/{fileDir}/{fileName}','admin\TranslateGroupController@streamTranslateGroup')->name('panel.streamTranslateGroup');
//END : TRANSLATE GROUP
