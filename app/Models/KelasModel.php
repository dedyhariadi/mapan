<?php

namespace App\Models;

use CodeIgniter\Model;

class KelasModel extends Model
{
    protected $table      = 'kelas';
    protected $primaryKey = 'idKelas';

    protected $returnType     = 'array';

    protected $allowedFields = ['namaKelas', 'angkatan', 'ketua', 'kertasId', 'jenisOrderId', 'tglUkurAwal'];

    protected $useTimestamps = true;
}
