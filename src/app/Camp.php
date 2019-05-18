<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Point;


class Camp extends Model
{



    public function points()
    {
        return $this->hasMany('App\Point');
    }

    public function facilities()
    {
        return $this->hasMany('App\Facility');
    }
}
