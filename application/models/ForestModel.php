<?php

namespace Models;

defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;


class ForestModel extends Eloquent {
    protected $table = 'forests';
    
    /**
     * Create Relation Database one to -> many
     * to table donations.
     */
    public function donations () {
        return $this->hasMany('Models\DonationModel', 'forest_id', 'id');
    }
}