<?php $this->load->view('layout/header'); ?>
<div id="homecontent">
	<p>Hey !!! welcome to the pscreminder.in</p>
	<p>I know you are busy with your stuffs. Most of you are applied in kerala psc examinations but unfortunaly the exam will be conducted on 
	after two or three years,so there is a chance to forget about the exam. </p>
	<p>
		Here is the solution , once you eter your exam details,we are tried to remined as soon as possible once psc announces the exam calender
	</p>
</div>
<div id="signup">

<?php echo validation_errors('<p class="error">', '</p>'); ?>
<?php
$attributes = array('class' => 'email', 'id' => 'myform');

echo form_open('home/signup', $attributes);
$username = array(
              'name'        => 'user_username',
              'id'          => 'user_username',
              'value'       => preset_value('user_username'),
              'maxlength'   => '20',
              'size'        => '20',
              'style'       => 'width:20%',

            );
$dob = array(
              'name'        => 'user_dob',
              'id'          => 'user_dob',
              'value'       => preset_value('user_dob'),
              'maxlength'   => '20',
              'size'        => '20',
              'style'       => 'width:20%',
 				'readonly'    => true
            );
$fullname = array(
              'name'        => 'user_fullname',
              'id'          => 'user_fullname',
              'value'       => preset_value('user_fullname'),
              'maxlength'   => '20',
              'size'        => '20',
              'style'       => 'width:20%',
			 
            );
print "<h3>Sign up</h3>";            
echo "Email " .form_input($username);
echo "<br/><br/>Name " .form_input($fullname);
echo "<br/><br/>Date of Birth " .form_input($dob);

echo "<br/><br/>";
echo form_submit("user_submit","SIgnup !!");
echo form_close();
?>
</div>

<div id="login">

<?php echo validation_errors('<p class="error">', '</p>'); ?>
<?php
$attributes = array('class' => 'email', 'id' => 'frmlogin');

echo form_open('login/index', $attributes);
$username = array(
              'name'        => 'user_username',
              'id'          => 'user_username',
              'value'       => preset_value('user_username'),
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
<div class="newswindow">
	<h3>Upcoming Examination</h3>
</div>
<div class="newswindow">
	<h3>Application Invited</h3>
</div>
<script type="text/javascript">
$(document).ready(function () {
	$( "#user_dob" ).datepicker({
		  maxDate: "-18Y",// 18+ years old
	      showOn: "button",
	      buttonImage: "../../images/calendar.gif",
	      buttonImageOnly: true
	    });
});
</script>
<?php $this->load->view('layout/footer'); ?>