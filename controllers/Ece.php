<?php
class Ece extends CI_Controller
{
	function index(){
		website($this->load->view('public/ece','',true));
	}
}