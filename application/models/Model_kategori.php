<?php 

defined('BASEPATH')or exit('No direct script access allowed');

/**
 * 
 */
class Model_kategori extends CI_Model 
{
	public function get_kategori()
	{
		return $this->db->get('tbl_kategori')->result();
	}
	public function simpan($table,$data)
	{
		$this->db->insert($table,$data);
		return true;
	}
	public function hapus($id)
	{
		$this->db->where('id_kategori',$id);
		$this->db->delete('tbl_kategori');
	}
	public function getbyid($id)
	{
		$dt= $this->db->get_where('tbl_kategori',array('id_kategori' => $id))->row();
		return $dt;
	}
	public function ubah($tabel,$data,$id)
	{
		$this->db->where('id_kategori',$id);
		$this->db->update($tabel,$data);
	}

}