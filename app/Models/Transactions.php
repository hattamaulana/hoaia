<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    public function donation()
    {
        return $this->belongsTo('App\Models\Donations', 'donation_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
