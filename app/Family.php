<?php

namespace App;


class Family extends Model
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
