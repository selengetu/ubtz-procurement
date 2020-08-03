<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    public $timestamps = false;
    protected $table='UBTZ_YEAR_BUDGET';
    protected $primaryKey = 'ID';
}
