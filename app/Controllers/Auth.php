<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function __construct()
    {
        $this->db        = \Config\Database::connect();
        $this->request    = \Config\Services::request();
        // $this->session	= \Config\Services::session();
        $this->validation =  \Config\Services::validation();
    }

    public function index()
    {
        echo "test";
    }
}
