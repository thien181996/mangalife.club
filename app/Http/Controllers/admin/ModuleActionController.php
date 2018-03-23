<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\admin\ModuleActionRequest;
use App\Module;
use App\Role;
use App\RoleModule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ModuleAction;

class ModuleActionController extends Controller
{
    public function editModuleAction($actionModule)
    {
        $action = ModuleAction::where('action_name',$actionModule)->first();

        $access = RoleModule::join('roles','role_module.role_id','roles.id')->select('roles.*')->where('module_id',$action->module_id)->where('action_id',$action->id)->get();
        $access_arr = [];
        foreach ($access as $per)
        {
            $access_arr[] = $per->id;
        }
        $roles = Role::all();
//dd($access);
        return view('admin.action.edit',compact('action','access_arr','roles'));
    }

    public function createModuleAction($module_id)
    {
        return view('admin.action.create',compact('module_id'));
    }

    public function storeModuleAction(ModuleActionRequest $rq)
    {
        $action = ModuleAction::find($rq->action_id);
        $action->module_id = $rq->module_id;
        $action->action_name = $rq->action_name;
        $action->save();

        return redirect(route('panel.listModule'));
    }

    public function ajaxModuleAction(Request $rq)
    {
        $action = $rq->action;
        switch ($action)
        {
            case "create":
                $role_module = new RoleModule();
                $role_module->module_id = $rq->module_id;
                $role_module->action_id = $rq->action_id;
                $role_module->role_id = $rq->role_id;
                $role_module->save();
                return response(['status'=>true]);
                break;
            case "delete":
                $role_module = RoleModule::where('module_id',$rq->module_id)->where('action_id',$rq->action_id)->where('role_id',$rq->role_id)->first();
                if($role_module)
                {
                    $role_module->delete();

                    return response(['status'=>true]);
                }
                break;
            default:
                return response(['msg'=>"Nothing happend!"]);
        }
    }
}
