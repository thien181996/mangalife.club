<?php

namespace App\Http\Controllers\admin;

use App\Readed;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReadedController extends Controller
{
    public function listReaded()
    {
        $reads = Readed::paginate(10);

        return view('admin.readed.list',compact('reads'));
    }
}
