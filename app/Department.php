<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public $timestamps = false;
    protected $table='CONST_DEPARTMENTS';
    protected $primaryKey = 'DEPARTMENT_ID';
}
