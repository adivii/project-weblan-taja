<?php

namespace App\Models;

use CodeIgniter\Model;

class AccountModel extends Model
{
    protected $table            = 'accounts';
    protected $primaryKey       = 'username';
    protected $useAutoIncrement = false;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = false;

    // Dates
    protected $useTimestamps = false;
}
