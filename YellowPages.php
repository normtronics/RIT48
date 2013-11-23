<?php

include 'IData.php';

class YellowPages extends IData
{
	function __construct()
	{

	}

	public function getData(){

		//$what = $_GET['what'];
		//$where = $_GET['where'];

		$what = 'florists';
		$where = 'Trenton';

		$apikey = '6pwsqdjgqmd4c7b28g9h6epm';
		$UID = '127.0.0.1';
		$fmt = 'JSON';

		$url = 'http://api.sandbox.yellowapi.com/FindBusiness/?what='.$what.'&where='.$where.'&apikey='.$apikey.'&UID='.$UID.'&fmt='.$fmt;


		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		$data = curl_exec($ch); 
		curl_close($ch);

        $responce = json_decode($data);

		var_dump($responce);
	}
}

$yellow = new YellowPages();
$yellow->getData();

?>