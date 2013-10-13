<?php



/** 
 * @author subash
 * 
 * 
 */

class Home extends PSC_Controller {
	
	/**
	 * 
	 */
	//private $_user;
	public function __construct() {
		parent::__construct ();
		
	}
	
	public function index (){
		$this->load->view('user/home');
	}
	public function signup () {
		$this->load->model('User','objuser');
		$this->load->library('Email');
		if ($this->form_validation->run() != FALSE){
			$postParams = $this->input->post ();
			$insertArray = array (); 
			$insertArray['user_email'] =  $postParams['user_username'];
			$insertArray['user_password'] =  generatePassword ();
			$insertArray['user_dob'] =  getMysqlDateFormat($postParams['user_dob']);
			$insertArray['user_role'] =  3;
			$insertArray['user_fullname'] =  $postParams['user_fullname'];
			$insertArray['user_code'] =  getActivationCode ();
			$this->objuser->signup($insertArray);
			/*
			 * Setting Email
			 */
			/*$emailBody = getActivationEmail($this->config->item('PSC_EMAIL_USER_ACTIVATION'),$insertArray['user_code'],$insertArray['user_fullname']);
			$this->email->from($this->config->item('PSC_SUPPORT_EMAIL_FROM'), $this->config->item('PSC_SUPPORT_EMAIL_NAME'));
			$this->email->reply_to($this->config->item('PSC_SUPPORT_EMAIL_FROM'), $this->config->item('PSC_SUPPORT_EMAIL_NAME'));
			$this->email->to($insertArray['user_email']);
			$this->email->subject($this->config->item('PSC_USER_REGISRATION_SUBJECT'));
			$this->email->message($emailBody);
			$this->email->send();*/
			$sessionData = array(
                   'iamfrom'  => 'signup',
                   
               );

			$this->session->set_userdata($sessionData);
			redirect('/home/success', 'refresh');
			
		} 
		$this->load->view('user/signup');
	}
	
	public function success () {
		
		
		if($this->session->userdata('iamfrom') == false ||  $this->session->userdata('iamfrom') == 'signup') {
			print "You are not authorised to access this page";exit;
		}else {
			$this->session->unset_userdata('iamfrom');
		}
		$this->load->view('user/signup_sucess');
		
	}
}

?>