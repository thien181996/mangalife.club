<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\admin\UserRequest;
use App\Role;
use App\RoleUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function listUser()
    {
        $users = User::all();

        return view('admin.user.list',compact('users'));
    }
    //edit user
    public function editUser($user_id)
    {
        $user = User::join('role_users','users.id','role_users.user_id')->select('users.*','role_users.role_id')->where('users.id',$user_id)->first();
        $roles = Role::all();

        return view('admin.user.edit',compact('user','roles'));
    }
    //save obj to database
    public function storeUser(UserRequest $rq)
    {
//        dd(Hash::make($rq->password));
        $user = User::find($rq->user_id);
        if($rq->password)
        {
            $user->password = Hash::make($rq->password);
        }
        $user->save();

        $role_user = RoleUser::where('user_id',$user->id)->first();
        $role_user->role_id = $rq->role_id;
        $role_user->save();

        return redirect(route('panel.listUser'));
    }
    //block obj by id
    public function deleteUser($user_id)
    {
        $role_user = RoleUser::where('user_id',$user_id)->first();
        $role_user->role_id = 4;
        $role_user->save();

        return redirect(url()->previous());
    }
    //action ajax
    public function ajaxUser(Request $rq)
    {
        $action = $rq->action;
        switch ($action)
        {
            case 'search':
                $users = User::where('email','like','%'.$rq->keyword.'%')->limit(5)->get();
                return response(['data'=>$users]);
                break;

            default:

        }
    }
}
