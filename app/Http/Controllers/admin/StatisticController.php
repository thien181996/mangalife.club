<?php

namespace App\Http\Controllers\admin;

use App\Statistic;
use App\StatisticDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatisticController extends Controller
{
    public function listStatistic()
    {
        $statistics = Statistic::orderBy('created_at','desc')->paginate(10);

        return view('admin.statistic.list',compact('statistics'));
    }

    public function detailStatistic(Request $rq)
    {
        $statistic_id = $rq->statistic_id;
        if($statistic_id)
        {
            $result = StatisticDetail::where('statistic_id',$statistic_id)->orderBy('created_at','desc')->paginate(10);
        } else {
            $result = StatisticDetail::orderBy('created_at','desc')->paginate(10);
        }


        return view('admin.statistic.detail',compact('result','statistic_id'));
    }
}
