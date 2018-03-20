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

Route::get('/trang-chu/doc-truyen/truyen-moi-cap-nhat', function () {
    return view('index');
});
Route::get('/panel/authen/login','admin\LoginController@formLogin')->name('panel.loginForm');
Route::post('/panel/authen/loginUser','admin\LoginController@loginUser')->name('panel.loginUser');

Route::middleware(['check_login','role_admin'])->group(function () {
    Route::get('/panel/authen/logOutUser','admin\LoginController@logOutUser')->name('panel.logOutUser');
    Route::get('/panel/dashboard/view', function () {


        return view('admin.layouts.main');
    })->name('panel');
    //START : USER
        Route::get('/panel/user/view', 'admin\UserController@listUser')->name('panel.listUser');
        Route::get('/panel/user/edit/{id}', 'admin\UserController@editUser')->name('panel.editUser');
        Route::get('/panel/user/delete/{id}', 'admin\UserController@deleteUser')->name('panel.deleteUser');
        Route::post('/panel/user/store', 'admin\UserController@storeUser')->name('panel.storeUser');
        Route::post('/panel/user/ajax', 'admin\UserController@ajaxUser')->name('panel.ajaxUser');

    //END : USER
    //START : AUTHOR
        Route::get('/panel/author/view', 'admin\AuthorController@listAuthor')->name('panel.listAuthor');
        Route::get('/panel/author/create', 'admin\AuthorController@createAuthor')->name('panel.createAuthor');
        Route::get('/panel/author/edit/{id}', 'admin\AuthorController@editAuthor')->name('panel.editAuthor');
        Route::get('/panel/author/delete/{id}', 'admin\AuthorController@deleteAuthor')->name('panel.deleteAuthor');
        Route::post('/panel/author/store', 'admin\AuthorController@storeAuthor')->name('panel.storeAuthor');
        Route::post('/panel/author/getSlug', 'admin\AuthorController@getSlugAuthor')->name('panel.getSlugAuthor');
        Route::get('/panel/author/stream/{fileDir}/{fileName}', 'admin\AuthorController@streamAuthor')->name('panel.streamAuthor');
    //END : AUTHOR
    //START : TRANSLATE GROUP
        Route::get('/panel/translate_group/view', 'admin\TranslateGroupController@listTranslateGroup')->name('panel.listTranslateGroup');
        Route::get('/panel/translate_group/create', 'admin\TranslateGroupController@createTranslateGroup')->name('panel.createTranslateGroup');
        Route::get('/panel/translate_group/edit/{id}', 'admin\TranslateGroupController@editTranslateGroup')->name('panel.editTranslateGroup');
        Route::get('/panel/translate_group/delete/{id}', 'admin\TranslateGroupController@deleteTranslateGroup')->name('panel.deleteTranslateGroup');
        Route::post('/panel/translate_group/store', 'admin\TranslateGroupController@storeTranslateGroup')->name('panel.storeTranslateGroup');
        Route::post('/panel/translate_group/getSlug', 'admin\TranslateGroupController@getSlugTranslateGroup')->name('panel.getSlugTranslateGroup');
        Route::get('/panel/translate_group/stream/{fileDir}/{fileName}', 'admin\TranslateGroupController@streamTranslateGroup')->name('panel.streamTranslateGroup');
    //END : TRANSLATE GROUP
    //START : CATEGORY
        Route::get('/panel/category/view', 'admin\CategoryController@listCategory')->name('panel.listCategory');
        Route::get('/panel/category/create', 'admin\CategoryController@createCategory')->name('panel.createCategory');
        Route::get('/panel/category/edit/{id}', 'admin\CategoryController@editCategory')->name('panel.editCategory');
        Route::get('/panel/category/delete/{id}', 'admin\CategoryController@deleteCategory')->name('panel.deleteCategory');
        Route::post('/panel/category/store', 'admin\CategoryController@storeCategory')->name('panel.storeCategory');
        Route::post('/panel/category/getSlug', 'admin\CategoryController@getSlugCategory')->name('panel.getSlugCategory');
    //END : CATEGORY
    //START : MANGA
        Route::get('/panel/manga/view', 'admin\MangaController@listManga')->name('panel.listManga');
        Route::get('/panel/manga/create', 'admin\MangaController@createManga')->name('panel.createManga');
        Route::get('/panel/manga/edit/{id}', 'admin\MangaController@editManga')->name('panel.editManga');
        Route::get('/panel/manga/delete/{id}', 'admin\MangaController@deleteManga')->name('panel.deleteManga');
        Route::post('/panel/manga/store', 'admin\MangaController@storeManga')->name('panel.storeManga');
        Route::post('/panel/manga/getSlug', 'admin\MangaController@getSlugManga')->name('panel.getSlugManga');
        Route::post('/panel/manga/ajax', 'admin\MangaController@ajaxManga')->name('panel.ajaxManga');
        Route::get('/panel/manga/stream/{fileDir}/{fileName}', 'admin\MangaController@streamManga')->name('panel.streamManga');
    //END : MANGA
    //START : CHAPTER
        Route::get('/panel/chapter/view', 'admin\ChapterController@listChapter')->name('panel.listChapter');
        Route::get('/panel/chapter/create', 'admin\ChapterController@createChapter')->name('panel.createChapter');
        Route::get('/panel/chapter/edit/{id}', 'admin\ChapterController@editChapter')->name('panel.editChapter');
        Route::get('/panel/chapter/delete/{id}', 'admin\ChapterController@deleteChapter')->name('panel.deleteChapter');
        Route::post('/panel/chapter/store', 'admin\ChapterController@storeChapter')->name('panel.storeChapter');
        Route::post('/panel/chapter/getSlug', 'admin\ChapterController@getSlugChapter')->name('panel.getSlugChapter');
        Route::post('/panel/chapter/ajax', 'admin\ChapterController@ajaxChapter')->name('panel.ajaxChapter');
        Route::post('/panel/chapter/ajaxStore', 'admin\ChapterController@ajaxStoreChapter')->name('panel.ajaxStoreChapter');
        Route::get('/panel/chapter/stream/{fileDir}/{fileName}', 'admin\ChapterController@streamChapter')->name('panel.streamChapter');
    //END : CHAPTER
    //START : COMMENT
        Route::get('/panel/comment/view', 'admin\CommentController@listComment')->name('panel.listComment');
        Route::get('/panel/comment/delete/{id}', 'admin\CommentController@deleteComment')->name('panel.deleteComment');
    //END : COMMENT
    //START : RATE
        Route::get('/panel/rate/view', 'admin\RateController@listRate')->name('panel.listRate');
        Route::get('/panel/rate/delete/{id}', 'admin\RateController@deleteRate')->name('panel.deleteRate');
    //END : RATE
    //START : READED
        Route::get('/panel/readed/view', 'admin\ReadedController@listReaded')->name('panel.listReaded');
    //END : READED
    //START : CHAPTER
        Route::get('/panel/notification/view', 'admin\NotificationController@listNotification')->name('panel.listNotification');
        Route::get('/panel/notification/create', 'admin\NotificationController@createNotification')->name('panel.createNotification');
        Route::get('/panel/notification/delete/{id}', 'admin\NotificationController@deleteNotification')->name('panel.deleteNotification');
        Route::post('/panel/notification/store', 'admin\NotificationController@storeNotification')->name('panel.storeNotification');
    //END : CHAPTER
    ////START : REPORT
        Route::get('/panel/report/view', 'admin\ReportController@listReport')->name('panel.listReport');
    //END : DONATE
    //START : REPORT
        Route::get('/panel/donate/view', 'admin\DonateController@listDonate')->name('panel.listDonate');
    //END : DONATE
    //START : STATISTIC
        Route::get('/panel/statistic/view', 'admin\StatisticController@listStatistic')->name('panel.listStatistic');
    //END : STATISTIC
    //START : SETTING
        Route::get('/panel/setting/view', 'admin\SettingController@editSetting')->name('panel.editSetting');
        Route::post('/panel/setting/store', 'admin\SettingController@storeSetting')->name('panel.storeSetting');
    //END : SETTING
    //START: MODULE
        Route::get('/panel/module/view', 'admin\ModuleController@listModule')->name('panel.listModule');
        Route::get('/panel/module/delete', 'admin\ModuleController@deleteModule')->name('panel.deleteModule');
        Route::get('/panel/module/updateRoutes', function () {
            $routes = Route::getRoutes();
            foreach ($routes as $route)
            {
                $slice_str = explode('/',$route->uri);
                $module_name = $slice_str[0] . '/' . $slice_str[1];
                $action_name = $slice_str[2];
                $module = \App\Module::where('module_name',$module_name)->first();
                if($module)
                {
                    $action = \App\ModuleAction::where('action_name',$action_name)->where('module_id',$module->id)->first();
                    if(!$action)
                    {
                        $module_action = new \App\ModuleAction();
                        $module_action->module_id = $module->id;
                        $module_action->action_name = $action_name;
                        $module_action->save();

                        $role_module = new \App\RoleModule();
                        $role_module->module_id = $module->id;
                        $role_module->action_id = $module_action->id;
                        $role_module->role_id = 1;
                        $role_module->save();
                    }
                } else {
                    $module_new = new \App\Module();
                    $module_new->module_name = $module_name;
                    $module_new->save();

                    $module_action = new \App\ModuleAction();
                    $module_action->module_id = $module_new->id;
                    $module_action->action_name = $action_name;
                    $module_action->save();

                    $role_module = new \App\RoleModule();
                    $role_module->module_id = $module_new->id;
                    $role_module->action_id = $module_action->id;
                    $role_module->role_id = 1;
                    $role_module->save();
                }
            }
            return redirect()->route('panel.listModule')->with('msg', 'Cập nhật module hoàn tất!');
        })->name('panel.updateRoutersModule');
    //END : MODULE
    //START : ACTION
        Route::get('/panel/action/edit/{actionName}/', 'admin\ModuleActionController@editModuleAction')->name('panel.editModuleAction');
        Route::get('/panel/action/create', 'admin\ModuleActionController@createModuleAction')->name('panel.createModuleAction');
        Route::post('/panel/action/store', 'admin\ModuleActionController@storeModuleAction')->name('panel.storeModuleAction');
        Route::post('/panel/action/ajax', 'admin\ModuleActionController@ajaxModuleAction')->name('panel.ajaxModuleAction');
    //END : ACTION
});