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

	public function createUser($userArray, $addressArray)
	{

		$query = "INSERT INTO address (`street`, `city`, `state`, `zip`) 
			VALUES('".$addressArray[0]."','".$addressArray[1]."','".$addressArray[2]."','".$addressArray[3]."')";


		$query = "INSERT INTO user (`firstname`, `lastname`, `username`, `password`, `email`, `id_address1`, `id_addess2`) 
			VALUES('".$userArray[0]."','".$userArray[1]."','".$userArray[2]."','".$userArray[3]."','"
				.$userArray[4]."','".mysql_insert_id()."','".$userArray[6]."')";

		$this->database->runQuery($query);

		return $query;
	}

	public function addAddress($addressArray){

		$query = "INSERT INTO address (`street`, `city`, `state`, `zip`, `id_user`) 
			VALUES('".$addressArray[0]."','".$addressArray[1]."','".$addressArray[2]."','".$addressArray[3]."')";

		$this->database->runQuery($query);

		return $query;

	}

}


$user = new User();
$users = array('test' , 'test' , 'test4' , 'test' , 'test', 'test', 'test');
print_r($users);

print($user->createUser($users));


?>