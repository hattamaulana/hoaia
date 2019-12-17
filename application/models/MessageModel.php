<?php

namespace Models;

defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;


class MessageModel extends Eloquent {
    protected $table = 'messages';

    /**
     * Create Relation Database one to -> many (inverse)
     * to table users.
     */
    public function fromUser () {
        return $this->belongsTo('Models\UserModel', 'from_user_id', 'id');
    }

    /**
     * Create Relation Database one to -> many (inverse)
     * to table users.
     */
    public function toUser() {
        return $this->belongsTo('Models\UserModel', 'to_user_id', 'id');
    }
}