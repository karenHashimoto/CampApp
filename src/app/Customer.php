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
        'camp_name',
        'adult_number',
        'child_number',
        'inDate',
        'outDate',
        'isItemRental',
        'isCarRental',
    ];
}
