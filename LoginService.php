<?php
include 'DBConnect.php';


class Login 
{
	private $database = null;
	private $username = null;
	private $password = null;

	function __construct(){

		$this->database = new DBConnect();
		$this->database->getConnection();
	}

	public function login(){

		//Unsalt it
		if(isset($_GET['username']) && isset($_GET['password']) ){
			$this->username = $_GET['username'];
			$this->password = $_GET['password'];

			if ($this->checkUserName($this->username)) {
				
				if ($this->checkPassword($this->password)) {
					print('Login Sucessful');
					return true;
				}
				else{
					print('Wrong Password');
					return false;
				}
			}
			else{

				return false;
			}

		}else{
			$this->username = $_SERVER['argv'][1];
			$this->password = $_SERVER['argv'][2];
		}

		print($this->username);
		print($this->password);
		

	}

	public function checkPassword($password){
		
		//Check password with the row that was returned

	}

	public function checkUserName($username){

		$query = "SELECT * FROM user WHERE `username`=".$username;

		$result = $this->database->runQuery($query);

		if ($result != 1) {
			
			return false;
		}
		else{
			return $result;
		}
	}

}

$login = new Login();
$login->login();


?>