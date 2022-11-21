<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DbTutorial extends Migration
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
            'judul' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'content' => [
                'type'          => 'VARCHAR',
                'constraint'    => '1000',
            ],
            'cover_image' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'contributor' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'published_date' => [
                'type'          => 'DATE',
            ],
        ]);
        // Primary Key
        $this->forge->addKey('id', true);
        // Create a Table
        $this->forge->createTable('tutorial');
    }

    public function down()
    {
        $this->forge->dropTable('tutorial');
    }
}
