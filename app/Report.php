<?php

namespace App;



use App\Http\Controllers\APIController;

class Report extends Model
{

    public static function create()
    {

    }

    public static function list()
    {

    }

    public static function byId($id)
    {
        $report = APIController::reportById($id);
        return $report;
    }

    public static function edit()
    {
        $report = APIController::reportEdit();
    }
}
