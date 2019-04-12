<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_crud extends CI_Model {

	// List all your items
	public function mengambil($table, $where = null)
	{
		if ($where != null) {
			$this->db->where($where);
		}
		$this->db->get($table);

		// return array(
		// 	'num_rows' => $query->num_rows(),
		// 	'data' => $query,
		// );
	}

	// Add a new item
	public function menambah($table, $data)
	{
		if ($this->db->insert($table, $data)) {
			return array(
				'status' => 200,
				'nilai' => $this->db->insert_id()
			);
		} else {
			return array(
				'status' => 404
			);
		}
	}

	//Update one item
	public function mengubah($table, $where, $data)
	{
		$this->db->where($where);
		if ($this->db->update($table, $data)) {
			return array(
				'status' => 200
			);
		} else {
			return array(
				'status' => 404
			);
		}
	}

	//Delete one item
	public function menghapus($table, $where)
	{
		$this->db->where($where);
		if ($this->db->delete($table)) {
			return array(
				'status' => 200
			);
		} else {
			return array(
				'status' => 404
			);
		}
	}

	//admin katanya
	 function tampilkan($table)
	{
	 	return  $this->db->get($table)->result();
        if($query->num_rows()>0)
    {
             return $query->num_rows();
         }
	 }
}

/* End of file m_crud.php */
/* Location: ./application/models/m_crud.php */
