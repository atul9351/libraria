<?php

class Books extends CI_Controller
{
	
	function index()
	{
		website($this->load->view('public/books','',true));
	}
}