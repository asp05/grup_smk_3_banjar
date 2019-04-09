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
		$data['judul']	= "Admin";
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
		$this->load->view('template/navigasi');
		$this->load->view('template/index');
		$this->load->view('template/footer');
	}
	// Untuk Admin ya Bro
	public function tabel_admin ($id = null){
		$judul['judul'] = "Admin";
		$data['admin'] = $this->m_crud->tampilkan('tbl_admin');
		$this->load->view('template/header',$judul);
		$this->load->view('template/sidebar');
		$this->load->view('template/navigasi');
		$this->load->view('data/table_admin',$data);
		$this->load->view('template/footer');

	}
	
}