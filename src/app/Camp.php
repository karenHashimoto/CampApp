<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Camp extends Model
{
    


public function points()
    {
        return $this->hasMany('App\Point');

       
    }


}
