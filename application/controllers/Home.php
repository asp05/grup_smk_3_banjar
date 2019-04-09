<?php
defined('BASEPATH') or exit ('No script access allowed');

class Home extends CI_Controller
{
	public function __construct(){
        parent::__construct();
        $this->load->model('m_crud');
        $this->load->helper('url','form');
    }
	public function index()
	{
		$data['judul']	= "Welcome to Ashop";
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
		$this->load->view('template/navigasi');
		$this->load->view('template/index');
		$this->load->view('template/footer');
	}
	public function tabel_siswa($id = null)
	{
		if ($id != null) {
	        $q          = $this->m_crud->mengambil('v_biosiswa', array('nis'=>$id));
    	}else{
	        $q          = $this->m_crud->mengambil('v_biosiswa');
    	}
        if ($q['num_rows'] == true) {
            $status = 200;
        } else {
            $status = 404;
        }
        $data['isibio'] = $q;
         $this->li->to_json(array(
            'status' => $status,
            'data'   => $q['data']->result(),
        ));
		$judul['judul']	= "Welcome to Ashop";
		$this->load->view('template/header',$judul);
		$this->load->view('template/sidebar');
		$this->load->view('template/navigasi');
		$this->load->view('data/table_siswa', $data);
		$this->load->view('template/footer');
	}
	
}