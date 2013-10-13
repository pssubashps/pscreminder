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
$config['home/signup'] = array ();

$fullname = array(
				'field' => 'user_fullname',
				'label' => 'Name',
				'rules' => 'required|max_length[25]'
				);

$email = array(
				'field' => 'user_username',
				'label' => 'Email',
				'rules' => 'required|valid_email|is_unique[user.user_email]'
				);
				
$dob = array(
				'field' => 'user_dob',
				'label' => 'Date of birth',
				'rules' => 'required'
				);
				
array_push($config['home/signup'] , $fullname);
array_push($config['home/signup'] , $email); 
array_push($config['home/signup'] , $dob); 


$config['login/index'] = array ();

$username = array(
				'field' => 'user_email',
				'label' => 'username',
				'rules' => 'required|valid_email'
				);

$password = array(
				'field' => 'user_password',
				'label' => 'Password',
				'rules' => 'required'
				);
				

				
array_push($config['login/index'] , $username);
array_push($config['login/index'] , $password); 
