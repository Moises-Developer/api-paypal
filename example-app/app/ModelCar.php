<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Brand;

class ModelCar extends Model
{
    protected $fillable = ['name', 'brand_id'];
    
    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }

    public function version()
    {
        return $this->hasMany('App\Version');
    }

}
