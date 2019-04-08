<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_barang extends CI_Model{
	    var $table = 'tbl_barang';
    var $column_order = array(null, 'nama_barang','stok','keterangan'); //set column field database for datatable orderable
    var $column_search = array('nama_barang','stok','keterangan','nama_kategori'); //set column field database for datatable searchable 
    var $order = array('id_barang' => 'asc'); // default order 
 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
 
    private function _get_datatables_query()
    {
         
        $this->db->from($this->join());
 
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
    public function getdata()
    {
        $query = $this->db->get('tbl_kategori')->result();
        return $query;
    }
    public function simpan($table,$data)
    {
        $this->db->insert($table,$data);
        return true;
    }
    public function join()
    {
        $this->db->select('*');
        $this->db->from('tbl_barang');
        $this->db->join('tbl_kategori','tbl_kategori.id_kategori=tbl_barang.id_kategori');
        // $query = $this->db->get();
        // return $query->result();
    }
    public function hapus($id)
    {
        $this->db->Where('id_barang', $id);
        $this->db->delete('tbl_barang');
    }
    public function getbyid($id)
    {
        $dt = $this->db->get_where('tbl_barang', ['id_barang' => $id ])->row();
        return $dt;
    }
    public function update($table,$data,$id)
    {
        $this->db->Where('id_barang',$id);
        $this->db->update($table,$data);

    }
}