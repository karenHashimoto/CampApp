<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Facility;

class Facility_Master extends Model
{   
    protected $table = 'facility_masters';

    public function facilities()
    {
        return $this->belongsTo('App\Facility');
    }
}
