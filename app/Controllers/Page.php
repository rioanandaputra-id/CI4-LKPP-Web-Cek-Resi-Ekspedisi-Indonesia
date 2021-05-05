<?php

namespace App\Controllers;

class Page extends BaseController
{
	public function index()
	{
		return view('resi/index');
	}

	public function cek(){
		$courier =  $this->request->getPost('kurir');
		$awb = $this->request->getPost('resi');

		$result = file_get_contents('https://api.binderbyte.com/v1/track?api_key=ce14c26f521c4bb1d32c3eb6200d108006203dca757bc2f539b89b440182b62e&courier='.$courier.'&awb='.$awb, FALSE);

		$json = json_decode($result, TRUE);
		$count_ray = count($json['data']['history']);

		if($count_ray < 1){
			echo "<strong>BELUM ADA NIH!</strong><br>Mungkin paket sedang dikemas penjual dan siap dikirim ke alamat kamu. Silahkan datang kembali nanti ya :)";
		} else {
			$data['hasil'] = $json['data'];
			$data['countnya'] = $count_ray;
			 return view('resi/hasil', $data);
		}

	}
}
