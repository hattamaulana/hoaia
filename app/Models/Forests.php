<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Forests extends Model
{
    //

    public function donations()
    {
        return $this->hasMany('App\Models\Donations');
    }
}
