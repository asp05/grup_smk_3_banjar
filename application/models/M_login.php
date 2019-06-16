<?php defined('BASEPATH')OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function auth($post)
	{
		$this->db->from('tbl_admin');
		$this->db->where('username_admin', $post['username']);
		$this->db->where('password_admin', $post['password']);
		$query = $this->db->get();
		return $query;
	}

	public function get($id = null)
	{
		$this->db->from('tbl_admin');
		if($id != null){
			$this->db->where('email', $id);
		}
		$query = $this->db->get();
		return $query;
	}

}