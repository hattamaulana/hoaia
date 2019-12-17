<?php

namespace Models;

defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;


class TransactionModel extends Eloquent {
    protected $table = 'transactions';
    
    /**
     * Create Relation Database one to -> many (inverse)
     * to table donations.
     */
    public function donation () {
        return $this->belongsTo('Models\DonationModel', 'donation_id', 'id');
    }

    /**
     * Create Relation Database one to -> many (inverse)
     * to table users.
     */
    public function user () {
        return $this->belongsTo('Models\UserModel', 'user_id', 'id');
    }
}