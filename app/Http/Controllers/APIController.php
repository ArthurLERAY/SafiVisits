<?php

namespace App\Http\Controllers;


use GuzzleHttp\Client;
use Illuminate\Http\Request;

class APIController extends Controller
{

    public function activityAsk()
    {

    }

    public function drugAdd()
    {
        
    }

    public function drugById()
    {
        
    }

    public function drugList()
    {

    }

    public function drugStat()
    {

    }

    public function employeeById()
    {
        
    }

    public function employeeCreate()
    {
        
    }

    public function employeeEdit()
    {
        
    }

    public function employeeListByType()
    {
        
    }

    public function employeeState()
    {
        
    }

    public function familyList()
    {
        
    }

    public function pratitionerList()
    {

    }

    public function reportById()
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

    public function visitByPratitioner()
    {

    }

    public function visitCreate()
    {
        
    }

    public function visitDate($date)
    {

    }
}
