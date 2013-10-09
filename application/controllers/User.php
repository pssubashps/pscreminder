<?php

require_once ('system/core/Controller.php');

/** 
 * @author subash
 * 
 * 
 */
class User extends CI_Controller {
	
	/**
	 * 
	 */
	public function __construct() {
		parent::__construct ();
	
	}
	
	public function signup () {
		$this->load->view('user/signup');
	}
}

?>