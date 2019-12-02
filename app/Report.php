<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    private $id;
    private $date;
    private $reason;
    private $results;
    private $employee_id;
    private $pratitioner_id;
    private $status;
}
