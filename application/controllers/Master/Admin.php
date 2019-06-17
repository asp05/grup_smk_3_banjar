<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url', 'form');
	}
	public function index()
	{
		
		$data['judul'] = "SMKN 3 Banjar - admin";
    	$data['page'] = 'admin/data/table_admin';
    	$this->load->view('admin/homepage', $data);
	}



        public function ajax_list()
    {
        $this->load->helper('url');
 
        $list = $this->mca->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $siswa) {
            $no++;
            $row = array();
            $row[] = $siswa->username_admin;
            $row[] = $siswa->email;
            //add html for action
            $row[] = '<a class="btn btn-sm btn-block btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_siswa('."'".$siswa->email."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
         
            $data[] = $row;
        }
 
        $output = array(
                    "draw" => $_POST['draw'],
                    "recordsTotal" => $this->mca->count_all(),
                    "recordsFiltered" => $this->mca->count_filtered(),
                    "data" => $data,
                );
        //output to json format
        echo json_encode($output);
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

        public function ajax_delete($email)
    {
        $this->mca->delete_by_id($email);
        echo json_encode(array("status" => TRUE));
    }
}