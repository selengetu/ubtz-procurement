<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tendermember extends Model
{
    public $timestamps = false;
    protected $table='Tendermembers';
    protected $primaryKey = 'memberid';
}
