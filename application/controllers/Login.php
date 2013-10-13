<?php

require_once ('application/core/PSC_Controller.php');

/** 
 * @author subash
 * 
 * 
 */
class Login extends PSC_Controller {
	
	/**
	 * 
	 */
	public function __construct() {
		parent::__construct ();
	
	}
	/*
	 * Login action
	 */
	public function index() {
		$data = array ();
		$this->load->model('User','user');
		if ($this->form_validation->run() != FALSE){
			$validateUser = $this->user->validatelogin($this->input->post('user_email', TRUE), $this->input->post('user_password', TRUE) );
			if(count($validateUser) > 0) {
				print "I am in";
			}else {
				$data['error_message'] = "Invalid username/password.";
			}
		}else {
			
		}
		$this->load->view('user/login',$data);
		
	}
}

?>