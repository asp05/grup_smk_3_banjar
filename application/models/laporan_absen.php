<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_absen extends CI_Model
{
	var $table = 'v_report_absen';

    public function get_datatables()
    {
    	$this->db->from($this->table);
    	$q = $this->db->get();
    	return $q->result();
    }

}

/* End of file laporan_absen.php */
/* Location: ./application/models/laporan_absen.php */
