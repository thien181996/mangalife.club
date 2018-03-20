<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\admin\LoginRequest;
use App\User;

class LoginController extends Controller
{
    public function formLogin()
    {
        return view('admin.login');
    }
    public function loginUser(LoginRequest $rq)
    {
        $check = str_contains($rq->email, '@');
        if($check)
        {
            $user = User::join('role_users','users.id','role_users.user_id')->join('roles','role_users.role_id','roles.id')->where('users.email',$rq->email)->select('roles.role_rank')->first()->role_rank;
            $accept = [1,2];
            $login = Auth::attempt(['email' => $rq->email, 'password' => $rq->password]);
            $check_permission = in_array($user,$accept);
        } else {
            $slide_str = str_before($rq->email,'@');
            $user = User::join('role_users','users.id','role_users.user_id')->join('roles','role_users.role_id','roles.id')->where('users.username',$slide_str)->select('roles.role_rank')->first()->role_rank;
            $accept = [1,2];
            $login = Auth::attempt(['username' => $slide_str, 'password' => $rq->password]);
            $check_permission = in_array($user,$accept);
        }
//        dd($login.$check_permission);
        if(!$check_permission)
        {
            return response(['status'=>false,'msg'=>'Bạn không có quyền truy cập']);
        } elseif($login && $check_permission) {
            return response(['status'=>true]);
        } else {
            return response(['status'=>false,'msg'=>"Tài khoản hoặc mật khẩu không đúng!"]);
        }


    }

    public function logOutUser()
    {
        Auth::logout();
        return redirect()->route('panel.loginForm');
    }
}
