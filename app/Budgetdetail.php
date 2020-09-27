<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Budgetdetail extends Model
{
    public $timestamps = false;
    protected $table='UBTZ_YEAR_BUDGET_DETAIL';
    protected $primaryKey = 'DETAIL_ID';
}
