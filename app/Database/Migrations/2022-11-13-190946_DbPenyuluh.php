<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DbPenyuluh extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'nik' => [
                'type'       => 'VARCHAR',
                'constraint' => '18',
            ],
            'nama_lengkap' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'nomor_telepon' => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
            'wilayah_kerja' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'alamat' => [
                'type'       => 'VARCHAR',
                'constraint' => '511',
            ],
            'tanggal_lahir' => [
                'type'       => 'DATE',
            ],
            'pendidikan_terakhir' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);
        // Primary Key
        $this->forge->addKey('username', true);
        // Create a Table
        $this->forge->createTable('penyuluh');
    }

    public function down()
    {
        $this->forge->dropTable('penyuluh');
    }
}
