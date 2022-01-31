<?php

class Student_submit_model extends CI_Model
{
	public $result;
	
	function login_check()
	{
		$this->form_validation->set_rules(array(
			array(
				'field'=>'username',
				'label'=>'Username',
				'rules'=>'required|is_unique[students.name]',
				'errors' => array(
					'is_unique' => 'This %s is already exist'
				)
			),
			array(
				'field'=>'password',
				'label'=>'Password',
				'rules'=>'required'
			)
		)
	);

		if(!$this->form_validation->run()){
			$this->result['swal'] = notification(
				'error',$this->form_validation->error_string(),4000);
		}
		else{
			$insert = array('name' => $this->input->post('username'),
				'pass'=> $this->input->post('password'));
			$res = $this->db->set($insert)->insert('students');

			if($this->db->affected_rows()){

				$id =$this->db->insert_id();
				$this->result['swal'] = notification('success','congrats you have been registered successfully',3000);
				$this->result['form_reset'] = true;

			} else{
				$this->result['swal'] = notification('error','something went wrong',3000);
			}
		}

		return $this->result;
		
	}
}