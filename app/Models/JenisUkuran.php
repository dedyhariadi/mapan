<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisUkuranModel extends Model
{
    protected $table      = 'jenisUkuran';
    protected $primaryKey = 'idJenisUkuran';

    protected $returnType     = 'array';

    protected $allowedFields = ['namaJenisUkuran'];
}
