<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traffic extends Model
{
    protected $fillable = ['driver_id', 'car_id', 'route_from', 'route_to', 'cargo', 'cargo_weight', 'created_at', 'updated_at'];

    public function driver() {
        return $this->belongsTo('App\Driver');
    }

    public function car() {
        return $this->belongsTo('App\Car');
    }

    public function donates() {
        return $this->hasMany('App\Donate');
    }
}
