<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class people extends Model
{
    protected $table = 'people';
    protected $fillabel = ["adlit_number", "child_number"];
};
