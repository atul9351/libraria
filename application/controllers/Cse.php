<?php
class Cse extends CI_Controller
{
	function index(){
		website($this->load->view('public/cse','',true));
	}
}