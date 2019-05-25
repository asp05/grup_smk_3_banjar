<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index($id_absis = null)
    {
        if ($id_absis != null) {
            $q = $this->md_crud->mengambil(array('id_absis' => $id_absis));
        } else {
            $q = $this->md_crud->mengambil();
        }

        if ($q['num_rows'] == true) {
            $status = 200;
        } else {
            $status = 404;
        }

        echo $this->lc->to_json(array(
            'status' => $status,
            'data'   => $q['data']->result(),
        ));
    }

    public function tambah()
    {
        $rawData = file_get_contents('php://input');
        $datanya = json_decode($rawData, true);

        if (@count($datanya) > 0) {
            $cek = $this->md_crud->mengambil(array('id_absis' => $datanya['id_absis']));
            if ($cek['num_rows'] == true) {
                $status = 404;
                $pesan  = 'Data Tidak Ditemukan.';
            } else {
                $data = array(
                    'id_absis'         => $datanya['id_absis'],
                    'nis'              => $datanya['nis'],
                    'nama'             => $datanya['nama'],
                    'jk'               => $datanya['jk'],
                    'kelas'            => $datanya['kelas'],
                    'tgl'              => $datanya['tgl'],
                    'status_kehadiran' => $datanya['status_kehadiran'],

                );
                $hasil  = $this->md_crud->menambah($data);
                $status = $hasil['status'];
                if ($status == 200) {
                    $awal = 'Berhasil';
                } else {
                    $awal = 'Gagal';
                }
                $pesan = $awal . ' menambah data.';

            }
        } else {
            $status = 404;
            $pesan  = 'Tidak ada data yang di request.';
        }

        echo $this->lc->to_json(array(
            'status' => $status,
            'pesan'  => $pesan,
        ));
    }

    public function ubah($id_absis = null)
    {
        $rawData = file_get_contents('php://input');
        $datanya = json_decode($rawData, true);

        if (@count($datanya) > 0) {
            $cek = $this->md_crud->mengambil(array('id_absis' => $id_absis));
            if ($cek['num_rows'] == false) {
                $status = 404;
                $pesan  = 'Data Tidak Ditemukan.';
            } else {
                $data = array(
                    'id_absis'         => $datanya['id_absis'],
                    'nis'              => $datanya['nis'],
                    'nama'             => $datanya['nama'],
                    'jk'               => $datanya['jk'],
                    'kelas'            => $datanya['kelas'],
                    'tgl'              => $datanya['tgl'],
                    'status_kehadiran' => $datanya['status_kehadiran'],
                );
                $hasil  = $this->md_crud->update(array('id_absis' => $id_absis), $data);
                $status = $hasil['status'];
                if ($status == 200) {
                    $awal = 'Berhasil';
                } else {
                    $awal = 'Gagal';
                }
                $pesan = $awal . ' mengubah data.';

            }
        } else {
            $status = 404;
            $pesan  = 'Tidak ada data yang di request.';
        }

        echo $this->lc->to_json(array(
            'status' => $status,
            'pesan'  => $pesan,
        ));
    }

    // public function hapus($id = null)
    // {
    //     $cek = $this->md_crud->mengambil('users', array('id' => $id));
    //     if ($cek['num_rows'] == false) {
    //         $status = 404;
    //         $pesan  = 'Contact Tidak Ditemukan.';
    //     } else {
    //         $hasil  = $this->md_crud->menghapus('users', array('id' => $id));
    //         $status = $hasil['status'];
    //         if ($status == 200) {
    //             $awal = 'Berhasil';
    //         } else {
    //             $awal = 'Gagal';
    //         }
    //         $pesan = $awal . ' menghapus data.';
    //     }

    //     echo $this->lc->to_json(array(
    //         'status' => $status,
    //         'pesan'  => $pesan,
    //     ));
    // }

    public function error()
    {
        echo $this->lc->to_json(array(
            'status'  => 404,
            'message' => 'Halaman Tidak Ditemukan',
        ));
    }

    // public function login()
    // {
    //     $rawData = file_get_contents('php://input');
    //     $datanya = json_decode($rawData, true);
    //     $json = array();

    //     if (@count($datanya) > 0) {
    //         $data['username'] = $datanya['username'];
    //         $data['password'] = $datanya['password'];
    //         $cek = $this->md_crud->mengambil('users', $data);
    //         if($cek['num_rows'] == true) {
    //             $status = 200;
    //             $pesan  = 'Berhasil login.';
    //             $json = $cek['data']->row();
    //         }else{
    //             $status = 404;
    //             $pesan  = 'Login gagal! Silahkan masukkan data dengan benar.';
    //         }
    //     } else {
    //         $status = 404;
    //         $pesan  = 'Tidak ada data yang di request.';
    //     }

    //     echo $this->lc->to_json(array(
    //         'status' => $status,
    //         'pesan'  => $pesan,
    //         'datanya'   => $json,
    //     ));
    // }
}
/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
