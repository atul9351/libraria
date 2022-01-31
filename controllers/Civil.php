<?php
class Civil extends CI_Controller
{
	function index(){
		website($this->load->view('public/civil','',true));
	}
}