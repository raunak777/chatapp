<?php
/**
 * 
 */
include_once 'Conversation.php';
extract($_POST);
$msg = new Conversation();
if ($action=='reg') {
	if ($password == $cnfpassword) {
		$pass = password_hash($password, PASSWORD_BCRYPT);
		$data = $msg->registration($name, $email,$number,$pass);
	}
	else{
		echo "Password and confirm password not match";
	}
}
else if($action =='login')
{
	$data = $msg->user_login($email,$password);
	print_r($data);
}
?>