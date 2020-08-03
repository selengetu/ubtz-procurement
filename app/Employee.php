<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $timestamps = false;
    protected $table='CONST_EMPLOYEES';
    protected $primaryKey = 'EMPLOYEE_ID';
}
