<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point_Master extends Model
{
    public function points()
    {
        return $this->belongsTo('App\Point');
    }
}
