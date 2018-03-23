<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'reports';

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

    public function getReportName()
    {
        $name = ReportTemplate::find($this->report_type)->template_name;
        return $name;
    }

}
