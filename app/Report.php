<?php

namespace App;



class Report extends Model
{

    /**
     * Report constructor.
     * @param $id
     * @param $date
     * @param $reason
     * @param $results
     * @param $employee_id
     * @param $pratitioner_id
     * @param $status
     */
//    public function __construct($requestData)
//    {
//        parent::__construct();
//        $this->id = $requestData['id'];
//        $this->date = $requestData['date'];
//        $this->reason = $requestData['reason'];
//        $this->results = $requestData['results'];
//        $this->employee_id = $requestData['employee_id'];
//        $this->pratitioner_id = $requestData['pratitioner_id'];
//        $this->status = $requestData['status'];
//    }



    //Access Ressources

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
