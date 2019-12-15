<?php

namespace App\Http\Controllers;

use App\Drug;
use App\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function update()
    {
        return view('inProgress');
    }

    public static function byId($id)
    {
        $report=Report::byId($id);
        return view('visitReport/home',['report'=>$report[0]]);
    }

    public static function edit($id)
    {
        $report = Report::byId($id);
        $drugs=Drug::list();
        return view('visitReport/edit',['report'=>$report[0],'drugs'=>$drugs]);
    }

}
