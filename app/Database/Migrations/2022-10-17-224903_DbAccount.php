<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DbAccount extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'level' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ]
        ]);
        // Primary Key
        $this->forge->addKey('username', true);
        // Create a Table
        $this->forge->createTable('accounts');
    }

    public function down()
    {
        $this->forge->dropTable('accounts');
    }
}
