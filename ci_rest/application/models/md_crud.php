<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Md_crud extends CI_Model
{

    public function mengambil($where = null)
    {
        $this->db->from('tbl_absis');
        $this->db->select('tbl_absis.id_absis, tbl_tgl.tgl, tbl_absis.nis, tbl_detail_biosiswa.nama, tbl_detail_biosiswa.jk, tbl_kelas.kelas,  tbl_absis.status_kehadiran');
        $this->db->join('tbl_kelas', 'tbl_kelas.id_kelas = tbl_absis.id_kelas', 'left');
        $this->db->join('tbl_tgl', 'tbl_tgl.id_tgl = tbl_absis.id_tgl', 'left');
        $this->db->join('tbl_detail_biosiswa', 'tbl_detail_biosiswa.nis = tbl_absis.nis', 'left');

        if ($where != null) {
            $this->db->where($where);
        }
        
        $q = $this->db->get();
        return array(
            'num_rows' => $q->num_rows(),
            'data'     => $q,
        );
    }

    public function menambah($data)
    {
        $this->db->from('tbl_absis');
        $this->db->select('tbl_absis.*, tbl_kelas.kelas, tbl_tgl.tgl, tbl_detail_biosiswa.nama, tbl_detail_biosiswa.jk');
        $this->db->join('tbl_kelas', 'tbl_kelas.id_kelas = tbl_absis.id_kelas', 'left');
        $this->db->join('tbl_tgl', 'tbl_tgl.id_tgl = tbl_absis.id_tgl', 'left');
        $this->db->join('tbl_detail_biosiswa', 'tbl_detail_biosiswa.nis = tbl_absis.nis', 'left');

        if ($this->db->insert($data)) {
            return array(
                'status' => 200,
                'nilai'  => $this->db->insert_id(),
            );
        } else {
            return array(
                'status' => 404,
            );
        }
    }

    public function mengubah($where, $data)
    {
        $this->db->from('tbl_absis');
        $this->db->select('tbl_absis.*, tbl_kelas.kelas, tbl_tgl.tgl, tbl_detail_biosiswa.nama, tbl_detail_biosiswa.jk');
        $this->db->join('tbl_kelas', 'tbl_kelas.id_kelas = tbl_absis.id_kelas', 'left');
        $this->db->join('tbl_tgl', 'tbl_tgl.id_tgl = tbl_absis.id_tgl', 'left');
        $this->db->join('tbl_detail_biosiswa', 'tbl_detail_biosiswa.nis = tbl_absis.nis', 'left');

        $this->db->where($where);
        if ($this->db->update($data)) {
            return array(
                'status' => 200,
            );
        } else {
            return array(
                'status' => 404,
            );
        }
    }

    public function update($where, $data)
    {

        $this->db->from('tbl_absis');
        $this->db->select('tbl_absis.*, tbl_kelas.kelas, tbl_tgl.tgl, tbl_detail_biosiswa.nama, tbl_detail_biosiswa.jk');
        $this->db->join('tbl_kelas', 'tbl_kelas.id_kelas = tbl_absis.id_kelas', 'left');
        $this->db->join('tbl_tgl', 'tbl_tgl.id_tgl = tbl_absis.id_tgl', 'left');
        $this->db->join('tbl_detail_biosiswa', 'tbl_detail_biosiswa.nis = tbl_absis.nis', 'left');

        $this->db->set(
            array(
            'tbl_absis.id_absis' => $data['id_absis'],
            'tbl_absis.nis' => $data['nis'],
            'tbl_detail_biosiswa.nama' => $data['nama'],
            'tbl_detail_biosiswa.jk' => $data['jk'],
            'tbl_kelas.kelas' => $data['kelas'],
            'tbl_tgl.tgl' => $data['tgl'],
            'tbl_absis.status_kehadiran' => $data['status_kehadiran'],
            )
        );
        
        $this->db->where($where);
        $this->db->update('tbl_absis JOIN tbl_kelas ON tbl_absis.id_kelas = tbl_kelas.id_kelas JOIN tbl_tgl ON tbl_tgl.id_tgl = tbl_absis.id_tgl JOIN tbl_detail_biosiswa ON tbl_detail_biosiswa.nis = tbl_absis.nis');
    }

    // public function menghapus($tabel, $where)
    // {
    //     $this->db->where($where);
    //     if ($this->db->delete($tabel)) {
    //         return array(
    //             'status' => 200,
    //         );
    //     } else {
    //         return array(
    //             'status' => 404,
    //         );
    //     }
    // }
}

/* End of file Mod_crud.php */
/* Location: ./application/models/Mod_crud.php */