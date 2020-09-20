<?php

namespace App\Controllers;


use App\Models\KelasModel;
use App\Models\JenisOrderModel;
use App\Models\KertasModel;
use App\Models\PasisModel;
use App\Models\jenisUkuranModel;
use App\Models\UkuranModel;

class Pasis extends BaseController
{
    public function simpan($idKelas = '')
    {
        $KelasModel = new KelasModel();
        $JenisOrderModel = new JenisOrderModel();
        $KertasModel = new KertasModel();
        $PasisModel = new PasisModel();
        $UkuranModel = new UkuranModel();

        $data = [
            'idKelas' => $idKelas
        ];

        if ($this->request->getVar()) :

            $simpanPasis = [
                'nama' => $this->request->getVar('nama'),
                'telepon' => $this->request->getVar('telepon'),
                'gender' => $this->request->getVar('gender'),
                'kelasId' => $idKelas,
                'tglUkur' => date('dmy')
            ];

            d($this->request->getVar());

            if (!$PasisModel->save($simpanPasis)) :
                echo "gagal menyimpan";
            else :

                $simpanUkuran = [
                    [
                        'ukuran' => $this->request->getVar('ukuranClana'),
                        'keterangan' => '',
                        'jenisUkuranId' => 1,
                        'pasisId' => $PasisModel->insertID()
                    ],
                    [
                        'ukuran' => $this->request->getVar('ukuranBaju'),
                        'keterangan' => '',
                        'jenisUkuranId' => 2,
                        'pasisId' => $PasisModel->insertID()
                    ],
                    [
                        'ukuran' => $this->request->getVar('topi'),
                        'keterangan' => '',
                        'jenisUkuranId' => 3,
                        'pasisId' => $PasisModel->insertID()
                    ],
                    [
                        'ukuran' => $this->request->getVar('sepatu'),
                        'keterangan' => '',
                        'jenisUkuranId' => 4,
                        'pasisId' => $PasisModel->insertID()
                    ],
                    [
                        'ukuran' => $this->request->getVar('kaos'),
                        'keterangan' => '',
                        'jenisUkuranId' => 5,
                        'pasisId' => $PasisModel->insertID()
                    ]
                ];
                // d($simpanUkuran);
                if (!$UkuranModel->insertBatch($simpanUkuran)) :
                    echo "gagal menyimpan";
                endif;
                // return redirect()->to(base_url('/'));
?>
                <script>
                    alert('sukses tersimpan');
                </script>
<?php
            endif;

        endif;
        echo view('templates/header');
        echo view('pasis/simpan', $data);
        echo view('templates/footer');
    }
}
