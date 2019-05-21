<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class person extends Model
{
    protected $table = 'people';
    protected $fillabel = ["adlit_number", "child_number"];
};
