<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model extends CI_Model {

	public function getDataApi($id_absis = null)
	{
		$this->db->from('tbl_absis');
        $this->db->select('tbl_absis.*, tbl_absis.id_absis as id_absis, tbl_absis.status_kehadiran as status_kehadiran, tbl_kelas.kelas as kelas, tbl_detail_biosiswa.nama as nama, tbl_detail_biosiswa.jk as jk');
        $this->db->join('tbl_kelas', 'tbl_kelas.id_kelas = tbl_absis.id_kelas', 'left');
        $this->db->join('tbl_detail_biosiswa', 'tbl_detail_biosiswa.nis = tbl_absis.nis', 'left');

        if ($id_absis != null) {
        	$this->db->where('id_absis', $id_absis);
        }
        
        return $this->db->get()->result_array();
	}

	// public function updateDataApi($data, $id_absis)
	// {
	// 	// $this->db->where('id_absis', $id_absis);
	// 	$this->db->update('tbl_absis', $data, ['id_absis'=>$id_absis]);
	// 	// return $this->db->affected_rows();
	// }

}

/* End of file Api_model.php */
/* Location: ./application/models/Api_model.php */