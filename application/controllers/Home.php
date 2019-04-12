<?php
defined('BASEPATH') or exit ('No script access allowed');

class Home extends CI_Controller
{
	public function __construct(){
        parent::__construct();
        $this->load->helper('url','form');
    }
	// public function index()
	// {
	// 	$judul['judul']	= "Admin";
	// 	$data['admin'] = $this->m_crud->tampilkan('tbl_admin');
	// 	$this->load->view('template/header',$judul);
	// 	$this->load->view('template/sidebar',$data);
	// 	$this->load->view('template/navigasi');
	// 	$this->load->view('template/index');
	// 	$this->load->view('template/footer');
	// }
	
    public function index()
    {
    	$data['judul'] = "SMKN 3 Banjar";
    	$data['page'] = 'admin/partial_admin/dashboard';
    	$this->load->view('admin/homepage', $data);
    }

    public function tabel_admin($id=null)
    {
    	$data['judul'] = "SMKN 3 Banjar - Admin";
		$data['isi'] = $this->mc->mengambil('tbl_admin');
    	$data['page'] = 'admin/data/table_admin';

    	$this->load->view('admin/homepage', $data);
    }

	// Untuk Admin ya Bro
	// public function tabel_admin ($id = null){
	// 	$judul['judul'] = "Admin";
	// 	$data['admin'] = $this->m_crud->tampilkan('tbl_admin');
	// 	$this->load->view('template/header',$judul);
	// 	$this->load->view('template/sidebar',$data);
	// 	$this->load->view('template/navigasi');
	// 	$this->load->view('data/table_admin',$data);
	// 	$this->load->view('template/footer');

	// }
	
}