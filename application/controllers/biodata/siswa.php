<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class Siswa extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_crud');
	}
	public function index()
	{
		
		$judul['judul']	= "Admin";
		$data['pengguna'] = $this->m_crud->tampilkan('v_biosiswa');
		$this->load->view('template/header',$judul);
		$this->load->view('template/sidebar');
		$this->load->view('template/navigasi');
		$this->load->view('data/table_siswa',$data);
		$this->load->view('template/footer');
	}
	public function tambah()
	{
		{
		$this->form_validation->set_rules('nama' , 'Nama Kategori', 'required');
		if ($this->input->post('nama') != null ) {
				$pos =array(
					'nama' => $this->input->post('nama')
				);
				if ($this->form_validation->run() == false) {
				$this->load->view('tambah');
				}else{
					$this->model_kategori->simpan('tbl_kategori',$pos);
					$this->session->set_flashdata('berhasil' , 'berhasil');
				}
		}else{
			$data = array(
                'judul'         => "Master Tambah Barang",
                'master'        => "Tambah Barang"
            );
            $this->load->view('template/header',$data);
                    $this->load->view('template/sidebar');
                    $this->load->view('template/navigasi');
                    $this->load->view('tambahkategori');
                    $this->load->view('template/footer');
		}
	}
}