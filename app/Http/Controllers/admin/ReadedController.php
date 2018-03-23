<?php

namespace App\Http\Controllers\admin;

use App\Readed;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReadedController extends Controller
{
    public function listReaded(Request $rq)
    {
        $users = User::all();
        $user_id = $rq->user_id;
        if($user_id)
        {
            $reads = Readed::where('user_id',$user_id)->orderBy('created_at','desc')->paginate(10);
        } else {
            $reads = Readed::orderBy('created_at','desc')->paginate(10);
        }


        return view('admin.readed.list',compact('reads','users','user_id'));
    }
}
