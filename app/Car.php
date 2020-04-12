<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['model', 'brand_id', 'created_at', 'updated_at'];

    public function brand() {
        return $this->belongsTo('App\Brand');
    }
}
