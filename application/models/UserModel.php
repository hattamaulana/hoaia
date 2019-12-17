<?php 

namespace Models;

defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class UserModel extends Eloquent {
    protected $table = 'users';

    /**
     * @var hidden
     * Disini didefinisikan untuk column yang tidak akan 
     * ditampilkan saat mengambil data.
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Create Relation one to -> many
     * to table transactions;
     */
    public function transactions () {
        return $this->hasMany('Models\TransactionModel', 'user_id', 'id');
    }

    /**
     * Create Relation one to -> many
     * to table messages;
     */
    public function inbox () {
        return $this->hasMany('Models\MessageModel', 'to_user_id', 'id');
    }

    /**
     * Create Relation one to -> many
     * to table messages;
     */
    public function sents () {
        return $this->hasMany('Models\MessageModel', 'from_user_id', 'id');
    }
}