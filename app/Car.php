<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use softDeletes;

    public function owner()
    {
        return $this->belongsTo(Owner::Class);
    }
    public function brand()
    {
        return $this->belongsTo(Brand::Class);
    }

    protected $fillable = [
        'brand_id',
        'registration',
        'year_of_manufacture',
        'color',
        'owner_id'
    ];

    protected static function booted()
    {
        static::deleting(function ($car) {
            if ($car->owner()->exists()) {
                throw new \Exception('Related owners found');
            }
        });
    }
}
