<?php

namespace App;
use App\ModelCar;

use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    protected $fillable = ['name', 'power', 'base_price', 'kind_of_gasoline', 'model_id'];

    public function model()
    {
        return $this->belongsTo('App\ModelCar');
    }

    public function car()
    {
        return $this->hasMany('App\Car');
    }


}
