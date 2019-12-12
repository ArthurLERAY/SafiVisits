<?php

namespace App;



class Report extends Model
{

    public static function create()
    {

    }

    public static function list()
    {
        $reports = [] ;
        $jsonArrays = RAO::get('report/list');
        foreach ($jsonArrays as $jsonArray) {
            $oneReport = new Report($jsonArray);
            $reports[] = $oneReport;
        }
        return $reports;
    }

    public function byId()
    {

    }
}
