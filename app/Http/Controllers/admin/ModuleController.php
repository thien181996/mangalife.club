<?php

namespace App\Http\Controllers\admin;

use App\Module;

use App\ModuleAction;
use App\RoleModule;
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

    public function deleteModule($module_id)
    {
        $module = Module::find($module_id);
        if($module)
        {
            $module->delete();
            $actions = ModuleAction::where('module_id',$module->id)->get();
            foreach ($actions as $action)
            {
                $action->delete();
                $roles = RoleModule::where('action_id',$action->id)->get();
                foreach ($roles as $role)
                {
                    $role->delete();
                }
            }
        }
        return redirect()->route('panel.listModule');
    }

}
