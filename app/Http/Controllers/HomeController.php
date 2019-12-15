<?php

namespace App\Http\Controllers;

use App\Pratitioner;
use App\Visit;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $visites=Visit::statsDashboard(1);
        $pratitioner=Pratitioner::byId(1);
        $pratitioner=$pratitioner[0];


        return view('dashboard/home',['visites'=>$visites,'pratitioner'=>$pratitioner]);
    }
}
