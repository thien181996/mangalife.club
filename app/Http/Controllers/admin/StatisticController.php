<?php

namespace App\Http\Controllers\admin;

use App\Statistic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatisticController extends Controller
{
    public function listStatistic()
    {
        $statistics = Statistic::paginate(10);

        return view('admin.statistic.list',compact('statistics'));
    }
}
