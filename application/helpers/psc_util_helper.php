<?php

function generatePassword($length = 6) {
	
	$alpha = "abcdefghijklmnopqrstuvwxyz";
	$alpha_upper = strtoupper ( $alpha );
	$numeric = "0123456789";
	$special = "!@$#*%{}";
	$chars = $alpha . $alpha_upper . $numeric . $special;
	$pw = '';
	$len = strlen ( $chars );
	for($i = 0; $i < $length; $i ++) {
		$pw .= substr ( $chars, rand ( 0, $len - 1 ), 1 );
	}
	$pw = str_shuffle ( $pw );
	return $pw;
}

function getMysqlDateFormat ($date) {
	$dateTimestamp = strtotime($date);
	return date('Y-m-d',$dateTimestamp);
	
}

function getActivationCode() {
	$key1 = generatePassword(15);
	$key2 = time();
	return md5(md5($key1.$key2))	;
}

function getActivationEmail($template,$activation_code,$fullname,$emailid) {
	
	$activation_url = "<a href='".base_url()."login/act/".$emailid."/".activation_code."'>".base_url()."login/act/".$emailid."/".activation_code."</a>";
	$email = str_replace("<<<USER_FULLNAME>>>", $fullname, $template);
	$email = str_replace("<<<ACTIVATE_URL>>>", $activation_url, $email);
	return $email;
}