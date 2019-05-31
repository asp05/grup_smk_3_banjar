<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Md_crud extends CI_Model
{

    public function mengambil($where = null)
    {
        $this->db->from('tbl_absis');
        $this->db->select('tbl_absis.*, tbl_absis.id_absis as id_absis, tbl_absis.status_kehadiran as status_kehadiran, tbl_kelas.kelas as kelas, tbl_detail_biosiswa.nama as nama, tbl_detail_biosiswa.jk as jk');
        $this->db->join('tbl_kelas', 'tbl_kelas.id_kelas = tbl_absis.id_kelas', 'left');
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

    public function mengubah($where, $data)
    {
        if (array(
            $this->update_absis($where, $data),
            $this->update_biodata($data),
            $this->update_kelas($data),
        )) {
            return array(
                'status' => 200,
            );
        } else {
            return array(
                'status' => 404,
            );
        }
    }

    public function update_absis($where, $data)
    {

        $this->db->from('tbl_absis');

        $this->db->set(
            array(
            'id_absis' => $data['id_absis'],
            'nis' => $data['nis'],
            'status_kehadiran' => $data['status_kehadiran']
            )
        );
        
        $this->db->where($where);
        $this->db->update('tbl_absis');
    }

    private function update_biodata($data)
    {
        $this->db->from('tbl_detail_biosiswa');

        $this->db->set(
            array(
            'nama' => $data['nama'],
            'jk' => $data['jk']
            )
        );
        
        $this->db->where('nis', $data['nis']);
        $this->db->update('tbl_detail_biosiswa');
    }

    private function update_kelas($data)
    {
        $this->db->from('tbl_kelas');

        $this->db->set(
            array(
            'kelas' => $data['kelas']
            )
        );
        
        $this->db->where('id_kelas', $data['id_kelas']);
        $this->db->update('tbl_kelas');
    }

    // public function menambah($data)
    // {
    //     $this->db->from('tbl_absis');
    //     $this->db->select('tbl_absis.*, tbl_kelas.kelas, tbl_detail_biosiswa.nama, tbl_detail_biosiswa.jk');
    //     $this->db->join('tbl_kelas', 'tbl_kelas.id_kelas = tbl_absis.id_kelas', 'left');
    //     $this->db->join('tbl_detail_biosiswa', 'tbl_detail_biosiswa.nis = tbl_absis.nis', 'left');

    //     if ($this->db->insert($data)) {
    //         return array(
    //             'status' => 200,
    //             'nilai'  => $this->db->insert_id(),
    //         );
    //     } else {
    //         return array(
    //             'status' => 404,
    //         );
    //     }
    // }

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