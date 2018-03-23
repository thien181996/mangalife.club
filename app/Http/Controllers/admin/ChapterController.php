<?php

namespace App\Http\Controllers\admin;

use App\ChapterManga;
use App\Http\Requests\admin\ChapterMangaRequest;
use App\Manga;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\lib;
use App\Http\Requests\admin\ChapterRequest;

use App\Chapter;
use File;
use Storage;


class ChapterController extends Controller
{
    public function __construct(lib $lib)
    {
        $this->lib = $lib;
    }
    //get add from table chapter
    public function listChapter(Request $rq)
    {
        if($rq->manga_id)
        {
            $chapters = Chapter::where('manga_id',$rq->manga_id)->orderBy('created_at','desc')->paginate(10);
        } else {
            $chapters = Chapter::orderBy('created_at','desc')->paginate(10);
        }


        return view('admin.chapter.list',compact('chapters'));
    }
    //create chapter
    public function createChapter()
    {
        $mangas = Manga::all();

        return view('admin.chapter.create',compact('mangas'));
    }
    //edit chapter
    public function editChapter($chapter_id)
    {
        $mangas = Manga::all();
        $chapter = Chapter::find($chapter_id);
        $chapter_mangas = ChapterManga::where('chapter_id',$chapter->id)->orderBy('chapter_sort','asc')->get();

        return view('admin.chapter.edit',compact('mangas','chapter','chapter_mangas'));
    }
    //action ajax insert data to database
    public function ajaxStoreChapter(Request $rq, ChapterMangaRequest $request)
    {
//        dd($rq->all());
        $action = $rq->action;
        switch ($action)
        {
            case "delete_image":
                $chapter = ChapterManga::where('chapter_image_name',$rq->chapter_manga)->first();
                $chapter->delete();
                break;
            case "sort_chapter":
                foreach ($rq->name_arr as $key => $name)
                {
                    $chapter_manga = ChapterManga::where('chapter_image_name',$name)->first();
                    $chapter_manga->chapter_sort = $key;
                    $chapter_manga->save();
                }
                break;
            default:
                return response(['error'=>"nothing"]);
        }

    }
    //ajax upload img
    public function ajaxUploadChapter(ChapterMangaRequest $rq)
    {
        $action = $rq->action;
        switch ($action)
        {
            case "upload_image":
                $path_chapter = $rq->chapter_path;
                $last_sort_id = ChapterManga::where('chapter_image_url',$path_chapter)->orderBy('chapter_sort','desc')->first();
                if($rq->hasFile('chapter_img'))
                {
                    $file = $rq->chapter_img;
                    $fileName = uniqid() . $file->getClientOriginalName();
                    $fileData = File::get($file->path());

                    $chapter_manga = new ChapterManga();
                    $chapter_manga->chapter_id = $rq->chapter_id;
                    $chapter_manga->chapter_image_name = $fileName;
                    $chapter_manga->chapter_image_url = $path_chapter;
                    if($last_sort_id)
                    {
                        $chapter_manga->chapter_sort = $last_sort_id->chapter_sort + 1;
                    } else {
                        $chapter_manga->chapter_sort = 1;
                    }

                    $chapter_manga->save();


                    Storage::cloud()->put($path_chapter . '/' .$fileName,$fileData);

                    return response(['chapter_serial'=>$file->getClientSize(),'chapter_manga'=>$chapter_manga->chapter_image_name]);
                }

                break;
            default:
                return response(['error'=>"nothing"]);
        }

    }
    //save obj to database
    public function storeChapter(ChapterRequest $rq)
    {
        $path_manga = Manga::find($rq->manga_id)->manga_path;
        if($rq->chapter_id)
        {
            $chapter = Chapter::find($rq->chapter_id);
            $baseName = $chapter->chapter_path;
        } else {
            $chapter = new Chapter();
            $this->lib->createFolderGoogleDrive($path_manga,$rq->chapter_slug);
            $baseName = $this->lib->getBaseNameFolderGoogleDrive($path_manga,$rq->chapter_slug);

        }

        //set value to obj
        $chapter->chapter_path = $baseName;
        $chapter->chapter_name = $rq->chapter_name;
        $chapter->chapter_slug = $rq->chapter_slug;
        $chapter->chapter_description = $rq->chapter_description;
        $chapter->chapter_status = $rq->chapter_status;
        $chapter->manga_id = $rq->manga_id;
        //save obj to database
        $chapter->save();

        return redirect(route('panel.editChapter',['id'=>$chapter->id]));
    }
    //action ajax
    public function ajaxChapter(Request $rq)
    {
        dd($rq->all());
    }
    //generate slug for author
    public function getSlugChapter(Request $rq)
    {
        $chapter_name = $rq->chapter_name;
        $chapter_slug = str_slug($chapter_name);

        $chapter_slug = $chapter_slug . '-' . uniqid();
        return response(['chapter_slug' => $chapter_slug]);

    }
    //get link file in google drive
    public function streamChapter($fileDir,$fileName)
    {
        return $this->lib->getStreamGoogleDrive($fileDir,$fileName);
    }
    //delete obj by id
    public function deleteChapter($chapter_id)
    {
        $chapter = Chapter::find($chapter_id);
        if($chapter)
        {
            $chapter->delete();
            $chapter_mangas = ChapterManga::where('chapter_id',$chapter->id)->get();
            foreach ($chapter_mangas as $chapter_manga)
            {
                $chapter_manga->delete();
            }
        }

        return redirect(route('panel.listChapter'));
    }
}
