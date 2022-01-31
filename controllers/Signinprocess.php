<?php

class Signinprocess extends CI_Controller
{
	function __destruct(){
		echo json_encode($this->result);
	}
	
	function index()
	{
		$this->form_validation->set_rules(array(
			array(
				'field'=>'username',
				'label'=>'Username',
				'rules'=>'required'
			),
			array(
				'field'=>'password',
				'label'=>'password',
				'rules'=>'required'
			)
		)
	);

		if(!$this->form_validation->run()){
			$this->result['type'] = 'error';
			$this->result['message'] = $this->form_validation->error_string();
			$this->result['post'] = $_POST;
		}
		else{
			$this->load->model('Student_submit_model');
			$this->result = $this->Student_submit_model->login_check();
		}

		$username = $this->input->post('username');
		$password = $this->input->post('password');
	}
}