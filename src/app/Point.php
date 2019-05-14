<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    public function camps()
    {
        return $this->belongsTo('App\Camp');
    }

    public function point_masters()
    {
        return $this->hasOne('App\Point_Master');
    }


}
