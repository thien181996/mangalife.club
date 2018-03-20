<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $table = 'modules';

    public function moduleAction()
    {
        $moduleActions = ModuleAction::where('module_id',$this->id)->get();
        return $moduleActions;
    }

    public function getRoleModule($action_id)
    {
//        dd($this);
        $role_modules = RoleModule::where('module_id',$this->id)->where('action_id',$action_id)->get();
        return $role_modules;
    }
}
