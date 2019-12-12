<?php

namespace App;


use App\Http\Controllers\APIController;

class Pratitioner extends Model
{
    public static function list()
    {
        $pratitioners = APIController::pratitionerList();
        return $pratitioners;
    }
}
