<?php $this->load->view('layout/header'); ?>
<div id="login">

<?php echo validation_errors('<p class="error">', '</p>'); ?>
<?php 
if(isset($error_message) && strlen($error_message) > 0 ) {
	print "<p class='error'>".$error_message."</p>";
}
?>
<?php
$attributes = array('class' => 'email', 'id' => 'frmlogin');

echo form_open('login/index', $attributes);
$username = array(
              'name'        => 'user_email',
              'id'          => 'user_email',
              'value'       => preset_value('user_email'),
              'maxlength'   => '20',
              'size'        => '20',
              'style'       => 'width:20%',

            );

$password = array(
              'name'        => 'user_password',
              'id'          => 'user_password',
              'value'       => preset_value('user_password'),
              'maxlength'   => '20',
              'size'        => '20',
              'style'       => 'width:20%',
			 
            );
print "<h3>Login</h3>";            
echo "Username " .form_input($username);
echo "<br/><br/>Password " .form_password($password);


echo "<br/><br/>";
echo form_submit("user_login","Get me in !!");
echo form_close();
?>
</div>
<?php $this->load->view('layout/footer'); ?>