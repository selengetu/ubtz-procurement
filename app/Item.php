<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public $timestamps = false;
    protected $table='ORDER_ITEMS';
    protected $primaryKey = 'ITEM_ID';
}
