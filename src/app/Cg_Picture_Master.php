<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cg_Picture;

class Cg_Picture_Master extends Model
{
    protected $table = 'cg_picture_masters';

    public function cg_pictures()
    {
        return $this->belongsTo('App\Cg_Picture');
    }
}
