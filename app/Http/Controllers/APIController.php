<?php

namespace App\Http\Controllers;


use GuzzleHttp\Client;
use Illuminate\Http\Request;

class APIController extends Controller
{

    public function activityAsk()
    {

    }

    public function drugList()
    {

    }

    public function drugStat()
    {

    }

    public function pratitionerList()
    {

    }

    public function reportCreate()
    {

    }



    public function reportList()
    {
        $client = new Client();
        $res = $client->request('GET',env('RAO_URL').'/report/list');
        return json_decode($res->getBody());
    }

    public function visitDate($date)
    {

    }

    public function visitByPratitioner()
    {

    }
}
