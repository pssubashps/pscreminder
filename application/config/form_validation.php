<?php
/*
 * @author  subash ps
 * @created  7 Oct 2013
 * @description This file is used to create valiation rules 
 */

/*
 * delcare global $config array
 */
$config = array ();
/*
 * controller  user
 * action signup
 * description this action is used to register a new user
 */
$config['user/signup'] = array ();

$fullname = array(
				'field' => 'user_fullname',
				'label' => 'Name',
				'rules' => 'alpha'
				);
				
array_push($config['user/signup'] , $fullname);
 
