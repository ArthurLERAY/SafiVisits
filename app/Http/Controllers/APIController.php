<?php

namespace App\Http\Controllers;


use App\Drug;
use App\Employee;
use App\family;
use App\Model;
use App\Pratitioner;
use App\Report;
use App\Visit;
use GuzzleHttp\Client;
use Illuminate\Http\Request;


//Used to call API ressources
class APIController extends Controller
{

    public static function activityAsk()
    {
        $client = new Client();
        $res = $client->request('POST',env('RAO_URL').'/activity/ask');
        return json_decode($res->getBody(),true);
    }

    public static function auth()
    {
        //todo
    }

    public static function resetPwd()
    {
        //todo
    }

    public static function drugAdd()
    {
        $client = new Client();
        $res = $client->request('POST',env('RAO_URL').'/drug/add');
        return $res->getBody();
    }

    public static function drugById($drugId)
    {
        $client = new Client();
        $res = $client->request('GET',env('RAO_URL').'/drug/find/'.$drugId);
        $json = $res->getBody();
        return Model::json2Class($json, Drug::class);
    }

    public static function drugList()
    {
        $client = new Client();
        $res = $client->request('GET',env('RAO_URL').'/drug/list');
        $json = $res->getBody();
        return Model::json2Class($json, Drug::class);
    }

    public static function drugStats()
    {
        $client = new Client();
        $res = $client->request('GET',env('RAO_URL').'/drug/stats');
        $json = $res->getBody();
        return Model::json2Class($json, Drug::class);
    }

    public static function employeeById($employeeId)
    {
        $client = new Client();
        $res = $client->request('GET',env('RAO_URL').'/employee/'.$employeeId);
        $json = $res->getBody();
        return Model::json2Class($json, Employee::class);
    }

    public static function employeeCreate()
    {
        $client = new Client();
        $res = $client->request('POST',env('RAO_URL').'/employee/create');
        $json = $res->getBody();
        return Model::json2Class($json, Employee::class);
    }

    public static function employeeEdit()
    {
        $client = new Client();
        $res = $client->request('PUT',env('RAO_URL').'/employee/edit');
        return $res->getBody();
    }

    public static function employeeListByType($employeeType)
    {
        $client = new Client();
        $res = $client->request('GET',env('RAO_URL').'/employee/list/type/'.$employeeType);
        $json = $res->getBody();
        return Model::json2Class($json, Employee::class);
    }

    public static function employeeChangeState()
    {
        $client = new Client();
        $res = $client->request('PUT',env('RAO_URL').'/employee/state');
        $json = $res->getBody();
//        return Model::json2Class($json, Employee::class);
    }

    public static function familyList()
    {
        $client = new Client();
        $res = $client->request('GET',env('RAO_URL').'/family/list');
        $json = $res->getBody();
        return Model::json2Class($json, Family::class);
    }

    public static function pratitionerList()
    {
        $client = new Client();
        $res = $client->request('GET',env('RAO_URL').'/pratitioner/list');
        $json = $res->getBody();
        return Model::json2Class($json, Pratitioner::class);
    }

    public static function pratitionerById($id)
    {
        $client = new Client();
        $res = $client->request('GET',env('RAO_URL').'/pratitioner/byId/'.$id);
        $json = $res->getBody();
        return Model::json2Class($json, Pratitioner::class);
    }

    public static function reportById($reportId)
    {
        $client = new Client();
        $res = $client->request('GET',env('RAO_URL').'/report/'.$reportId);
        $json = $res->getBody();
        return Model::json2Class($json, Report::class);
    }

    public static function reportCreate()
    {
        $client = new Client();
        $res = $client->request('POST',env('RAO_URL').'/report/create');
        return json_decode($res->getBody());
    }

    public static function reportEdit()
    {
        $client = new Client();
        $res = $client->request('PUT',env('RAO_URL').'/report/edit');
    }

    public static function reportList()
    {
        $client = new Client();
        $res = $client->request('GET',env('RAO_URL').'/report/list');
        $json=$res->getBody();
        return Model::json2Class($json,Report::class);
    }

    public static function visitByPratitioner($pratitionerId)
    {
        $client = new Client();
        $res = $client->request('GET',env('RAO_URL').'/visit/pratitioner/'.$pratitionerId);
        $json = $res->getBody();
        return Model::json2Class($json, Visit::class);
    }

    public static function visitCreate()
    {
        $client = new Client();
        $res = $client->request('POST',env('RAO_URL').'/visit/create');
        return $res->getBody();
    }

    public static function visitDate($visitDate)
    {
        $client = new Client();
        $res = $client->request('GET',env('RAO_URL').'/visit/date/'.$visitDate);
        $json = $res->getBody();
        return Model::json2Class($json, Visit::class);
    }
}
