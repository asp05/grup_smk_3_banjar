<?php

defined('BASEPATH')or exit('No direct script access allowed');

/**
 * 
 */
class Kategori extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('model_kategori');
	}

	public function index()
	{
		$data = array(
            'judul'     => "Kategori",
            'master'    => "Kategori",
            'kategori'	=> $this->model_kategori->get_kategori()	
        );
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
		$this->load->view('template/navigasi');
		$this->load->view('kategori',$data);
		$this->load->view('template/footer');
	}
	public function tambah()
	{
		$this->form_validation->set_rules('nama_kategori' , 'Nama Kategori', 'required');
		if ($this->input->post('nama_kategori') != null ) {
				$pos =array(
					'nama_kategori' => $this->input->post('nama_kategori')
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
	public function hapus($id)
	{
		$this->model_kategori->hapus($id);
		redirect('setting/kategori');
	}
	public function ubah($id)
	{
		$this->form_validation->set_rules('nama_kategori' , 'Nama Kategori', 'required');
		if ($this->input->post('nama_kategori') != null ) {
				$pos =array(
					'nama_kategori' => $this->input->post('nama_kategori')
				);
				if ($this->form_validation->run() == false) {
				$this->load->view('tambah');
				}else{
					$this->model_kategori->ubah('tbl_kategori',$pos,$id);
					$this->session->set_flashdata('berhasil' , 'berhasil');
					redirect('setting/kategori');
				}
		}else{
			$data = array(
                'judul'         => "Master Tambah Barang",
                'master'        => "Tambah Barang",
                'kategori'		=> $this->model_kategori->getbyid($id)
            );
            $this->load->view('template/header',$data);
                    $this->load->view('template/sidebar');
                    $this->load->view('template/navigasi');
                    $this->load->view('ubahkategori',$data);
                    $this->load->view('template/footer');
		}
	}
}