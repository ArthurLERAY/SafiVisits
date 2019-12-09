<?php

namespace App\Http\Controllers;


use GuzzleHttp\Client;
use Illuminate\Http\Request;

class APIController extends Controller
{

    public function activityAsk()
    {
        $client = new Client();
        $res = $client->request('POST',env('RAO_URL').'/activity/ask');
        return json_decode($res->getBody());
    }

    public function drugAdd()
    {
        $client = new Client();
        $res = $client->request('POST',env('RAO_URL').'/drug/add');
        return json_decode($res->getBody());
    }

    public function drugById($id)
    {
        $client = new Client();
        $res = $client->request('GET',env('RAO_URL').'/drug/find/{'.$id);
        return json_decode($res->getBody());
    }

    public function drugList()
    {
        $client = new Client();
        $res = $client->request('GET',env('RAO_URL').'/drug/list');
        return json_decode($res->getBody());
    }

    public function drugStats()
    {
        $client = new Client();
        $res = $client->request('GET',env('RAO_URL').'/drug/stats');
        return json_decode($res->getBody());
    }

    public function employeeById()
    {
        $client = new Client();
        $res = $client->request('GET',env('RAO_URL').'/report/list');
        return json_decode($res->getBody());
    }

    public function employeeCreate()
    {
        $client = new Client();
        $res = $client->request('POST',env('RAO_URL').'/employee/create');
        return json_decode($res->getBody());
    }

    public function employeeEdit()
    {
        $client = new Client();
        $res = $client->request('PUT',env('RAO_URL').'/employee/edit');
        return json_decode($res->getBody());
    }

    public function employeeListByType($type)
    {
        $client = new Client();
        $res = $client->request('GET',env('RAO_URL').'/employee/list/type/'.$type);
        return json_decode($res->getBody());
    }

    public function employeeChangeState()
    {
        $client = new Client();
        $res = $client->request('PUT',env('RAO_URL').'/employee/state');
        return json_decode($res->getBody());
    }

    public function familyList()
    {
        $client = new Client();
        $res = $client->request('GET',env('RAO_URL').'/family/list');
        return json_decode($res->getBody());
    }

    public function pratitionerList()
    {
        $client = new Client();
        $res = $client->request('GET',env('RAO_URL').'/pratitioner/list');
        return json_decode($res->getBody());
    }

    public function reportById($id)
    {
        $client = new Client();
        $res = $client->request('GET',env('RAO_URL').'/report/'.$id);
        return json_decode($res->getBody());
    }

    public function reportCreate()
    {
        $client = new Client();
        $res = $client->request('POST',env('RAO_URL').'/report/create');
        return json_decode($res->getBody());
    }

    public function reportList()
    {
        $client = new Client();
        $res = $client->request('GET',env('RAO_URL').'/report/list');
        return json_decode($res->getBody());
    }

    public function visitByPratitioner($pratitioner_id)
    {
        $client = new Client();
        $res = $client->request('GET',env('RAO_URL').'/visit/pratitioner/'.$pratitioner_id);
        return json_decode($res->getBody());
    }

    public function visitCreate()
    {
        $client = new Client();
        $res = $client->request('POST',env('RAO_URL').'/visit/create');
        return json_decode($res->getBody());
    }

    public function visitDate($date)
    {
        $client = new Client();
        $res = $client->request('GET',env('RAO_URL').'/visit/date/'.$date);
        return json_decode($res->getBody());
    }
}
