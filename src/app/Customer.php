<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'memo',
        'adult_number',
        'child_number',
        'inDate',
        'outDate',
        'isItemRental',
        'isCarRental',
    ];
}
