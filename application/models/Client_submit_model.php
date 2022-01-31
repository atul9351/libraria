<?php
class Client_submit_model extends CI_Model
{
	public $result;
	
	function login_check(){

		$this->form_validation->set_rules(array(
			array(
				'field'=>'username',
				'label'=>'Username',
				'rules'=>'required|is_unique[client_table.name]',
				'errors' => array(
					'is_unique' => 'This %s is already exist'
				)
			),
			array(
				'field'=>'email',
				'label'=>'Email',
				'rules'=>'required|is_unique[client_table.email]',
				'errors'=> array(
					'is_unique'=> 'This %s is already exist'
				)
			),
			array(
				'field'=>'mobile',
				'label'=>'Mobile',
				'rules'=>'required|is_unique[client_table.mobno]',
				'errors'=> array(
					'is_unique'=> 'This %s is already exist'
				)
			),
			array(
				'field'=>'message',
				'label'=>'Message',
				'rules'=>'required'
			),

		));
		if (!$this->form_validation->run()){
			$this->result['swal'] = notification('error',$this->form_validation->error_string(),3000);
		} else {
			$insert = array('name' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'mobno' => $this->input->post('mobile'),
				'msg' => $this->input->post('message')
			);
			$res = $this->db->set($insert)->insert('client_table');
			if($this->db->affected_rows()){
				$id = $this->db->insert_id();
				$this->result['swal'] = notification('success','congratulation your query has been submitted successfully',3000);
				$this->result['form_reset'] = true;
			}else{
				$this->result['swal'] = notification('error','something went wrong',3000);

			}
			

		}
		return $this->result;
	}
}