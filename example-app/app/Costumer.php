<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Costumer extends Model
{
    //

    public function sell()
    {
        return $this->hasMany('App/Sell');
    }
}
