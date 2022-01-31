<?php
class Mech extends CI_Controller
{
	function index(){
		website($this->load->view('public/mech','',true));
	}
}