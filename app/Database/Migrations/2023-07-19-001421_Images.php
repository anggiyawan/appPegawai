<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Images extends Migration
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
            'employee_id'       => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'name'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'url'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
        ]);

        $this->forge->addForeignKey('employee_id', 'images', 'id');
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('images');

        $this->db->query("ALTER TABLE images AUTO_INCREMENT 100001");
    }

    public function down()
    {
        $this->forge->dropTable('images');
    }
}
