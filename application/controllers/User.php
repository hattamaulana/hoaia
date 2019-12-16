<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;


class User extends RestController {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index_get() {
        $this->response([
            'status' => 'success',
            'data'   => User_model::all()
        ], 200);
    }
}
