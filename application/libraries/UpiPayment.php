<?php defined('BASEPATH') OR exit('No direct script access allowed');
include_once ("VtransactSecurity.php");
class UpiPayment extends MY_Controller {
	
	public function __construct()
    {
		parent::__construct();
		$this->load->model('Account_model');
        $this->load->helper('cookie');
        $this->load->library('account_number');
        // $this->SetReferralCookie();
	}


	function generateRandomString($length = 10) {
    		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		    $charactersLength = strlen($characters);
		    $randomString = '';
		    for ($i = 0; $i < $length; $i++) {
		        $randomString .= $characters[rand(0, $charactersLength - 1)];
		    }
		    return $randomString;
		}

	function apiUrl($type){
		$url = '';
		switch ($type)
		{
		case 'check_address':
			$url = $this->config->item('hdfc_domain').'/upi/checkMeVirtualAddress';
			return $url ; 
		break;

		case 'collect':
			$url = $this->config->item('hdfc_domain').'/upi/meTransCollectSvc';
			return $url ; 
			break;
		case 'status':
			$url = $this->config->item('hdfc_domain').'/upi/transactionStatusQuery';
			return $url ; 
		break;
		}
		
	}

	public function checkVPA(){
		$vpa = $this->input->post('vpa');
		$txnid=$this->generateRandomString(30);
		$merchantReqStr =$this->config->item('hdfc_merchant_id').'|'.$txnid.'|'.$vpa.'|T|||||||||NA|NA';
	  	$url = $this->apiUrl('check_address');
	  	$dnc_data2 = $this->apiCallHdfc($merchantReqStr,$url);
	  	echo json_encode($dnc_data2);
	}
	
	public function transferwithUpi(){
		$vpa = $this->input->post('vpa');
		$amount = $this->input->post('amount');
		$txnid=$this->generateRandomString(30);
		$client_code = $this->input->post('client_code');
		$account_type = $this->input->post('account_type');
		$acc_numbers = $this->getAccountNumbers(array("partyCode"=> $client_code,"exchange"=>$account_type, "reqId"=>"ASTHAWEB", "reqKey"=> "Qw4eh5Xho7"));
		if($acc_numbers["status"] == "success"){
			if(strlen($acc_numbers["acc_numbers"]) > 5){
				$merchantpaymentReqStr=$this->config->item('hdfc_merchant_id').'|'.$txnid.'|'.$vpa.'|'.$amount.'|ASTHA TRADE MARGIN|5|6012||||||MEBR|'.$acc_numbers["acc_numbers"].'||NA|NA';
				$this->session->set_flashdata('upistring',$merchantpaymentReqStr);
	        	$dnc_data3=$this->apiCallHdfc($merchantpaymentReqStr,$this->apiUrl('collect'));
	        	echo json_encode(array("status"=>"success", "response" =>$dnc_data3, "string"=>$merchantpaymentReqStr));	
			}else{
				echo json_encode(array("status"=>"error", "error_message" => "No linked bank accounts found. Please recheck your client code and contact support if problem persists"));
			}
			
		}else{ 
			echo json_encode($acc_numbers);
		}     
        
  	}

 	public function checkUpiStatus(){
 		$original_txnid = $this->input->post('txnId');
	  	$txnid = $this->generateRandomString(30);
	  	$merchantStatusReq = $this->config->item('hdfc_merchant_id').'|'.$original_txnid.'|'.$txnid.'||||||||||NA|NA';
	  	$data = $this->apiCallHdfc($merchantStatusReq,$this->apiUrl('status'));
	  	echo json_encode($data);
  	}
  	public function apiCallHdfc($merchantReqStr,$urll){
		$enckey=$this->config->item('hdfc_merchant_key');
		$vTransactSecurity = new VTransactSecurity();
		$enc_data = $vTransactSecurity->encryptValue($merchantReqStr,$enckey);
		$Rdata['requestMsg']=$enc_data;
		$Rdata['pgMerchantId']=$this->config->item('hdfc_merchant_id');
		$jsondata=json_encode($Rdata);
		$opts = array('http' =>
        array(
              'method'  => 'POST',
              'header'  => 'Content-type: application/x-www-form-urlencoded',
              'content' => $jsondata
          )
        );
      	$context  = stream_context_create($opts);
    	$result = file_get_contents($urll,false,$context);
    	$dnc_data = $vTransactSecurity->decryptValue($result,$enckey);
    	$dnc_data2=explode("|",$dnc_data);
    	return $dnc_data2; 
	}

	public function getAccountNumbers($params){
		$query_result =$this->account_number->getAccNumber($params);
		if($query_result["response_code"] == 200){
			$response = json_decode($query_result["data"])->data;
			$acc_numbers="";
			foreach ($response as $key => $value) {
				$acc_numbers= $acc_numbers.$value->accno ; 
				$acc_numbers = $acc_numbers."!"	;
			}
			return array("status"=>"success", "acc_numbers"=>$acc_numbers);
		}else if($query_result["response_code"] != 200){
			return array("status"=>"error","error_message"=>"Unable to fetch Account Details. Please Contact Support");
		}
		


	}

	function decrypt_result($result){
		$vTransactSecurity = new VTransactSecurity();
		return $vTransactSecurity->decryptValue($result,$enckey);
	}
}
?>