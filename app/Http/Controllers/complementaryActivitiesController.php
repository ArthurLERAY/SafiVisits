<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class complementaryActivitiesController extends Controller
{
    public function index()
    {
        return view('complementaryActivities/home');
    }
}
