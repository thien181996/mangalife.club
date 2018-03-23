<?php

namespace App\Http\Controllers\admin;

use App\Author;
use App\AuthorManga;
use App\Category;
use App\CategoryManga;
use App\Chapter;
use App\ChapterManga;
use App\Comment;
use App\Follow;
use App\Notification;
use App\Rate;
use App\Readed;
use App\Setting;
use App\TranslateGroup;
use App\TranslateGroupManga;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\admin\MangaRequest;
use App\Http\Controllers\lib;

use App\Manga;
use File;
use Storage;

class MangaController extends Controller
{
    public function __construct(lib $lib)
    {
        $this->lib = $lib;
    }
    //list all manga
    public function listManga(Request $rq)
    {
        $authors = Author::all();
        $author_id = $rq->author_id;
        $groups = TranslateGroup::all();
        $group_id = $rq->group_id;
        $categories = Category::all();
        $category_id = $rq->category_id;
        if($rq->author_id)
        {
            $mangas = AuthorManga::join('mangas','author_mangas.manga_id','mangas.id')->select('mangas.*')->where('author_id',$rq->author_id)->paginate(10);
        } elseif($rq->group_id) {
            $mangas = TranslateGroupManga::join('mangas','translate_group_mangas.manga_id','mangas.id')->select('mangas.*')->where('group_id',$rq->group_id)->paginate(10);
        } elseif($rq->category_id) {
            $mangas = CategoryManga::join('mangas','category_mangas.manga_id','mangas.id')->select('mangas.*')->where('category_id',$rq->category_id)->paginate(10);
        } else {
            $mangas = Manga::paginate(10);
        }
        return view('admin.manga.list',compact('mangas','authors','author_id','groups','group_id','categories','category_id'));
    }
    //create manga
    public function createManga()
    {
        return view('admin.manga.create');
    }
    //insert obj to database
    public function storeManga(MangaRequest $rq)
    {
        $path_manga = Setting::all()->first()->path_manga;
        $isObj = $rq->manga_id;
        if($isObj)
        {

            $manga = Manga::find($isObj);
            $baseName = $manga->manga_path;
        } else {
            $manga = new Manga();
            $this->lib->createFolderGoogleDrive($path_manga,$rq->manga_slug);
            $baseName = $this->lib->getBaseNameFolderGoogleDrive($path_manga,$rq->manga_slug);
            $manga->manga_path = $baseName;
        }
        //upload image
        if($rq->hasFile('manga_cover'))
        {
            $file = $rq->file('manga_cover');
            $fileName =  uniqid() . $file->getClientOriginalName();
            $fileData = File::get($file->path());
            Storage::cloud()->put($baseName . '/' .$fileName,$fileData);
            $manga->manga_cover = $fileName;
        }
        //set value to obj
        $manga->manga_name = $rq->manga_name;
        $manga->manga_slug = $rq->manga_slug;
        $manga->manga_status = $rq->manga_status;
        $manga->manga_description = $rq->manga_description;
        //save obj to database
        $manga->save();

        return redirect(route('panel.listManga'));
    }
    //generate slug
    public function getSlugManga(Request $rq)
    {
        $manga_name = $rq->manga_name;
        $manga_slug = str_slug($manga_name);
        $slug = Manga::where('manga_slug',$manga_slug)->get();
        if($slug)
        {
            $manga_slug = $manga_slug . '-' . uniqid();
            return response(['manga_slug' => $manga_slug]);
        } else {
            $manga_slug = $manga_slug . '-' . uniqid();
            return response(['manga_slug' => $manga_slug]);
        }
    }
    //ajax request
    public function ajaxManga(Request $rq)
    {
        $author_id = $rq->author_id;
        $category_id = $rq->category_id;
        $group_id = $rq->group_id;
        $manga_id = $rq->manga_id;
        $action = $rq->action;
        switch ($action) {
            case "create":
                if($author_id)
                {
                    $author_manga = new AuthorManga();
                    $author_manga->manga_id = $manga_id;
                    $author_manga->author_id = $author_id;
                    $author_manga->save();
                    return response(['status'=>true]);
                } else if($category_id) {
                    $category_manga = new CategoryManga();
                    $category_manga->manga_id = $manga_id;
                    $category_manga->category_id = $category_id;
                    $category_manga->save();
                    return response(['status'=>true]);
                } else {
                    $translate_group_manga = new TranslateGroupManga();
                    $translate_group_manga->manga_id = $manga_id;
                    $translate_group_manga->group_id = $group_id;
                    $translate_group_manga->save();
                    return response(['status'=>true]);
                }
            break;
            case "delete":
                if($author_id)
                {
                    $author_manga = AuthorManga::where('author_id',$author_id)->where('manga_id',$manga_id)->first();
                    $author_manga->delete();
                    return response(['status'=>true]);
                } else if($category_id) {
                    $category_manga = CategoryManga::where('category_id',$category_id)->where('manga_id',$manga_id)->first();
                    $category_manga->delete();
                    return response(['status'=>true]);
                } else {
                    $translate_group_manga = TranslateGroupManga::where('group_id',$group_id)->where('manga_id',$manga_id)->first();
                    $translate_group_manga->delete();
                    return response(['status'=>true]);
                }
            case "search":
                $mangas = Manga::where('manga_name','like','%'.$rq->keyword.'%')->limit(5)->get();
                return response(['data'=>$mangas]);
                break;
            default:
                return response(['error'=>"nothing"]);
        }

    }
    //edit obj by id
    public function editManga($manga_id)
    {
        $manga = Manga::find($manga_id);
        $authors = Author::all();
        $translate_groups = TranslateGroup::all();
        $categories = Category::all();

        $isAuthors = AuthorManga::where('manga_id',$manga->id)->get();
        $arr_authors = [];
        foreach ($isAuthors as $isAuthor)
        {
            $arr_authors[] = $isAuthor->author_id;
        }

        $isCategories = CategoryManga::where('manga_id',$manga->id)->get();
        $arr_categories = [];
        foreach ($isCategories as $isCategory)
        {
            $arr_categories[] = $isCategory->category_id;
        }

        $isGroups = TranslateGroupManga::where('manga_id',$manga->id)->get();
        $arr_groups = [];
        foreach ($isGroups as $isGroup)
        {
            $arr_groups[] = $isGroup->group_id;
        }

        return view('admin.manga.edit',compact('manga','authors','translate_groups','categories','arr_authors','arr_categories','arr_groups'));
    }
    //get link file in google drive
    public function streamManga($fileDir,$fileName)
    {
        return $this->lib->getStreamGoogleDrive($fileDir,$fileName);
    }
    //delete obj by id
    public function deleteManga($manga_id)
    {
        $manga = Manga::find($manga_id);
        if($manga)
        {
            $manga->delete();
            $category_mangas = CategoryManga::where('manga_id',$manga->id)->get();
            foreach ($category_mangas as $category_manga)
            {
                $category_manga->delete();
            }
            $author_mangas = AuthorManga::where('manga_id',$manga->id)->get();
            foreach ($author_mangas as $author_manga)
            {
                $author_manga->delete();
            }
            $rates = Rate::where('manga_id',$manga->id)->get();
            foreach ($rates as $rate)
            {
                $rate->delete();
            }
            $readed = Readed::where('manga_id',$manga->id)->get();
            foreach ($readed as $read)
            {
                $read->delete();
            }
            $chapters = Chapter::where('manga_id',$manga->id)->get();
            foreach ($chapters as $chapter)
            {
                $chapter->delete();
                $chapter_mangas = ChapterManga::where('chapter_id',$chapter->id)->get();
                foreach ($chapter_mangas as $chapter_manga)
                {
                    $chapter_manga->delete();
                }
                $notifications = Notification::where('chapter_slug',$chapter->chapter_slug)->get();
                foreach ($notifications as $item)
                {
                    $item->delete();
                }
            }

            $comments = Comment::where('manga_id',$manga->id)->get();
            foreach ($comments as $comment)
            {
                $comment->delete();
            }
            $groups = TranslateGroupManga::where('manga_id',$manga->id)->get();
            foreach ($groups as $group)
            {
                $group->delete();
            }
            $follows = Follow::where('manga_id',$manga->id)->get();
            foreach ($follows as $follow)
            {
                $follow->delete();
            }


        }

        return redirect(route('panel.listManga'));
    }
}
