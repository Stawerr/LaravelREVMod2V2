<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use softDeletes;

    public function owners()
    {
        return $this->HasMany(Owner::Class);
    }
}
