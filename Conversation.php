<?php
/**
 * 
 */
if(!isset($_SESSION)) 
{ 
	session_start(); 
} 
include_once 'Dbcon.php';
class Conversation
{
	public $conn;
	function __construct()
	{
		$dbase= new Dbcon();
		$this->conn = $dbase->create_conn();
	}

	public function registration($name, $email, $num, $pass)
	{
		$query="INSERT INTO `user_registration`(`user_name`, `user_mobile`, `user_email`, `user_password`) VALUES ('$name','$num','$email','$pass')";
		$res = $this->conn->query($query);
		if ($res) {
			echo "Registartion successfull";;
		}
		else{
			return "Not register";
		}
	}

	public function user_login($email, $password)
	{
		$query="SELECT * FROM `user_registration` where `user_email`= '$email'";
		$res= $this->conn->query($query) or die("Query not executed");
		if ($res->num_rows>0) {
			$row = $res->fetch_assoc();
			$dbpass= $row['user_password'];
			$pass_check = password_verify($password, $dbpass);
			if ($pass_check) {
				$_SESSION['username']=$row['user_name'];
				$_SESSION['user_id']=$row['user_id'];
				echo 2;
			}
			else{
				echo 1;
			}
		}
		else{
			echo 0;
		}
	}

	public function allusers($user_id)
	{
		$query = "SELECT user_id,user_name FROM `user_registration` WHERE `user_id` NOT IN ($user_id)";
		$res= $this->conn->query($query);
		if ($res->num_rows>0) {
			
			while ($row = $res->fetch_all(MYSQLI_ASSOC)) {
				$arrdata= $row;
			}
			return $arrdata;
		}
		else{
			return false;
		}
	}
}
?>