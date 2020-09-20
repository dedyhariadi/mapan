<?php

namespace App\Controllers;


use App\Models\KelasModel;
use App\Models\JenisOrderModel;
use App\Models\KertasModel;
use App\Models\PasisModel;
use App\Models\UkuranModel;

class Kelas extends BaseController
{
    public function tambah($idKelas = '')
    {
        $KelasModel = new KelasModel();
        $JenisOrderModel = new JenisOrderModel();
        $KertasModel = new KertasModel();
        $PasisModel = new PasisModel();

        d($this->request->getVar());

        if ($this->request->getVar()) :
            helper('fungsiku');

            $tglTeksKeAngka = tgltekstoangka($this->request->getVar('tglUkurAwal'));

            $simpan = [
                'idKelas' => $idKelas,
                'namaKelas' => $this->request->getVar('namaKelas'),
                'angkatan' => $this->request->getVar('angkatan'),
                'ketua' => $this->request->getVar('pasisId'),
                'kertasId' => $this->request->getVar('kertas'),
                'jenisOrderId' => $this->request->getVar('jenisOrderId'),
                'tglUkurAwal' => $tglTeksKeAngka
            ];

            if (!$KelasModel->save($simpan)) :
                echo "gagal menyimpan";
            else :
                return redirect()->to(base_url('/'));
            endif;
        else :

            $data = [
                'kelas' => $KelasModel->findAll(),
                'jenisOrder' => $JenisOrderModel->findAll(),
                'kertas' => $KertasModel->findAll(),
                'pasis' => $PasisModel->findAll(),
                'idKelas' => $idKelas
            ];

            echo view('templates/header');
            echo view('kelas/simpan', $data);
            echo view('templates/footer');
        endif;
    }

    public function detail($idKelas = '')
    {

        $KelasModel = new KelasModel();
        $JenisOrderModel = new JenisOrderModel();
        $KertasModel = new KertasModel();
        $PasisModel = new PasisModel();
        $UkuranModel = new UkuranModel();

        $data = [
            'kelas' => $KelasModel->findAll(),
            'jenisOrder' => $JenisOrderModel->findAll(),
            'kertas' => $KertasModel->findAll(),
            'pasis' => $PasisModel->where('kelasId', $idKelas)->findAll(),
            'idKelas' => $idKelas,
            'ukuran' => $UkuranModel->findAll()
        ];
        d($data);
        echo view('templates/header');
        echo view('kelas/detail', $data);
        echo view('templates/footer');
    }
}
