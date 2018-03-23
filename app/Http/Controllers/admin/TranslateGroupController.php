<?php

namespace App\Http\Controllers\admin;

use App\TranslateGroupManga;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\lib;
use App\Http\Requests\admin\TranslateGroupRequest;

use App\TranslateGroup;
use File;
use Storage;
use App\Setting;

class TranslateGroupController extends Controller
{
    public function __construct(lib $lib)
    {
        $this->lib = $lib;
    }
    //get all translate group
    public function listTranslateGroup()
    {
        $translate_groups = TranslateGroup::paginate(10);

        return view('admin.translate_group.list',compact('translate_groups'));
    }
    //create translate group
    public function createTranslateGroup()
    {
        $users = User::all();
        return view('admin.translate_group.create',compact('users'));
    }
    //generate slug for translate group
    public function getSlugTranslateGroup(Request $rq)
    {
        $group_name = $rq->group_name;
        $group_slug = str_slug($group_name);
        $slug = TranslateGroup::where('group_slug',$group_slug)->get();
        if($slug)
        {
            $group_slug = $group_slug . '-' . uniqid();
            return response(['group_slug' => $group_slug]);
        } else {
            $group_slug = $group_slug . '-' . uniqid();
            return response(['group_slug' => $group_slug]);
        }
    }
    //save to database
    public function storeTranslateGroup(TranslateGroupRequest $rq)
    {
//        dd($rq->all());
        $path_group = Setting::all()->first()->path_group;
        //set value id from rq
        $isObj = $rq->group_id;
        if($isObj)
        {
            $translate_group = TranslateGroup::find($isObj);
        } else {
            $translate_group = new TranslateGroup();
        }
//        //upload image
        if($rq->hasFile('group_cover'))
        {
            $file = $rq->file('group_cover');
            $fileName =  uniqid() . $file->getClientOriginalName();
            $fileData = File::get($file->path());
            Storage::cloud()->put($path_group . '/' .$fileName,$fileData);
            $translate_group->group_cover = $fileName;
        }

//        set value to obj
        $translate_group->group_name = $rq->group_name;
        $translate_group->group_description = $rq->group_description;
        $translate_group->group_slug = $rq->group_slug;
        $translate_group->group_url = $rq->group_url;
        $translate_group->user_id = $rq->user_id;
        //save obj to data
        $translate_group->save();

        return redirect(route('panel.listTranslateGroup'));
    }
    //delete translate_group from translate_group_id
    public function deleteTranslateGroup($group_id)
    {
        $group = TranslateGroup::find($group_id);
        if($group)
        {
            $group->delete();
            $group_mangas = TranslateGroupManga::where('group_id',$group_id)->get();
            foreach ($group_mangas as $group_manga)
            {
                $group_manga->delete();
            }
        }

        return redirect(route('panel.listTranslateGroup'));
    }
    //edit author from author_id
    public function editTranslateGroup($group_id)
    {
        $group = TranslateGroup::find($group_id);
        $users = User::all();
        return view('admin.translate_group.edit',compact('group','users'));
    }
    //get link file in google drive
    public function streamTranslateGroup($fileDir,$fileName)
    {
        return $this->lib->getStreamGoogleDrive($fileDir,$fileName);
    }
    //action ajax
    public function ajaxTranslateGroup(Request $rq)
    {
        $action = $rq->action;
        switch ($action)
        {
            case "search":
                $group = TranslateGroup::where('group_name','like','%'.$rq->keyword.'%')->limit(5)->get();
                return response(['data'=>$group]);
                break;
            default:
        }
    }
}
