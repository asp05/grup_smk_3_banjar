<<<<<<< HEAD
=======
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->model('M_login','m');
  }

	public function index()
	{
    jika_sudah_login();
		$this->load->view('admin/login_page');
	}

	public function proses()
  {
    $post = $this->input->post(null, TRUE);
    if(isset($post['btnlogin'])) {
      $query = $this->m->auth($post);
      if ($query->num_rows() > 0) {
        $row = $query->row();
        $params = array('emailadmin' => $row->email);
        $this->session->set_userdata($params);
        echo "<script>
          alert('Selamat, login berhasil..');
          window.location='".site_url('Home')."';
        </script>";
      } else {
        echo "<script>
          alert('Login gagal, username/password Salah !');
          window.location='".site_url('Login')."';
        </script>";
      }

    }
  }

  public function logout()
  {
    $params = array('emailadmin');
    $this->session->unset_userdata($params);
    redirect('Login');
  }	
}

	
>>>>>>> master
