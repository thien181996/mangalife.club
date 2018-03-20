<?php

namespace App\Http\Controllers\admin;

use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function editSetting()
    {
        $settings = Setting::all()->first();
        if(!$settings)
        {
            $settings = new Setting();
            $settings->save();
        }

        return view('admin.setting.edit',compact('settings'));
    }

    public function storeSetting(Request $rq)
    {
        $setting = Setting::find($rq->setting_id);
        if($setting)
        {
            $setting->client_id = $rq->client_id;
            $setting->client_secret = $rq->client_secret;
            $setting->client_token = $rq->client_token;
            $setting->client_folder = $rq->client_folder;
            $setting->path_author = $rq->path_author;
            $setting->path_group = $rq->path_group;
            $setting->path_manga = $rq->path_manga;
            $setting->save();
        }

        return redirect(route('panel'));
    }
}
