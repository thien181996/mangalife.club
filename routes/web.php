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
})->name('panel');
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
//START : CATEGORY
    Route::get('/panel/category','admin\CategoryController@listCategory')->name('panel.listCategory');
    Route::get('/panel/category/create','admin\CategoryController@createCategory')->name('panel.createCategory');
    Route::get('/panel/category/edit/{id}','admin\CategoryController@editCategory')->name('panel.editCategory');
    Route::get('/panel/category/delete/{id}','admin\CategoryController@deleteCategory')->name('panel.deleteCategory');
    Route::post('/panel/category/store','admin\CategoryController@storeCategory')->name('panel.storeCategory');
    Route::post('/panel/category/getSlug','admin\CategoryController@getSlugCategory')->name('panel.getSlugCategory');
//END : CATEGORY
//START : MANGA
    Route::get('/panel/manga','admin\MangaController@listManga')->name('panel.listManga');
    Route::get('/panel/manga/create','admin\MangaController@createManga')->name('panel.createManga');
    Route::get('/panel/manga/edit/{id}','admin\MangaController@editManga')->name('panel.editManga');
    Route::get('/panel/manga/delete/{id}','admin\MangaController@deleteManga')->name('panel.deleteManga');
    Route::post('/panel/manga/store','admin\MangaController@storeManga')->name('panel.storeManga');
    Route::post('/panel/manga/getSlug','admin\MangaController@getSlugManga')->name('panel.getSlugManga');
    Route::post('/panel/manga/ajax','admin\MangaController@ajaxManga')->name('panel.ajaxManga');
    Route::get('/panel/manga/stream/{fileDir}/{fileName}','admin\MangaController@streamManga')->name('panel.streamManga');
//END : MANGA
//START : CHAPTER
    Route::get('/panel/chapter','admin\ChapterController@listChapter')->name('panel.listChapter');
    Route::get('/panel/chapter/create','admin\ChapterController@createChapter')->name('panel.createChapter');
    Route::get('/panel/chapter/edit/{id}','admin\ChapterController@editChapter')->name('panel.editChapter');
    Route::get('/panel/chapter/delete/{id}','admin\ChapterController@deleteChapter')->name('panel.deleteChapter');
    Route::post('/panel/chapter/store','admin\ChapterController@storeChapter')->name('panel.storeChapter');
    Route::post('/panel/chapter/getSlug','admin\ChapterController@getSlugChapter')->name('panel.getSlugChapter');
    Route::post('/panel/chapter/ajax','admin\ChapterController@ajaxChapter')->name('panel.ajaxChapter');
    Route::post('/panel/chapter/ajaxStore','admin\ChapterController@ajaxStoreChapter')->name('panel.ajaxStoreChapter');
    Route::get('/panel/chapter/stream/{fileDir}/{fileName}','admin\ChapterController@streamChapter')->name('panel.streamChapter');
//END : CHAPTER
//START : COMMENT
    Route::get('/panel/comment','admin\CommentController@listComment')->name('panel.listComment');
    Route::get('/panel/comment/delete/{id}','admin\CommentController@deleteComment')->name('panel.deleteComment');
//END : COMMENT
//START : RATE
    Route::get('/panel/rate','admin\RateController@listRate')->name('panel.listRate');
    Route::get('/panel/rate/delete/{id}','admin\RateController@deleteRate')->name('panel.deleteRate');
//END : RATE
//START : READED
    Route::get('/panel/readed','admin\ReadedController@listReaded')->name('panel.listReaded');
//END : READED
//START : CHAPTER
    Route::get('/panel/notification','admin\NotificationController@listNotification')->name('panel.listNotification');
    Route::get('/panel/notification/create','admin\NotificationController@createNotification')->name('panel.createNotification');
    Route::get('/panel/notification/delete/{id}','admin\NotificationController@deleteNotification')->name('panel.deleteNotification');
    Route::post('/panel/notification/store','admin\NotificationController@storeNotification')->name('panel.storeNotification');
//END : CHAPTER
////START : REPORT
    Route::get('/panel/report','admin\ReportController@listReport')->name('panel.listReport');
//END : DONATE
//START : REPORT
    Route::get('/panel/donate','admin\DonateController@listDonate')->name('panel.listDonate');
//END : DONATE
//START : STATISTIC
    Route::get('/panel/statistic','admin\StatisticController@listStatistic')->name('panel.listStatistic');
//END : STATISTIC
//START : SETTING
    Route::get('/panel/setting','admin\SettingController@editSetting')->name('panel.editSetting');
    Route::post('/panel/setting/store','admin\SettingController@storeSetting')->name('panel.storeSetting');
//END : SETTING