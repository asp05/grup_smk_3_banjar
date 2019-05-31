<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url', 'form');
	}

	// List all your items
	public function index()
	{
		$data['judul'] = "SMKN 3 Banjar - Profile Admin";
		$data['page'] = 'admin/setting/profile';
		// $data['isi'] = $this->mca->get_by_id($email);
		$this->load->view('admin/homepage', $data);
	}

	// // Add a new item
	// public function add()
	// {

	// }

	// //Update one item
	// public function update( $id = NULL )
	// {

	// }

	// //Delete one item
	// public function delete( $id = NULL )
	// {

	// }
}

/* End of file profil.php */
/* Location: ./application/controllers/setting/profil.php */
