<?php

namespace App\Models;

use CodeIgniter\Model;

class TutorialModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tutorial';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = false;

    // Dates
    protected $useTimestamps = false;
}
