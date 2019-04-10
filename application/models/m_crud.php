<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_crud extends CI_Model
{
	function tampilkan($table)
	{
		return  $this->db->get($table)->result();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }
	}

	// untuk admin
}

/* End of file Mod_crud.php */
/* Location: ./application/models/Mod_crud.php */