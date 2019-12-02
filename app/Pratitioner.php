<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pratitioner extends Model
{
    private $id;
    private $lastname;
    private $firstname;
    private $address;
    private $tel;
    private $notorietyCoeff;
    private $complementarySpeciality;
    private $district_id;
}
