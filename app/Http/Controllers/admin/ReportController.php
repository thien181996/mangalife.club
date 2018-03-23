<?php

namespace App\Http\Controllers\admin;

use App\Report;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class ReportController extends Controller
{
    public function listReport(Request $rq)
    {
        $users = User::all();
        $user_id = $rq->user_id;
        if($user_id)
        {
            $reports = Report::where('user_id',$user_id)->orderBy('created_at','desc')->paginate(10);
        } else {
            $reports = Report::orderBy('created_at','desc')->paginate(10);
        }

        return view('admin.report.list',compact('reports','users','user_id'));
    }
}
