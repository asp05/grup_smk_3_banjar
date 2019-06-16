<?php
defined('BASEPATH') or exit ('No script access allowed');

class Home extends CI_Controller
{
	public function __construct(){
        parent::__construct();
        $this->load->helper('url','form');
        jika_belum_login();
    }
	
    public function index()
    {
    	$data['judul'] = "SMKN 3 Banjar";
    	$data['page'] = 'admin/partial_admin/dashboard';
    	$this->load->view('admin/homepage', $data);
    }
	
}