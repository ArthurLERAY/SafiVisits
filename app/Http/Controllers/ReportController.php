<?php

namespace App\Http\Controllers;

use App\Drug;
use App\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {

    }

    public static function byId($id)
    {
        $report=Report::byId($id);
        $drugs=Drug::list();
        return view('visitReport/home',['report'=>$report,'drugs'=>$drugs]);
    }

    public static function edit(Request $request)
    {
        $report=Report::edit($request);
        return route('home');
    }

}
