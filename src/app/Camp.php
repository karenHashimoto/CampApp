<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Point;
use App\Facility;
use App\Cg_Picture;
use App\Person;
use App\Date;

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

    public function cg_pictures()
    {
        return $this->hasMany('App\Cg_Picture');
    }
}
