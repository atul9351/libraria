<?php

class Logout extends CI_Controller{
	function index(){
		$this->load->library('session');
		$this->session->sess_destroy();

		redirect(base_url());
		// redirect('signin');

	}
}