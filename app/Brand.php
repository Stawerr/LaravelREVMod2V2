<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use softDeletes;

    public function cars()
    {
        return $this->HasMany(Car::Class);
    }

    protected $fillable = [
        'name'
    ];

    protected static function booted()
    {
        static::deleting(function ($brand) {
            if ($brand->cars()->exists()) {
                throw new \Exception('Related cars found');
            }
        });
    }
}
