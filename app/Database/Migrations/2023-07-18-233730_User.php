<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'    => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'username'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'password'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'email'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'status_id'       => [
                'type'           => 'INT',
                'constraint'     => '2',
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('user');

        $this->db->query("ALTER TABLE user AUTO_INCREMENT 100001");
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
