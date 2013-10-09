<?php
$attributes = array('class' => 'email', 'id' => 'myform');

echo form_open('user/signup', $attributes);
$username = array(
              'name'        => 'user_username',
              'id'          => 'user_username',
              //'value'       => 'johndoe',
              'maxlength'   => '20',
              'size'        => '20',
              'style'       => 'width:20%',
            );
$dob = array(
              'name'        => 'user_dob',
              'id'          => 'user_dob',
              //'value'       => 'johndoe',
              'maxlength'   => '20',
              'size'        => '20',
              'style'       => 'width:20%',
            );
$fullname = array(
              'name'        => 'user_fullname',
              'id'          => 'user_fullname',
              //'value'       => 'johndoe',
              'maxlength'   => '20',
              'size'        => '20',
              'style'       => 'width:20%',
            );            
echo "Email " .form_input($username);
echo "<br/><br/>Name " .form_input($fullname);
echo "<br/><br/>Date of Birth " .form_input($dob);

echo "<br/><br/>";
echo form_submit("user_submit","SIgnup !!");
echo form_close();