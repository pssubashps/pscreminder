<?php

require_once ('system/core/Model.php');

class User extends CI_Model {
	
	private $_tblUser;
	public function __construct() {
		parent::__construct ();
		$this->_tblUser = "user";
	
	}
	
	public function signup($insert) {
		
		return $this->db->insert ( $this->_tblUser, $insert );
	
	}
	public function validateLogin($username, $password) {
		$where = array ();
		$rtArray = array ();
		
		$select = array ();
		$select [] = 'user_id as userid';
		$select [] = 'user_email as useremail';
		$select [] = 'user_fullname as userfullname';
		
		$where ['user_email'] = $username;
		$where ['user_password'] = $password;
		//$where['ub_status < '] = 3;
		

		$this->db->select ( $select );
		$this->db->from ( $this->_tblUser );
		$this->db->where ( $where );
		//print $this->db->last_query();exit;
		//echo $this->_compile_select();exit;
		$result = $this->db->get ();
		if ($result->num_rows > 0) {
			
			$rtArray = $result->row_array ();
		
		}
		return $rtArray;
	}

	public function acivateUser ($email,$code) {
		
	}
	
	public function updateUser ($id,$data) {
		
	}
}

?>