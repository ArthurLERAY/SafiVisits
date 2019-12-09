<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;

class directoryController extends Controller
{
    public function index()
    {
        $reports = route('APIReport');
        return view('directory/home')->with(['reports'=>$reports]);
    }
}
