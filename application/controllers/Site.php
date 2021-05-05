<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends MY_Controller
{
	public function __construct()
    {
        parent::__construct();
		//$this->load->helper('url');
        $this->load->driver('session');
        $this->load->model('Users');
		    $this->load->model('Account_model');
        $this->SetReferralCookie();
        $this->SetGadsCookie();
    }

	public function index()
	{
	//$da = $this->input->get();
    switch (ENVIRONMENT) {
      case 'development':
          $data['account_open_link']= "http://[::1]/cdsl/account/openAnAccount";
          $data['referral_link']= "http://[::1]/cdsl/site/getReferral";
        break;
      case 'production':        
          $data['account_open_link']= "https://accounts.".str_replace('https://','',base_url())."account/openAnAccount";
          $data['referral_link']= "https://accounts.".str_replace('https://','',base_url())."site/getReferral";

        break;
      case 'testing':
          $account_open_link= "http://stagingc.asthatrade.com/account/openAnAccount";
          $data['referral_link']= "https://stagingc.".str_replace('https://','',base_url())."site/getReferral";
        break;
      default:
            $data['account_open_link']= "https://accounts.".str_replace('https://','',base_url())."account/openAnAccount";
            $data['referral_link']= "https://accounts.asthatrade.com/site/getReferral";
        break;
    }

		$this->body = 'site/home'; // passing body to function. change this for different views.
    $this->load->view($this->body, $data, true);
    $this->layout();

	}
	


	public function allData()
	{
		
		//echo "Pradosh";
		
		//$this->load->model('Users');
		$data['alldata'] = $this->Users->getAllData(); //Calling the Users Model method getAllData()
		$this->body = 'site/display';
		$this->load->view($this->body, $data, true); // Passing the $data array to view file
		$this->layout();
	}
	
	function login(){
        if($this->session->userdata('id')){
            $this->body = 'site/profile'; // passing middle to function. change this for different views.
            $this->layout();    
        } else {
            $this->load->view('site/login');
        }
    }
	
	function loginUser(){
       //$this->load->model('Users');
       $email=trim($this->input->post('email'));
       $password=trim($this->input->post('password'));
       $userDetails=$this->Users->getUserDetailsByEmail($email,2); // 2 is for normal user and 1 for admmin
       if($userDetails!=0){
           $userValidate=$this->Users->validateHashPassword($userDetails['pass_salt'],$password);
           $user=$this->Users->get_user($email,$userValidate,2);  // 2 is for normal user and 1 for admmin 
           //echo "hi"; 
		  
           $this->loggedUser($user['id']);
           //loggedUser($userId)
           /*$user_details=$this->account->loggedUser($user['id']);
           echo "<pre>";
           print_r($user_details);
           echo "</pre>";
           exit('User Data'); 
           $this->session->set_userdata("id",$user['id']);
           $this->session->set_userdata("name",$user['userName']);
           $this->session->set_userdata("email",$user['emailaddress']);
           $this->session->set_userdata("userType",$user['accounttype']);
           $this->session->set_userdata("status",$user['status']);
           $this->session->set_userdata("reg_status",$user['reg_status']);*/
           
           $userCount=count($user['id']);
           if($userCount==1){
				$data['fname']=$user['fname'];
				$data['lname']=$user['lname'];
				$data['emailaddress']=$user['emailaddress'];
				$data['ph']=$user['ph'];
				$data['reg_status']=$user['reg_status']; // 1 = OTP Verified
			    $data['succ']=1;
				//echo 1;
				echo json_encode($data);		
           } else {
                echo 2;
           }
       } else {
           echo 3;
       }
    }
	
	
	/********************************* BHAV *******************************/
function bhav() // Privacy Policy Layout
	{
		$this->body = 'site/bhav'; // passing body to function. change this for different views.
        $this->layout();
	}
	
	
	
	function profile(){
		
        if($this->session->userdata('id')){
			//$addres_diff = array();
            $this->load->model('Account_model');
            $data['getAllDetails']=$this->Account_model->getAllDetails($this->session->userdata('id'));
			$data['getAccountPayDetails']=$this->Account_model->getAccountPayDetails($this->session->userdata('id'));
			//$this->session->set_userdata('pay_type',$data['getAccountPayDetails'][0]['payment_status']);
			$rows = $data['getAccountPayDetails'];
      $data['totCountOfAccountPay']=$rows[0]['payment_status']+$rows[1]['payment_status'];
			
			//$data['getUserAddress']=$this->Account_model->getUserDetails($this->session->userdata('id'));
			$data['countrydetails']=$this->Account_model->getCountryDetails();
            $data['stateDetails']=$this->Account_model->getStateDetails(100);
			$data['addressProofDocs']=$this->Account_model->addrProofd();
			$data['occupationDetails']=$this->Account_model->getOccupationDetails();
			$data['getAddressPresent']=$this->Account_model->getAddressPresent($this->session->userdata('id'));
            $data['getAddressPermanent']=$this->Account_model->getAddressPermanent($this->session->userdata('id'));
			/* $addres_diff = array_diff($data['getAddressPresent'],$data['getAddressPermanent']);
			$data['address_diff'] = $addres_diff;
			print_r($addres_diff);
			exit('Array Diff');  */
			$data['getPhMob']=$this->Account_model->getPhMob($this->session->userdata('id'));
            $data['getPhHome']=$this->Account_model->getPhHome($this->session->userdata('id'));
            $data['getPhOfc']=$this->Account_model->getPhOfc($this->session->userdata('id'));
            $data['getPhFax']=$this->Account_model->getPhFax($this->session->userdata('id'));
			$data['present_country_id']=$data['getAddressPresent']['Precount'];
			$data['present_state_id']=$data['getAddressPresent']['Prestate'];
			$data['present_addProofId']=$data['getAddressPresent']['PreAddProofId'];
			$data['permanent_country_id']=$data['getAddressPermanent']['Percount'];
            $data['Permanent_state_id']=$data['getAddressPermanent']['Perstate'];
			$data['Permanent_addProofId']=$data['getAddressPermanent']['PerAddProofId'];
			$data['occupation_id']=$data['getAllDetails']['occupation_id'];
			//$data['add_pre_flag']=$data['getAddressPresent']['isperflag'];
			//echo $data['add_pre_flag'];
			//$data['add_per_flag']=$data['getAddressPermanent']['isperflag'];
			//echo $data['add_per_flag'];
			// print_r($data['occupation_id']);
			//exit("Stooped"); 
			
			$this->body = 'site/profile';
            $this->load->view($this->body, $data, true);
			$this->layout();
        } else {
            redirect('/site/login');
        }
    }
	
	 function logout(){
        $this->session->sess_destroy();
        redirect('site/index');
    }
    
    // Test starts
    function pay(){
        $data['user_id'] = $this->session->userdata('id');
        $data['account_type'] ='2';
        $this->session->set_userdata('acc_type',$data['account_type']);
        $getCommodityAccDetails = $this->Account_model->getCommodityAccDetails($data);
        $data['name'] = $getCommodityAccDetails[0]['fname'].' '.$getCommodityAccDetails[0]['mname'].' '.$getCommodityAccDetails[0]['lname'];
        $data['email'] = $getCommodityAccDetails[0]['emailaddress'];
        $data['accType'] = $getCommodityAccDetails[0]['account_type'];
        $data['amount']='50';
        $data['mobile_ph'] = $getCommodityAccDetails[0]['ph'];
        
        //add into transaction table from model
        $data['trnId']=$this->Account_model->transactionDetails($data,1);
        $transaction_id_length=strlen($data['trnId']);
        $number_of_zeros=(6-$transaction_id_length);
        if($number_of_zeros==5)
        {                       
            $data['trn_id']='00000'.$data['trnId'];
        }
        else if($number_of_zeros==4)
        {
            $data['trn_id']='0000'.$data['trnId'];
        }
        else if($number_of_zeros==3)
        {
            $data['trn_id']='000'.$data['trnId'];
        }
        else if($number_of_zeros==2)
        {
            $data['trn_id']='00'.$data['trnId'];
        }
        else if($number_of_zeros==1)
        {
            $data['trn_id']='0'.$data['trnId'];
        }
        
        $data['address1'] =  $getCommodityAccDetails[0]['address1']." ".$getCommodityAccDetails[0]['address2']." ".$getCommodityAccDetails[0]['address3'];
        $data['address2'] =  $getCommodityAccDetails[0]['address4'];
        
        if($getCommodityAccDetails){
            $this->body = 'Payment/paymentTypeSelection'; // passing body to function. change this for different views.  
            $this->load->view($this->body, $data, true);
            $this->layout();
        }
    }
    
   //  function profile1(){
		
   //      if($this->session->userdata('id')){
			// //$addres_diff = array();
   //          $this->load->model('Account_model');
   //          $data['getAllDetails']=$this->Account_model->getAllDetails($this->session->userdata('id'));
			
			// //$data['getUserAddress']=$this->Account_model->getUserDetails($this->session->userdata('id'));
			// $data['countrydetails']=$this->Account_model->getCountryDetails();
   //          $data['stateDetails']=$this->Account_model->getStateDetails(100);
			// $data['addressProofDocs']=$this->Account_model->addrProofd();
			// $data['occupationDetails']=$this->Account_model->getOccupationDetails();
			// $data['getAddressPresent']=$this->Account_model->getAddressPresent($this->session->userdata('id'));
   //          $data['getAddressPermanent']=$this->Account_model->getAddressPermanent($this->session->userdata('id'));
			// /* $addres_diff = array_diff($data['getAddressPresent'],$data['getAddressPermanent']);
			// $data['address_diff'] = $addres_diff;
			// print_r($addres_diff);
			// exit('Array Diff');  */
			// $data['getPhMob']=$this->Account_model->getPhMob($this->session->userdata('id'));
   //          $data['getPhHome']=$this->Account_model->getPhHome($this->session->userdata('id'));
   //          $data['getPhOfc']=$this->Account_model->getPhOfc($this->session->userdata('id'));
   //          $data['getPhFax']=$this->Account_model->getPhFax($this->session->userdata('id'));
			// $data['present_country_id']=$data['getAddressPresent']['Precount'];
			// $data['present_state_id']=$data['getAddressPresent']['Prestate'];
			// $data['present_addProofId']=$data['getAddressPresent']['PreAddProofId'];
			// $data['permanent_country_id']=$data['getAddressPermanent']['Percount'];
   //          $data['Permanent_state_id']=$data['getAddressPermanent']['Perstate'];
			// $data['Permanent_addProofId']=$data['getAddressPermanent']['PerAddProofId'];
			// $data['occupation_id']=$data['getAllDetails']['occupation_id'];
			// //$data['add_pre_flag']=$data['getAddressPresent']['isperflag'];
			// //echo $data['add_pre_flag'];
			// //$data['add_per_flag']=$data['getAddressPermanent']['isperflag'];
			// //echo $data['add_per_flag'];
			// // print_r($data['occupation_id']);
			// //exit("Stooped"); 
			
			// 	$this->body = 'site/profile';
   //          $this->load->view($this->body, $data, true);
			// $this->layout();
   //      } else {
   //          redirect('/site/login');
   //      }
   //  }
    
    function payment()
    {
    	if($this->session->userdata('id')){
			//$addres_diff = array();
            $this->load->model('Account_model');
            
            $data['getAccountPayDetails']=$this->Account_model->getAccountPayDetails($this->session->userdata('id'));
            $data['getAccountStatusDetails']=$this->Account_model->getAccountStatusDetails($this->session->userdata('id'));
			//$this->session->set_userdata('pay_type',$data['getAccountPayDetails'][0]['payment_status']);
			$rows = $data['getAccountPayDetails'];
      $data['totCountOfAccountPay']=$rows[0]['payment_status']+$rows[1]['payment_status'];
			$this->body = 'site/payment';
            		$this->load->view($this->body, $data, true);
			$this->layout();
            
        } else {
            redirect('/site/login');
        }
    	 
    }
    
    function tracker()
    {
    	if($this->session->userdata('id')){
			//$addres_diff = array();
            $this->load->model('Account_model');
            
            $data['getAccountPayDetails']=$this->Account_model->getAccountPayDetails($this->session->userdata('id'));
            $data['getAccountStatusDetails']=$this->Account_model->getAccountStatusDetails($this->session->userdata('id'));
			//$this->session->set_userdata('pay_type',$data['getAccountPayDetails'][0]['payment_status']);
			$rows = $data['getAccountPayDetails'];
      $data['totCountOfAccountPay']=$rows[0]['payment_status']+$rows[1]['payment_status'];
			$this->body = 'site/tracker';
            		$this->load->view($this->body, $data, true);
			$this->layout();
            
        } else {
            redirect('/site/login');
        }
    	 
    }
    
    
    function ipv()
    {
    		$this->body = 'site/ipv'; // passing body to function. change this for different views.
		$this->layout();
    }
    // Test ends
	
	
		/*public  function about()
	{
		$this->load->view('site/about');
	}*/
	function about()
	{  
		$this->body = 'site/about'; // passing body to function. change this for different views.
		$this->layout();
	}
	function product()
	{
		$this->body = 'site/product';
		$this->layout();
	}
       function mcxmargin()
	{
		$this->body = 'site/mcxmargin';
		$this->layout();
	}
       function nsefo()
	{
		$this->body = 'site/nsefo';
		$this->layout();
	}
       function margin()
	{
		$this->body = 'site/margin';
		$this->layout();
	}
	function youtube()
	{
		$this->body = 'site/youtube';
		$this->layout();
	}
	function pricing(){
        //exit('A');
        $this->body = 'site/pricing'; // passing body to function. change this for different views.
        $this->layout();
    }
	
	function taxes(){
        //exit('A');
        $this->body = 'site/taxes'; // passing body to function. change this for different views.
        $this->layout();
    }


	function faq(){
        //exit('A');
        $this->load->model('Faq');
        $data['getFaqCategory']=$this->Faq->getFaqCategory();
        $data['totGetFaqCategory']=count($data['getFaqCategory']);
        for($i=0;$i<$data['totGetFaqCategory'];$i++){
            //echo $data['getFaqCategory'][$i]['id'];
            $data['getFaq'][$i]=$this->Faq->getFaq($data['getFaqCategory'][$i]['id']);
            $data['totGetFaq'][$i]=count($data['getFaq'][$i]);        
        }
        /*echo "<pre>";
        print_r($data['totGetFaq']);
        echo "</pre>";*/
        $this->body = 'site/faq'; // passing body to function. change this for different views.
        $this->load->view($this->body, $data, true);
        $this->layout();
    }
	
	function profileResetPassword() // Profile Password Change Method
	{
		$this->load->model('Users');
		$user_id = $this->session->userdata('id');
		$databaseGivenHashSalt = $this->Users->getPassword($user_id); // Hash and Salt form database
		$databaseGivenSalt = $databaseGivenHashSalt['pass_salt'];  //Salt Password from database
		$databaseGivenHash = $databaseGivenHashSalt['pass_hash'];  // Hash Password database
		
		//echo "Database Given Hash: ".$databaseGivenHash; 
		
		$old_password=trim($this->input->post('old_password'));
		$user_given_password_hash = $this->Users->validateHashPassword($databaseGivenSalt,$old_password); //User given  password  generated Hash Password
		
		//echo "User Given Hash: ".$user_given_password_hash;
		
		$new_password=trim($this->input->post('new_password'));
		$new_password_hash = $this->Users->validateHashPassword($databaseGivenSalt,$new_password); // User given new password  generated Hash Password
		
		//echo "User Given New Hash: ".$new_password_hash;
		
		
		if($databaseGivenHash == $user_given_password_hash) // check database given hasspassword and user given hash password is same or not
		{  
			$result = $this->Users->resetPassword($user_id,$databaseGivenSalt,$new_password_hash); // if same then update new hash password to database
			
			if ($result == 1) // if new hash is updated then show the message
			{
				echo 'Your password has been updated.';
				//exit('test');
			}
			
		}
		else  // show this error when database given hasspassword and user given hash password not matched
		{
			echo 'Old password does not matched. Please Check.';
		}

	}
	
	/********************  For Reset Password  ****************/
	
	// function resetPassword() // For Layout
	// {
	// 	$this->load->view('site/checkEmailResetPassword');
	// }
	function forgotPassword() // For Layout
  {

    $this->body = 'site/forgotPassword'; // passing body to function. change this for different views.
    $this->layout();
    
  }

  function resetPassword(){

    $token = $this->uri->segment(4);
    $cleanToken = $this->security->xss_clean($token);
    $token_valid = $this->Account_model->isTokenValid($cleanToken);
    if($token_valid){
      $data['reset_token']=$token;
      $this->body = 'site/resetPassword'; // passing body to function. change this for different views.
      $this->load->view($this->body, $data, true);
      $this->layout();  
    }
    else{
      $this->body = 'site/invalid_token'; // passing body to function. change this for different views.
      $this->layout(); 
    }
    
  }
	
   
    function saveNewPassword() // Save  New Password 
    {
      if($this->input->post('user_id')) {
        $user_id = trim($this->input->post('user_id'));
      }
      else if($this->input->post('token')){
        $user_id = $this->Account_model->idFromToken(trim($this->input->post('token')));
      }
      
        
        $new_password = trim($this->input->post('newpassword'));
        $newPassword = $this->Users->getPassword($user_id);
        $newPasswordSalt = $newPassword['pass_salt'];
        $new_password_hash = $this->Users->validateHashPassword($newPasswordSalt,$new_password);
        $update_newpassword = $this->Users->resetPassword($user_id,$newPasswordSalt,$new_password_hash);
        if($update_newpassword == 1)
        {
            echo 'Password Changed.';
        }
        else
        {
            echo 'Error Occured! Please try after sometimes.';
        }
    }
	
	function payOut(){
        //exit('A');
        $this->body = 'site/payOut'; 
        $this->layout();
    }
	
	function contact(){
        //exit('A');
        $this->body = 'site/contact'; // passing body to function. change this for different views.
        $this->layout();
    }
	
	function fundStatus(){
        //exit('A');
        $this->body = 'site/fundStatus'; 
        $this->layout();
    }
	
	function bankDetails(){
        //exit('A');
        $this->body = 'site/bankDetails'; // passing body to function. change this for different views.
        $this->layout();
    }
	
	function formsFormats(){
        //exit('A');
        $this->body = 'site/formsFormats'; // passing body to function. change this for different views.
        $this->layout();
    }
	
	function getReferral()
	{
		$this->body = 'site/getReferral'; // passing body to function. change this for different views.
        $this->layout();
	}
	
	
	
	/********************************* Become A Sub-Broker *******************************/
	
	function subBroker() // Become a Sub-Broker Layout 
	{
		$this->body = 'site/subBroker'; // passing body to function. change this for different views.
        $this->layout();
	}
	
	
	function subBrokerRequest()
	{
		if($this->input->post())
		{
      $this->load->library('guzzle');
      $client     = new GuzzleHttp\Client(array('verify'=>false));
      $fields = array('secret'=>"6LeDaxcUAAAAADkfW6e0Cn_6Me7WKF2TSIbMqN1O",'response'=>trim($this->input->post('g-recaptcha-response')),'remoteip'=>$this->input->ip_address());
      $url = 'https://www.google.com/recaptcha/api/siteverify';
    try{
        $gz_response = $client->request( 'POST', $url,['query'=>array('secret'=>"6LeDaxcUAAAAADkfW6e0Cn_6Me7WKF2TSIbMqN1O",'response'=>trim($this->input->post('g-recaptcha-response')),'remoteip'=>$this->input->ip_address())]);
        $response = $gz_response->getBody()->getContents();
        log_message("debug",print_r($response,TRUE));
        $info=array('http_code'=>$gz_response->getStatusCode());
        $error='';
      } catch (GuzzleHttp\Exception\BadResponseException $e) {
        $response=$e->getResponse();
        $response = $response->getBody()->getContents();
        log_message("DEBUG",print_r($response,TRUE));
        $info=array('http_code'=>500);
        $error ='';
      }
      log_message('error',trim($this->input->post('g-recaptcha-response')));
			log_message('error',json_decode($response)->success);
      if (json_decode($response)->success == true){
        $data['subbroker_name'] = trim($this->input->post('sb_name'));
      $data['email'] = trim($this->input->post('email_id'));
      $data['phone'] = trim($this->input->post('phone'));
      $data['city'] = trim($this->input->post('city'));
      $data['msg'] = trim($this->input->post('msg'));
      $data['created'] = date('Y-m-d');
      $data['save_subbroker_request'] = $this->Account_model->saveSubBrokerRequest($data);
      if($data['save_subbroker_request']){
        $this->session->set_flashdata('success', 'Your Application Successfully Submitted.');
        redirect('site/subBroker');
      }
      else{
        $this->session->set_flashdata('err', 'There Was An Error. Please Try Again Later.');
        redirect('site/subBroker');
      }  
      }else{
        $this->session->set_flashdata('err', 'Please verify that you are not a robot');
        redirect('site/subBroker');
      }
      
			
		}
	}
	
	function privacyPolicy() // Privacy Policy Layout
	{
		$this->body = 'site/privacyPolicy'; // passing body to function. change this for different views.
        $this->layout();
	}
	
	/*************************************  Contact Us 27-Nov-2016 ***************************************************/
	function contactUs(){
		if($this->input->post())
		{
			$data['name'] = trim($this->input->post('name'));
			$data['email'] = trim($this->input->post('email'));
			$data['phone'] = trim($this->input->post('ph_no'));
			$data['website'] = trim($this->input->post('website'));
			$data['message'] = trim($this->input->post('msg'));
			$data['status'] = '0';
			$data['created'] = date('Y-m-d');
			$data['save_contactUs'] = $this->Account_model->saveContactUs($data);
			if($data['save_contactUs']){
				$this->session->set_flashdata('success', 'Thank You For Contact With Us.');
				redirect('site/contact');
			}
			else{
				$this->session->set_flashdata('err', 'There Was An Error. Please Try Again Later.');
				redirect('site/contact');
			}
		}
	}
	
    function loggedUser($userId){
           $this->load->model('Users');
           $user=$this->Users->get_user_by_id($userId);
           $this->session->set_userdata("id",$user['id']);
           $this->session->set_userdata("name",$user['userName']);
           $this->session->set_userdata("email",$user['emailaddress']);
          // $this->session->set_userdata("userType",$user['accounttype']);
           $this->session->set_userdata("status",$user['status']);
           $this->session->set_userdata("reg_status",$user['reg_status']);
           //$this->session->set_userdata("pay_type",$user['payment_status']);
           //$this->session->set_userdata("payment_type".$user['payment_type']);
		   
           $userCount=count($user['id']);
           if($userCount==1){
                return 1;    
           } else {
                return 2;
           }
        }
	
/********************************* Open An Account for logged in user who not filled up this form yet  ***************************************/	

	function openAnAccount(){ // This is for a user who is not filled up Open An Account form but abel to login
		$user_details = $this->Users->getUserDetails($this->session->userdata("id"));
		$data['userId'] = $this->session->userdata("id");
		$data['fname'] = $user_details->fname;
		$data['lname'] = $user_details->lname;
		$data['email_id'] = $user_details->emailaddress;
		$data['mobile_no'] = $user_details->ph;
		$data['countrydetails']=$this->Account_model->getCountryDetails();
		$data['stateDetails']=$this->Account_model->getStateDetails(100);
		$data['addressProofDocs']=$this->Account_model->addrProofd();
		$data['occupationDetails']=$this->Account_model->getOccupationDetails();
				   
		$this->body = 'account/openAnAccountForm'; // passing body to function. change this for different views.
        $this->load->view($this->body, $data, true);
		$this->layout();
		
	}

  function sendResetPwdToken(){
    $this->load->model('Users');
    $base_url = base_url();
    $user_email = trim($this->input->post('email'));
    $email_success = $this->Users->checkEmailWithDb($user_email);
    $user_id = $email_success['user_id'];
    if($email_success)
        {
          $data = array("success"=>"1","user_id"=>$user_id);
          $this->Account_model->send_reset_pwd_email($user_id);
          echo json_encode($data);
        }
        else
        {
           $data = array("success"=>"0");
            echo json_encode($data);
        }
  }

  function checkEmail() //Reset Password Email Check Method
    {
        $this->load->model('Users');
        $base_url = base_url();
        $user_email = trim($this->input->post('email'));
        $email_success = $this->Users->checkEmailWithDb($user_email);
        $user_id = $email_success['user_id'];
        //$this->session->set_userdata('user_id', $user_id);
        if($email_success)
        {
            //echo 'We found your email.';
            /*echo 1;
            echo $user_id;*/
            $data = array("success"=>"1","user_id"=>$user_id);
            echo json_encode($data);
        }
        else
        {
            echo json_encode('Sorry! You are not a registered user with us.');
        }
        //return $user_id;
    }

  public function base64url_encode($data) { 
      return rtrim(strtr(base64_encode($data), '+/', '-_'), '='); 
    } 
    public function base64url_decode($data) { 
      return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT)); 
    }    

  public function getReferralCode(){
    $this->load->model('Users');
    $user_email = trim($this->input->post('email'));
    $referral_code = $this->Users->getReferralCode($user_email);
    echo json_encode($referral_code);
  }
  function fundtransfer(){
            $this->body = 'site/upifundtransfer'; // passing middle to function. change this for different views.
            $this->layout(); 
        }
	
}	


?>
