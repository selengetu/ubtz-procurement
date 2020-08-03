<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commession extends Model
{
    public $timestamps = false;
    protected $table='TENDER_COMMESSION';
    protected $primaryKey = 'COMMESS_ID';
}
