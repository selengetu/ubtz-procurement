<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tender extends Model
{
    public $timestamps = false;
    protected $table='Tenderbids';
    protected $primaryKey = 'tenderbid_id';
}
