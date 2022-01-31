<?php
class Training extends CI_Controller
{
	function index(){
		website($this->load->view('public/training','',true));
	}
}