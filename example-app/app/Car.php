<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['code', 'price', 'version_id'];

    public function version()
    {
        return $this->belongsTo('App\Version');
    }

    public function sell()
    {
        return $this->hasMany('App\Sell');
    }


}
