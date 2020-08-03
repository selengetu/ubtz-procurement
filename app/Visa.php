<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visa extends Model
{
    public $timestamps = false;
    protected $table='ORDER_VISAS';
    protected $primaryKey = 'VISA_ID';
}
