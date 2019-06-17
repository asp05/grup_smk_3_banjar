<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel extends CI_Controller {

	public function index()
	{
		$data['reportexcel'] = $this->la->get_datatables();
		$this->load->view('admin/data/laporan/excel', $data);	
	}
	public function siswa()
	{
		$data['reportexcel'] = $this->la->siswa();
		$this->load->view('admin/data/laporan/excel_siswa', $data);	

	}

}

/* End of file excel.php */
/* Location: ./application/controllers/laporan/excel.php */