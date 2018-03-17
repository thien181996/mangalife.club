<?php

namespace App\Http\Controllers\admin;

use App\Report;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    public function listReport()
    {
        $reports = Report::paginate(10);

        return view('admin.report.list',compact('reports'));
    }
}
