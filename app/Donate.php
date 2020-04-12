<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donate extends Model
{
    protected $fillable = ['name', 'email', 'traffic_id', 'amount', 'created_at', 'updated_at'];

    public function traffic() {
        return $this->belongsTo('App\Traffic');
    }
}
