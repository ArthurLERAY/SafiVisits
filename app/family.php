<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class family extends Model
{
    public function list()
    {
        $families = [] ;
        $jsonArrays = RAO::get($this->routeAPISuite.'/list');
        foreach ($jsonArrays as $jsonArray) {
            $oneFamily = new family($jsonArray);
            $families[] = $oneFamily;
        }
        return $families;
    }
}
