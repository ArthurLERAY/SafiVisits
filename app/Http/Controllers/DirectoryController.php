<?php

namespace App\Http\Controllers;

use App\Pratitioner;


class DirectoryController extends Controller
{
    public function index()
    {
        $pratitioners = Pratitioner::list();
        return view('directory/home',['pratitioners'=>$pratitioners]);
    }
}
