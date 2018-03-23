<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    protected $table = 'statistics';

    public function countStatistic()
    {
        $count = count(StatisticDetail::where('statistic_id',$this->id)->get());
        return $count;
    }
}
