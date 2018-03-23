<?php

namespace App\Http\Controllers\admin;

use App\CategoryManga;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\admin\CategoryRequest;

use App\Category;

class CategoryController extends Controller
{
    //get all category
    public function listCategory()
    {
        $categories = Category::paginate(10);

        return view('admin.category.list',compact('categories'));
    }
    //create new category
    public function createCategory()
    {
        return view('admin.category.create');
    }
    //generate slug for category
    public function getSlugCategory(Request $rq)
    {
        $category_name = $rq->category_name;
        $category_slug = str_slug($category_name);
        $slug = Category::where('category_slug',$category_slug)->get();
        if($slug)
        {
            $category_slug = $category_slug . '-' . uniqid();
            return response(['category_slug' => $category_slug]);
        } else {
            $category_slug = $category_slug . '-' . uniqid();
            return response(['category_slug' => $category_slug]);
        }
    }
    //insert obj to database
    public function storeCategory(CategoryRequest $rq)
    {
        $isObj = $rq->category_id;
        if($isObj)
        {
            $category = Category::find($isObj);
        } else {
            $category = new Category();
        }
        //set value to obj
        $category->category_name = $rq->category_name;
        $category->category_slug = $rq->category_slug;
        //save obj to database
        $category->save();

        return redirect(route('panel.listCategory'));
    }
    //edit obj by category_id
    public function editCategory($category_id)
    {
        $category = Category::find($category_id);

        return view('admin.category.edit',compact('category'));
    }
    //delete obj by category_id
    public function deleteCategory($category_id)
    {
        $category = Category::find($category_id);
        if($category)
        {
            $category->delete();
            $category_mangas = CategoryManga::where('category_id',$category_id)->get();
            foreach ($category_mangas as $category_manga)
            {
                $category_manga->delete();
            }
        }

        return redirect(route('panel.listCategory'));
    }
}
