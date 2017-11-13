<?php

	class Login_model extends CI_Model {
		public function __construct(){
            $this->load->database();
		}
		function data_check(){
			$data = array(
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password')
			);
			$this->db->select('*');
			$this->db->from('framework');
			$query = $this->db->get();
			if ($query->num_rows() > 0){
				foreach ($query->result() as $row){
					if ($row->email == $data['email'] && $row->password == $data['password']){
				
						echo "the account exist";
						break;
					}
				}
			}
		}
	}
?>