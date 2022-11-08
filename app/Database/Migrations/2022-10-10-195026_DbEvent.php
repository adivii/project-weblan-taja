<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DbEvent extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'judul_event' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'waktu_event' => [
                'type'       => 'DATE',
            ],
            'tempat_event' => [
                'type' => 'TEXT',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        // Primary Key
        $this->forge->addKey('id', true);
        // Create a Table
        $this->forge->createTable('events');
    }

    public function down()
    {
        $this->forge->dropTable('events');
    }
}
