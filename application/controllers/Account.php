<?php  defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends MY_Controller
{
    public function __construct()
    {
       parent::__construct();
       $this->load->model('Account_model');
       $this->SetReferralCookie();

    }
    
    function openAnAccount()
    {
                       //$user_id=$this->session->userdata('id');
            if($this->session->userdata('id'))
            {
              
                if($this->session->userdata('reg_status')==1){
                    redirect('account/openAnAccountForm/'.$this->session->userdata('id'));
        } else if($this->session->userdata('reg_status')==0){
            $this->body = 'account/openAnAccount'; // passing body to function. change this for different views.
            $this->layout();
        } else if($this->session->userdata('reg_status')==4){
            redirect('site/payment');
        } else if($this->session->userdata('reg_status')==2){
            redirect('site/profile');
        } else if($this->session->userdata('reg_status')==3){
            redirect('site/profile');
        }
                 
            } else {
                $this->body = 'account/openAnAccount'; // passing body to function. change this for different views.
                $this->layout();
            }
 
            
              
    }
    
    function callMeBack() //Call Me Back method
    {
    	$data['client_id']  =   trim($this->input->post('ci'));
        $data['fname']  =   trim($this->input->post('fname'));
        $data['lname']  =   trim($this->input->post('lname'));
        $data['email']  =   trim($this->input->post('email'));
        //$data['client_id']  =   trim($this->input->post('client_id'));
        $data['mobile_no']  =   trim($this->input->post('mob_no'));
        $data['enquiry_date']=date('Y-m-d');
        $save=$this->Account_model->saveCallMe($data); // Save data to database
        if($save)
        {
            echo 1;
        }
        else 
        {
            echo 0;
        }
    }
    
    function checkEmail() // Email-ID Availability Check
    {
        $this->load->model('Users');
        $data['email']=trim($this->input->post('email'));
        $checkEmail=$this->Users->checkEmail($data['email']);
        echo json_encode($checkEmail);
    }
    
    
    function generateValidation() //
        {
             //var_dump($_POST);
             $data['user_id']=$_POST['user_id'];
             $data['fname']=$_POST['fname'];
             $data['lname']=$_POST['lname'];
             $data['email']=$_POST['email'];
             $data['mob_no']=$_POST['mob_no'];
             $data['password']=$_POST['password'];
             //$data['otpcode']='123456';
             $data['otpcode']=$this->generate_optcode($data['mob_no']);
             $ValidationIntroduction=$this->Account_model->generateValidationIntroduction($data);
             $data['userid']=$ValidationIntroduction;
             //return $data;
             //exit('AAA');
             //echo json_encode($data);
           // return $callme;
           echo json_encode($data);
        }
    function generate_optcode($mob_no) // otp generate
        {
                    $authKey = "52654A4x9IZ77Xu0h58be7ea2";
                    //Multiple mobiles numbers separated by comma
                    $mobileNumber =$mob_no;
                    //Sender ID,While using route4 sender id should be 6 characters long.
                    //$senderId = "102234";
                    $senderId = "asthat";
                     
                    $string = '0123456789';
                    $string_shuffled = str_shuffle($string);
                    $password = substr($string_shuffled, 1, 6);   

                    //Your message to send, Add URL encoding here.
                    $message = urlencode('Your OTP is '.$password.' for Astha Trade account');

                    //Define route 
                    //$route = "default";
                    $route = "4";
                    //Prepare you post parameters
                    $postData = array(
                    'authkey' => $authKey,
                    'mobiles' => $mobileNumber,
                    'message' => $message,
                    'sender' => $senderId,
                    'route' => $route
                    );
                    //API URL
                    $url="https://control.msg91.com/api/sendhttp.php";
                    // init the resource
                    $ch = curl_init();
                    curl_setopt_array($ch, array(
                        CURLOPT_URL => $url,
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_POST => true,
                        CURLOPT_POSTFIELDS => $postData,
                        CURLOPT_FOLLOWLOCATION => true
                    ));
                //Ignore SSL certificate verification
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                //get response
                $output = curl_exec($ch);
                //Print error if any
                if(curl_errno($ch))
                {
                    echo 'error:' . curl_error($ch);
                }
                curl_close($ch);
                return $password;
        }
    function otpValidation() //Otp Validation
        {
            $data['userId']=$_POST['userId'];
            $data['mobile_no_otp']=$_POST['mobile_no_otp'];
            $data['otpVerification']=$_POST['otpVerification'];
            $databaseOTP=$this->Account_model->getOTPfromdatabase($data);
            if($data['otpVerification']==$databaseOTP)
            {   
                $OTPvalidationIndatabase=$this->Account_model->validateOTP($data['userId']);
                if(isset($OTPvalidationIndatabase)==1)
                {
                  $removeOTPIndatabase=$this->Account_model->removeOTP($data['userId']);
                  $this->Account_model->sendWelcomeEmail($data['userId']);
                  $usr=$this->loggedUser($data['userId']);
                  if($usr==1){
                    redirect('account/openAnAccountForm/'.$this->session->userdata('id'));    
                  }
                  
                  
                }
                
           }
           else
           {        
                redirect('account/otpInvalid/'.$data['userId']."/".$data['mobile_no_otp']);
                    
           }
        }
        
    function otpInvalid()
    {
        $data['user_id']=$this->uri->segment(3);
        $data['mobile']=$this->uri->segment(4);
        
        $this->body = 'account/otpInvalid'; 
        $this->load->view($this->body, $data, true);
        $this->layout();
    }
    
    function loggedUser($userId){
           $this->load->model('Users');
           $user=$this->Users->get_user_by_id($userId);
           /* echo "<pre>";
           print_r($user);
           echo "</pre>";
           exit('User Data'); */
           $this->session->set_userdata("id",$user['id']);
           $this->session->set_userdata("name",$user['userName']);
           $this->session->set_userdata("email",$user['emailaddress']);
           //$this->session->set_userdata("userType",$user['accounttype']);
           $this->session->set_userdata("status",$user['status']);
           $this->session->set_userdata("reg_status",$user['reg_status']);
           //$this->session->set_userdata("pay_type",$user['pay_type']);
           
           $userCount=count($user['id']);
           if($userCount==1){
                return 1;    
           } else {
                return 2;
           }
        }
    function openAnAccountForm($id)
        {
            $this->session->set_userdata('id',$id);
            $data['userId']=$id;
            $data['fname']=$this->Account_model->getFirstName($id);
            $data['lname']=$this->Account_model->getLastName($id);
            $data['mobile_no']=$this->Account_model->getMobileNumber($id);
            $data['email_id']=$this->Account_model->getEmailId($id);
            $data['countrydetails']=$this->Account_model->getCountryDetails();
            $data['stateDetails']=$this->Account_model->getStateDetails(100);
            $data['addressProofDocs']=$this->Account_model->addrProofd();
            $data['occupationDetails']=$this->Account_model->getOccupationDetails();
            $this->body = 'account/openAnAccountForm'; // passing body to function. change this for different views.  
            $this->load->view($this->body, $data, true);
            $this->layout();
                 
        }
    
    function updateProfile()
    {
            $this->load->database();
            $user_id= $this->session->userdata('id');
            $reg_status=$this->Account_model->getRegStatus($user_id);
            if ($reg_status < 3){
                $this->Account_model->updateRegStatus($user_id,3);
                $reg_status = 3;
            }
            $this->session->set_userdata('reg_status',$reg_status);
        if($this->input->post()){
            $data['user_id']=  $user_id; //$_POST['user_id'];
            $data['fname']=$_POST['fname'];
            $data['mname']=$_POST['mname'];
            $data['lname']=$_POST['lname'];
            $data['ffname']=$_POST['ffname'];
            $data['fmname']=$_POST['fmname'];
            $data['flname']=$_POST['flname'];
            $data['mfname']=$_POST['mfname'];
            $data['mmname']=$_POST['mmname'];
            $data['mlname']=$_POST['mlname'];
            $data['gender']=$_POST['gender'];
            $data['marital_status']=$_POST['marital_status'];
            $data['residencial_status']=$_POST['residencial_status'];
            $data['nationality']=$_POST['nationality'];
            $data['dateOfBirth']=$_POST['dob'];
            $data['dob']=date('Y-m-d', strtotime($data['dateOfBirth']));
            $data['pan_card_no']=$_POST['pan_card_no'];
            $data['aadher_card']=$_POST['aadher_card'];
            $data['address1']=$_POST['address1'];
            $data['address2']=$_POST['address2'];
            $data['address3']=$_POST['address3'];
            $data['address4']=$_POST['address4'];
            $data['pin_code']=$_POST['pin_code'];
            $data['country_code']=$_POST['country_code'];
            $data['address_proof_doc']=$_POST['address_proof_doc'];
            $data['state_code']=$_POST['state_code'];
            $data['peraddress1']=$_POST['peraddress1'];
            $data['peraddress2']=$_POST['peraddress2'];
            $data['peraddress3']=$_POST['peraddress3'];
            $data['peraddress4']=$_POST['peraddress4'];
            $data['perpin_code']=$_POST['perpin_code'];
            $data['percountry_code']=$_POST['percountry_code'];
            $data['peraddress_proof_doc']=$_POST['peraddress_proof_doc'];
            $data['perstate_code']=$_POST['perstate_code'];
            $data['gs_amt']=$_POST['gs_amt'];
            
            
            if(isset($_POST['permanent_address']))
            {
               $data['permanent_address']=1; 
            } else {
               $data['permanent_address']=0; 
            } 
            
            $data['email_address']=$_POST['email_address'];
            $data['mobile_ph']=$_POST['mobile_ph'];
            
            $data['office_ph_code']=$_POST['office_ph_code'];
            $data['office_ph']=$_POST['office_ph'];
            
            $data['home_ph_code']=$_POST['home_ph_code'];
            $data['home_ph']=$_POST['home_ph'];
            
            $data['fax_ph_code']=$_POST['fax_ph_code'];
            $data['fax_ph']=$_POST['fax_ph'];
            
            $data['gross_amt']=$_POST['gs_amt'];
            
            if($data['gross_amt'] == "" ){$data['gross_amt_range']=$_POST['gross_amt_range'];} // changes
            else {$data['gross_amt_range'] = 0;}
            
            $data['bank_name']=$_POST['bank_name'];
            $data['Occupation']=$_POST['Occupation'];
            $data['bankaddress']=$_POST['branch_address'];
            $data['branch_city']=$_POST['branch_city'];
            $data['branch_pin']=$_POST['branch_pin'];
            $data['branch_state']=$_POST['branch_state'];
            $data['acc_number']=$_POST['acc_number'];
            $data['micr_number']=$_POST['micr_number'];
            $data['account_type']=$_POST['account_type'];
            $data['ifsc_code']=$_POST['ifsc_code'];     
            
            $register=$this->Account_model->updateUserdata($data);
            
            
            if($register == 1)
            {   
                $this->session->set_flashdata('success_msg', 'Form : Successfully Updated');
                redirect('site/payment', 'refresh');
            }
            else
            {
                $this->session->set_flashdata('err_msg', 'Form : Nothing Updated');
                redirect('site/payment', 'refresh');
            }
        }
        else {redirect('site/profile', 'refresh');}     
    }
    
    function generateOtp()
    {
        $data['otpcode'] = $this->generate_optcode($_POST['mob_no']);
        $data['userid'] = $_POST['user_id'];
        $new_otpcode = $this->Account_model->updateOtpCode($data);
        echo json_encode($data);
        
    }
    
    function save_download($user_id) //for pdf download offline profile
    { 
            $data1 = array();
            
            $data['user_details']=$this->Account_model->getUserDetails($user_id);
            /* $data['user_accountpay_details']=$this->Account_model->getUserAccountPayDetails($user_id,$this->uri->segment(4));
            echo $data['user_accountpay_details']; exit(); */
            $data['email_id']=$this->Account_model->getEmailId($user_id);
            
            $data1['address'] = $this->Account_model->getUserAddress($user_id);
            
            //Correspondance Address Section 
            $data['corr_add'] = $data1['address'][0]['address1']." ".$data1['address'][0]['address2']." ".$data1['address'][0]['address3'];
            $data['corr_city'] = $data1['address'][0]['address4'];
            $data['corr_pincode'] = $data1['address'][0]['pincode'];
            $data['corr_state_id'] = $data1['address'][0]['state_id'];
            $data['corr_state_name']= $this->Account_model->getStateName($data['corr_state_id']);
            $data['corr_country_id'] = $data1['address'][0]['country_id'];
            $data['corr_country_name'] = $this->Account_model->getCountryName($data['corr_country_id']);
            $data['corr_country_iso3166'] = $this->Account_model->getCorrCountryIso3166($data['corr_country_id']);
            $data['corr_iso2_code'] = $data['corr_country_iso3166'][0]['iso2_code'];
            $data['corr_address_proof_id'] = $data1['address'][0]['address_proof_id'];
            $data['corr_address_proof_name'] = $this->Account_model->getAddressProof($data['corr_address_proof_id']);

            /*$data['corr_address_proofId'] = $data1['address'][0]['address_proof_no'];
            $data['address_proof_id_validity'] = $data1['address'][0]['address_proof_id_validity'];     */

            /* $data['corr_address_proofId'] = $data1['address'][0]['address_proof_no'];
            $data['address_proof_id_validity'] = $data1['address'][0]['address_proof_id_validity']; */

            $data['corr_is_permanent_address'] = $data1['address'][0]['is_permanent_address'];
            
            //Permanent Address Section
            $data['per_add'] = $data1['address'][1]['address1']." ".$data1['address'][1]['address2']." ".$data1['address'][1]['address3'];
            $data['per_city'] = $data1['address'][1]['address4'];
            $data['per_pincode'] = $data1['address'][1]['pincode'];
            $data['per_state_id'] = $data1['address'][1]['state_id'];
            $data['per_state_name']= $this->Account_model->getStateName($data['per_state_id']);
            $data['per_country_id'] = $data1['address'][1]['country_id'];
            $data['per_country_name'] = $this->Account_model->getCountryName($data['per_country_id']);
            $data['per_country_iso3166'] = $this->Account_model->getPerCountryIso3166($data['per_country_id']);
            $data['per_iso2_code'] = $data['per_country_iso3166'][0]['iso2_code'];
            $data['per_address_proof_id'] = $data1['address'][1]['address_proof_id'];
            $data['per_address_proof_name'] = $this->Account_model->getAddressProof($data['per_address_proof_id']);
            $data['per_is_permanent_address'] = $data1['address'][1]['is_permanent_address'];
            
            //User Mobile,Office,Home,Fax No Details Section
            $data1['ph_no']     = $this->Account_model->getUserPnNo($user_id);
            $data['mobile']     = $data1['ph_no'][0]['ph'];

            if(isset($data1['ph_no'][1]['ph']))
            {
                $data['office_ph_code'] = $data1['ph_no'][1]['ph_code'];
                $data['office_ph'] = $data1['ph_no'][1]['ph'];
            }
            if(isset($data1['ph_no'][2]['ph']))
            {
                $data['home_ph_code'] = $data1['ph_no'][2]['ph_code'];
                $data['home_ph']    = $data1['ph_no'][2]['ph'];
            }
            if(isset($data1['ph_no'][3]['ph']))
            {
                $data['fax_code'] = $data1['ph_no'][3]['ph_code'];
                $data['fax_ph']    = $data1['ph_no'][3]['ph'];
            }
            

            /* $data['office_ph']   = $data1['ph_no'][1]['ph'];
            $data['home_ph']    = $data1['ph_no'][2]['ph'];
            $data['fax_ph'] = $data1['ph_no'][3]['ph']; */

        
            //User Bank Details Section
            $data1['bank_details']  = $this->Account_model->getBankDetails($user_id);
            $data['bank_name']      = $data1['bank_details'][0]['bankname']; 
            $data['bank_address']   = $data1['bank_details'][0]['bankaddress'].$data1['bank_details'][0]['bankaddress1']." ".$data1['bank_details'][0]['bankaddress2']." ".$data1['bank_details'][0]['bankaddress3'];
            /* $data['bank_country_id'] = $data1['bank_details'][0][''];
            $data['bank_country_name'] = $this->Account_model->getCountryName($data['per_country_id']); */
            $data['bank_city']      = $data1['bank_details'][0]['city'];
            $data['bank_pincode']   = $data1['bank_details'][0]['pincode'];
            $data['bank_state_id']  = $data1['bank_details'][0]['stateid'];
            $data['bank_state_name'] = $this->Account_model->getStateName($data['bank_state_id']);
            $data['bank_accountnumber']  = $data1['bank_details'][0]['accountnumber'];
            $data['bank_accounttype']    = $data1['bank_details'][0]['accounttype'];
            $data['bank_ifsccode']  = $data1['bank_details'][0]['ifsccode'];
            $data['bank_micr_no']   = $data1['bank_details'][0]['micr_no'];
    
            /*------------------------------- Send Data to PDF ------------------------------------*/
    
            // User Basic Details    
            $final_result['fname']          = $data['user_details']->fname;
            $final_result['mname']          = $data['user_details']->mname;
            $final_result['lname']          = $data['user_details']->lname;
            $final_result['name']           = $final_result['fname'].' '.$final_result['mname'].' '.$final_result['lname'];
            //$final_result['fathername']       = $data['user_details']->fathername;
            $final_result['ffname'] = $data['user_details']->father_fname;
            $final_result['fmname'] = $data['user_details']->father_mname;
            $final_result['flname'] = $data['user_details']->father_lname;
            $final_result['mfname'] = $data['user_details']->mother_fname;
            $final_result['mmname'] = $data['user_details']->mother_mname;
            $final_result['mlname'] = $data['user_details']->mother_lname;
            $final_result['sex']            = $data['user_details']->sex;
            $final_result['nationality']    = $data['user_details']->nationality;
            $final_result['dob']            = $data['user_details']->dob;
            $final_result['pancard']        = $data['user_details']->pancard;
            $final_result['addharcard']     = $data['user_details']->addharcard;
            $final_result['nonAadharNorPanNo'] = $data['user_details']->nonAadharNorPanNo;
            $final_result['validity'] = $data['user_details']->validity;
            $final_result['accounttype']    = $this->uri->segment(4);
            $final_result['annualincome']   = $data['user_details']->annualincome;
            $final_result['gs_amt']         = $data['user_details']->gs_amt;
            $final_result['userResidentialSataus'] = $data['user_details']->userResidentialstatus;
            $final_result['occupationid']   = $data['user_details']->occupationid;
            $final_result['marital_status'] = $data['user_details']->marital_status;
            //$final_result['pay_type']     = $data['user_details']->pay_type;
            $final_result['registred_date'] = $data['user_details']->created_at;
            $final_result['emailaddress']   = $data['email_id'];
            $final_result['mobile']         = $data['mobile'];
            
            if(isset($data['office_ph']))
            {
              $final_result['office_ph_code']    = $data['office_ph_code'];
              $final_result['office_ph']         = $data['office_ph'];   
            }
            if(isset($data['home_ph']))
            {
              $final_result['home_ph_code']      = $data['home_ph_code'];
              $final_result['home_ph']           = $data['home_ph'];   
            }
            if(isset($data['fax_ph']))
            {
              $final_result['fax_code']       = $data['fax_code'];
              $final_result['fax_ph']         = $data['fax_ph'];   
            }
            
            /*$final_result['home_ph']         = $data['home_ph'];
            $final_result['fax_ph']         = $data['fax_ph'];  */
            
            // For Correspondance Address 
            $final_result['corr_address']   = $data['corr_add'];
            $final_result['corr_city']      = $data['corr_city'];
            $final_result['corr_pincode']   = $data['corr_pincode'];
            $final_result['corr_state']     = $data['corr_state_name']['sName'];
            $final_result['corr_state_code'] = $data['corr_state_name']['sCode'];
            $final_result['corr_country']   = $data['corr_country_name']['cName'];
            $final_result['corr_iso2_code'] = $data['corr_iso2_code'];
            $final_result['corr_add_proof'] = $data['corr_address_proof_name']['addressproofdoc'];
            
            // For permanent Address  
            $final_result['per_address']    = $data['per_add']; 
            $final_result['per_city']       = $data['per_city']; 
            $final_result['per_pincode']    = $data['per_pincode'];
            $final_result['per_state']      = $data['per_state_name']['sName'];
            $final_result['per_country']    = $data['per_country_name']['cName'];
            $final_result['per_iso2_code'] = $data['per_iso2_code'];
            $final_result['per_add_proof']  = $data['per_address_proof_name']['addressproofdoc'];
            
            // For User Bank Full Details  Section
            $final_result['bankname']       = $data['bank_name'];
            $final_result['bankaddress']    = $data['bank_address'];
            
            $final_result['bankcity']       = $data['bank_city'];
            $final_result['bankpincode']    = $data['bank_pincode'];
            $final_result['bankStateName']  = $data['bank_state_name']['sName'];
            $final_result['accountnumber']  = $data['bank_accountnumber'];
            $final_result['bankaccounttype']= $data['bank_accounttype'];
            $final_result['ifsccode']       = $data['bank_ifsccode'];
            $final_result['micr_no']        = $data['bank_micr_no'];
            $today_date=date('dmY');
            if($final_result['mname'])
            { 
                $pdf_str=$final_result['fname'].'_'.$final_result['mname'].'_'.$final_result['lname'].'_'.$today_date; 
            }
            else
            { 
                $pdf_str=$final_result['fname'].'_'.$final_result['lname'].'_'.$today_date; 
            }
            
            if($this->uri->segment(4)==1)
            {
                $this->saveEquityForm($final_result,$pdf_str);
             
            }
            else if($this->uri->segment(4)==2)
            {
                $this->saveCommodityForm($final_result,$pdf_str);
            }
    }
    
   
            
            
        function saveCommodityForm($data,$pdf_str)
        {
            //load mPDF library
            $this->load->library('M_pdf');
            //actually, you can pass mPDF parameter on this load() function
            $pdf = $this->m_pdf->load();    
            $html=$this->load->view('account/comodityForm', $data, true); 
            $pdfFilePath = $pdf_str."_Commodity_Form.pdf"; 
            $pdf->WriteHTML($html, 2, false, false);
            $pdf->Output($pdfFilePath, "D");
            $file_path="account_pdf_files/";
            if($file_path)
            {
                $pdfPath=$file_path.$pdfFilePath;
                $pdf->Output($pdfPath,"F"); 
                $this->Account_model->save_commodityPdfPath($this->session->userdata('id'),$pdfPath); //save file path to database 
                if(file_exists($pdfPath))
                {
                   $this->Account_model->sendCommodityForm($this->session->userdata('id'));

                }
                else
                {
                    echo 'Not Saved To Folder';
                }
            }
        }
            
        
        
    function saveEquityForm($data,$pdf_str){
            //load mPDF library
            $this->load->library('M_pdf');
            //actually, you can pass mPDF parameter on this load() function
            $pdf = $this->m_pdf->load();    
            //load the view, pass the variable and do not show it but "save" the output into $html variable
            $html=$this->load->view('account/equityForm', $data, true); 
            //this the the PDF filename that user will get to download
            $pdfFilePath = $pdf_str."_Equity_Form.pdf"; 
            $html = mb_convert_encoding($html, 'UTF-8', 'UTF-8');
            //generate the PDF!
           // $pdf->WriteHTML($html,'UTF-8', 'UTF-8'); 
            $pdf->WriteHTML($html, 2, false, false);
            
            $pdf->Output($pdfFilePath, "D");
            
            $file_path="account_pdf_files/";
            if($file_path)
            {
                $pdfPath=$file_path.$pdfFilePath;
                $pdf->Output($pdfPath,"F"); 
                $this->Account_model->save_equityPdfPath($this->session->userdata('id'),$pdfPath); //save file path to database 
                if(file_exists($pdfPath)){
                $this->Account_model->sendEquityForm($this->session->userdata('id'));
                } 
                else{
                    echo 'Not Saved To Folder';
                }                   
            }
        }
   
   /**************************** For Admin Pdf Download Start ****************************/
   
   function saveDownload($user_id) //for pdf download offline profile
    { 
            $data1 = array();
            
            $data['user_details']=$this->Account_model->getUserDetails($user_id);
            /* $data['user_accountpay_details']=$this->Account_model->getUserAccountPayDetails($user_id,$this->uri->segment(4));
            echo $data['user_accountpay_details']; exit(); */
            $data['email_id']=$this->Account_model->getEmailId($user_id);
            
            $data1['address'] = $this->Account_model->getUserAddress($user_id);
            
            //Correspondance Address Section 
            $data['corr_add'] = $data1['address'][0]['address1']." ".$data1['address'][0]['address2']." ".$data1['address'][0]['address3'];
            $data['corr_city'] = $data1['address'][0]['address4'];
            $data['corr_pincode'] = $data1['address'][0]['pincode'];
            $data['corr_state_id'] = $data1['address'][0]['state_id'];
            $data['corr_state_name']= $this->Account_model->getStateName($data['corr_state_id']);
            $data['corr_country_id'] = $data1['address'][0]['country_id'];
            $data['corr_country_name'] = $this->Account_model->getCountryName($data['corr_country_id']);
            $data['corr_country_iso3166'] = $this->Account_model->getCorrCountryIso3166($data['corr_country_id']);
            $data['corr_iso2_code'] = $data['corr_country_iso3166'][0]['iso2_code'];
            $data['corr_address_proof_id'] = $data1['address'][0]['address_proof_id'];
            $data['corr_address_proof_name'] = $this->Account_model->getAddressProof($data['corr_address_proof_id']);

            /*$data['corr_address_proofId'] = $data1['address'][0]['address_proof_no'];
            $data['address_proof_id_validity'] = $data1['address'][0]['address_proof_id_validity'];     */

            /* $data['corr_address_proofId'] = $data1['address'][0]['address_proof_no'];
            $data['address_proof_id_validity'] = $data1['address'][0]['address_proof_id_validity']; */

            $data['corr_is_permanent_address'] = $data1['address'][0]['is_permanent_address'];
            
            //Permanent Address Section
            $data['per_add'] = $data1['address'][1]['address1']." ".$data1['address'][1]['address2']." ".$data1['address'][1]['address3'];
            $data['per_city'] = $data1['address'][1]['address4'];
            $data['per_pincode'] = $data1['address'][1]['pincode'];
            $data['per_state_id'] = $data1['address'][1]['state_id'];
            $data['per_state_name']= $this->Account_model->getStateName($data['per_state_id']);
            $data['per_country_id'] = $data1['address'][1]['country_id'];
            $data['per_country_name'] = $this->Account_model->getCountryName($data['per_country_id']);
            $data['per_country_iso3166'] = $this->Account_model->getPerCountryIso3166($data['per_country_id']);
            $data['per_iso2_code'] = $data['per_country_iso3166'][0]['iso2_code'];
            $data['per_address_proof_id'] = $data1['address'][1]['address_proof_id'];
            $data['per_address_proof_name'] = $this->Account_model->getAddressProof($data['per_address_proof_id']);
            $data['per_is_permanent_address'] = $data1['address'][1]['is_permanent_address'];
            
            //User Mobile,Office,Home,Fax No Details Section
            $data1['ph_no']     = $this->Account_model->getUserPnNo($user_id);
            $data['mobile']        = $data1['ph_no'][0]['ph'];

            if(isset($data1['ph_no'][1]['ph']))
            {
                $data['office_ph_code'] = $data1['ph_no'][1]['ph_code'];
                $data['office_ph'] = $data1['ph_no'][1]['ph'];
            }
            if(isset($data1['ph_no'][2]['ph']))
            {
                $data['home_ph_code'] = $data1['ph_no'][2]['ph_code'];
                $data['home_ph']    = $data1['ph_no'][2]['ph'];
            }
            if(isset($data1['ph_no'][3]['ph']))
            {
                $data['fax_code'] = $data1['ph_no'][3]['ph_code'];
                $data['fax_ph']    = $data1['ph_no'][3]['ph'];
            }
            

            /* $data['office_ph']    = $data1['ph_no'][1]['ph'];
            $data['home_ph']    = $data1['ph_no'][2]['ph'];
            $data['fax_ph']    = $data1['ph_no'][3]['ph']; */

        
            //User Bank Details Section
            $data1['bank_details']     = $this->Account_model->getBankDetails($user_id);
            $data['bank_name']         = $data1['bank_details'][0]['bankname']; 
            $data['bank_address']     = $data1['bank_details'][0]['bankaddress1']." ".$data1['bank_details'][0]['bankaddress2']." ".$data1['bank_details'][0]['bankaddress3'];
            /* $data['bank_country_id'] = $data1['bank_details'][0][''];
            $data['bank_country_name'] = $this->Account_model->getCountryName($data['per_country_id']); */
            $data['bank_city']         = $data1['bank_details'][0]['city'];
            $data['bank_pincode']     = $data1['bank_details'][0]['pincode'];
            $data['bank_state_id']     = $data1['bank_details'][0]['stateid'];
            $data['bank_state_name'] = $this->Account_model->getStateName($data['bank_state_id']);
            $data['bank_accountnumber']  = $data1['bank_details'][0]['accountnumber'];
            $data['bank_accounttype']     = $data1['bank_details'][0]['accounttype'];
            $data['bank_ifsccode']     = $data1['bank_details'][0]['ifsccode'];
            $data['bank_micr_no']     = $data1['bank_details'][0]['micr_no'];
    
            /*------------------------------- Send Data to PDF ------------------------------------*/
    
            // User Basic Details     
            $final_result['fname']             = $data['user_details']->fname;
            $final_result['mname']             = $data['user_details']->mname;
            $final_result['lname']            = $data['user_details']->lname;
            //$final_result['fathername']        = $data['user_details']->fathername;
            $final_result['ffname'] = $data['user_details']->father_fname;
            $final_result['fmname'] = $data['user_details']->father_mname;
            $final_result['flname'] = $data['user_details']->father_lname;
            $final_result['mfname'] = $data['user_details']->mother_fname;
            $final_result['mmname'] = $data['user_details']->mother_mname;
            $final_result['mlname'] = $data['user_details']->mother_lname;
            $final_result['sex']            = $data['user_details']->sex;
            $final_result['nationality']    = $data['user_details']->nationality;
            $final_result['dob']            = $data['user_details']->dob;
            $final_result['pancard']        = $data['user_details']->pancard;
            $final_result['addharcard']        = $data['user_details']->addharcard;
            $final_result['nonAadharNorPanNo'] = $data['user_details']->nonAadharNorPanNo;
            $final_result['validity'] = $data['user_details']->validity;
            $final_result['accounttype']    = $this->uri->segment(4);
            $final_result['annualincome']    = $data['user_details']->annualincome;
            $final_result['gs_amt']            = $data['user_details']->gs_amt;
            $final_result['userResidentialSataus'] = $data['user_details']->userResidentialstatus;
            $final_result['occupationid']    = $data['user_details']->occupationid;
            $final_result['marital_status']    = $data['user_details']->marital_status;
            //$final_result['pay_type']        = $data['user_details']->pay_type;
            $final_result['registred_date'] = $data['user_details']->created_at;
            $final_result['emailaddress']    = $data['email_id'];
            $final_result['mobile']         = $data['mobile'];
            
            if(isset($data['office_ph']))
            {
              $final_result['office_ph_code']    = $data['office_ph_code'];
              $final_result['office_ph']         = $data['office_ph'];   
            }
            if(isset($data['home_ph']))
            {
              $final_result['home_ph_code']          = $data['home_ph_code'];
              $final_result['home_ph']             = $data['home_ph'];   
            }
            if(isset($data['fax_ph']))
            {
              $final_result['fax_code']          = $data['fax_code'];
              $final_result['fax_ph']         = $data['fax_ph'];   
            }
            
            /*$final_result['home_ph']         = $data['home_ph'];
            $final_result['fax_ph']         = $data['fax_ph'];  */
            
            // For Correspondance Address 
            $final_result['corr_address']    = $data['corr_add'];
            $final_result['corr_city']         = $data['corr_city'];
            $final_result['corr_pincode']     = $data['corr_pincode'];
            $final_result['corr_state']     = $data['corr_state_name']['sName'];
            $final_result['corr_state_code'] = $data['corr_state_name']['sCode'];
            $final_result['corr_country']     = $data['corr_country_name']['cName'];
            $final_result['corr_iso2_code'] = $data['corr_iso2_code'];
            $final_result['corr_add_proof'] = $data['corr_address_proof_name']['addressproofdoc'];
            
            // For permanent Address  
            $final_result['per_address']    = $data['per_add']; 
            $final_result['per_city']        = $data['per_city']; 
            $final_result['per_pincode']    = $data['per_pincode'];
            $final_result['per_state']        = $data['per_state_name']['sName'];
            $final_result['per_country']    = $data['per_country_name']['cName'];
            $final_result['per_iso2_code'] = $data['per_iso2_code'];
            $final_result['per_add_proof']    = $data['per_address_proof_name']['addressproofdoc'];
            
            // For User Bank Full Details  Section
            $final_result['bankname']        = $data['bank_name'];
            $final_result['bankaddress']    = $data['bank_details'][0]['bankaddress1']." ".$data['bank_details'][0]['bankaddress2']." ".$data['bank_details'][0]['bankaddress3'];
            $final_result['bankcity']        = $data['bank_city'];
            $final_result['bankpincode']    = $data['bank_pincode'];
            $final_result['bankStateName']    = $data['bank_state_name']['sName'];
            $final_result['accountnumber']    = $data['bank_accountnumber'];
            $final_result['bankaccounttype']= $data['bank_accounttype'];
            $final_result['ifsccode']        = $data['bank_ifsccode'];
            $final_result['micr_no']        = $data['bank_micr_no'];
            
            
            $today_date=date('dmY');
            if($final_result['mname'])
            { 
                $pdf_str=$final_result['fname'].'_'.$final_result['mname'].'_'.$final_result['lname'].'_'.$today_date; 
            }
            else
            { 
                $pdf_str=$final_result['fname'].'_'.$final_result['lname'].'_'.$today_date; 
            }
            
            if($this->uri->segment(4)==1)
            {
                $this->saveEquityFormAdmin($final_result,$pdf_str);
             
            }
            else if($this->uri->segment(4)==2)
            {
                $this->saveCommodityFormAdmin($final_result,$pdf_str);
            }
    }
   
   
    function saveCommodityFormAdmin($data,$pdf_str)
        {
            //load mPDF library
            $this->load->library('M_pdf');
            //actually, you can pass mPDF parameter on this load() function
            $pdf = $this->m_pdf->load();    
            //load the view, pass the variable and do not show it but "save" the output into $html variable
            $html=$this->load->view('account/comodityForm', $data, true); 
            //this the the PDF filename that user will get to download
            $pdfFilePath = $pdf_str."_Commodity_Form.pdf"; 
            //$html = mb_convert_encoding($html, 'UTF-8', 'UTF-8');
            //generate the PDF!
           // $pdf->WriteHTML($html,'UTF-8', 'UTF-8');
            $pdf->WriteHTML($html, 2, false, false);
            $pdf->Output($pdfFilePath, "D");
        }
            
        
        
        function saveEquityFormAdmin($data,$pdf_str)
        {
            //load mPDF library
            $this->load->library('M_pdf');
            //actually, you can pass mPDF parameter on this load() function
            $pdf = $this->m_pdf->load();    
            //load the view, pass the variable and do not show it but "save" the output into $html variable
            $html=$this->load->view('account/equityForm', $data, true); 
            //this the the PDF filename that user will get to download
            $pdfFilePath = $pdf_str."_Equity_Form.pdf"; 
            $html = mb_convert_encoding($html, 'UTF-8', 'UTF-8');
            //generate the PDF!
           // $pdf->WriteHTML($html,'UTF-8', 'UTF-8'); 
            $pdf->WriteHTML($html, 2, false, false);
            $pdf->Output($pdfFilePath, "D");
            
        }
   
    
  /**************************** For Admin Pdf Download End ******************************/

    
    function getRefferalBenifits()
    {
        $data['client_id']=trim($this->input->post('client_id'));
        $data['friend_name']=trim($this->input->post('friend_name'));    
        $data['friend_ph']=trim($this->input->post('friend_ph'));    
        $data['friend_email']=trim($this->input->post('friend_email'));    
        $save=$this->Account_model->saveGetRefferalBenifits($data);

        if($save==0)
        {
           $msg="Sorry! You have already used Referral Benefits. ";
           $this->session->set_flashdata('msg',$msg);
           redirect('site/getReferral');
        }elseif($save=="user exists"){
            $msg="Sorry! This client already exists";
            $this->session->set_flashdata('msg',$msg);
            redirect('site/getReferral');
        }
        else
        {   
            $this->Account_model->sendReferralInformation($data);
            $msg="We have received your referral request";
            $this->session->set_flashdata('msg',$msg);            
            redirect('site/getReferral');
        }

    }
    
    function payOutSave()
        {   
            $this->load->library('guzzle');
              $client     = new GuzzleHttp\Client(array('verify'=>false));
              $fields = array('secret'=>"6LeDaxcUAAAAADkfW6e0Cn_6Me7WKF2TSIbMqN1O",'response'=>trim($this->input->post('g-recaptcha-response')),'remoteip'=>$this->input->ip_address());
              $url = 'https://www.google.com/recaptcha/api/siteverify';
            try{
                $gz_response = $client->request( 'POST', $url,['query'=>array('secret'=>"6LeDaxcUAAAAADkfW6e0Cn_6Me7WKF2TSIbMqN1O",'response'=>trim($this->input->post('g-recaptcha-response')),'remoteip'=>$this->input->ip_address())]);
                $response = $gz_response->getBody()->getContents();
                $info=array('http_code'=>$gz_response->getStatusCode());
                $error='';
              } catch (GuzzleHttp\Exception\BadResponseException $e) {
                $response=$e->getResponse();
                $response = $response->getBody()->getContents();
                $info=array('http_code'=>500);
                $error ='';
              }
            if (json_decode($response)->success == true || ENVIRONMENT != 'production'){
                $data['name']=trim($this->input->post('pay_name'));
                $data['email']=trim($this->input->post('email_id'));    
                $data['mobile_no']=trim($this->input->post('mob_no'));    
                $data['client_code']=trim($this->input->post('client_code'));    
                $data['exchange_type']=trim($this->input->post('exchange_value'));    
                $data['amt']=trim($this->input->post('pay_out_amt'));    
                date_default_timezone_set("Asia/Kolkata");                  
                $data['created']=date("Y-m-d H:i:s");
                $result=$this->Account_model->savePayOpt($data);
                $msg="Name : '".$data['name']."'<br> Email : '".$data['email']."' <br> Mobile : '".$data['mobile_no']."' <br> Client Code : '".$data['client_code']."' <br> Exchange Type : '".$data['exchange_type']."' <br> Pay Out Amount : '".$data['amt']."'";
                
              if($result['status']=='success'){
                $message = "Pay-Out Request Received, Will Be Processed Shortly.";
                $this->Account_model->sendPayOutReqConf($data);
                $this->session->set_flashdata('message',$message);
                $this->session->set_flashdata('status',"success");
                redirect('site/payOut');
              }else{
                $message = $result['message'];
                $this->session->set_flashdata('message',$message);
                $this->session->set_flashdata('status',"error");
                redirect('site/payOut');
              }
            }else{
                $this->session->set_flashdata('succ_msg', 'Please verify that you are not a robot');
                redirect('site/payOut');
            }
        }
    
    function fundStatus()
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
            if (json_decode($response)->success == true){
                $data['neft_ref']=trim($this->input->post('neft_ref_no'));
                $data['email']=trim($this->input->post('email_id'));    
                $data['fund_transfer_type']=trim($this->input->post('fund_transfer_bank'));    
                $data['client_code']=trim($this->input->post('client_code'));    
                $data['segment']=trim($this->input->post('exchange_value'));    
                $data['pay_opt_amt']=trim($this->input->post('pay_out_amt'));    
                $data['created']=date('Y-m-d');
                $save = $this->Account_model->saveFundStatus($data);
                $msg="Email : '".$data['email']."'<br> Client Code : '".$data['client_code']."' <br> Amount : '".$data['pay_opt_amt']."' <br> Segment : '".$data['segment']."' <br> Type of Fund Transfer : '".$data['fund_transfer_type']."' <br> NEFT Reference No./ Cheq No. :'".$data['neft_ref']."'";
                $this->load->library('email');
                $this->email->from('contact@asthatrade.com')
                     
                     ->to($data['email'])
                     ->subject("Fund Deposit(NEFT/CHEQ) Request")
                     ->message($msg)
                     ->set_mailtype('html')
                     ->send();
              if($save){
                redirect('site/contact');
              }
            }else{
                $this->session->set_flashdata('succ_msg', 'Please verify that you are not a robot');
                redirect('site/payOut');
            }
    }
    
    /*********************************** FAQ Search ***************************************/
    
    function searchfaq()
    {
        $faq_searched_result = array();
        if($this->input->post()){
        $faq_input = trim($this->input->post('srch_input'));
        $this->session->set_userdata('faq_cat_name',$faq_input);
        $faq_searched_result = $this->Account_model->getFAQSearchResult($faq_input);
        $data['faq_searched_result'] = $faq_searched_result; 
        if(count($data['faq_searched_result'])>0){echo 1;}
        else{echo 0;}
        }
    
    }
    
    function showfaqresult()
    {
        $faq_cat_name = $this->session->userdata('faq_cat_name');
        $faq_searched_result = $this->Account_model->getFAQSearchResult($faq_cat_name);
        $data['faq_searched_result'] = $faq_searched_result; 
        $this->body = 'site/faqSearch'; 
        $this->load->view($this->body, $data, true);
        $this->layout();
        
    }
    
    /*********************************** For New Commodity Account Open From Profile Page **********************************/
    
    function newAccountOpen(){
        if($this->input->post()){
        $data['user_id'] = $_POST['userId']; 
        $data['account_type'] = $_POST['acc_type'];
        
        $data['payment_type'] = $_POST['payment_type'];
        $data['created_at'] = date('Y-m-d');
        
        $data['saveNewAccount'] = $this->Account_model->saveNewAccount($data);
        
        if($data['saveNewAccount']){
            if($data['account_type'] = $_POST['acc_type'] == 1 ){$acc_name="Equity";}else{$acc_name="Commodity";}
            $this->session->set_flashdata('acc_msg', $acc_name.' Account Created Successfully !!');
            redirect('site/profile', 'refresh');
        }
        else{
            $this->session->set_flashdata('acc_err_msg', '<font style="color:red;">Error Occured !! Please Try After Sometimes</font>');
            redirect('site/profile', 'refresh');
        }
        
        }
    }
    
    /****************************************** Make Equity Account Online ******************************************************/
    function saveOnlineEquity(){
        $data['user_id'] = $this->session->userdata('id');
        $data['account_type'] = '1';
        $saveOnlineEquity = $this->Account_model->saveEquityOnline($data);
        
        if($saveOnlineEquity){
            $this->session->set_flashdata('succ_online_Equity', 'Equity Account Changed to <span style="font-weight:bold;">Online</span>');
            redirect('site/profile', 'refresh');
        }
        else{
            $this->session->set_flashdata('err_online_Equity', '<font style="color:red;">Error Occured !! Please Try After Sometimes</font>');
            redirect('site/profile', 'refresh');
        }
    }
    
    /****************************************** Make Commodity Account Online ******************************************************/
    function saveOnlineCommodity(){
        $data['user_id'] = $this->session->userdata('id');
        $data['account_type'] = '2';
        $saveOnlineCommodity = $this->Account_model->saveCommodityOnline($data);
        
        if($saveOnlineCommodity){
            $this->session->set_flashdata('succ_online_commodity', 'Commodity Account Changed to <span style="font-weight:bold;">Online</span>');
            redirect('site/profile', 'refresh');
        }
        else{
            $this->session->set_flashdata('err_online_commodity', '<font style="color:red;">Error Occured !! Please Try After Sometimes</font>');
            redirect('site/profile', 'refresh');
        }
    }
    
    /*************************************** Make Equity Account Offline *************************************************************/
    
    function saveOfflineEquity(){
        $data['user_id'] = $this->session->userdata('id');
        $data['account_type'] = '1';
        $saveOfflineEquity = $this->Account_model->saveEquityOffline($data);
        
        if($saveOfflineEquity){
            $this->session->set_flashdata('succ_offline_Equity', 'Equity Account Changed to <span style="font-weight:bold;">Offline</span>');
            redirect('site/profile', 'refresh');
        }
        else{
            $this->session->set_flashdata('err_offline_Equity', '<font style="color:red;">Error Occured !! Please Try After Sometimes</font>');
            redirect('site/profile', 'refresh');
        }
    }
    
    /****************************************** Make Commodity Account Offline ******************************************************/
    function saveOfflineCommodity(){
        $data['user_id'] = $this->session->userdata('id');
        $data['account_type'] = '2';
        $saveOfflineCommodity = $this->Account_model->saveCommodityOffline($data);
        
        if($saveOfflineCommodity){
            $this->session->set_flashdata('succ_offline_commodity', 'Commodity Account Changed to <span style="font-weight:bold;">Offline</span>');
            redirect('site/profile', 'refresh');
        }
        else{
            $this->session->set_flashdata('err_offline_commodity', '<font style="color:red;">Error Occured !! Please Try After Sometimes</font>');
            redirect('site/profile', 'refresh');
        }
    }
    
    /************************************* Pay Through Online For Equity **************************************************/
    function payForEquity(){
        $data['user_id'] = $this->session->userdata('id');

        $data['account_type'] ='1';
        $this->session->set_userdata('acc_type',$data['account_type']);

        $getEquityAccDetails = $this->Account_model->getEquityAccDetails($data);
        
        $data['name'] = $getEquityAccDetails[0]['fname'].' '.$getEquityAccDetails[0]['mname'].' '.$getEquityAccDetails[0]['lname'];
        $data['email'] = $getEquityAccDetails[0]['emailaddress'];
        $data['accType'] = $getEquityAccDetails[0]['account_type'];
        $data['amount']='500';
        $data['mobile_ph'] = $getEquityAccDetails[0]['ph'];
        
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
        
        $data['address1'] =  $getEquityAccDetails[0]['address1']." ".$getEquityAccDetails[0]['address2']." ".$getEquityAccDetails[0]['address3'];
        $data['address2'] =  $getEquityAccDetails[0]['address1'];
        $this->body = 'Payment/paymentTypeSelection'; // passing body to function. change this for different views.  
        $this->load->view($this->body, $data, true);
        $this->layout();
        
        
        
    }
    
    /************************************* Pay Through Online For Commodity **************************************************/
    function payForCommodity(){
        $data['user_id'] = $this->session->userdata('id');
        $data['account_type'] ='2';
        $this->session->set_userdata('acc_type',$data['account_type']);
        $getCommodityAccDetails = $this->Account_model->getCommodityAccDetails($data);
        $data['name'] = $getCommodityAccDetails[0]['fname'].' '.$getCommodityAccDetails[0]['mname'].' '.$getCommodityAccDetails[0]['lname'];
        $data['email'] = $getCommodityAccDetails[0]['emailaddress'];
        $data['accType'] = $getCommodityAccDetails[0]['account_type'];
        $data['amount']='500';
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
            $this->body = 'Payment/paymentTypeSelection'; // passing body to function. change this for different views.  
            $this->load->view($this->body, $data, true);
            $this->layout();
    }
    /************************************************ Combined Payment ************************************************/
    function pay(){
        $data['user_id'] = $this->session->userdata('id');
        if(empty($_post['equity_select']))
        {
            $data['equity_select']= false;  
        }
        else
        {
            $data['equity_select']= true;   
        }
        if(empty($_post['equity_select']))
        {
            $data['commodity_select']= false;   
        }
        else
        {
            $data['equity_select']= true;   
        }
        if($data['equity_select'] && $data['commodity_select'])
        {
            $data['account_type'] = '3';
        }
        else if($data['equity_select'])
        {
            $data['account_type'] = '2';
        }
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
    
    /************************************* Handle IPV **************************************************/
    
    function updateIPV(){
        ///include the S3 class              
if (!class_exists('S3'))require_once('S3.php');
 
//AWS access info
if (!defined('awsAccessKey')) define('awsAccessKey', 'AKIAJ2XUQCK6HQ226R7A');
if (!defined('awsSecretKey')) define('awsSecretKey', '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');
 
//instantiate the class
$s3 = new S3(awsAccessKey, awsSecretKey);
 
//we'll continue our script from here in step 4!    
 
//we'll continue our script from here in step 4!
        $data['user_id'] = $this->session->userdata('id');
        $data['encoded_data']=$_POST['mydata'];
        $data['binary_data'] = base64_decode( $data['encoded_data'] );
        $data['getAccountStatusDetails']=$this->Account_model->getAccountStatusDetails($this->session->userdata('id'));
        if($data['getAccountStatusDetails'][0]['ipv_status'] == '0' || $data['getAccountStatusDetails'][0]['ipv_status'] == '1'){
            $name = $data['user_id'];
            $newname= 'content/images/ipvImages/'.$name.'.jpg';
            $file = file_put_contents($newname, $data['binary_data']);
            if ($s3->putObjectFile($newname, "asthabhopal", $newname, S3::ACL_PUBLIC_READ)) {
                $s3_url = "https://s3.amazonaws.com/asthabhopal/".$newname ;
                $updateIPV=$this->Account_model->insertIPVdata($data['user_id'],$s3_url);
                
            }else{
                $ser_url =  base_url().$newname;
                $updateIPV=$this->Account_model->insertIPVdata($data['user_id'],$ser_url);
            }
        }
        redirect('site/tracker', 'refresh');
    
    }
    
} 

?>
