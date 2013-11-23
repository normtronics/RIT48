<?php
include 'User.php';
include 'DBConnect.php';


class Registration
{
	private $database = null;
	private $user = null;

	function __construct()
	{
		$this->database = new DBConnect();
		$this->database->getConnection();
	}


	public function Resgister(){


	}


	public function namePassMail(){

		if(isset($_GET['firstname']) && isset($_GET['lastname']) && 
			isset($_GET['username']) && isset($_GET['password']) && 
				isset($_GET['email'])){

			$firstname = $_GET['firstname'];
			$lastname = $_GET['lastname'];
			$username = $_GET['username'];
			$password = $_GET['password'];
			$email = $_GET['email'];

		}else{

			$firstname = $_SERVER['argv'][1];
			$lastname = $_SERVER['argv'][2];
			$username = $_SERVER['argv'][3];
			$password = $_SERVER['argv'][4];
			$email = $_SERVER['argv'][5];

		}
	}

	public function addressSet(){


		
	}
}



?>