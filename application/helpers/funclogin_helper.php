<?php

function jika_sudah_login() {
	$ci =& get_instance();

	$user_session = $ci->session->userdata('emailadmin');
	if($user_session){
		redirect('home');
	}
}

function jika_belum_login() {
	$ci =& get_instance();

	$user_session = $ci->session->userdata('emailadmin');
	if(!$user_session) {
		redirect('login');
	}
}