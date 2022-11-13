<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AccountSeed extends Seeder
{
    public function run()
    {
        $admin = [
            'username' => 'admin',
            'password' => '$2a$10$lnlxnKLeLz07sAyJjZWiLeGIHGvTjLdi88X6yE7zh7hIJEYP44gDW',
            'level' => 'Admin'
        ];

        $this->db->table('accounts')->insert($admin);
    }
}
