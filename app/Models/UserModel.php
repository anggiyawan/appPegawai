<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    // protected $insertID         = 0;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;
    protected $protectFields    = false;
    protected $allowedFields    = ['id', 'username', 'password', 'email', 'status_id'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = '';
    protected $updatedField  = '';
    protected $deletedField  = '';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = ["hashPassword"];
    protected $afterInsert    = [];
    protected $beforeUpdate   = ["hashPassword"];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getAll($pagination = "")
    {
        return $this->getData($pagination)->getResult();
    }

    public function getCount($pagination = "")
    {
        return $this->getData($pagination)->getNumRows();
    }

    // Listing Join
    public function getData($pagination = "")
    {
        $sql = "SELECT users.*, groups.groupId, groups.groupName FROM users INNER JOIN groups ON users.groupId=groups.groupId";
        $sql .= " AND users.statusId!=0";
        if (isset($_POST['userName'])) {
            $sql .= " AND users.userName LIKE '%" . $_POST['userName'] . "%'";
        }

        if (isset($_POST['groupId'])) {
            $sql .= " AND groups.groupId LIKE '%" . $_POST['groupId'] . "%'";
        }

        if ($pagination != "") {

            $rows     = $pagination["rows"];
            $sort    = $pagination["sort"];
            $order    = $pagination["order"];
            $offset = $pagination["offset"];
            $sql .= " ORDER BY $sort $order limit $offset,$rows";
        }

        $builder = $this->db->query($sql);
        return $builder;
    }

    protected function hashPassword(array $data)
    {
        if (!isset($data['data']['password'])) {
            return $data;
        }

        $data['data']['password'] = hash("sha256", $data['data']['password']);
        // unset($data['data']['password']);

        return $data;
    }
}
