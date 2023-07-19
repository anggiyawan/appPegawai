<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
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
        return view("user/index");
    }

    public function list()
    {
        // header('Content-Type: application/json');

        // get model table
        $usersModel = new \App\Models\UsersModel();

        $result = array();
        $result['total'] = $usersModel->getCount();
        $row = array();

        $criteria = $usersModel->getAll(array("sort" => $sort, "order" => $order, "offset" => $offset, "rows" => $rows));

        foreach ($criteria as $data) {
            $row[] = array(
                'id'            => $data->userId,
                'userName'            => $data->userName,
                'email'                => $data->email,
                'password'            => $data->password,
            );
        }
        // $columns = array();
        $columns = array($this->readColumn());

        $result = array_merge($result, array('rows' => $row, 'columns' => $columns));
        return stripslashes(json_encode($result, JSON_UNESCAPED_SLASHES));
    }
}
