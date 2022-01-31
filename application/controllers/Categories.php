<?php

class Categories extends CI_Controller
{
	
	function index()
	{
		website($this->load->view('public/categories','',true));
	}
}