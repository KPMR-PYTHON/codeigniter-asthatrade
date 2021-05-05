<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class account_number {
	public function __construct(){
		$this->CI =& get_instance();
	}

	public function getAccNumber($params){
		$url = 'http://backoffice.asthatrade.com/cgi-bin/Backoffice/jsonapi/getbankdetails.asp?';
		$query = http_build_query($params);
		$response = $this->get_response($url.$query);
		return $response;
	}

	function get_response($url){
			$ch = curl_init();
			$headers[] = 'Content-Type: application/json';
	        curl_setopt($ch, CURLOPT_URL, $url);
	        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
	        $response = curl_exec($ch);
	        $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	        return array("data"=>$response,"response_code"=> $http_status);
		}
}