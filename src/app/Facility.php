<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Facility_Master;
use App\Camp;

class Facility extends Model
{
    public function camps()
    {
        return $this->belongsTo('App\Camp');
    }

    public function facility_masters()
    {
        return $this->hasOne('App\Facility_Master', 'id' ,'facility_id');
    }
}
