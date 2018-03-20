<?php

namespace App\Http\Controllers\admin;

use App\Module;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Route;

class ModuleController extends Controller
{
    public function listModule()
    {
        $modules = Module::all();

        return view('admin.module.list',compact('modules'));
    }


}
