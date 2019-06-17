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
        $data['judul'] = "SMKN 3 Banjar - siswa";
        $data['page']  = 'admin/data/biodatasiswa/table_siswa';
        $this->load->view('admin/homepage', $data);
    }
    public function ajax_list()
    {
        $list = $this->mc->get_datatables();
        $data = array();
        $no   = $_POST['start'];
        foreach ($list as $siswa) {
            $no++;
            $row   = array();
            $row[] = $siswa->nis;
            $row[] = $siswa->nama;
            $row[] = $siswa->jk;
            $row[] = $siswa->tempat_ttl;
            $row[] = date_indo($siswa->ttl);
            $row[] = $siswa->kelas;
            if ($siswa->photo_siswa) {
                $row[] = '<a href="' . base_url('assets/images/siswa/' . $siswa->photo_siswa) . '" target="_blank"><img src="' . base_url('assets/images/siswa/' . $siswa->photo_siswa) . '" class="img-responsive"  width="100px" height="100px" /></a>';
            } else {
                $row[] = '(No photo)';
            }

            if ($siswa->qr_siswa) {
                $row[] = '<a href="' . base_url('assets/images/siswa/' . $siswa->qr_siswa) . '" target="_blank"><img src="' . base_url('assets/images/qrcode/' . $siswa->qr_siswa) . '" class="img-responsive" width="100px" height="100px" /></a>';
            } else {
                $row[] = '(No photo)';
            }

            $row[] = $siswa->alamat;

            //add html for action
            $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_siswa(' . "'" . $siswa->nis . "'" . ')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_siswa(' . "'" . $siswa->nis . "'" . ')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';

            $data[] = $row;
        }

        $output = array(
            "draw"            => $_POST['draw'],
            "recordsTotal"    => $this->mc->count_all(),
            "recordsFiltered" => $this->mc->count_filtered(),
            "data"            => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function tambah()
    {
        $this->_validasi();
        if ($this->form_validation->run() == false) {
            $data['judul'] = "SMKN 3 Banjar - siswa";
            $data['kelas'] = $this->m_crud->getsiswa('tbl_kelas');
            $data['page']  = 'admin/data/biodatasiswa/tambah_siswa';
            $this->load->view('admin/homepage', $data);
        }else{
            $data = array(
                'nis'           => $this->input->post('nis'),
                'nama'          => $this->input->post('nama'),
                'jk'            => $this->input->post('jk'),
                'tempat_ttl'    => $this->input->post('tempat_ttl'),
                'ttl'           => $this->input->post('ttl'),
                'id_kelas'      => $this->input->post('id_kelas'),
                'photo_siswa'   => 30,
                'qr_siswa'      => 'default_qr.jpg',
                'alamat'        => $this->input->post('alamat')
            );
            $this->m_crud->insert('tbl_detail_biosiswa',$data);
            $this->session->set_flashdata('sukses', 'Data Berhasil Di tambahkan');
            redirect('home');
        }

    }
    private function _validasi(){
        $this->form_validation->set_rules('nis', 'nis', 'trim|required|is_unique[tbl_detail_biosiswa.nis]');
        $this->form_validation->set_rules('nama', 'nama', 'trim|required');
        $this->form_validation->set_rules('tempat_ttl', 'tempat_ttl', 'trim|required');
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
    }

    public function ajax_edit($id)
    {
        $data = $this->mc->get_by_id($id);
        echo json_encode($data);
    }
}
