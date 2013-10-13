<?php $this->load->view('layout/header'); ?>
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