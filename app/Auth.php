<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auth extends Model
{
    private $id;
    private $code;
    private $firstname;
    private $lastname;
    private $login;
    private $password;
    private $address;
    private $postalCode;
    private $city;
    private $phone;
    private $hireDate;
    private $timespan;
    private $api_token;
    private $district_id;
}
