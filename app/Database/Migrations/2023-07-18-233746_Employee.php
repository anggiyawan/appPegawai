<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Employee extends Migration
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
            'name'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'position'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'salary'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'date_of_birth'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'address'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'status_id'       => [
                'type'           => 'INT',
                'constraint'     => '2',
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('employee');

        $this->db->query("ALTER TABLE employee AUTO_INCREMENT 100001");
    }

    public function down()
    {
        $this->forge->dropTable('employee');
    }
}
