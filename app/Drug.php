<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    public function statDashboard()
    {

    }

    public function list()
    {
        $drugs = [] ;
        $jsonArrays = RAO::get($this->routeAPISuite.'/list');
        foreach ($jsonArrays as $jsonArray) {
            $oneDrug = new Drug($jsonArray);
            $drugs[] = $oneDrug;
        }
        return $drugs;
    }

    public function find()
    {

    }

    public function add()
    {

    }
}
