<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    //this part is the array that will fill the camps.
    protected $fillable = ['name', 'lastname', 'telephone', 'address'];

    public function sell()
    {
        return $this->hasMany('App\Sell');
    }


}
