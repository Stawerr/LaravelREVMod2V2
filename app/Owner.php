<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Owner extends Model
{
    use softDeletes;

    public function country()
    {
        return $this->belongsTo(Country::Class);
    }
    public function cars()
    {
        return $this->hasMany(Car::Class);
    }
}
