<?php
class Ee extends CI_Controller
{
	function index(){
		website($this->load->view('public/ee','',true));
	}
}