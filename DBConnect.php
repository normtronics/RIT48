<?php

class DBConnect
{
	private $hostname = null;
	private $username = null;
	private $password = null;
	private $dbhandle = null;

	function __construct()
	{
		$this->hostname = "mysql.normtronics.com";
		$this->username = "soldiercnorm";
		$this->password = "pernell1";
	}

	public function getConnection(){

		$this->dbhandle = mysql_connect($this->hostname, $this->username, $this->password) or die(mysql_error());
	}

	public function getDatabase($database){

		mysql_select_db($database , $this->dbhandle) or die(mysql_error());
	}

	public function runQuery($query){

		$result = mysql_query($query, $this->dbhandle);

		print($result);

		if(mysql_error() && strpos(mysql_error(),'username')){
			print('Username already esist');
			return 0;
		}

		if (mysql_error() && strpos(mysql_error(),'email')) {
			print('Email already esist');
			return 1;
		}

		mysql_close($this->dbhandle);

		return $result;
	}

	public function getHostName(){

		return $this->hostname;
	}

	public function getUserName(){

		return $this->username;
	}

	public function getPassWord(){

		return $this->password;
	} 

	public function getDBHandle(){

		return $this->dbhandle;
	}
}

$DBtest = new DBConnect();
print($DBtest->getHostName()."\n");
print($DBtest->getUserName()."\n");
print($DBtest->getPassWord()."\n");

$DBtest->getConnection();
$DBtest->getDatabase('asylis2');

print($DBtest->getDBHandle());
?>