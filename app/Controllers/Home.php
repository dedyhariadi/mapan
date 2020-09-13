<?php

namespace App\Controllers;


use App\Models\KelasModel;
use App\Models\JenisOrderModel;
use App\Models\KertasModel;

class Home extends BaseController
{
	public function index()
	{

		$KelasModel = new KelasModel();
		$JenisOrderModel = new JenisOrderModel();

		$data = [
			'kelas' => $KelasModel->findAll(),
			'jenisOrder' => $JenisOrderModel->findAll(),
		];
		echo view('templates/header');
		echo view('home/index', $data);
		echo view('templates/footer');
	}
}
