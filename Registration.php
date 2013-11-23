<?php
include 'User.php';

class Registration
{
	private $user = null;

	function __construct()
	{
		$this->user = new User();
	}


	public function Resgister(){

		$this->user->createUser($this->namePassMail(), $this->addressSet());
	}


	public function namePassMail(){

		if(isset($_GET['firstname']) && isset($_GET['lastname']) && 
			isset($_GET['username']) && isset($_GET['password']) && 
				isset($_GET['email'])){

			$userArray = array(

				$_GET['firstname'],
				$_GET['lastname'],
				$_GET['username'],
				$_GET['password'],
				$_GET['email']
			);


			return $userArray;

		}else{

			$userArray = array(

				$_SERVER['argv'][1],
				$_SERVER['argv'][2],
				$_SERVER['argv'][3],
				$_SERVER['argv'][4],
				$_SERVER['argv'][5]
			);

			return $userArray;

		}
	}

	public function addressSet(){

		if (isset($_GET['street']) && isset($_GET['city']) && 
			isset($_GET['state']) && isset($_GET['zip'])) {
			
			$addressArray = array(

				$_GET['street'],
				$_GET['city'],
				$_GET['state'],
				$_GET['zip']

			);
		}else{

			$addressArray = array(

				$_SERVER['argv'][6],
				$_SERVER['argv'][7],
				$_SERVER['argv'][8],
				$_SERVER['argv'][9]

			);
		}


	}
}

$register = new Registration();
$register->Resgister();

?>