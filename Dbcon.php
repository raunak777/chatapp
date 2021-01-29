<?php

/**
 * 
 */

class Dbcon
{
	public $servername;
	public $username;
	public $dbname;
	public $password;
	public $conn;
	
	function __construct()
	{
		$this->servername="localhost";
		$this->username="root";
		$this->dbname="chatapp";
		$this->password="";
	}

	function create_conn()
	{
		$this->conn = new mysqli($this->servername, $this->username,$this->password, $this->dbname);
		if ($this->conn) {
			return $this->conn;
		}
		else{
			return "connection failed";
		}
	}
}

?>