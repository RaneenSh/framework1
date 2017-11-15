<?php
class signup extends CI_Controller {
		function __construct(){
			parent :: __construct();
			$this->load->view('signup_view');
		}
        public function index(){
			
			
		}

		public function data_submitted() {
		//	$this->load->view('signup_view');
			$this->load->model('Signup_model', 'signup_model');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('first_name', 'first_name', 'required|min_length[4]|max_length[15]');
		/*	if ($this->form_validation->run() == FALSE) {
				$data['errors'] = 'invalid first name';
				$this->load->view('error', $data);
			}
			else{*/
			$this->form_validation->set_rules('last_name', 'last_name', 'required|min_length[4]|max_length[15]');
			$this->form_validation->set_rules('email', 'email', 'required|valid_email');
			$this->form_validation->set_rules('gender', 'gender', 'required');
			if ($this->form_validation->run() == True) {
				$data = array(
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'email' => $this->input->post('email'),
				'city' => $this->input->post('city'),
				'gender' => $this->input->post('gender')
				);
				$pass1 = $this->input->post('password');
				$pass2 = $this->input->post('password_con');
				if($pass1 == $pass2){
				$data['password'] = crypt($pass1, 123);
			//	echo $data['first_name'];
				$this->signup_model->data_insert($data);
			//	$this->load->view("sign_upF", $data);
			$this->load->view('result1');
				}
				else{
					$this->load->view('error2');
				}
			}
			else{
			//	$this->load->view('error');
				echo validation_errors();
			}
		}
		
}
?>