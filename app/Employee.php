<?php

namespace App;

class Employee extends Model
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
