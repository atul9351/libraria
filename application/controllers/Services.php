<?php

class Services extends CI_Controller
{
	
	function index()
	{
		website($this->load->view('public/services','',true));
	}
}