<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }
}

class Information extends Model
{
    public function facilities()
    {
        return $this->hasMany(Facility::class);
    }
}

class Information extends Model
{
    public function titles()
    {
        return $this->hasOne(Title::class);
    }
}