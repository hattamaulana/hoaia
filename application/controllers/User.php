<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;
use Models\UserModel;

class User extends RestController {

    public function __construct() {
        parent::__construct();
    }

    public function index_get() {
        $this->response([
            'status' => 'success',
            'data'   => UserModel::all()
        ], 200);
    }
}
