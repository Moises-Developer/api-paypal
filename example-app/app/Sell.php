<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    //

    public function car()
    {
        return $this->belongsTo('App/Car');
    }

    public function seller()
    {
        return $this->belongsTo('App/Seller');
    }

    public function customer()
    {
        return $this->belongsTo('App/Customer');
    }

}
