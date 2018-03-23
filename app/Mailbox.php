<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mailbox extends Model
{
    protected $table = 'mailboxes';

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
