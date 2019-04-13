<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_crud extends CI_Model {

	var $table = 'v_biosiswa';
    var $column_order = array('nis','nama','jk','kelas','photo_siswa',null); //set column field database for datatable orderable
    var $column_search = array('nis','nama','jk'); //set column field database for datatable searchable just firstname , lastname , address are searchable
    var $order = array('nis' => 'asc'); // default order 
 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    private function _get_datatables_query()
    {
         
        $this->db->from($this->table);
 
        $i = 0;
     
        foreach ($this->column_search as $item) // loop column 
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {
                 
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
         
        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
 
    public function get_by_id($id)
    {
        $this->db->from($this->table);
        $this->db->where('nis',$id);
        $query = $this->db->get();
 
        return $query->row();
    }


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