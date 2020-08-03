<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $timestamps = false;
    protected $table='CONST_CUSTOMERS';
    protected $primaryKey = 'customerid';
}
