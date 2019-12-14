<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donations extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'plant', 'money', 'imgurl'
    ];

    public function forest()
    {
        return $this->belongsTo('App\Models\Forests', 'forest_id');
    }

    public function transactions()
    {
        return $this->hasMany('App\Models\Transactions', 'donation_id', 'id');
    }
}
