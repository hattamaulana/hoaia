<?php

namespace Models;

defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;


class DonationModel extends Eloquent {
    protected $table = 'donations';
    
    /**
     * Create Relation Database one to -> many (inverse)
     * to table forests.
     */
    public function forest () {
        return $this->belongsTo('Models\ForestsModel', 'forest_id', 'id');
    }

    /**
     * Create Relation Database one to -> many
     * to table transactions.
     */
    public function transactions () {
        return $this->hasMany('Models\TransactionModel', 'donation_id', 'id');
    }
}