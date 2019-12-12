<?php

namespace App;

use Illuminate\Support\Facades\App;

class Model
{

    public function __construct($params){
        foreach ($params as $key=>$value) {
            $this->$key=$value;
        }
    }

    public static function json2Class($json,$class)
    {
        $result=[];
        $jsons = json_decode( $json, true);
        foreach ($jsons as $oneJson) {
            $result[]= new $class($oneJson);
        }
        return $result;
    }
}
