<?php
include 'DBConnect.php';

class User 
{
	private $database = null;

	function __construct()
	{
		$this->database = new DBConnect();
		$this->database->getConnection();
	}


	public function createUser($userArray)
	{
		$query = "INSERT INTO user (`firstname`, `lastname`, `username`, `password`, `email`, `id_address1`, `id_addess2`) 
			VALUES('".$userArray[0]."','".$userArray[1]."','".$userArray[2]."','".$userArray[3]."','"
				.$userArray[4]."','".$userArray[5]."','".$userArray[6]."')";

		$this->database->runQuery($query);

		return $query;
	}

}

$user = new User();
$users = array('test' , 'test' , 'test4' , 'test' , 'test', 'test', 'test');
print_r($users);

print($user->createUser($users));


?>