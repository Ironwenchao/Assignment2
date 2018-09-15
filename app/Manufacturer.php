<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    /*protected $fillable = ['name', 'country'];*/
    function items() {
        return $this->hasMany('App\Item');
    }
}
