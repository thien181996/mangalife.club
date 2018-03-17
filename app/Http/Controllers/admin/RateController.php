<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Rate;

class RateController extends Controller
{
    //get all table comment
    public function listRate()
    {
        $rates = Rate::paginate(10);

        return view('admin.rate.list',compact('rates'));
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
