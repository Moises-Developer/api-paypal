<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    protected $fillable = ['costumer_id', 'seller_id', 'car_id', 'sell_date'];

    public function car()
    {
        return $this->belongsTo('App\Car');
    }

    public function seller()
    {
        return $this->belongsTo('App\Seller');
    }

    public function costumer()
    {
        return $this->belongsTo('App\Costumer');
    }

}
