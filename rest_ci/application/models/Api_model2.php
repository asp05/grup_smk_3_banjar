<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model2 extends CI_Model {

	public function updateDataApi($data, $id_absis)
	{
		// $this->db->where('id_absis', $id_absis);
		$this->db->update('tbl_absis', $data, ['id_absis'=>$id_absis]);
		// return $this->db->affected_rows();
	}

}

/* End of file Api_model.php */
/* Location: ./application/models/Api_model.php */