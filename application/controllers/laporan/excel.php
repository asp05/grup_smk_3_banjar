<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel extends CI_Controller {

	public function index()
	{
		$data['reportexcel'] = $this->la->get_datatables();
		$this->load->view('admin/data/laporan/excel', $data);	
	}

}

/* End of file excel.php */
/* Location: ./application/controllers/laporan/excel.php */