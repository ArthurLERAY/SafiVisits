<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pratitioner extends Model
{
    public function list()
    {
        $pratitioners = [] ;
        $jsonArrays = RAO::get($this->routeAPISuite.'/list');
        foreach ($jsonArrays as $jsonArray) {
            $onePratitioner = new Pratitioner($jsonArray);
            $pratitioners[] = $onePratitioner;
        }
        return $pratitioners;
    }
}
