<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    private $id;
    private $code;
    private $commercialName;
    private $family_id;
    private $composition;
    private $effects;
    private $contraindication;
}
