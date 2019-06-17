<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Home extends REST_Controller {

	//get data
	public function index_get()
	{
		$id_absis = $this->get('id_absis');

		$output = $this->am->getDataApi();
	
		if ($id_absis != null) {
			$output = $this->am->getDataApi($id_absis);
		}

		if ($output) {
			$this->response($output, REST_Controller::HTTP_OK);
		} else {
			$this->response([
                'status' => FALSE,
                'pesan' => 'Gagal Mengambil Data'
            ], REST_Controller::HTTP_NOT_FOUND);
		}
	}

	//update data
	public function index_put()
	{
		$id_absis = $this->put('id_absis');

		$data = [
			// 'nis' => $this->put('nis'),
			// 'id_kelas' => $this->put('id_kelas'),
			'tgl' => $this->put('tgl'),
			'status_kehadiran' => $this->put('status_kehadiran')
		];

		if ($this->db->update('tbl_absis', $data, ['id_absis'=>$id_absis])) {
			$this->response([
	            'status' => true,
	            'pesan' => 'Berhasil Mengubah Data'
	        ], REST_Controller::HTTP_OK);
		} else {
			$this->response([
                'status' => FALSE,
                'pesan' => 'Gagal Mengubah Data'
            ], REST_Controller::HTTP_BAD_REQUEST);
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/api/Home.php */