<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Refrigerator extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function item()
    {
        return $this->hasMany('App\Item');
    }
}
