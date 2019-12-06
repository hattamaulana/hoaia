<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donations extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'plant', 'money'
    ];
}
