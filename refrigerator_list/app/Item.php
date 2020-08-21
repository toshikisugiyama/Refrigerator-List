<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $guarded = [];

    public function refrigerator()
    {
        return $this->belongsTo('App\Refrigerator');
    }
}
