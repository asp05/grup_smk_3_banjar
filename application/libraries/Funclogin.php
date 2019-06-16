<?php 

class Funclogin {
	protected $ci;

	function __construct() {
		$this->ci =& get_instance();
	}

	function user_login()
	{
		$this->ci->load->model('m_login');

		$email = $this->ci->session->userdata('emailadmin');
		$user_data = $this->ci->m_login->get($email)->row();
		return $user_data;
	}
}