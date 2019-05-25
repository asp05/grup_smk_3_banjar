<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 */
class Tgl_absen_siswa extends CI_Controller
{
    // function __construct()
    // {
    //     parent::__construct();
    // }

    public function index()
    {
        $data['judul'] = "SMKN 3 Banjar - siswa";
        $data['page']  = 'admin/data/absensi/tbl_tgl_absis';
        $this->load->view('admin/homepage', $data);
    }

    public function ajax_list()
    {
        $list = $this->mcab->get_datatables();
        $data = array();
        $no   = $_POST['start'];
        foreach ($list as $siswa) {
            $no++;
            $row   = array();
            $row[] = '<center>'.date_indo1($siswa->tgl).'</center>';
            $row[] = '<center>'.$siswa->nis.'</center>';
            $row[] = '<center>'.$siswa->nama.'</center>';
            $row[] = '<center>'.$siswa->jk.'</center>';
            $row[] = '<center>'.$siswa->kelas.'</center>';
            $row[] = '<center>'.$siswa->status_kehadiran.'</center>';

            //add html for action
            $row[] = '
                <a class="btn btn-sm btn-block btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_siswa(' . "'" . $siswa->id_absis . "'" . ')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
            ';

            $data[] = $row;
        }

        $output = array(
            "draw"            => $_POST['draw'],
            "recordsTotal"    => $this->mcab->count_all(),
            "recordsFiltered" => $this->mcab->count_filtered(),
            "data"            => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function ajax_edit($id_absis)
    {
        $data = $this->mcab->get_by_id($id_absis);
        echo json_encode($data);
    }

    public function ajax_update()
    {
        $data = array(
            'status_kehadiran' => $this->input->post('status_kehadiran')
        );
        $this->mcab->update(array('id_absis' => $this->input->post('id_absis')), $data);
        echo json_encode(array("Status" => true));
    }

    // public function ajax_delete($id_absis)
    // {
    //     $this->mcab->delete_by_id($id_absis);
    //     echo json_encode(array("status" => true));
    // }
}
