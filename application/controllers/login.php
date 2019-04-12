<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/login_page');
	}

	public function proses()
  {
    $username_admin = $this->input->post('username_admin');
    $password = $this->input->post('password');

    $query = "SELECT * FROM tbl_admin WHERE username_admin = '$username_admin'";
    $hasil = $this->db->query($query);
    $result =  $hasil->row();

    if (isset($result)) {
      if ($result->password_admin == $password) {
        $this->session->login_status = True;
        $this->session->username_admin = $username_admin;
        $this->session->username_admin = $result->username_admin;

        redirect('home/index');
      } else {
        $this->session->set_flashdata('errormsg', 'Login Gagal');
        $this->load->view('admin/login_page');
      }
    } else {
      $this->session->set_flashdata('errormsg', 'Login Gagal');
      $this->load->view('admin/login_page');
    }
  }

  public function logout()
  {
    session_destroy();
    redirect('login');
  }	
}

	