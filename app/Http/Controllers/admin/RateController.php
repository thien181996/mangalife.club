<?php

namespace App\Http\Controllers\admin;

use App\Manga;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Rate;

class RateController extends Controller
{
    //get all table comment
    public function listRate(Request $rq)
    {
        $users = User::all();
        $user_id = $rq->user_id;
        $mangas = Manga::all();
        $manga_id = $rq->manga_id;
        if($user_id)
        {
            $rates = Rate::where('user_id',$user_id)->orderBy('created_at','desc')->paginate(10);
        } elseif ($manga_id) {
            $rates = Rate::where('manga_id',$manga_id)->orderBy('created_at','desc')->paginate(10);
        } else {
            $rates = Rate::orderBy('created_at','desc')->paginate(10);
        }


        return view('admin.rate.list',compact('rates','users','user_id','mangas','manga_id'));
    }
    //delete obj by id
    public function deleteRate($rate_id)
    {
        $rate = Rate::find($rate_id);
        if($rate)
        {
            $rate->delete();
        }

        return redirect(route('panel.listRate'));
    }
}
