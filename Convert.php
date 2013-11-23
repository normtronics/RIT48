<?php

class Convert 
{
	function __construct()
	{
		
	}

	public function convertZipToLatLang($zip){

		$url = 'http://api.geonames.org/postalCodeSearchJSON?postalcode='.$zip.'&maxRows=1&username=soldiercnorm';
		header('Content-type: application/json');
		$data = json_encode(array('Converted' => $this->sendRequest($url)));
		//print($data);
		return $data;
	}

	public function convertLatLangtoZip(){

	}


	private function sendRequest($url){

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		$data = curl_exec($ch); 
		curl_close($ch);

        $responce = json_decode($data);
        return $responce;
	}
}


$convert = new Convert();
$convert->convertZipToLatLang('08046');

?>