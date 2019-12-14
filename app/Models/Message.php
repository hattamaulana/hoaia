<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function byUser()
    {
        return $this->belongsTo('App\Models\User', 'from_user_id');
    }

    public function toUser()
    {
        return $this->belongsTo('App\Models\User', 'to_user_id');
    }
}
