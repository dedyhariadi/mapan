<?php

namespace App\Controllers;


use App\Models\KelasModel;
use App\Models\JenisOrderModel;
use App\Models\KertasModel;
use App\Models\PasisModel;

class Pasis extends BaseController
{
    public function simpan($idKelas = '')
    {
        $KelasModel = new KelasModel();
        $JenisOrderModel = new JenisOrderModel();
        $KertasModel = new KertasModel();
        $PasisModel = new PasisModel();

        $data = [
            'idKelas' => $idKelas
        ];

        echo view('templates/header');
        echo view('pasis/simpan', $data);
        echo view('templates/footer');
    }
}
