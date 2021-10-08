<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Costumer extends Model
{
    protected $fillable = ['name', 'lastname', 'telephone', 'address'];

    public function sell()
    {
        return $this->hasMany('App/Sell');
    }
}
