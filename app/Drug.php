<?php

namespace App;

use App\Http\Controllers\APIController;

class Drug extends Model
{
    public function statDashboard()
    {

    }

    public static function list()
    {
        $drugs = APIController::drugList();
        return $drugs;
    }

    public function find()
    {

    }

    public function add()
    {

    }
}
