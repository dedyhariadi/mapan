<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisOrderModel extends Model
{
    protected $table      = 'jenisOrder';
    protected $primaryKey = 'idJenisOrder';

    protected $returnType     = 'array';

    protected $allowedFields = ['nama'];

    protected $useTimestamps = true;
}
