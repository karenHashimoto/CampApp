<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cg_Picture extends Model
{
    protected $table = 'cg_pictures';

    public function camps()
    {
        return $this->belongsTo('App\Camp');
    }

    public function cg_picture_masters()
    {
        return $this->hasOne('App\Cg_Picture_Master', 'id', 'cg_pic_id');
    }
}
