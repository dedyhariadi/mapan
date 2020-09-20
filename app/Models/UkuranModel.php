<?php

namespace App\Models;

use CodeIgniter\Model;

class UkuranModel extends Model
{
    protected $table      = 'ukuran';
    protected $primaryKey = 'idUkuran';

    protected $returnType     = 'array';

    protected $allowedFields = ['ukuran', 'keterangan', 'jenisUkuranId', 'pasisId'];

    protected $useTimestamps = true;
}
