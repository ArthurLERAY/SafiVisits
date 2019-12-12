<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Eastwest\Json\JsonException ;


class DirectoryController extends Controller
{
    public function index()
    {
        var_dump(APIController::reportList());


//        return view('directory/home')->with($reports);
    }




}
