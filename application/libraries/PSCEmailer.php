<?php

/** 
 * @author subash
 * 
 * 
 */
class PSCEmailer {
	
	private $_emailFrom;
	private $_emailReplyTo;
	private $_emailSubject;
	private $_emailTo;
	
	function __construct() {
	
	}
	
	public function sentEmail () {
		
		
	}
	/**
	 * @return the $_emailFrom
	 */
	public function getEmailFrom() {
		return $this->_emailFrom;
	}

	/**
	 * @return the $_emailReplyTo
	 */
	public function getEmailReplyTo() {
		return $this->_emailReplyTo;
	}

	/**
	 * @return the $_emailSubject
	 */
	public function getEmailSubject() {
		return $this->_emailSubject;
	}

	/**
	 * @return the $_emailTo
	 */
	public function getEmailTo() {
		return $this->_emailTo;
	}

	/**
	 * @param field_type $_emailFrom
	 */
	public function setEmailFrom($_emailFrom) {
		$this->_emailFrom = $_emailFrom;
	}

	/**
	 * @param field_type $_emailReplyTo
	 */
	public function setEmailReplyTo($_emailReplyTo) {
		$this->_emailReplyTo = $_emailReplyTo;
	}

	/**
	 * @param field_type $_emailSubject
	 */
	public function setEmailSubject($_emailSubject) {
		$this->_emailSubject = $_emailSubject;
	}

	/**
	 * @param field_type $_emailTo
	 */
	public function setEmailTo($_emailTo) {
		$this->_emailTo = $_emailTo;
	}

	
	
}

?>