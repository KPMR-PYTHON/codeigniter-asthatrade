<?php defined('BASEPATH') OR exit('No direct script access allowed');
include_once ("VtransactSecurity.php");
class UpiPayment extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('UpiPayment_model');

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
		$account_type = $this->input->post('account_type');
		($account_type=='NSE') ? $this->config->load('upi_nse') : $this->config->load('upi_mcx');
		$txnid=$this->generateRandomString(30);
		log_message('error',$this->config->item('hdfc_merchant_id'));
		$merchantReqStr =$this->config->item('hdfc_merchant_id').'|'.$txnid.'|'.$vpa.'|T|||||||||NA|NA';
		$url = $this->apiUrl('check_address');
		$dnc_data2 = $this->apiCallHdfc($account_type,$merchantReqStr,$url);
		echo json_encode($dnc_data2);
	}
	
	public function transferwithUpi(){
		$vpa = $this->input->post('vpa');
		$amount = $this->input->post('amount');
		$client_code = $this->input->post('client_code');
		$account_type = $this->input->post('account_type');
		($account_type=='NSE') ? $this->config->load('upi_nse') : $this->config->load('upi_mcx');
		$txnid='m.'.$account_type.'.'.$client_code.'.'.$this->generateRandomString(10);
		$acc_numbers = $this->getAccountNumbers(array("partyCode"=> $client_code,"exchange"=>$account_type, "reqId"=>"ASTHAWEB", "reqKey"=> "Qw4eh5Xho7"));
		if($acc_numbers["status"] == "success"){
			$merchantpaymentReqStr=$this->config->item('hdfc_merchant_id').'|'.$txnid.'|'.$vpa.'|'.$amount.'|ASTHA TRADE MARGIN|5|6012||||||MEBR|'.$acc_numbers["acc_numbers"].'||NA|NA';
			$_SESSION["paymentString"]= $merchantpaymentReqStr;
			if(strlen($acc_numbers["acc_numbers"]) > 5){
				$dnc_data3=$this->apiCallHdfc($account_type,$merchantpaymentReqStr,$this->apiUrl('collect'));
				if($dnc_data3[3]=="SUCCESS"){
					$dnc_data3[3]="Successfully started";	
				}
				$this->UpiPayment_model->saveMarginPayment($client_code,$dnc_data3);
				echo json_encode(array("status"=>"success", "response" =>$dnc_data3, "string"=>$merchantpaymentReqStr));	
			}else{
				echo json_encode(array("status"=>"error", "error_message" => "No linked bank accounts found. Please recheck your client code and contact support if problem persists"));
			}
			
		}else{ 
			echo json_encode(array("status"=>"error","error_message" => "Margin Payments can be done only during trading hours."));
		}     

	}

	public function checkUpiStatus(){
		$original_txnid = $this->input->post('txnId');
		$account_type = $this->input->post('account_type');
		($account_type=='NSE') ? $this->config->load('upi_nse') : $this->config->load('upi_mcx');
		$txnid = $this->generateRandomString(30);
		$merchantStatusReq = $this->config->item('hdfc_merchant_id').'|'.$original_txnid.'|'.$txnid.'||||||||||NA|NA';
		$data = $this->apiCallHdfc($account_type,$merchantStatusReq,$this->apiUrl('status'));
		if ($data[4] =="PENDING"){
			echo json_encode($data);	
		}else{
			$this->UpiPayment_model->updateMarginPayment($data);
			echo json_encode($data);
		}

	}

	public function apiCallHdfc($account_type,$merchantReqStr,$urll){
		($account_type=='NSE') ? $this->config->load('upi_nse') : $this->config->load('upi_mcx');
		$enckey=$this->config->item('hdfc_merchant_key');
		$vTransactSecurity = new VTransactSecurity();
		$enc_data = $vTransactSecurity->encryptValue($merchantReqStr,$enckey);
		$Rdata['requestMsg']=$enc_data;
		$Rdata['pgMerchantId']=$this->config->item('hdfc_merchant_id');
		$jsondata=json_encode($Rdata);

		$ch = curl_init($urll);
		curl_setopt( $ch, CURLOPT_POSTFIELDS, $jsondata );
		curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/x-www-form-urlencoded'));
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
		$result = curl_exec($ch);
		curl_close($ch);
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
				$acc_number=$value->accno;
				if(strpos($value->ifsccode,'SBIN') !== false ){
					while(strlen($acc_number) < 17){
						$acc_number = "0".$acc_number;
					}
				}
				$acc_numbers= $acc_numbers.$acc_number."!" ; 
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