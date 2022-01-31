<?php
class Submit extends CI_Controller
{
	function __destruct(){
		echo json_encode($this->result);
	}

	function index(){
		
		$this->form_validation->set_rules(array(
			array(
				'field'=>'username',
				'label'=>'Username',
				'rules'=>'required'
			),
			array(
				'field'=>'email',
				'label'=>'Email',
				'rules'=>'required'
			),
			array(
				'field'=>'mobile',
				'label'=>'Mobile',
				'rules'=>'required'
			),
			array(
				'field'=>'message',
				'label'=>'Message',
				'rules'=>'required'
			)));

		if(!$this->form_validation->run()){
			$this->result['type'] = 'error';
			$this->result['message'] = $this->form_validation->error_string();
			$this->result['post'] = $_POST;
		}
		else{
			
			$this->load->model('Client_submit_model');
			$this->result = $this->Client_submit_model->login_check();
		}
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$mobile = $this->input->post('mobile');
		$message = $this->input->post('message');
		

	}
}