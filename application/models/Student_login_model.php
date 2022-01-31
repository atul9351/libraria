<?php
class Student_login_model extends CI_Model
{
	
	function login_check(){
		$where = array(
			'name' => $this->input->post('username'),
			'pass' => $this->input->post('password')
		);

		$res = $this->db->where($where)->get('students')->row();
		if($this->db->affected_rows()){

			$this->load->library('session');
			$newdata = array(
				'logged_in' => TRUE
			);

			$this->session->set_userdata($newdata);
			// return redirect('panel/index');


			return array(
				'type' => 'success',
				'login' => 'home'
			);
		}else{
			return array(
				'type' => 'error',
				'message' => 'invalid Username and Password'

			); 
		}
	}
}