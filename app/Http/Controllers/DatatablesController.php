<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DatatablesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function dashboardDrug($datas)
    {


        $data = [
            'date'=>$datas->date,
            'lieu'=>$datas->address,
            'name'=>$datas->firstname.''.$datas->lastname,
            'action'=>'',
        ];
        return $data;
    }
}
