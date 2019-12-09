<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    public function find()
    {

    }

    public function edit()
    {

    }

    public function changeState()
    {

    }

    public function list()
    {
        $employees = [] ;
        $jsonArrays = RAO::get($this->routeAPISuite.'/list');
        foreach ($jsonArrays as $jsonArray) {
            $oneEmployee = new Employee($jsonArray);
            $employees[] = $oneEmployee;
        }
        return $employees;
    }

    public function create()
    {

    }
}
