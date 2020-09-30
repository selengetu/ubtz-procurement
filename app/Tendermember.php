<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tendermember extends Model
{
    public $timestamps = false;
    protected $table='Commession_members';
    protected $primaryKey = 'member_id';
}
