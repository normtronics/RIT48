<?php
include 'IData.php';

class GoogleData extends IData
{
	function __construct()
	{
		
	}

	public function getData(){

		$name = $_GET['name'];
		$type = $_GET['type'];



		$key = 'AIzaSyCTR-J8KjH9RQFSY_NPSJjwR1iM3dIT9JM';

		$url = 'https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=-33.8670522,151.1957362&radius=500&types='.$type'&name='.$name.'&sensor=false&key='.$key;
	}

}



?>