<?php

namespace App\Models;

use CodeIgniter\Model;

class PenyuluhModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'penyuluh';
    protected $primaryKey       = 'username';
    protected $useAutoIncrement = false;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = false;

    // Dates
    protected $useTimestamps = false;
}
