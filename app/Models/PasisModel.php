<?php

namespace App\Models;

use CodeIgniter\Model;

class PasisModel extends Model
{
    protected $table      = 'pasis';
    protected $primaryKey = 'idPasis';

    protected $returnType     = 'array';

    protected $allowedFields = ['nama', 'telepon', 'gender', 'kelasId', 'tglUkur'];
}
