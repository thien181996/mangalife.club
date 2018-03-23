<?php

namespace App\Http\Controllers\admin;

use App\DonateHistory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DonateController extends Controller
{
    public function listDonate()
    {
        $donates = DonateHistory::paginate(10);

        return view('admin.donate.list',compact('donates'));
    }
}
