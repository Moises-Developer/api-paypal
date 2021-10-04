<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelCar extends Model
{
    //missing attrts
    
    public function brand()
    {
        return $this->belongsTo('App/Brand');
    }

    public function version()
    {
        return $this->hasMany('App/Version');
    }

}
