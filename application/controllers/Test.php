<?php

class Test extends CI_Controller
{
	
	function index()
	{
		$this->load->view('public/books-media-list-view');
	}
}