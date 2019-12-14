<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Forests extends Model
{
    protected $fillable = [
        'name', 'description', 'location', 'country', 'large', 'imgurl'
    ];

    public function donations()
    {
        return $this->hasMany('App\Models\Donations');
    }
}
