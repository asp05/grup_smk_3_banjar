<?php
defined('BASEPATH') or exit ('No script access allowed');

/**
 * 
 */
class Home extends CI_Controller
{
	function construct()
	{
		parent::__construct();
		$this->load->model('model_barang');
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
	public function tabel_siswa()
	{
		$data['judul']	= "Welcome to Ashop";
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
		$this->load->view('template/navigasi');
		$this->load->view('data/table_siswa');
		$this->load->view('template/footer');
	}
	
}