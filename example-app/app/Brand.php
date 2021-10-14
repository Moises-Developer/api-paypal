<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ModelCar;

class Brand extends Model
{
    protected $fillable = ['name'];

    public function modelcars()
    {
        return $this->hasMany('App\ModelCar');
    }
}
