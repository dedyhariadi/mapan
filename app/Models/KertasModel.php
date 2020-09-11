<?php

namespace App\Models;

use CodeIgniter\Model;

class KertasModel extends Model
{
    protected $table      = 'kertas';
    protected $primaryKey = 'idKertas';

    protected $returnType     = 'array';

    protected $allowedFields = ['warnaKertas', 'ukuran'];

    protected $useTimestamps = true;
}
