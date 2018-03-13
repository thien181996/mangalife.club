<?php

namespace App\Http\Controllers\admin;

use App\AuthorManga;
use App\Http\Requests\admin\AuthorRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\lib;

use App\Author;
use File;
use Storage;

class AuthorController extends Controller
{
    public function __construct(lib $lib)
    {
        $this->lib = $lib;
    }

    public function listAuthor()
    {
        $authors = Author::paginate(10);

        return view('admin.author.list',compact('authors'));
    }

    public function createAuthor()
    {
        return view('admin.author.create');
    }
    //save to database
    public function storeAuthor(AuthorRequest $rq)
    {
//        dd($rq->all());
        $path_author = '1gj4NccLPmvWxSTK5n2YQNXmiCXjQxx53';
        //set value id from rq
        $isObj = $rq->author_id;
        if($isObj)
        {
            $author = Author::find($isObj);
        } else {
            $author = new Author();
        }
        //upload image
        if($rq->hasFile('author_cover'))
        {
            $file = $rq->file('author_cover');
            $fileName =  uniqid() . $file->getClientOriginalName();
            $fileData = File::get($file->path());
            Storage::cloud()->put($path_author . '/' .$fileName,$fileData);
            $author->author_cover = $fileName;
        }

//        set value to obj
        $author->author_name = $rq->author_name;
        $author->author_description = $rq->author_description;
        $author->author_slug = $rq->author_slug;
        $author->author_url = $rq->author_url;
        //save obj to data
        $author->save();

        return redirect(route('panel.listAuthor'));
    }
    //get link file in google drive
    public function streamAuthor($fileDir,$fileName)
    {
        return $this->lib->getStreamGoogleDrive($fileDir,$fileName);
    }
    //generate slug for author
    public function getSlugAuthor(Request $rq)
    {
        $author_name = $rq->author_name;
        $author_slug = str_slug($author_name);
        $slug = Author::where('author_slug',$author_slug)->get();
        if($slug)
        {
            $author_slug = $author_slug . '-' . uniqid();
            return response(['author_slug' => $author_slug]);
        } else {
            $author_slug = $author_slug . '-' . uniqid();
            return response(['author_slug' => $author_slug]);
        }
    }
    //edit author from author_id
    public function editAuthor($author_id)
    {
        $author = Author::find($author_id);

        return view('admin.author.edit',compact('author'));
    }
    //delete author from author_id
    public function deleteAuthor($author_id)
    {
        $author = Author::find($author_id);
        if($author)
        {
            $author->delete();
            $author_mangas = AuthorManga::where('author_id',$author_id)->get();
            foreach ($author_mangas as $author_manga)
            {
                $author_manga->delete();
            }
        }

        return redirect(route('panel.listAuthor'));
    }
}
