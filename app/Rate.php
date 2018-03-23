<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $table = 'rates';

    protected $fillable = [];

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
