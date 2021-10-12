<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelCar extends Model
{
    protected $table = 'models';
    protected $fillable = ['name', 'brand_ID'];
    
    public function brand()
    {
        return $this->belongsTo('App/Brand', 'brand_ID');
    }

    public function version()
    {
        return $this->hasMany('App/Version');
    }

}
