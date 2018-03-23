<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatisticDetail extends Model
{
    protected $table = 'statistic_details';

    public function getUserEmail()
    {
        if($this->user_id)
        {
            $email = User::find($this->user_id)->email;
            return $email;
        } else {
            return "Khách";
        }
    }
}
