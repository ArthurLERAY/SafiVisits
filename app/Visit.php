<?php

namespace App;


use App\Http\Controllers\APIController;

class Visit extends Model
{
    public static function statsDashboard($id)
    {
        $visites = APIController::visitByPratitioner($id);
        return $visites;
    }

    public static function pratitioner()
    {

    }

    public static function statByDate()
    {

    }

}
