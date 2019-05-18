<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facility_Master extends Model
{
    public function facilities()
    {
        return $this->belongsTo('App\Facility');
    }
}
