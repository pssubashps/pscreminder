<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$email_header = <<<'EOD'
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<style type="text/css">
body {
	margin:0;
	padding:0;
}
</style>

</head>

<body>

EOD;


$email_footer = <<<'EOD'

</body>
</html>

EOD;

$email_user_registration = <<<'EOD'
 <p> Hello <<<USER_FULLNAME>>>,</p>
 <p>Thank you for registering with us.We will try to provide the right information in right time</p>
 <p>Please copy or click the below link to activate the your account</p>
 <br/>
 <p><<<ACTIVATE_URL>>></p>
 <br/><br/>
 
 <p>Thanks,</p>
 <b>PSC Reminder Support Team<b>
EOD;

$config['PSC_EMAIL_USER_ACTIVATION'] = $email_header.$email_user_registration.$email_footer;
