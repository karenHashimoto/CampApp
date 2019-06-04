<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'id',
        'user_name',
        'email',
        'phone',
        'adlut_number',
        'child_number',
        'inDate',
        'outDate',
        'isItemRental',
        'isCarRental',
        
    ];
}
