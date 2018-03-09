<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function loginUser(LoginRequest $rq)
    {
        if(Auth::attempt(['email' => $rq->input('email'), 'password' => $rq->input('password')]))
        {
//            return redirect()->intended('/home');
            return response(['status'=>true,'msg'=>'Đăng nhập thành công!']);
        }elseif(Auth::user()){
            return response(['status'=>true,'msg'=>'Đăng nhập rồi còn gì???']);
        } else {
//            dd('fail');
//            return redirect()->route('client')->with('status','Tài khoản hoặc mật khẩu không đúng!');
            return response(['status'=>false,'msg'=>"Tài khoản hoặc mật khẩu không đúng!"]);
        }
    }

    public function logOutUser()
    {
        Auth::logout();
        return redirect()->route('client');
    }
}
