<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_crud_absen extends CI_Model
{

    public $table         = 'tbl_absis';
    public $column_order  = array('id_absis','tgl', 'nis', 'nama', 'jk', 'kelas', 'status_kehadiran', null); //set column field database for datatable orderable
    public $column_search = array('nis', 'tgl', 'nama', 'kelas', 'status_kehadiran'); //set column field database for datatable searchable just firstname , lastname , address are searchable
    public $order         = array('nis' => 'asc'); // default order

    private function _get_datatables_query()
    {
        $this->db->from('tbl_absis');
        $this->db->select('tbl_absis.*, tbl_absis.id_absis as id_absis, tbl_absis.status_kehadiran as status_kehadiran, tbl_kelas.kelas as kelas, tbl_detail_biosiswa.nama as nama, tbl_detail_biosiswa.jk as jk');
        $this->db->join('tbl_kelas', 'tbl_kelas.id_kelas = tbl_absis.id_kelas', 'left');
        $this->db->join('tbl_detail_biosiswa', 'tbl_detail_biosiswa.nis = tbl_absis.nis', 'left');
        

        $i = 0;

        foreach ($this->column_search as $item) // loop column
        {
            if ($_POST['search']['value']) // if datatable send POST for search
            {

                if ($i === 0) // first loop
                {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search) - 1 == $i) //last loop
                {
                    $this->db->group_end();
                }
                //close bracket
            }
            $i++;
        }

        if (isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    public function get_datatables()
    {
        $this->_get_datatables_query();
        if ($_POST['length'] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }

    public function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->from('tbl_absis');
        $this->db->select('tbl_absis.*, tbl_kelas.kelas, tbl_detail_biosiswa.nama, tbl_detail_biosiswa.jk');
        $this->db->join('tbl_kelas', 'tbl_kelas.id_kelas = tbl_absis.id_kelas', 'left');
        $this->db->join('tbl_detail_biosiswa', 'tbl_detail_biosiswa.nis = tbl_absis.nis', 'left');
        return $this->db->count_all_results();
    }

    public function get_by_id($id_absis)
    {
        $this->db->from('tbl_absis');
        $this->db->select('tbl_absis.*, tbl_kelas.kelas, tbl_detail_biosiswa.nama, tbl_detail_biosiswa.jk, tbl_detail_biosiswa.photo_siswa, tbl_detail_biosiswa.qr_siswa');
        $this->db->join('tbl_kelas', 'tbl_kelas.id_kelas = tbl_absis.id_kelas', 'left');
        $this->db->join('tbl_detail_biosiswa', 'tbl_detail_biosiswa.nis = tbl_absis.nis', 'left');
        $this->db->where('id_absis', $id_absis);
        $query = $this->db->get();
        return $query->row();
    }

    // Add a new item
    public function menambah($table, $data)
    {
        if ($this->db->insert($table, $data)) {
            return array(
                'status' => 200,
                'nilai'  => $this->db->insert_id(),
            );
        } else {
            return array(
                'status' => 404,
            );
        }
    }

    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

    // public function delete_by_id($id_absis)
    // {
    //     $this->db->where('id_absis', $id_absis);
    //     $this->db->delete($this->table);
    // }
}

/* End of file m_crud.php */
/* Location: ./application/models/m_crud.php */
