<?php defined('BASEPATH') OR exit('No direct script access allowed');
  
class Account_model extends CI_Model{
      
  function __construct(){
      parent::__construct();
  }

  function saveCallMe($data){ // Save to database of enquery data
    $insert = $this->db->insert('tbl_enquiry',$data);
    $insert_id = $this->db->insert_id();
    $data["template_name"]="call-back";
    $data["template_content"]=array(array());
    $data["subject"]= "Request for call back";
    $data["from_name"]="AsthaTrade";
    $data["from_email"]="contact@asthatrade.com";
    $data["to_email"]=$data["email"];
    $data["to_name"]=$data['fname']." ".$data['lname'];
    $data["client_id"];
    $email = $data['email'];
    $data['merge_vars']= array(
        array(
          'rcpt'=>$data['to_email'],
          'vars'=>array(
              array(
                'name'=>'FIRST_NAME',
                'content'=>$data['fname']
                )
            )
          )
      );
    $this->Account_model->send_email($data);
    return $insert_id;    
  }

  function generateValidationIntroduction($intro_val) // callme_introduction($intro_val)
  {
       $this->load->model('Users');
       $pass=$this->Users->generateHashPassword($intro_val['password']);
       $getEmailUser=$this->Users->getEmailUser($intro_val['email']);
     $getPhNo=$this->Users->getMobileNo($intro_val['user_id'],$intro_val['mob_no']);
       if($getEmailUser==0){
       //print_r($pass); exit('VBBB');
       $userDetailsQry="INSERT INTO `tbl_userdetails` SET
                    `fname`='".$intro_val['fname']."',
                    `lname`='".$intro_val['lname']."',
                    `pass_salt`='".$pass[0]."',
                    `pass_hash`='".$pass[1]."',
                    `otpcode`='".$intro_val['otpcode']."'";
       $this->db->query($userDetailsQry); 
       $user_id=$this->db->insert_id();
       $userPhDetailsQry="INSERT INTO `tbl_user_ph` SET 
                          `user_id`=".$user_id.",
                          `ph`='".$intro_val['mob_no']."',
                          `ph_type`='1'";  
         $this->db->query($userPhDetailsQry);
       $userEmailDetails="INSERT INTO `tbl_user_email` SET 
                          `user_id`=".$user_id.",
                          `emailaddress`='".$intro_val['email']."'
                          ";  
         $this->db->query($userEmailDetails);
       $userEquityPaymentDetails="INSERT INTO `tbl_account_pay` SET
                            `user_id`=".$user_id.",
                            `account_type`=1,`payment_type`=1,
                            `payment_status`=0";
        $this->db->query($userEquityPaymentDetails);
        $userCommodityPaymentDetails="INSERT INTO `tbl_account_pay` SET
                            `user_id`=".$user_id.",
                            `account_type`=2 ,`payment_type`=1,
                            `payment_status`=0";
        $this->db->query($userCommodityPaymentDetails);
       } else {
          $user_id=$getEmailUser['user_id'];
          $userDetailsQry="UPDATE `tbl_userdetails` SET
                    `fname`='".$intro_val['fname']."',
                    `lname`='".$intro_val['lname']."',
                    `pass_salt`='".$pass[0]."',
                    `pass_hash`='".$pass[1]."',
                    `otpcode`='".$intro_val['otpcode']."'
                    where id='".$user_id."'
                    ";
       $this->db->query($userDetailsQry); 
       } 
         
         return $user_id;
  }
   
  // function genPayment($data)
  // {
  //   $this->db>select('*');
  //   $this->db>from('tbl_account_pay');
  //   $this->db>where('user_id', $data['user_id']);
  //   $sql = "select * from tbl_account_pay where user_id=".$data['user_id'];
  //       $accPayDetailsQry="INSERT INTO `tbl_account_pay` SET
  //                   `user_id`=".$data['user_id'].",
  //                   `account_type`='1',
  //                   `payment_status`='0',
  //                   `payment_type`='1'";  
  //        $this->db->query($accPayDetailsQry);
  // }
  function getOTPfromdatabase($usergivenotp)
    {
          $this->db->select('otpcode');
          $this->db->from('tbl_userdetails');
          $this->db->where('id', $usergivenotp['userId']);
          $q=$this->db->get();
          $row = $q->row();
          return $databaseGenerateotpCode=$row->otpcode;
    }
   
    function validateOTP($userId)
    {
         $otpvalidationQry="UPDATE `tbl_userdetails` SET `isotpvalid` = '1', reg_status='1' WHERE `id` =".$userId;
         return $this->db->query($otpvalidationQry); 
    }
  function removeOTP($userId)
    {
         $otpvalidationQry="UPDATE `tbl_userdetails` SET `otpcode` = '' WHERE `id` =".$userId;
         return $this->db->query($otpvalidationQry);  
    }
   function getFirstName($userId)
     {
          $this->db->select('fname');
          $this->db->from('tbl_userdetails');
          $this->db->where('id',$userId);
          $q=$this->db->get();
          $row = $q->row();
          return $databaseGenerateotpCode=$row->fname;
     }
   function getLastName($userId)
     {
          $this->db->select('lname');
          $this->db->from('tbl_userdetails');
          $this->db->where('id',$userId);
          $q=$this->db->get();
          $row = $q->row();
          return $databaseGenerateotpCode=$row->lname;
     }
   
      function getMobileNumber($userId)
     {
          $this->db->select('ph');
          $this->db->from('tbl_user_ph');
          $this->db->where('user_id',$userId);
          $q=$this->db->get();
          $row = $q->row();
          return $databaseGenerateotpCode=$row->ph;
     }
     
     function getEmailId($userId)
     {
          $this->db->select('emailaddress');
          $this->db->from('tbl_user_email');
          $this->db->where('user_id',$userId);
          $q=$this->db->get();
          $row = $q->row();
          return $databaseGenerateotpCode=$row->emailaddress;
     }  
   
   function getCountryDetails()
      {
          $this->db->select('id,name');
          $this->db->from('tbl_countries');
         // $this->db->where('id=100');
          $q=$this->db->get();
          return $q->result_array();
      }
    
    function getStateDetails($id)
      {
          $this->db->select('id,name');
          $this->db->from('tbl_states');
          $this->db->where('cog_countries_id="'.$id.'"');
          $q=$this->db->get();
          return $q->result_array();
       
      }
    
    function addrProofd()
      {
    $this->db->select('id');
    $this->db->select('addressproofdoc');
    $this->db->from('tbl_addressproof');
    $q=$this->db->get();
    return $q->result_array();
      }
    
    function getOccupationDetails()
      {
    $this->db->select('id');
    $this->db->select('occupationname');
    $this->db->from('tbl_occupation');
    $q=$this->db->get();
    return $q->result_array();
      }
    
   function getBankDetails($user_id)
   {
    $this->db->select('*');
    $this->db->from('tbl_useraccountdetails');
    $this->db->where('user_id',$user_id);
    $q=$this->db->get();
    return $q->result_array();
   }
    function updateOtpCode($data) //regenerate otp code
    {
    $update_otp_sql="UPDATE `tbl_userdetails` SET otpcode='".$data['otpcode']."' where id=".$data['userid'];
    $this->db->query($update_otp_sql);
    return $data['userid'];
    }
    
    function getRegStatus($userId){
      $sql="select reg_status from tbl_userdetails where id=".$userId;
      $query = $this->db->query($sql);
      $row= $query->row_array();
      return $row['reg_status'];
    }
    function updateRegStatus($userId,$reg_status){
      $sql="UPDATE `tbl_userdetails` set reg_status=".$reg_status." where id=".$userId ;
      
      return $this->db->query($sql);
    }
    function getAllDetails($userId){
       $sql="select 
    usd.id as uid,
        usd.annualincome as accIncm, 
        CONCAT( usd.fname,  ' ', usd.mname,  ' ', usd.lname ) as userName,
        usd.fname as fname, 
        usd.mname as mname, 
        usd.lname as lname, 
    usd.fathername as fathername,
    usd.father_fname as ffname,
    usd.father_mname as fmname,
    usd.father_lname as flname,
    usd.mother_name as mothername,
    usd.mother_fname as mfname,
    usd.mother_mname as mmname,
    usd.mother_lname as mlname,
        usd.sex as gender, 
        usd.nationality as nationality, 
        usd.dob as dob, 
        usd.pancard as pancard, 
        usd.addharcard as addharcard, 
        usd.annualincome as annualincome, 
        usd.gs_amt as gs_amt,
    usd.occupationid as occupation_id,  
        usd.marital_status as marital_status, 
        uEmail.emailaddress as emailAddress, 
        uAcc.bankname as bankname, 
        uAcc.bankaddress as bankaddress,  
        uAcc.city as uAccCity, 
        uAcc.pincode as accPincode, 
        uAcc.accountnumber as accNo, 
        uAcc.micr_no as micr, 
        uAcc.ifsccode as ifsccode, 
        uAcc.accounttype as acTy, 
        occu.occupationname as occuName, 
        stat.name as states, 
        usd.gs_amt as gsAmt, 
        usd.userResidentialstatus as userResidentialstatus
        
        from 
        tbl_userdetails as usd 
        LEFT JOIN tbl_user_email as uEmail ON usd.id=uEmail.user_id   
        LEFT JOIN tbl_useraccountdetails as uAcc ON usd.id=uAcc.user_id 
        LEFT JOIN tbl_states as stat ON stat.id=uAcc.stateid 
        LEFT JOIN tbl_occupation as occu ON occu.id=usd.occupationid 
         
         
        where usd.id='".$userId."'"; 
        $query = $this->db->query($sql);
        return $query->row_array(); 
     }
   
  
   function getAddressPresent($id){
            $sql="select 
                adds.address1 as ad1,
        adds.country_id as Precount,
        adds.state_id as Prestate,
        adds.address_proof_id as PreAddProofId,
                adds.address2 as ad2,
                adds.address3 as ad3,
                adds.address4 as ad4, 
                adds.pincode as pincode, 
        stat.name as stName, 
                coun.name as counName, 
        asPrf.addressproofdoc as adPf 
                FROM tbl_user_address as adds 
                LEFT JOIN tbl_countries as coun ON coun.id=adds.country_id 
                LEFT JOIN tbl_states as stat ON stat.id=adds.state_id 
                LEFT JOIN tbl_addressproof as asPrf ON asPrf.id=adds.address_proof_id 
                where adds.user_id='".$id."' and adds.is_permanent_address='0' ";
            $query = $this->db->query($sql);
            return $query->row_array(); //adds.is_permanent_address as isperflag,
     }
   function getAddressPermanent($id){
            $sql="select 
                adds.address1 as ad1,
        adds.country_id as Percount,
        adds.state_id as Perstate,
        adds.address_proof_id as PerAddProofId,
                adds.address2 as ad2,
                adds.address3 as ad3,
                adds.address4 as ad4, 
                adds.pincode as pincode, 
        stat.name as stName, 
                coun.name as counName, 
        asPrf.addressproofdoc as adPf 
                FROM tbl_user_address as adds 
                LEFT JOIN tbl_countries as coun ON coun.id=adds.country_id 
                LEFT JOIN tbl_states as stat ON stat.id=adds.state_id 
                LEFT JOIN tbl_addressproof as asPrf ON asPrf.id=adds.address_proof_id 
                where adds.user_id='".$id."' and adds.is_permanent_address='1' ";
            $query = $this->db->query($sql);
            return $query->row_array(); //adds.is_permanent_address as isperflag,
     }
     function getPhMob($id){
            $sql="select 
                ph_code,ph from tbl_user_ph 
                where user_id='".$id."' and ph_type='1' ";
            $query = $this->db->query($sql);
            return $query->row_array();
     }
     
     function getPhOfc($id){
            $sql="select 
                ph_code,ph from tbl_user_ph 
                where user_id='".$id."' and ph_type='2' ";
            $query = $this->db->query($sql);
            return $query->row_array();
     }
     function getPhHome($id){
            $sql="select 
                ph_code,ph from tbl_user_ph 
                where user_id='".$id."' and ph_type='3' ";
            $query = $this->db->query($sql);
            return $query->row_array();
     }
     
     function getPhFax($id){
            $sql="select 
                ph_code,ph from tbl_user_ph 
                where user_id='".$id."' and ph_type='4' ";
            $query = $this->db->query($sql);
            return $query->row_array();
     }
   
   /* function getAccountType($user_id)
     {
        $sql="SELECT  usd.* , uEmail.* ,uAdd.id as addid,uAdd.address1 as ad1, uAdd.address2 as ad2,uAdd.pincode as upincode,uAdd.state_id as ustate,uAdd.country_id as ucountry,uAdd.address_proof_id as uaddproof,uAdd.is_permanent_address as isperadd , 
    uAcc.bankname as bankname, uAcc.bankaddress as bankaddress, uAcc.city as bankcity, uAcc.pincode as bankpincode,uAcc.stateid as stateid,uAcc.accountnumber as accountnumber,uAcc.accounttype as bankaccounttype,uAcc.ifsccode as ifsccode,uAcc.micr_no as micr_no
        FROM tbl_userdetails AS usd
        LEFT JOIN tbl_user_email AS uEmail ON usd.id = uEmail.user_id
        LEFT JOIN tbl_user_ph AS uPh ON usd.id = uPh.user_id
        LEFT JOIN tbl_user_address AS uAdd ON usd.id = uAdd.user_id
        LEFT JOIN tbl_useraccountdetails AS uAcc ON usd.id = uAcc.user_id
    WHERE usd.id =".$user_id; 
    $query = $this->db->query($sql);
    return $query->row_array();  
     } */
   
   
   
   
  function getUserPnNo($user_id)
  {
    $sql = "SELECT * FROM `tbl_user_ph` WHERE `user_id`=".$user_id; 
    $query = $this->db->query($sql);
    return $query->result_array();
  }
   
  function getUserAddress($user_id)
  {
    $sql = "SELECT * FROM `tbl_user_address` WHERE `user_id`=".$user_id; 
    $query = $this->db->query($sql);
    return $query->result_array();
  }   
   
   function getAddressProof($address_proof_id)
   {
    $sql="SELECT `addressproofdoc` FROM `tbl_addressproof` WHERE `id`=".$address_proof_id;
    
    $query=$this->db->query($sql);
    return $query->row_array(); 
   }

   function getStateName($stateid)
   {
    $sql="SELECT tbl_states.name as sName, tbl_states.code as sCode FROM `tbl_states` WHERE `id`=".$stateid; 
    $query=$this->db->query($sql);
    return $query->row_array(); 
   }
   
   function getCountryName($countyid)
   {
    $sql="SELECT tbl_countries.name as cName FROM `tbl_countries` WHERE `id`=".$countyid;
    $query=$this->db->query($sql);
    return $query->row_array(); 
   }
   
   function getBankStateName($bank_state_id)
   {
    $sql="SELECT tbl_states.name as bankStateName FROM `tbl_states` WHERE `id`=".$bank_state_id; 
    $query=$this->db->query($sql);
    return $query->row_array(); 
   }
   
   function getOccupationName($occupation_id)
   {
    $sql="SELECT `occupationname` FROM `tbl_occupation` WHERE `id`=".$occupation_id; 
    $query=$this->db->query($sql);
    return $query->row_array(); 
   }
   
   function insertUserdata($post_val) // save registration data
      {
          
         /*  print_r($post_val);
          exit(); */
          $user_id=$post_val['user_id'];
          
          
          if(isset($post_val['sex'])=='m')
          {
              $gender=1;
          }elseif($post_val['sex']=='f')
          {
             $gender=2; 
          }else
          {
              $gender=3;  
          }
          $userDetailsQry="Update `tbl_userdetails` SET
            `fname`='".$post_val['fname']."',
            `mname`='".$post_val['mname']."',
            `lname`='".$post_val['lname']."',
      `father_fname`='".$post_val['ffname']."',
            `father_mname`='".$post_val['fmname']."',
            `father_lname`='".$post_val['flname']."',
            `mother_fname`='".$post_val['mfname']."',
            `mother_mname`='".$post_val['mmname']."',
            `mother_lname`='".$post_val['mlname']."',
      `sex`='".$gender."',
            `nationality`='".$post_val['nationality']."',
            `dob`='".$post_val['dob']."',
            `pancard`='".$post_val['pan_card_no']."',
            `gs_amt`='".$post_val['gs_amt']."',
            `addharcard`='".$post_val['aadher_card']."',
            `annualincome`='".$post_val['gross_amt_range']."',
            `occupationid`=".$post_val['Occupation'].",
            `userResidentialstatus`='".$post_val['residencial_status']."',
            `reg_status`= '2' ,
            `marital_status`='".$post_val['marital_status']."',
      `created_at`='".$post_val['created_at']."'
             Where `id`='".$post_val['user_id']."'";
       $this->db->query($userDetailsQry);
        //$user_id=$this->db->insert_id();
       //exit('Stopped');
       
       $created_at = date("Y-m-d");
       
      /*$insertAccountPayDetails = "INSERT INTO `tbl_account_pay`(`user_id`, `account_type`, `payment_type`, `payment_status`,`created_at`)
                     VALUES (
                           ".$post_val['user_id'].",
                           '".$post_val['type']."',
                           '".$post_val['payment_method']."',
                           '0',
                           '".$created_at."'
                            )";
      $this->db->query($insertAccountPayDetails);*/                 
       
              $userAddressQry="INSERT INTO `tbl_user_address`  SET
                `user_id`=".$user_id." ,
                `address1`='".$post_val['address1']."',
                `address2`='".$post_val['address2']."' ,
                `address3`='".$post_val['address3']."' ,
                `address4`='".$post_val['address4']."' ,
                `state_id`='".$post_val['state_code']."',
                `pincode`='".$post_val['pin_code']."',
                `country_id`='".$post_val['country_code']."',
                `address_proof_id`='".$post_val['address_proof_doc']."',
                `is_permanent_address`='0'";
          $this->db->query($userAddressQry);
          $peruserAddressQry="INSERT INTO `tbl_user_address`  SET
                `user_id`=".$user_id." ,
                `address1`='".$post_val['peraddress1']."',
                `address2`='".$post_val['peraddress2']."' ,
                `address3`='".$post_val['peraddress3']."',
                `address4`='".$post_val['peraddress4']."' ,
                `state_id`='".$post_val['perstate_code']."',
                `pincode`='".$post_val['perpin_code']."',
                `country_id`='".$post_val['percountry_code']."',
                `address_proof_id`='".$post_val['address_proof_doc']."',
                `is_permanent_address`='1'";
          $this->db->query($peruserAddressQry);
          
        $userAccountDetailsQry="INSERT INTO `tbl_useraccountdetails` SET
                                `user_id`=".$user_id.",
                                 `bankname`='".$post_val['bank_name']."',
                                 `bankaddress1`='".$post_val['banch_address1']."',
                                 `bankaddress2`='".$post_val['banch_address2']."',
                                 `bankaddress3`='".$post_val['banch_address3']."',
                                 `city`='".$post_val['branch_city']."',
                                 `pincode`='".$post_val['branch_pin']."',
                                 `stateid`='".$post_val['branch_state']."',
                                 `accountnumber`='".$post_val['acc_number']."', 
                                 `accounttype`='".$post_val['account_type']."', 
                 `ifsccode`='".$post_val['ifsc_code']."',
                 `micr_no`='".$post_val['micr_number']."'";
       $this->db->query($userAccountDetailsQry);
       
       
       if($post_val['office_ph'])
       {
         $userPhDetailsQry="INSERT INTO `tbl_user_ph`(`user_id`,`ph_code`, `ph`, `ph_type`) 
                  VALUES (".$user_id.",'".$post_val['off_ph_code']."','".$post_val['office_ph']."','2')"; 
         $this->db->query($userPhDetailsQry);  
       }
       
       if($post_val['home_ph'])
       {
         $userPhDetailsQry="INSERT INTO `tbl_user_ph`(`user_id`,`ph_code`,`ph`,`ph_type`) 
                  VALUES (".$user_id.",'".$post_val['home_ph_code']."','".$post_val['home_ph']."','3')";  
         $this->db->query($userPhDetailsQry);  
       }
        
       if($post_val['fax_ph'])
       {
         $userPhDetailsQry="INSERT INTO `tbl_user_ph`(`user_id`,`ph_code`, `ph`, `ph_type`) 
                  VALUES (".$user_id.",'".$post_val['fax_ph_code']."','".$post_val['fax_ph']."','4')"; 
         $this->db->query($userPhDetailsQry);  
       }
       return $user_id;
   }
   
   
   
   
   
   /******************************************  User Profile Update ******************************************/
   
   function updateUserdata($post_val) // update profile data
      {
          $user_id=$post_val['user_id'];
          $result_array= array(); 
      
          if(isset($post_val['gender'])=='m')
          {
              $gender=1;
          }elseif($post_val['gender']=='f')
          {
             $gender=2; 
          }else
          {
              $gender=3;  
          }
      
        $userDetailsQry="Update `tbl_userdetails` SET
            `fname`='".$post_val['fname']."',
            `mname`='".$post_val['mname']."',
            `lname`='".$post_val['lname']."',
      `father_fname`='".$post_val['ffname']."', 
      `father_mname`='".$post_val['fmname']."', 
      `father_lname`='".$post_val['flname']."',
      `mother_fname`='".$post_val['mfname']."', 
      `mother_mname`='".$post_val['mmname']."', 
      `mother_lname`='".$post_val['mlname']."',
            `sex`='".$gender."',
            `nationality`='".$post_val['nationality']."',
            `dob`='".$post_val['dob']."',
            `pancard`='".$post_val['pan_card_no']."',
            `gs_amt`='".$post_val['gs_amt']."',
            `addharcard`='".$post_val['aadher_card']."',
            `annualincome`='".$post_val['gross_amt_range']."',
            `occupationid`=".$post_val['Occupation'].",
            `userResidentialstatus`='".$post_val['residencial_status']."',
            `marital_status` = '".$post_val['marital_status']."'
             Where `id`= ".$user_id;
       
      
      $this->db->query($userDetailsQry);
      
      $a['user_update'] = $this->db->affected_rows();
      
      $result_array = array_merge($result_array,$a);
        
      
          $getCorAddressQuery="Select `id` from `tbl_user_address` where 
                        `user_id`=".$user_id." and `is_permanent_address`= '0'"; 
          $query=$this->db->query($getCorAddressQuery);
          $getCorAddress=$query->row_array();                                      
        
          if($getCorAddress["id"]) //check if id is exist or not                        
          {               //if exist
              $userAddressQry="Update `tbl_user_address`  SET
                `address1`='".$post_val['address1']."',
                `address2`='".$post_val['address2']."' ,
                `address3`='".$post_val['address3']."',
                `address4`='".$post_val['address4']."',
                `state_id`='".$post_val['state_code']."',
                `pincode`='".$post_val['pin_code']."',
                `country_id`='".$post_val['country_code']."',
        `address_proof_id`='".$post_val['address_proof_doc']."',
                `is_permanent_address`='0'
                where `id`=".$getCorAddress["id"];
          }
          else
          {           //not exist..insert new row
               $userAddressQry="INSERT INTO `tbl_user_address`  SET
                `user_id`=".$user_id." ,
                `address1`='".$post_val['address1']."',
                `address2`='".$post_val['address2']."' ,
                `address3`='".$post_val['address3']."' ,
                `address4`='".$post_val['address4']."' ,
                `state_id`='".$post_val['state_code']."',
                `pincode`='".$post_val['pin_code']."',
                `country_id`='".$post_val['country_code']."',
                `address_proof_id`='".$post_val['address_proof_doc']."',
                `is_permanent_address`='0'";
          }
          $this->db->query($userAddressQry);
      $a['corr_add'] = $this->db->affected_rows(); 
      $result_array = array_merge($result_array,$a);
        
      
          $getPerAddressQuery="Select `id` from `tbl_user_address` where 
                        `user_id`=".$user_id." and `is_permanent_address`= '1'";  
          $query=$this->db->query($getPerAddressQuery);
          $getPerAddress=$query->row_array();
          
          if($getPerAddress['id']) //check if id is exist or not                        
          {               //if exist
            $peruserAddressQry="Update `tbl_user_address`  SET
                `address1`='".$post_val['peraddress1']."',
                `address2`='".$post_val['peraddress2']."' ,
                `address3`='".$post_val['peraddress3']."' ,
                `address4`='".$post_val['peraddress4']."' ,
                `state_id`='".$post_val['perstate_code']."',
                `pincode`='".$post_val['perpin_code']."',
                `country_id`='".$post_val['percountry_code']."',
                `address_proof_id`='".$post_val['peraddress_proof_doc']."',
                `is_permanent_address`='1' where id=".$getPerAddress['id'];
          }
          else
          {             //not exist..insert new row
              $peruserAddressQry="INSERT INTO `tbl_user_address`  SET
                `user_id`=".$user_id." ,
                `address1`='".$post_val['peraddress1']."',
                `address2`='".$post_val['peraddress2']."' ,
                `address3`='".$post_val['peraddress3']."' ,
                `address4`='".$post_val['peraddress4']."' ,
                `state_id`='".$post_val['perstate_code']."',
                `pincode`='".$post_val['perpin_code']."',
                `country_id`='".$post_val['percountry_code']."',
                `address_proof_id`='".$post_val['address_proof_doc']."',
                `is_permanent_address`='1'";
          }
          $this->db->query($peruserAddressQry);
     
      $a['per_add'] = $this->db->affected_rows();
          $result_array = array_merge($result_array,$a);
     
      
    // User Bank Account Details  Check if Exists then UPDATE else INSERT
    
     if($post_val['office_ph'] ) // For Office Phone Number check and UPDATE else INSERT
       {
         
        $sql_office_ph_chk = "SELECT `id` FROM `tbl_user_ph` WHERE `ph_type`='2' and `user_id`=".$user_id;  
      $result_off_pn =$this->db->query($sql_office_ph_chk);
      
       if($result_off_pn->num_rows() > 0)
       {
          $off_ph_id = $result_off_pn->row()->id;
          
          $off_ph_update="UPDATE `tbl_user_ph` SET 
          `ph_code`='".$post_val['office_ph_code']."',
          `ph`='".$post_val['office_ph']."'
           WHERE `id`=".$off_ph_id; 
          $this->db->query($off_ph_update);  
          //exit('vcvcvcc');
          
            $a['off_ph_update'] = $this->db->affected_rows();
            $result_array = array_merge($result_array,$a);
              
       }
      else
      {
        $off_ph_insert = "INSERT INTO `tbl_user_ph`(`user_id`,`ph_code`, `ph`, `ph_type`) 
                  VALUES (".$user_id.",'".$post_val['office_ph_code']."','".$post_val['office_ph']."','2')";
        $this->db->query($off_ph_insert);   
        
        
          $a['off_ph_insert'] = $this->db->affected_rows();
          $result_array = array_merge($result_array,$a);
            
      }
       }
       
       
        if($post_val['home_ph']) // For Home Phone Number check and UPDATE else INSERT
       {
         
      $sql_home_ph_chk = "SELECT `id` FROM `tbl_user_ph` WHERE `ph_type`='3' and `user_id`=".$user_id;  
      
      $result_home_pn =$this->db->query($sql_home_ph_chk);
        
      if($result_home_pn->num_rows() > 0)
       {
          $home_ph_id = $result_home_pn->row()->id;
              $home_ph_update="UPDATE `tbl_user_ph` SET 
          `ph_code`='".$post_val['home_ph_code']."',
          `ph`='".$post_val['home_ph']."'
           WHERE `id`=".$home_ph_id;
          
          $this->db->query($home_ph_update);  
          
          $a['home_ph_update'] = $this->db->affected_rows();
          $result_array = array_merge($result_array,$a);
          
          
       }
       
      else
      {
        $home_ph_insert = "INSERT INTO `tbl_user_ph`(`user_id`,`ph_code`,`ph`,`ph_type`) 
                  VALUES (".$user_id.",'".$post_val['home_ph_code']."','".$post_val['home_ph']."','3')";
        $this->db->query($home_ph_insert); 
        
        $a['home_ph_insert'] = $this->db->affected_rows();
        $result_array = array_merge($result_array,$a);
          
      }
       }
       
       if($post_val['fax_ph']) // For Fax Number check and UPDATE else INSERT
       {
         
      $sql_fax_ph_chk = "SELECT `id` FROM `tbl_user_ph` WHERE `ph_type`='4' and `user_id`=".$user_id;  
      $result_fax_pn =$this->db->query($sql_fax_ph_chk);
        
      if($result_fax_pn->num_rows() > 0)
       {
          $fax_ph_id = $result_fax_pn->row()->id;
          
          $fax_ph_update="UPDATE `tbl_user_ph` SET 
          `ph_code`='".$post_val['fax_ph_code']."',
          `ph`='".$post_val['fax_ph']."'
           WHERE `id`=".$fax_ph_id; 
          $this->db->query($fax_ph_update);  
          
          $a['fax_ph_update'] = $this->db->affected_rows();
          $result_array = array_merge($result_array,$a);
           
          
          
       }
      else
      {
        $fax_ph_insert = "INSERT INTO `tbl_user_ph`(`user_id`,`ph_code`, `ph`, `ph_type`) 
                  VALUES (".$user_id.",'".$post_val['fax_ph_code']."','".$post_val['fax_ph']."','4')";
        $this->db->query($fax_ph_insert);
        
            $a['off_ph_insert'] = $this->db->affected_rows();
            $result_array = array_merge($result_array,$a);
          
      }
      
      
       }
       
       


    $chk_UserAccountDetailsQry = "SELECT `useraccountdetailsid` FROM `tbl_useraccountdetails` WHERE `user_id`=".$user_id;
    $result_chk_acc_details=$this->db->query($chk_UserAccountDetailsQry); 
    
    
    if($result_chk_acc_details->num_rows() > 0)
    {
      $acc_row_id = $result_chk_acc_details->row()->useraccountdetailsid;
      //$acc_row_id = $result_chk_acc_details->row()->useraccountdetailsid;
      $update_UserAccountDetailsQry = "UPDATE `tbl_useraccountdetails` SET 
                                        `bankname`='".$post_val['bank_name']."',
                                        `bankaddress`='".$post_val['bankaddress']."',
                                        `city`='".$post_val['branch_city']."',
                                        `pincode`=".$post_val['branch_pin'].",
                                        `stateid`=".$post_val['branch_state'].",
                                        `accountnumber`=".$post_val['acc_number'].",
                                        `accounttype`='".$post_val['account_type']."',
                                        `ifsccode`='".$post_val['ifsc_code']."',
                                        `micr_no`='".$post_val['micr_number']."' 
                                       WHERE `useraccountdetailsid`=".$acc_row_id." and `user_id`=".$user_id;

      $this->db->query($update_UserAccountDetailsQry);
      
      $a['User_Acc_Details_Update'] = $this->db->affected_rows();
          $result_array = array_merge($result_array,$a);
          
      
    }
    else
    { 
      $insert_UserAccountDetailsQry = "INSERT INTO `tbl_useraccountdetails`(
                                          `user_id`, 
                                          `bankname`, 
                                          `bankaddress`,
                                          `city`, 
                                          `pincode`, 
                                          `stateid`, 
                                          `accountnumber`, 
                                          `accounttype`, 
                                          `ifsccode`, 
                                          `micr_no`
                                          ) 
                                          VALUES (
                                          ".$user_id.",
                                          '".$post_val['bank_name']."',
                                          '".$post_val['bankaddress']."',
                                          '".$post_val['branch_city']."',
                                          ".$post_val['branch_pin'].",
                                          ".$post_val['branch_state'].",
                                          ".$post_val['acc_number'].",
                                          '".$post_val['account_type']."',
                                          '".$post_val['ifsc_code']."',
                                          '".$post_val['micr_number']."')";
                                          
      $this->db->query($insert_UserAccountDetailsQry);
      
      $a['User_Acc_Details_insert'] = $this->db->affected_rows();
      $result_array = array_merge($result_array,$a);
          
      
    }
    
    
    if (in_array(1,$result_array)){return 1 ;} 
    else { return 0 ;}//return '0';
  }
   
   function transactionDetails($records,$value)
     {
        if($value==1)
        {
            $userTransactionQry="INSERT INTO `tbl_transaction` SET
            `user_id`='".$records['user_id']."',
            `amount`='".$records['amount']."',
            `created`=now()";
            $this->db->query($userTransactionQry); 
            $trn_id=$this->db->insert_id();
            return $trn_id; 
        }
        else if($value==2)       
        {
           $updateTransactionQry="UPDATE `tbl_transaction` SET 
                    `txn_id` = '".$records['mmp_txn']."',
                    `item_name` = 'NSE',
                    `payment_status` = 'Success',
                    `desc_payment` = '".$records['desc']."',
                    `bank_txn` = '".$records['bank_txn']."',
                    `bank_name` = '".$records['bank_name']."',
                    WHERE `transaction` ='".$records['mer_txn']."'";
           $this->db->query($updateTransactionQry);
        }
        else if($value==3){
            $updateTransactionQry="UPDATE `tbl_transaction` SET 
                    `txn_id` = '".$records['mmp_txn']."',
                    `item_name` = 'NSE',
                    `payment_status` = 'Failure',
                    `desc_payment` = '".$records['desc']."',
                    `bank_txn` = '".$records['bank_txn']."',
                    `bank_name` = '".$records['bank_name']."',
                    WHERE `transaction` ='".$records['mer_txn']."'";
           $this->db->query($updateTransactionQry); 
        }
     }
     function update_paymentStatus($user_id)
     {
              $transaction=$this->db->query("SELECT max(transaction) trn_id FROM `tbl_transaction` WHERE user_id=$user_id");
              $row = $transaction->row();
              $sql="UPDATE `tbl_transaction` SET `payment_status` = '1' WHERE `transaction` =".$row->trn_id;
              $query = $this->db->query($sql); 
     }
      function userPaymentCancel($total_rec)
     {
         $sql="UPDATE `tbl_transaction` SET `txn_id` = '".$total_rec['mmp_txn']."',
        `item_name` = '".$total_rec['prod']."',
        `desc_payment` = '".$total_rec['desc']."',
        `bank_txn` = '".$total_rec['bank_txn']."',
        `bank_name` = '".$total_rec['bank_name']."',
        `payment_status` = '4' WHERE `transaction` =".$total_rec['mer_txn']." AND  user_id=".$total_rec['clientcode'];
         $this->db->query($sql);
         $this->session->unset_userdata('acc_type');
         
     }
   
  function saveGetRefferalBenifits($data)
  {
    
           $sql="SELECT * FROM `tbl_get_referral_benifit` WHERE `client_id` LIKE '".$data['client_id']."' AND `friend_email` LIKE '".$data['friend_email']."'";
           $otherdb = $this->load->database('cdsl', TRUE);
           $query = $otherdb->query($sql);
           $getreferal=$query->row_array(); 
           if($getreferal['id'])
           {
               return 0;

           }
           else
           {
              $sql="SELECT * FROM `tbl_userdetails` tu join tbl_user_email te on te.user_id = tu.id WHERE te.emailaddress= '".$data['friend_email']."' ";
              $otherdb = $this->load->database('cdsl', TRUE);
               $query = $otherdb->query($sql);
               $getreferal=$query->row_array(); 
               if($getreferal['id'])
               {
                   return "user exists" ;

               }else{
                $insert = $otherdb->insert('tbl_get_referral_benifit',$data);
                $insert_id = $otherdb->insert_id();
                return $insert_id;
               }
                
           }

  }


     
     function payment_status($user_id)
     {
          $this->db->select('payment_status');
          $this->db->from('tbl_transaction');
          $this->db->where('user_id',$user_id);
          $q=$this->db->get();
          $row = $q->row();
          return $paymentStatusinDatabase=$row->payment_status;
     }
     
     function updateUserDetailsAfterSuccessfullPayment($total_rec)
     {
         $sql="UPDATE `tbl_transaction` SET `txn_id` = '".$total_rec['mmp_txn']."',
        `item_name` = '".$total_rec['prod']."',
        `desc_payment` = '".$total_rec['desc']."',
        `bank_txn` = '".$total_rec['bank_txn']."',
        `bank_name` = '".$total_rec['bank_name']."',
        `payment_status` = '2' WHERE `transaction` =".$total_rec['mer_txn']." AND  `user_id`=".$total_rec['clientcode'];
         $this->db->query($sql);   
         $updateRegistrationQry="UPDATE `tbl_userdetails` SET `reg_status` = '4' WHERE `id`=".$total_rec['clientcode'];
      $this->db->query($updateRegistrationQry);   
      
      
     /***************** Modified Section 3-Dec-2016 to store payment status on tbl_account_pay dbb table ******************/
     $this->db->where('user_id',$total_rec['clientcode']);
     $this->db->where('account_type',$this->session->userdata('acc_type'));
     $getAccDetails=$this->db->get('tbl_account_pay');
     $toBeUpdate = array('payment_status' => '1');
      if($getAccDetails->num_rows() > 0){
        $this->db->where('user_id',$total_rec['clientcode']);
        $this->db->where('account_type',$this->session->userdata('acc_type'));
        $this->db->update('tbl_account_pay',$toBeUpdate);
      }    
    
    /**********************************************************************************************************************/
     
        
     }
     
     function insertIntoAccStatus($total_rec)
     {

      $userAddressQry="INSERT INTO `account_status`  SET
                `user_id`=".$total_rec['clientcode'];
          $this->db->query($userAddressQry);
     
     
     }
     
     function updateUserDetailsAfterFailurePayment($total_rec)
     {
          $user_id = $total_rec['clientcode'];
            $sql="UPDATE `tbl_transaction` SET `txn_id` = '".$total_rec['mmp_txn']."',
            `item_name` = '".$total_rec['prod']."',
            `desc_payment` = '".$total_rec['desc']."',
            `bank_txn` = '".$total_rec['bank_txn']."',
            `bank_name` = '".$total_rec['bank_name']."',
            `payment_status` = '3' WHERE `transaction` =".$total_rec['mer_txn']." AND  `user_id`=".$total_rec['clientcode'];
            $this->db->query($sql);
            $updateRegistrationQry="UPDATE `tbl_userdetails` SET `reg_status` = '5' WHERE `id`=".$user_id;
            $this->db->query($updateRegistrationQry);   
            $this->session->unset_userdata('acc_type');
     }
      function totGetEquityOnline(){
         $sql="select 
         
         CONCAT( usd.fname,  ' ', usd.mname,  ' ', usd.lname ) as userName,
         usd.user_code as clientCode,
         usd.status as status,
         usd.id as usdId,
         email.emailaddress as emailId,
         phone.ph as mobileNo, 
         trans.created as transDate 
         
         from tbl_userdetails usd
         LEFT JOIN tbl_user_email email ON usd.id=email.user_id 
         LEFT JOIN tbl_user_ph phone ON usd.id=phone.user_id AND phone.ph_type='1' 
         LEFT JOIN tbl_transaction trans ON usd.id=trans.user_id  
         
         where uap.account_type='1' 
         AND uap.payment_type='1'
         AND trans.payment_status='2'
         
         order by usd.id desc";
         $query = $this->db->query($sql);
         return $query->result_array();
     }
     
     function getEquityOnline($limit, $page){
         $page=$limit*($page-1);
         $sql="select 
         
         CONCAT( usd.fname,  ' ', usd.mname,  ' ', usd.lname ) as userName,
         usd.user_code as clientCode,
         usd.status as status,
         usd.id as usdId,
         email.emailaddress as emailId,
         phone.ph as mobileNo, 
         trans.created as transDate 
         
         from tbl_userdetails usd
     LEFT JOIN tbl_account_pay uap ON usd.id=uap.user_id
         LEFT JOIN tbl_user_email email ON usd.id=email.user_id 
         LEFT JOIN tbl_user_ph phone ON usd.id=phone.user_id AND phone.ph_type='1' 
         LEFT JOIN tbl_transaction trans ON usd.id=trans.user_id  
         
         where uap.account_type='1' 
         AND uap.payment_type='1'
         AND trans.payment_status='2'
         
         order by usd.id desc limit $page,$limit";
         $query = $this->db->query($sql);
         
     
            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
          
                }
        print_r($data);
                return $data;
            }
                return false;
         
         
     }
     
     function totGetEquityOffline(){
         $sql="select 
         
         CONCAT( usd.fname,  ' ', usd.mname,  ' ', usd.lname ) as userName,
         usd.user_code as clientCode,
         usd.id as usdId,
         usd.status as status,
         email.emailaddress as emailId,
         phone.ph as mobileNo 
         
         from tbl_userdetails usd
     LEFT JOIN tbl_account_pay uap ON usd.id=uap.user_id
         LEFT JOIN tbl_user_email email ON usd.id=email.user_id 
         LEFT JOIN tbl_user_ph phone ON usd.id=phone.user_id AND phone.ph_type='1' 
         
         where uap.account_type='1'
         AND uap.payment_type='2'
         
         order by usd.id desc";
         $query = $this->db->query($sql);
         return $query->result_array();
     }
     
     function getEquityOffline($limit, $page){
         $page=$limit*($page-1);
         $sql="select 
         
         CONCAT( usd.fname,  ' ', usd.mname,  ' ', usd.lname ) as userName,
         usd.user_code as clientCode,
         usd.id as usdId,
         usd.status as status,
         email.emailaddress as emailId,
         phone.ph as mobileNo 
         
         from tbl_userdetails usd
     LEFT JOIN tbl_account_pay uap ON usd.id=uap.user_id
         LEFT JOIN tbl_user_email email ON usd.id=email.user_id 
         LEFT JOIN tbl_user_ph phone ON usd.id=phone.user_id AND phone.ph_type='1' 
         
         where uap.account_type='1'
         ANDuap.payment_type='2'
         
         order by usd.id desc limit $page,$limit";
         $query = $this->db->query($sql);
         
            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }

                return $data;
            }
                return false;
         
         
     }
     
     function totGetOnlinePending(){
         $sql="select 
         
         CONCAT( usd.fname,  ' ', usd.mname,  ' ', usd.lname ) as userName,
         usd.user_code as clientCode,
         usd.status as status,
         usd.id as usdId,
         email.emailaddress as emailId,
         phone.ph as mobileNo, 
         trans.created as transDate 
         
         from tbl_userdetails usd
     LEFT JOIN tbl_account_pay uap ON usd.id=uap.user_id
         LEFT JOIN tbl_user_email email ON usd.id=email.user_id 
         LEFT JOIN tbl_user_ph phone ON usd.id=phone.user_id AND phone.ph_type='1' 
         LEFT JOIN tbl_transaction trans ON usd.id=trans.user_id  
         
         where uap.account_type='1' 
         AND uap.payment_type='1'
         AND trans.payment_status!='2'
         
         order by usd.id desc";
         $query = $this->db->query($sql);
         return $query->result_array();
     }
     
     function getOnlinePending($limit, $page){
         $page=$limit*($page-1);
         $sql="select 
         
         CONCAT( usd.fname,  ' ', usd.mname,  ' ', usd.lname ) as userName,
         usd.user_code as clientCode,
         usd.status as status,
         usd.id as usdId,
         email.emailaddress as emailId,
         phone.ph as mobileNo, 
         trans.created as transDate 
         
         from tbl_userdetails usd
     LEFT JOIN tbl_account_pay uap ON usd.id=uap.user_id
         LEFT JOIN tbl_user_email email ON usd.id=email.user_id 
         LEFT JOIN tbl_user_ph phone ON usd.id=phone.user_id AND phone.ph_type='1' 
         LEFT JOIN tbl_transaction trans ON usd.id=trans.user_id  
         
         where uap.account_type='1' 
         AND uap.payment_type='1'
         AND trans.payment_status!='2'
         
         order by usd.id desc limit $page,$limit";
         $query = $this->db->query($sql);
         
            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }

                return $data;
            }
                return false;
         
         
     }
     
     function totGetCommodityOnline(){
         $sql="select 
         
         CONCAT( usd.fname,  ' ', usd.mname,  ' ', usd.lname ) as userName,
         usd.user_code as clientCode,
         usd.status as status,
         usd.id as usdId,
         email.emailaddress as emailId,
         phone.ph as mobileNo, 
         trans.created as transDate 
         
         from tbl_userdetails usd
     LEFT JOIN tbl_account_pay uap ON usd.id=uap.user_id
         LEFT JOIN tbl_user_email email ON usd.id=email.user_id 
         LEFT JOIN tbl_user_ph phone ON usd.id=phone.user_id AND phone.ph_type='1' 
         LEFT JOIN tbl_transaction trans ON usd.id=trans.user_id  
         
         where uap.account_type='2' 
         AND uap.payment_type='1'
         AND trans.payment_status='2'
         
         order by usd.id desc";
         $query = $this->db->query($sql);
         return $query->result_array();
     }
     
     function getCommodityOnline($limit, $page){
         $page=$limit*($page-1);
         $sql="select 
         
         CONCAT( usd.fname,  ' ', usd.mname,  ' ', usd.lname ) as userName,
         usd.user_code as clientCode,
         usd.status as status,
         usd.id as usdId,
         email.emailaddress as emailId,
         phone.ph as mobileNo, 
         trans.created as transDate 
         
         from tbl_userdetails usd
     LEFT JOIN tbl_account_pay uap ON usd.id=uap.user_id 
         LEFT JOIN tbl_user_email email ON usd.id=email.user_id 
         LEFT JOIN tbl_user_ph phone ON usd.id=phone.user_id AND phone.ph_type='1' 
         LEFT JOIN tbl_transaction trans ON usd.id=trans.user_id  
         
         where uap.account_type='2' 
         AND uap.payment_type='1'
         AND trans.payment_status='2'
         
         order by usd.id desc limit $page,$limit";
         $query = $this->db->query($sql);
         
            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }

                return $data;
            }
                return false;
         
         
     }
     
     function totGetCommodityOffline(){
         $sql="select 
         
         CONCAT( usd.fname,  ' ', usd.mname,  ' ', usd.lname ) as userName,
         usd.user_code as clientCode,
         usd.id as usdId,
         usd.status as status,
         email.emailaddress as emailId,
         phone.ph as mobileNo 
         
         from tbl_userdetails usd
     LEFT JOIN tbl_account_pay uap ON usd.id=uap.user_id 
         LEFT JOIN tbl_user_email email ON usd.id=email.user_id 
         LEFT JOIN tbl_user_ph phone ON usd.id=phone.user_id AND phone.ph_type='1' 
         
         where uap.account_type='2'
         AND uap.payment_type='2'
         
         order by usd.id desc";
         $query = $this->db->query($sql);
         return $query->result_array();
     }
     
     function getCommodityOffline($limit, $page){
         $page=$limit*($page-1);
         $sql="select 
         
         CONCAT( usd.fname,  ' ', usd.mname,  ' ', usd.lname ) as userName,
         usd.user_code as clientCode,
         usd.id as usdId,
         usd.status as status,
         email.emailaddress as emailId,
         phone.ph as mobileNo 
         
         from tbl_userdetails usd
     LEFT JOIN tbl_account_pay uap ON usd.id=uap.user_id 
         LEFT JOIN tbl_user_email email ON usd.id=email.user_id 
         LEFT JOIN tbl_user_ph phone ON usd.id=phone.user_id AND phone.ph_type='1' 
         
         where uap.account_type='2'
         AND uap.payment_type='2'
         
         order by usd.id desc limit $page,$limit";
         $query = $this->db->query($sql);
         
            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }

                return $data;
            }
                return false;
         
         
     }
     
     function totGetOnlinePendingCommodity(){
         $sql="select 
         
         CONCAT( usd.fname,  ' ', usd.mname,  ' ', usd.lname ) as userName,
         usd.user_code as clientCode,
         usd.status as status,
         usd.id as usdId,
         email.emailaddress as emailId,
         phone.ph as mobileNo, 
         trans.created as transDate 
         
         from tbl_userdetails usd
     LEFT JOIN tbl_account_pay uap ON usd.id=uap.user_id
     LEFT JOIN tbl_account_pay uap ON usd.id=uap.user_id
         LEFT JOIN tbl_user_email email ON usd.id=email.user_id 
         LEFT JOIN tbl_user_ph phone ON usd.id=phone.user_id AND phone.ph_type='1' 
         LEFT JOIN tbl_transaction trans ON usd.id=trans.user_id  
         
         where uap.account_type='2' 
         AND uap.payment_type='1'
         AND trans.payment_status!='2'
         
         order by usd.id desc";
         $query = $this->db->query($sql);
         return $query->result_array();
     }
     
     function getOnlinePendingCommodity($limit, $page){
         $page=$limit*($page-1);
         $sql="select 
         
         CONCAT( usd.fname,  ' ', usd.mname,  ' ', usd.lname ) as userName,
         usd.user_code as clientCode,
         usd.status as status,
         usd.id as usdId,
         email.emailaddress as emailId,
         phone.ph as mobileNo, 
         trans.created as transDate 
         
         from tbl_userdetails usd
     LEFT JOIN tbl_account_pay uap ON usd.id=uap.user_id
         LEFT JOIN tbl_user_email email ON usd.id=email.user_id 
         LEFT JOIN tbl_user_ph phone ON usd.id=phone.user_id AND phone.ph_type='1' 
         LEFT JOIN tbl_transaction trans ON usd.id=trans.user_id  
         
         where uap.account_type='2' 
         AND uap.payment_type='1'
         AND trans.payment_status!='2'
         
         order by usd.id desc limit $page,$limit";
         $query = $this->db->query($sql);
         
            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }

                return $data;
            }
                return false;
         
         
     }
     
     function addClientCode($data){
         if(!empty($data['client_code'])){
         $addCode="UPDATE `tbl_userdetails` SET
                    `user_code`='".$data['client_code']."',
                    `status`='".$data['status']."'
                     where id='".$data['user_id']."'
                    ";    
         } else {
        $addCode="UPDATE `tbl_userdetails` SET
                    `status`='".$data['status']."'
                     where id='".$data['user_id']."'
                    ";
        }                    
      return $this->db->query($addCode); 
     }
   
   function getUserDetails($user_id){
        $this->db->select('*');
          $this->db->from('tbl_userdetails');
          $this->db->where('id', $user_id);
          $q=$this->db->get();
          $row = $q->row();
      return $row;
   }
   
   function perticular_userDetails($user_id)
     {
            //echo $user_id;
            
            $sql="SELECT a.fname, a.mname, a.lname, f.account_type, b.emailaddress, c.ph, d.transaction, e.address1, e.address2
            FROM `tbl_userdetails` a
      LEFT JOIN `tbl_account_pay` f ON f.user_id = a.id
            LEFT JOIN `tbl_user_email` b ON b.user_id = a.id
            LEFT JOIN `tbl_user_ph` c ON c.user_id = b.user_id
            LEFT JOIN `tbl_transaction` d ON d.user_id = c.user_id
            LEFT JOIN `tbl_user_address` e ON e.user_id = d.user_id
            WHERE c.ph_type =1 AND a.id =".$user_id;
            $query = $this->db->query($sql);
            return $query->row_array(); 
     }
    

     function savePayOpt($data)
     { 
      if($data['exchange_type']=="NSE"){
        if(date("H")>=17){
          $cutoff = date("Y-m-d")." 17:00:00";
        }else{
          $cutoff = date("Y-m-d",strtotime("-1 days"))." 17:00:00";

        }
        $sql = "select * from tbl_payopt where exchange_type='".$data['exchange_type']."' and client_code='".$data['client_code']."' and created > '".$cutoff."';";
        $otherdb = $this->load->database('cdsl', TRUE);
        $result = $otherdb->query($sql)->result_array();
        if(count($result) == 0){
          $insert = $otherdb->insert('tbl_payopt',$data);
          $insert_id = $otherdb->insert_id();
          return array("status"=>"success");
        }else{
          return array("status"=>"error","message"=>"Only one payout request per exchange is allowed in a day. Please send the next payout request after 5 PM");
        }
      }elseif($data['exchange_type']=="MCX"){
        if(date("H")>=12){
          $cutoff = date("Y-m-d")." 12:00:00";
        }else{
          $cutoff = date("Y-m-d",strtotime("-1 days"))." 12:00:00";

        }
        $sql = "select * from tbl_payopt where exchange_type='".$data['exchange_type']."' and client_code='".$data['client_code']."' and created > '".$cutoff."';";
        $otherdb = $this->load->database('cdsl', TRUE);
        $result = $otherdb->query($sql)->result_array();
        if(count($result) == 0){
          $insert = $otherdb->insert('tbl_payopt',$data);
          $insert_id = $otherdb->insert_id();
          return array("status"=>"success");
        }else{
          return array("status"=>"error","message"=>"Only one payout request per exchange is allowed in a day. Please send the next payout request after 12 PM");
        }  
      }
      

    }
  
  function saveFundStatus($data)
  {
       $insert = $this->db->insert('tbl_fund_status',$data);
        $insert_id = $this->db->insert_id();
        return $insert_id;    
  }
  
  /************************************ FAQ Search ************************************/
  
  function getFAQSearchResult($faq_input)
  {
    $this->db->select('faq.*');
    $this->db->from('tbl_faq faq');
    $this->db->join('tbl_faq_category fcat','faq.faq_category_id=fcat.id','left');
    $this->db->where('fcat.faq_category_name',$faq_input);
    
    return $this->db->get()->result_array();
    
    /* $sql_faq_cat_srch = "SELECT `id` FROM `tbl_faq_category` WHERE `faq_category_name`='".$faq_input."'";
    $faq_found = $this->db->query($sql_faq_cat_srch);
    if($faq_found->num_rows() > 0)
    {
      $faq_cat_id = $faq_found->row()->id;
      $get_faq_content ="SELECT * FROM `tbl_faq` WHERE `faq_category_id`=".$faq_cat_id;
      $faq_content = $this->db->query($get_faq_content);
      return $faq_content->result_array();
    } */
  }
  
  /********************************** Sub-Broker Request Save ************************************/
  
  function saveSubBrokerRequest($data){
  $insert = $this->db->insert('tbl_subbroker_request',$data);
        $insert_id = $this->db->insert_id();
        return $insert_id;    
  }
  
  /***************************** Sub Broker Request View ***************************************/
  
     function totSubbrokerRequest(){
       $this->db->select('*');
        $this->db->from('tbl_subbroker_request');
        $query=$this->db->get(); 
        if ($query->num_rows() > 1) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }

                return $data;
            }
                return false;   
    }
    
    
    //function getSubbrokerRequest($limit,$page){
  function getSubbrokerRequest(){
        //$page=$limit*($page-1);
        //$sql="SELECT * FROM `tbl_subbroker_request` ORDER BY `id` DESC  limit $page,$limit";
    $sql="SELECT * FROM `tbl_subbroker_request` ORDER BY `id` DESC";
          $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
                return false;
  }
  /******************************** Get All Referral List ****************************************/ 
  //function getReferralList($limit,$page){
    function getReferralList(){
        //$page=$limit*($page-1);
       // $sql="SELECT * FROM `tbl_get_referral_benifit` ORDER BY `id` DESC  limit $page,$limit";
    $sql="SELECT * FROM `tbl_get_referral_benifit` ORDER BY `id` DESC";
      $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
                return false;
  }
    
    function totgetReferralList(){
       $this->db->select('*');
        $this->db->from('tbl_get_referral_benifit');
        $query=$this->db->get(); 
        if ($query->num_rows() > 1) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }

                return $data;
            }
                return false;   
    }
  /******************************* Get Country ISO-Code-3166 ************************************/
  function getCorrCountryIso3166($data){
    $this->db->select('iso2_code')->where('id', $data);
    return $this->db->get('tbl_countries')->result_array();
  }
  function getPerCountryIso3166($data){
    
    $this->db->select('iso2_code')->where('id', $data);
    return $this->db->get('tbl_countries')->result_array();
  }
  
  /*********************************** Contact Us Save *******************************************/
  function saveContactUs($data){
    $insert = $this->db->insert('tbl_contact',$data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
  }
  
  /*********************************** Get All Account_Pay Details By ID ******************************/
  function getAccountPayDetails($user_id){
      $this->db->where('user_id',$user_id);
      $getAllDetails = $this->db->get('tbl_account_pay');
      return $getAllDetails->result_array();
    
  }
  
  /*********************************** Get All Account_Status Details By ID ******************************/
  function getAccountStatusDetails($user_id){
      $this->db->where('user_id',$user_id);
      $getAccDetails = $this->db->get('account_status');
      return $getAccDetails->result_array();
    
  }
  
  /************************** Save New Account Details From Profile Page ***************************/

  function saveNewAccount($data){
    
    $this->db->where('user_id',$data['user_id']);
    $getParticularDetails = $this->db->get('tbl_account_pay');
    
    if($getParticularDetails->num_rows() > 0){
      $this->db->insert('tbl_account_pay',$data);
      $insert_id=$this->db->insert_id();
      return $insert_id;
    }
  }
  
  /****************************** Save Equity Account Online **************************************/
  
  function saveEquityOnline($data){
    $this->db->where('user_id',$data['user_id']);
    $this->db->where('account_type',$data['account_type']);
    $toBeUpdate = array('payment_type' => '1');
    $getOnlineEquityData  = $this->db->get('tbl_account_pay');
    
    if($getOnlineEquityData->num_rows() > 0){
      $this->db->where('user_id',$data['user_id']);
      $this->db->where('account_type',$data['account_type']);
      $this->db->update('tbl_account_pay',$toBeUpdate);
      return $this->db->affected_rows();
    }
    
  }
  
  /****************************** Save Commodity Account Online **************************************/
  
  function saveCommodityOnline($data){
    $this->db->where('user_id',$data['user_id']);
    $this->db->where('account_type',$data['account_type']);
    $toBeUpdate = array('payment_type' => '1');
    $getOnlineCommodityData  = $this->db->get('tbl_account_pay');
    
    if($getOnlineCommodityData->num_rows() > 0){
      $this->db->where('user_id',$data['user_id']);
      $this->db->where('account_type',$data['account_type']);
      $this->db->update('tbl_account_pay',$toBeUpdate);
      return $this->db->affected_rows();
    }
    
  }
  
  /****************************** Save Equity Account Offline ********************************************/
  
  function saveEquityOffline($data){
    $this->db->where('user_id',$data['user_id']);
    $this->db->where('account_type',$data['account_type']);
    $toBeUpdate = array('payment_type' => '2');
    $getOfflineEquityData  = $this->db->get('tbl_account_pay');
    
    if($getOfflineEquityData->num_rows() > 0){
      $this->db->where('user_id',$data['user_id']);
      $this->db->where('account_type',$data['account_type']);
      $this->db->update('tbl_account_pay',$toBeUpdate);
      return $this->db->affected_rows();
    }
    
  }
  
  /****************************** Save Commodity Account Offline **************************************/
  
  function saveCommodityOffline($data){
    $this->db->where('user_id',$data['user_id']);
    $this->db->where('account_type',$data['account_type']);
    $toBeUpdate = array('payment_type' => '2');
    $getOfflineCommodityData  = $this->db->get('tbl_account_pay');
    
    if($getOfflineCommodityData->num_rows() > 0){
      $this->db->where('user_id',$data['user_id']);
      $this->db->where('account_type',$data['account_type']);
      $this->db->update('tbl_account_pay',$toBeUpdate);
      return $this->db->affected_rows();
    }
    
  }
  
  /*****************************  Get Equity Account Details For Online Payment *******************************/
  
  function getEquityAccDetails($data){
    
    $this->db->select('*');
    $this->db->from('tbl_userdetails usd');
    $this->db->join('tbl_account_pay uap', 'usd.id = uap.user_id', 'left');
    $this->db->join('tbl_user_email uemail', 'usd.id = uemail.user_id', 'left');
    $this->db->join('tbl_user_ph uph', 'usd.id = uph.user_id', 'left');
    $this->db->join('tbl_user_address uadd', 'usd.id = uadd.user_id', 'left');
    $this->db->where('usd.id', $data['user_id']);
    $this->db->where('uap.account_type',$data['account_type']);
    $getEquityAccDetails = $this->db->get(); 
    
    if($getEquityAccDetails->num_rows() > 0){
    return $getEquityAccDetails->result_array();
    }
  }
  
  
  /*****************************  Get Commodity Account Details For Online Payment *******************************/
  
  function getCommodityAccDetails($data){
    
    $this->db->select('*');
    $this->db->from('tbl_userdetails usd');
    $this->db->join('tbl_account_pay uap', 'usd.id = uap.user_id', 'left');
    $this->db->join('tbl_user_email uemail', 'usd.id = uemail.user_id', 'left');
    $this->db->join('tbl_user_ph uph', 'usd.id = uph.user_id', 'left');
    $this->db->join('tbl_user_address uadd', 'usd.id = uadd.user_id', 'left');
    $this->db->where('usd.id', $data['user_id']);
    $this->db->where('uap.account_type',$data['account_type']);
    $getCommodityAccDetails = $this->db->get(); 
    
    if($getCommodityAccDetails->num_rows() > 0){
    return $getCommodityAccDetails->result_array();
    }
  }
  
  /******************************** Get All User Details ********************************************************/
  function totgetAllUserList(){
    /* $this->db->select('*');
        $this->db->from('tbl_userdetails usd');
    $this->db->join('tbl_user_email uemail', 'usd.id = uemail.user_id', 'left');
    $this->db->join('tbl_user_ph uph', 'usd.id = uph.user_id', 'left');
    $this->db->join('tbl_account_pay uap', 'usd.id = uap.user_id', 'left');
    $this->db->where('uap.account_type !=','4');
    $this->db->order_by('usd.id', 'DESC');   
    $query=$this->db->get();*/
    
    $getAllUserDetails = "SELECT usd.id,usd.fname,usd.mname,usd.lname,usd.user_code,usd.status,uemail.emailaddress FROM `tbl_userdetails` as `usd`
                 LEFT JOIN `tbl_user_email` `uemail` ON `uemail`.`user_id` = `usd`.`id`
                 WHERE `usd`.`is_super_admin` !=1 
                 ORDER BY `usd`.`id` DESC";

              
    $query = $this->db->query($getAllUserDetails); 
    
        if ($query->num_rows() > 1) {
            foreach ($query->result() as $row) {
                $data[] = $row;
                }

            return $data;
            }
            return false;   
  }
  
  //function getAllUserDetails($limit,$page){
    function getAllUserDetails(){
    //$page=$limit*($page-1);
    
    /* $this->db->select('*');
    $this->db->from('tbl_userdetails usd');
    $this->db->join('tbl_user_email uemail', 'usd.id = uemail.user_id', 'left');
    $this->db->join('tbl_user_ph uph', 'usd.id = uph.user_id', 'left');
    $this->db->join('tbl_account_pay uap', 'usd.id = uap.user_id', 'left');
    $this->db->where('uap.account_type !=','4');
    $this->db->order_by('usd.id', 'DESC');
    $this->db->limit($limit,$page);  
    $query = $this->db->get();*/
    
    /* $getAllUserDetails = "SELECT usd.id,usd.fname,usd.mname,usd.lname,usd.user_code,usd.status,usd.created_at,uemail.emailaddress FROM `tbl_userdetails` as `usd` 
                LEFT JOIN `tbl_user_email` `uemail` ON `uemail`.`user_id` = `usd`.`id`
                WHERE `usd`.`is_super_admin` !=1 
                ORDER BY `usd`.`id` DESC LIMIT ".$page.",".$limit ; */
                
    $getAllUserDetails = "SELECT usd.id,usd.fname,usd.mname,usd.lname,usd.user_code,usd.status,usd.created_at,uemail.emailaddress FROM `tbl_userdetails` as `usd` 
                LEFT JOIN `tbl_user_email` `uemail` ON `uemail`.`user_id` = `usd`.`id`
                WHERE `usd`.`is_super_admin` !=1 
                ORDER BY `usd`.`id` DESC";            
     
    $query = $this->db->query($getAllUserDetails);  
    
    //$this->db->last_query();
    
    if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
                return false;
  }
  
  /***************************** Change Payment Status **********************************/
  
  function changePaymentStatus($data){
    $this->db->where('user_id',$data['user_id']);
    $this->db->where('account_type',$data['account_type']);
    
    $toBeUpdate = array('payment_status' => $data['status']);
    $getPaymentDetails  = $this->db->get('tbl_account_pay');
    
    if($getPaymentDetails->num_rows() > 0){
      $this->db->where('user_id',$data['user_id']);
      $this->db->where('account_type',$data['account_type']);
      $this->db->update('tbl_account_pay',$toBeUpdate);
      return $this->db->affected_rows();
    }
  }
  
  /********************* Get Particular Equity Details ******************************/
  
  function getEquityDetails($user_id){
    $this->db->where('user_id',$user_id);
    $this->db->where('account_type','1');
    
    $getEquityDetails = $this->db->get('tbl_account_pay');
    if($getEquityDetails->num_rows() > 0){
      return $getEquityDetails->result_array();
    }
  }
  
  /************************** Get Particular Commodity Details *****************************/
  
  function getCommodityDetails($user_id){
    $this->db->where('user_id',$user_id);
    $this->db->where('account_type','2');
    
    $getCommodityDetails = $this->db->get('tbl_account_pay');
    if($getCommodityDetails->num_rows() > 0){
      return $getCommodityDetails->result_array();
    }
  }
    
  /********************** Save Equity Pdf Path to DB ********************************************/
    function save_equityPdfPath($user_id,$pdfPath){
        $this->db->where('user_id',$user_id);
        $this->db->where('account_type','1');
        $getEquityDetails = $this->db->get('tbl_account_pay');
        $toBeUpdate = array('pdf_file_path' => $pdfPath);
        if($getEquityDetails->num_rows() > 0){
           $this->db->where('user_id',$user_id);
           $this->db->where('account_type',1);
           $this->db->update('tbl_account_pay',$toBeUpdate); 
        }
    }
    
  /********************** Save Commodity Pdf Path to DB ********************************************/
    function save_commodityPdfPath($user_id,$pdfPath){
        $this->db->where('user_id',$user_id);
        $this->db->where('account_type','2');
        $getCommodityDetails = $this->db->get('tbl_account_pay');
        $toBeUpdate = array('pdf_file_path' => $pdfPath);
        if($getCommodityDetails->num_rows() > 0){
           $this->db->where('user_id',$user_id);
           $this->db->where('account_type',2);
           $result  = $this->db->update('tbl_account_pay',$toBeUpdate); 
        }
    }
    
    
      /********************** Handle IPV Data ********************************************/
    function insertIPVdata($user_id, $image_path){
    
  $toBeUpdate = array('image' => $image_path, 'ipv_status' => '1');
  $this->db->where('user_id',$user_id);
    $this->db->update('account_status',$toBeUpdate);
    return $this->db->affected_rows();
    }
    
      /********************** Get All Account Status Details ********************************************/
    function getAllAccountStatusDetails(){
    
  $sql = "SELECT * FROM `account_status`,`tbl_userdetails` where account_status.user_id = tbl_userdetails.id"; 
  $query = $this->db->query($sql);
  return $query->result_array();
    }
      /********************** Get User Account Status Details ********************************************/
    function getUserAccStatus($user_id){
  $this->db->where('user_id',$user_id);
  $query = $this->db->get('account_status');
  return $query->row_array();
    }
      /********************** Update User Account Status Details ********************************************/
    function updateAccStatus($user_id,$data){
  $toBeUpdate = array('ipv_status' => $data['ipv_status'],'kyc_status' => $data['kyc_status'],'form_receive_status' => $data['form_receive_status'],'equity_receive_date' => $data['equity_receive_date'],'commodity_receive_date' => $data['commodity_receive_date'],'form_number' => $data['form_number']);
  $this->db->where('user_id',$user_id);
    $this->db->update('account_status',$toBeUpdate);
    return $this->db->affected_rows();
    }
    
    function insert_user_accounts_received($user_id,$formNumber){
      $userDetailsQry="INSERT INTO `all_accounts_received` SET
                    `user_id`='".$user_id."',
                    `receive_date`='".date('Y-m-d')."',
                    `form_number`='".$formNumber."'";
        $this->db->query($userDetailsQry);
        return $this->db->insert_id();
    }
    
    function getUserIdsForFileDownload($sdate, $edate){
      $this->db->where('receive_date >=', $sdate);
  $this->db->where('receive_date <=', $edate);
  $query = $this->db->get('all_accounts_received');
  return $query->result_array();
    }
    
    function getPriContent($user_ids){
      $data;
      for($i=0;$i<count($user_ids);$i++){
        $sql="select
        usd.fname as fname, 
        usd.mname as mname, 
        usd.lname as lname, 
    usd.fathername as fathername,
    usd.father_fname as father_fname,
    usd.father_mname as father_mname,
    usd.father_lname as father_lname,
        usd.sex as gender, 
        usd.nationality as nationality, 
        usd.dob as dob, 
        usd.pancard as pancard, 
        usd.addharcard as addharcard,
    usd.occupationid as occupationid,   
        usd.marital_status as marital_status, 
        uEmail.emailaddress as emailaddress, 
        uAcc.bankname as bankname, 
        uAcc.accountnumber as accountnumber, 
        uAcc.micr_no as micr_no, 
        uAcc.ifsccode as ifsccode, 
        uAcc.accounttype as accounttype,
        usph.ph as ph,
        account_status.form_number as form_number   
        from 
        tbl_userdetails as usd 
        LEFT JOIN tbl_user_email as uEmail ON usd.id=uEmail.user_id   
        LEFT JOIN tbl_useraccountdetails as uAcc ON usd.id=uAcc.user_id
        LEFT JOIN tbl_user_ph as usph ON usd.id=usph.user_id 
        LEFT JOIN account_status ON usd.id=account_status.user_id 
        where usph.ph_type='1' and usd.id='".$user_ids[$i]['user_id']."' order by usd.id desc"; 
        $query = $this->db->query($sql);
        $data[$i] = $query->row_array(); 
      }
      
      return $data;
    
    }
    
    function getAddContent($user_ids){
      $data;
      for($i=0;$i<count($user_ids);$i++){
        $sql="select 
        uAcc.bankaddress1 as bankaddress1, 
        uAcc.bankaddress2 as bankaddress2, 
        uAcc.bankaddress3 as bankaddress3, 
        uAcc.city as bankcity, 
        uAcc.pincode as bankpincode, 
        uadd.address1 as address1, 
        uadd.address2 as address2, 
        uadd.address3 as address3, 
        uadd.address4 as address4, 
        uadd.pincode as pincode      
        from
        tbl_useraccountdetails as uAcc 
        LEFT JOIN tbl_user_address as uadd ON uadd.user_id=uAcc.user_id
        where uadd.is_permanent_address='1' and uAcc.user_id='".$user_ids[$i]['user_id']."' order by usd.id desc"; 
        $query = $this->db->query($sql);
        $data[$i] = $query->row_array(); 
      }
      
      return $data;
    
    }
    
    function getKraAddContent($user_ids){
      $data;
      for($i=0;$i<count($user_ids);$i++){
        $sql="select * from
    (select 
      *      
        from
        tbl_user_address where is_permanent_address='0' and user_id='".$user_ids[$i]['user_id']."')
    as uadd 
        LEFT JOIN (select
        user_id as  user_id,
        address1 as peraddress1, 
        address2 as peraddress2, 
        address3 as peraddress3, 
        address4 as peraddress4, 
        state_id as perstate_id,
        pincode as perpincode
                   from tbl_user_address 
        where is_permanent_address='1' and user_id='".$user_ids[$i]['user_id']."')
    as uperadd
        ON uadd.user_id=uperadd.user_id
        order by uadd.user_id desc"; 
        $query = $this->db->query($sql);
        $data[$i] = $query->row_array(); 
      }
      
      return $data;
    
    }
    
    function getKraPriContent($user_ids){
      $data;
      for($i=0;$i<count($user_ids);$i++){
        $sql="select
        usd.fname as fname, 
        usd.mname as mname, 
        usd.lname as lname, 
    usd.fathername as fathername,
    usd.father_fname as father_fname,
    usd.father_mname as father_mname,
    usd.father_lname as father_lname,
        usd.sex as sex, 
        usd.nationality as nationality, 
        usd.dob as dob, 
        usd.pancard as pancard, 
        usd.addharcard as addharcard,
        usd.annualincome as annualincome,
    usd.occupationid as occupationid,   
        usd.marital_status as marital_status, 
        uEmail.emailaddress as emailaddress, 
        uAcc.bankname as bankname, 
        uAcc.accountnumber as accountnumber, 
        uAcc.micr_no as micr_no, 
        uAcc.ifsccode as ifsccode, 
        uAcc.accounttype as accounttype,
        usph.ph as ph,
        all_accounts_received.receive_date as receive_date,
        account_status.form_number as form_number        
        from 
        tbl_userdetails as usd 
        LEFT JOIN tbl_user_email as uEmail ON usd.id=uEmail.user_id   
        LEFT JOIN tbl_useraccountdetails as uAcc ON usd.id=uAcc.user_id
        LEFT JOIN tbl_user_ph as usph ON usd.id=usph.user_id 
        LEFT JOIN all_accounts_received ON all_accounts_received.user_id=usd.id 
        LEFT JOIN account_status ON usd.id=account_status.user_id 
        where usph.ph_type='1' and usd.id='".$user_ids[$i]['user_id']."' order by usd.id desc"; 
        $query = $this->db->query($sql);
        $data[$i] = $query->row_array(); 
      }
      
      return $data;
    
    }
    
    function getClassAddContent($user_ids){
      $data;
      for($i=0;$i<count($user_ids);$i++){
        $sql="select * from
    (select 
      tbl_user_address.user_id as  user_id,
        tbl_user_address.address1 as address1, 
        tbl_user_address.address2 as address2, 
        tbl_user_address.address3 as address3, 
        tbl_user_address.address4 as address4, 
        tbl_states.name as state_name,
        tbl_addressproof.addressproofdoc as address_proof,
        tbl_user_address.pincode as pincode
        from
        tbl_user_address left join tbl_addressproof on tbl_user_address.address_proof_id=tbl_addressproof.id 
        left join tbl_states on tbl_user_address.state_id=tbl_states.id 
        where is_permanent_address='0' and user_id='".$user_ids[$i]['user_id']."')
  as uadd 
        LEFT JOIN (select
        user_id as  user_id,
        address1 as peraddress1, 
        address2 as peraddress2, 
        address3 as peraddress3, 
        address4 as peraddress4, 
        tbl_states.name as perstate_name,
        tbl_addressproof.addressproofdoc as peraddress_proof,
        pincode as perpincode
        from tbl_user_address
        tbl_user_address left join tbl_addressproof on tbl_user_address.address_proof_id=tbl_addressproof.id 
        left join tbl_states on tbl_user_address.state_id=tbl_states.id  
        where is_permanent_address='1' and user_id='".$user_ids[$i]['user_id']."')
    as uperadd
        ON uadd.user_id=uperadd.user_id
        order by uadd.user_id desc"; 
        $query = $this->db->query($sql);
        $data[$i] = $query->row_array(); 
      }
      
      return $data;
    
    }
    
    function getClassPriContent($user_ids){
      $data;
      for($i=0;$i<count($user_ids);$i++){
        $sql="select
        usd.fname as fname, 
        usd.mname as mname, 
        usd.lname as lname, 
    usd.father_fname as father_fname,
    usd.father_mname as father_mname,
    usd.father_lname as father_lname,
        usd.sex as sex, 
        usd.marital_status as marital_status, 
        usd.pancard as pancard,
        usd.nationality as nationality, 
        usd.dob as dob,  
        usd.addharcard as addharcard,
        usd.annualincome as annualincome,
    usd.occupationid as occupationid, 
    tbl_occupation.occupationname as occupationname,  
        uEmail.emailaddress as emailaddress,
        usph.ph as ph,
        all_accounts_received.receive_date as receive_date,
        account_status.form_number as form_number        
        from 
        tbl_userdetails as usd 
        LEFT JOIN tbl_user_email as uEmail ON usd.id=uEmail.user_id
        LEFT JOIN tbl_user_ph as usph ON usd.id=usph.user_id 
        LEFT JOIN all_accounts_received ON all_accounts_received.user_id=usd.id 
        LEFT JOIN account_status ON usd.id=account_status.user_id 
        LEFT JOIN tbl_occupation ON tbl_occupation.id=usd.occupationid 
        where usph.ph_type='1' and usd.id='".$user_ids[$i]['user_id']."' order by usd.id desc"; 
        $query = $this->db->query($sql);
        $data[$i] = $query->row_array(); 
      }
      
      return $data;
    
    }
    
    function getClassBankContent($user_ids){
      $data;
      for($i=0;$i<count($user_ids);$i++){
        $sql="select
        *     
        from 
        tbl_useraccountdetails as uacc 
        , tbl_states as ustates where uacc.stateid=ustates.id
        and uacc.user_id='".$user_ids[$i]['user_id']."' order by uacc.user_id desc"; 
        $query = $this->db->query($sql);
        $data[$i] = $query->row_array(); 
      }
      
      return $data;
    
    }
    
    function getSeries(){
      $query = $this->db->get('series');
  return $query->row_array();
    }
    
    function incrRef(){
      $query = $this->db->get('series');
  $data = $query->row_array();
  $data['senderReference']++;
  $userDetailsQry="UPDATE `series` SET
                    `senderReference`='".$data['senderReference']."' where id='1'";
       $this->db->query($userDetailsQry); 
       
       return true;
    }
    
    function incrBatch(){
      $query = $this->db->get('series');
  $data = $query->row_array();
  $data['batchNumber']++;
  $userDetailsQry="UPDATE `series` SET
                    `batchNumber`='".$data['batchNumber']."' where id='1'";
       $this->db->query($userDetailsQry); 
       
       return true;
    }
  
  /************************** Get Payout Exchange_Type Filter List ***************************/
  function getExcgFilterList($excgVal){
     $getExcgList="SELECT * FROM `tbl_payopt` WHERE `exchange_type` = '".$excgVal."'";
    // exit();
    $query = $this->db->query($getExcgList); 
        return $query->result_array();
  }

  function insertToken($user_id){   
    $token = substr(sha1(rand()), 0, 30); 
    $date = date('Y-m-d');
    $query = "UPDATE `tbl_userdetails` SET `pwd_reset_token`='".$token."',`token_created_at`='".$date."' where id='".$user_id."'";
    $this->db->query($query);
     return $token; 
  }

  function send_reset_pwd_email($user_id){
    $this->load->model('Users');
    $user_data=$this->Users->getUserDetails($user_id);
    $token = $this->Account_model->insertToken($user_id);
    $email = $user_data->emailaddress;
    $data['to_email']= $email;
    $data['from_email'] = 'contact@asthatrade.com';
    $data['from_name']='Astha Credit & Securities';
    $base_url = base_url();
    $url= $base_url."Site/resetPassword/token/".$token;  
    $data['template_name']='forgot-password';
    $data['template_content']=array( array());
    $data['merge_vars']=array(
        array(
          'rcpt'=>$email,
          'vars'=>array(
              array(
                'name'=>'FIRST_NAME',
                'content'=>$user_data->fname
                ),
              array(
                'name'=>'RESET_PWD_LINK',
                'content'=>$url
                )
            )
          )
      );
    $data['subject']="AsthaTrade Password Reset";
    $this->Account_model->send_email($data);
  }

  function send_email($data){
    $this->load->config('mandrill');
    $this->load->library('guzzle');
    $this->load->library('mandrill');
    if (!empty($data['attachment_path'])){
      $attachment = $this->mandrill->getAttachmentStruct($data['attachment_path']);  
    }
    $mandrill_ready = NULL;
    try {
      $this->mandrill->init( $this->config->item('mandrill_api_key') );
      $mandrill_ready = TRUE;
    } catch(Mandrill_Exception $e) {
      log_message("DEBUG",print_r($e,TRUE));
      $mandrill_ready = FALSE;
    }        
    if( $mandrill_ready ) {
      $template_name = $data['template_name'];
      $template_content = $data['template_content'];
      $mail = array(
        'subject' => $data['subject'],
        'from_email' => $data['from_email'],
        'from_name' =>$data['from_name'] ,
        'to' => array(array('email' => $data['to_email'] )),
        'merge'=> true,
        'merge_language' => 'mailchimp',
        'merge_vars' => $data['merge_vars']
        );
      if(!empty($attachment)){
        $mail['attachments'] = array($attachment);
        array_push($mail,$attachments);
      }
      $result = $this->mandrill->messages_send_template($template_name,$template_content,$mail);
    }
  }

  function isTokenValid($token){
    $q = $this->db->get_where('tbl_userdetails', array(
            'tbl_userdetails.pwd_reset_token' => $token), 1);
    if($this->db->affected_rows() > 0){
            $row = $q->row();             
            $created = $row->token_created_at;
            $createdTS = strtotime($created);
            $today = date('Y-m-d'); 
            $todayTS = strtotime($today);
            
            if($createdTS != $todayTS){
                return false;
            }
            return true;
            
        }else{
            return false;
        }
  }

  function idFromToken($token){
   $q = $this->db->get_where('tbl_userdetails', array(
            'tbl_userdetails.pwd_reset_token' => $token), 1);
    $row = $q->row();
    return $row->id;
  }

  function sendReferralInformation($data){
    
    $sql = "select * from tbl_userdetails tu join tbl_user_email te on tu.id = te.user_id where tu.user_code = '".$data['client_id']."';";
    $otherdb = $this->load->database('cdsl', TRUE);
    $query = $otherdb->query($sql);
    $rows = $query->row_array();
    $data['to_email']=$data['friend_email'];
    $data['from_email']='contact@asthatrade.com';
    $data['from_name']= "Astha Credit & Securities";
    $data['template_content']=array(array());
    $data["mobile_no"] = $data['friend_ph'];
    if(count($rows) == 0){
      $data['merge_vars']=array(
        array(
          'rcpt'=>$data['to_email'],
          'vars'=>array(
              array(
                'name'=>'FRIEND_NAME',
                'content'=>$data['friend_name']
                ),
              array(
                'name'=>'NAME',
                'content'=>'A friend of yours '
                ),
              array(
                'name'=>'REFERRAL_C',
                'content'=>$data['client_id']
                )
            )
          )
      );
      $data['template_name']='referral-details';
      $data['subject']="Your friend has requested you to join him on AsthaTrade.com ";
      $data['message']='You have been referred to AsthaTrade.com. We provide highest margin on NSE & MCX Trades. Open an account now by clicking on the link: https://asthatrade.com'; 
    }else{
      $data['merge_vars']=array(
        array(
          'rcpt'=>$data['to_email'],
          'vars'=>array(
              array(
                'name'=>'FRIEND_NAME',
                'content'=>$data['friend_name']
                ),
              array(
                'name'=>'NAME',
                'content'=>$rows['fname']
                ),
              array(
                'name'=>'REFERRAL_C',
                'content'=>$rows['referral_id']
                )
            )
          )
      );
      $data['template_name']='referral-details';
      $data['subject']=$rows['fname']." has requested you to join him on AsthaTrade.com ";
      $data['message']='You have been referred to AsthaTrade.com by '.$rows['fname'].'. We provide highest margin on NSE & MCX Trades. Open an account now by clicking on the link: https://asthatrade.com/?c='.$rows['referral_id'];
    }
    $this->send_email($data);
    $this->send_sms($data);
  }

  function sendEquityForm($user_id){
    $sql = "select ue.emailaddress, usd.fname,CONCAT(usd.fname,' ',usd.lname) as name, acp.pdf_file_path as pdf_file_path from tbl_userdetails usd left join tbl_user_email ue on usd.id=ue.user_id left join tbl_account_pay acp on usd.id = acp.user_id where acp.account_type = 1 and usd.id = ".$user_id;
    $query = $this->db->query($sql);
    $row = $query->row();
    $data['to_email'] = $row->emailaddress;
    $data['from_email']="contact@asthatrade.com";
    $data['from_name']= "Astha Credit & Securities";
    $data['subject']="AsthaTrade NSE Equity Account Opening Form";
    $data['template_name']='form-download';
    $data['template_content']=array(array());
    $data['merge_vars']=array(
        array(
          'rcpt'=>$row->emailaddress,
          'vars'=>array(
              array(
                'name'=>'FIRST_NAME',
                'content'=>$row->fname
                ),
              array(
                'name'=>'EXCHANGE',
                'content'=>'NSE Equity and F&O'
                )
            )
          )
      );
    
    $this->load->helper('path');
    $a = FCPATH.$row->pdf_file_path; 
    $data['attachment_path'] = set_realpath($a);
    $this->Account_model->send_email($data);
  }
  function sendCommodityForm($user_id){
    $sql = "select ue.emailaddress, usd.fname,CONCAT(usd.fname,' ',usd.lname) as name, acp.pdf_file_path as pdf_file_path from tbl_userdetails usd left join tbl_user_email ue on usd.id=ue.user_id left join tbl_account_pay acp on usd.id = acp.user_id where acp.account_type = 2 and usd.id = ".$user_id;
    $query = $this->db->query($sql);
    $row = $query->row();
    $data['to_email'] = $row->emailaddress;
    $data['from_email']="contact@asthatrade.com";
    $data['from_name']= "Astha Credit & Securities";
    $data['subject']="AsthaTrade MCX Account Opening Form";
    $data['template_name']='form-download';
    $data['template_content']=array(array());
    $data['merge_vars']=array(
        array(
          'rcpt'=>$row->emailaddress,
          'vars'=>array(
              array(
                'name'=>'FIRST_NAME',
                'content'=>$row->fname
                ),
              array(
                'name'=>'EXCHANGE',
                'content'=>'MCX Commodity'
                )
            )
          )
      );
    $this->load->helper('path');
    $a = FCPATH.$row->pdf_file_path; 
    $data['attachment_path'] = set_realpath($a);
    $this->Account_model->send_email($data);
  }

  function sendWelcomeEmail($user_id){
    $this->load->model('Users');
    $user_data=$this->Users->getUserDetails($user_id);
    $data['to_email']= $user_data->emailaddress;
    $data['to_name']= $user_data->fname." ".$lname;
    $data['from_email']='contact@asthatrade.com';
    $data['from_name']="Satish Chandra Gupta";
    $data['subject']="Thank you for signing up";
    $data['template_name']='welcome-signup';
    $data['template_content']=array(array());
    $data['merge_vars']=array(
      array(
        'rcpt'=>$data['to_email'],
        'vars'=>array(
          array(
            'name'=>'FIRST_NAME',
            'content'=>$user_data->fname
            )
          )
        )
      );
    $this->Account_model->send_email($data);
  }

  function send_sms($data){
    $authKey = "52654A4x9IZ77Xu0h58be7ea2";
    $mobileNumber =$data["mobile_no"];
    $senderId = "asthat";
    $message = $data["message"];
    $route = 4;
    $senderId = "asthat";    
    $route = "4";
    $postData = array(
      'authkey' => $authKey,
      'mobiles' => $mobileNumber,
      'message' => $message,
      'sender' => $senderId,
      'route' => $route
      );
    $url="https://control.msg91.com/api/sendhttp.php";
    $this->load->library('guzzle');
    $client     = new GuzzleHttp\Client(array('verify'=>false));
    try{
      $gz_response = $client->request( 'POST', $url,['query'=> $postData]);
      $response = $gz_response->getBody()->getContents();
      log_message("debug",print_r($postData,TRUE));
      log_message("debug",print_r($response,TRUE));
      $info=array('http_code'=>$gz_response->getStatusCode());
      $error='';
    }catch (GuzzleHttp\Exception\BadResponseException $e) {
      $response=$e->getResponse();
      $response = $response->getBody()->getContents();
      log_message("DEBUG",print_r($response,TRUE));
      $info=array('http_code'=>500);
      $error ='';
    }
  }

  function sendPayOutReqConf($data){
                 
    $data["message"] = urlencode('We have received your pay-out request for INR '.$data["amt"].". Payment will be processed after 6 PM on working days subject to fund sufficiency");
    $this->Account_model->send_sms($data);
      
  }
} 
?>
