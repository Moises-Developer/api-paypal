<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    //here is missing the attributs

    public function modelcar()
    {
        return $this->belongsTo('App/ModelCar');
    }

    public function car()
    {
        return $this->hasMany('App/Car');
    }


}
