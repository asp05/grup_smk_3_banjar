<?php
defined('BASEPATH') or exit ('No script access allowed');

/**
 * 
 */
class Barang extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('model_barang');
	}
	public function index()
	{
        $data = array(
            'judul'     => "Master Barang",
            'master'    => "Tabel Barang"
        );
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
		$this->load->view('template/navigasi');
		$this->load->view('master/barang/index',$data);
		$this->load->view('template/footer');
	}
	public function ajax_list()
    {
        $list = $this->model_barang->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $barang) {
            $button  = '<div class="btn-group">';
            $button  .= '<button type="button" class="btn btn-danger">Pilihan</button>';
            $button  .= '<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">';
            $button  .= '<span class="caret"></span>';
            $button  .= '<span class="sr-only">Toggle Dropdown</span>';
            $button  .= '</button>';
            $button  .= '<ul class="dropdown-menu" role="menu">';
            $button  .= '<li><a href="'.base_url('master/barang/ubah/').$barang->id_barang.'">Ubah</a>';
            $button  .= '</li>';
            $button  .= '<li><a href="' . base_url('master/barang/detail'). '">Detail</a>';
            $button  .= '</li>';
            $button  .= '</li>';
            $button  .= '<li class="divider"></li>';
            $button  .= '<li><a onClick="return confirm('."'yakin'".');" href=" '. base_url('master/barang/hapus/').$barang->id_barang.'" >Hapus</a>';
            $button  .= '</li>';
            $button  .= '</ul>';
            $button  .= '</div>';
            $no++;
            $row      = array();
            $row[]    = $no;
            $row[]    = $barang->nama_barang;
            $row[]    = $barang->nama_kategori;
            $row[]    = $barang->stok;
            $row[]    = $barang->foto;
            $row[]    = $button;
            $data[]   = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->model_barang->count_all(),
                        "recordsFiltered" => $this->model_barang->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
    public function tambah(){
        if ($this->input->post('nama_barang') != null ) 
        {
            $data = array(
                'judul'         => "Master Tambah Barang",
                'master'        => "Tambah Barang"
            );
            $pos                = array(
                'nama_barang'   => $this->input->post('nama_barang',true),
                'id_kategori'   => $this->input->post('id_kategori',true),
                'stok'          => $this->input->post('stok',true),
                'keterangan'    => $this->input->post('keterangan',true),
                'tgl_masuk'     => $this->input->post('tgl_masuk',true)

            );
                if ($this->model_barang->simpan('tbl_barang',$pos))
                {
                    $this->session->set_flashdata('flash', 'Data Berhasil Di tambahkan');
                redirect('master/barang');
                }else{
                    $this->session->set_flashdata('gagal', 'Data Gagal Di tambahkan');
                redirect('master/barang');

                }
        }else{
            $data = array(
                'judul'         => "Master Tambah Barang",
                'master'        => "Tambah Barang",
                'kategori'      => $this->model_barang->getdata(),
            );
            $this->load->view('template/header',$data);
                    $this->load->view('template/sidebar');
                    $this->load->view('template/navigasi');
                    $this->load->view('master/barang/tambah',$data);
                    $this->load->view('template/footer');
        }
    }
    public function hapus($id)
    {
        $this->model_barang->hapus($id);
        redirect('master/barang');
    }
    public function ubah($id)
    {
        if ($this->input->post('nama_barang') != null ) 
        {
            $data = array(
                'judul'         => "Master Update Barang",
                'master'        => "Update Barang"
            );
            $pos                = array(
                'nama_barang'   => $this->input->post('nama_barang',true),
                'id_kategori'   => $this->input->post('id_kategori',true),
                'stok'          => $this->input->post('stok',true),
                'keterangan'    => $this->input->post('keterangan',true),
                'tgl_masuk'     => $this->input->post('tgl_masuk',true)

            );
                if ($this->model_barang->update('tbl_barang',$pos,$id))
                {
                    $this->session->set_flashdata('flash', 'Data Berhasil Di Ubah');
                redirect('master/barang');
                }else{
                    $this->session->set_flashdata('flash', 'Data Berhasil Di Ubah');
                redirect('master/barang');

                }
        }else{
            $data = array(
                'judul'         => "Master Update Barang",
                'master'        => "Update Barang",
                'kategori'      => $this->model_barang->getdata(),
                'barang'        => $this->model_barang->getbyid($id),
                'id'            => $id

            );
            $this->load->view('template/header',$data);
                    $this->load->view('template/sidebar');
                    $this->load->view('template/navigasi');
                    $this->load->view('master/barang/Ubah',$data);
                    $this->load->view('template/footer');
        }   
    }


private function upload()
{
    $i = 1;
    $config['upload_path']     = './assets/gambar/';
    $config['allowed_types']   = 'gif|jpg|png|jpeg';
    $config['max_size']        = '1000';
    $config['max_width']       = '1024';
    $config['max_height']      = '768';
    $nama_file                 = "gambar_".$i++;
    $config['file_name']       = $nama_file ;


// Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
$this->upload->initialize($config);
}
        
    

}