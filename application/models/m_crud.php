<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_crud extends CI_Model
{
	function tampilkan($table)
	{
		return  $this->db->get($table)->result();
	}

	// untuk admin
}

/* End of file Mod_crud.php */
/* Location: ./application/models/Mod_crud.php */