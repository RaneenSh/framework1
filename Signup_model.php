<?php

	class Signup_model extends CI_Model {
		public function __construct()
    {
            $this->load->database();
    }
		function data_insert($data){
			$this->load->database();
			 $query =  $this->db->insert('framework', $data);
			$data['signup_result'] = 'the account created succesfully';
			
		}
	}
?>