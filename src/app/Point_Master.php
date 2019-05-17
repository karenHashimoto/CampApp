<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Point;

class Point_Master extends Model
{
    protected $table = 'point_masters';

    public function points()
    {
        return $this->belongsTo('App\Point');
    }
}
