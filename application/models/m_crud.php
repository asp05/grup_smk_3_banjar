<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_crud extends CI_Model
{
    function tampilkan()
    {
       return  $this->db->get('v_biosiswa')->result();
    }
    }
    
/* End of file Mod_crud.php */
/* Location: ./application/models/Mod_crud.php */