<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Model
{
	function __construct()
    {
		// Call the Model constructor
        parent::__construct();
	}
	
	function getAllData()
	{
		$this->db->select('*');
		$this->db->from('test');
		$query = $this->db->get();
		return $query->result();
	}
	
	function checkEmail($email)
	{
      //  $sql="select * from tbl_user_email where emailaddress = '" . $email . "'";
		$sql ="SELECT usd.`id`,usd.`isotpvalid`
									FROM `tbl_userdetails` AS usd
									LEFT JOIN `tbl_user_email` AS uemail ON usd.id = uemail.user_id
									WHERE uemail.emailaddress = '".$email."'"	;
        
		$query = $this->db->query($sql);
			if($query->num_rows()>0)
			{
				//return 1;
				$data['user_id'] = $query->row()->id;
				$data['isotpvalid'] =  $query->row()->isotpvalid;
				
				return $data; // 0 For OTP is not valid
			}
			else if($query->num_rows()>0)
			{
				// return 2; 
				$data['user_id'] = $query->row()->id;
				$data['isotpvalid'] =  $query->row()->isotpvalid;
				return $data; // 1 For OTP is valid
				
			} 
			else if($query->num_rows()== '')
			{
				return 2;
			}
    }
	
	function saveNewPassword($new_pass)
	{
		
	}
	
	function generateHashPassword($password)
    {

        // salt generation
            $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
            $length = 64;
            $string = '';
            for ($max = mb_strlen($characters) - 1, $i = 0; $i < $length; ++ $i)
            {
                $string .= mb_substr($characters, mt_rand(0, $max), 1);
            }

        // end salt generation

            $passMd5=md5($password);
            $base64=base64_encode($passMd5);
            $hashPassword = hash_hmac("sha512", $base64, $string);
            $hashEncode=base64_encode($hashPassword);

            for ( $i = 0; $i < 100; $i ++ )
            {
                $hashEncode = hash_hmac("sha512", $hashEncode, $string);
            }
            return array($string,$hashEncode);
    }
	
	public function validateHashPassword($salt,$password)
    {

            $passMd5=md5($password);
            $base64=base64_encode($passMd5);
            $hashPassword = hash_hmac("sha512", $base64, $salt);
            $hashEncode=base64_encode($hashPassword);

            for ( $i = 0; $i < 100; $i ++ )
            {
                $hashEncode = hash_hmac("sha512", $hashEncode, $salt);
            }
            //echo $hashEncode;
            //die();
            return $hashEncode;
    }
	
	function getEmailUser($email){
        $sql="select email.user_id from tbl_user_email as email, tbl_userdetails as usd where usd.id=email.user_id and email.emailaddress = '" . $email . "' and usd.isotpvalid='0'";
        $query = $this->db->query($sql);
        if($query->num_rows()>0){
                return $query->row_array();
          } else {
                return 0;
          }
    }
	function get_user_by_id($userId)
    {
         $sql = "select uemail.emailaddress, usd.id, CONCAT( usd.fname,  ' ', usd.mname,  ' ', usd.lname ) as userName, usd.status,usd.reg_status,uap.payment_status,uap.payment_type  from tbl_user_email as uemail, tbl_userdetails as usd,tbl_account_pay as uap where uemail.user_id=usd.id and usd.id = '" . $userId . "' and usd.status = '1'";    
         
          
          $query = $this->db->query($sql);
            if($query->num_rows()>0){
                return $query->row_array();
            }else{
                return 0;
            }
    }
	 
	function getUserDetailsByEmail($email, $uType){
        
        if($uType==1){  //$uType=1 for Admin 
            $sql = "select usd.pass_salt as pass_salt,uap.account_type as uAccType from tbl_user_email as uemail, tbl_userdetails as usd, tbl_account_pay as uap where uemail.user_id=usd.id and uap.user_id=usd.id and uemail.emailaddress = '" . $email . "' and usd.status = '1' and uap.account_type='4'";    
        } else if($uType==2){ //$uType=2 for Normal User 
            $sql = "select usd.pass_salt as pass_salt from tbl_user_email as uemail, tbl_userdetails as usd where uemail.user_id=usd.id and uemail.emailaddress = '" . $email . "' and usd.status = '1'";    
        }
        $query = $this->db->query($sql);
        if($query->num_rows()>0){
            return $query->row_array();
        }else{
            return 0;
        }
           
    }
	
	function get_user($usr, $hash_pwd, $uType)
     {
         //exit('AAA');
         if($uType==1){ //$uType=1 for Admin 
            $sql = "select uemail.emailaddress, usd.id, CONCAT( usd.fname,  ' ', usd.mname,  ' ', usd.lname ) as userName, uap.account_type as account_type, usd.status, usd.reg_status from tbl_user_email as uemail, tbl_userdetails as usd, tbl_account_pay as uap  where uemail.user_id=usd.id and uap.user_id=usd.id and uemail.emailaddress = '" . $usr . "' and usd.pass_hash = '" . $hash_pwd . "' and usd.status = '1'";    
         } else if($uType==2){ //$uType=2 for Normal User 
            $sql = "select uemail.emailaddress,uph.ph, usd.id,usd.fname,usd.mname,usd.lname , CONCAT( usd.fname,  ' ', usd.mname,  ' ', usd.lname ) as userName, usd.status,  usd.reg_status from tbl_user_email as uemail,tbl_user_ph as uph ,tbl_userdetails as usd where uemail.user_id=usd.id and uph.user_id=usd.id and uemail.emailaddress = '" . $usr . "' and usd.pass_hash = '" . $hash_pwd . "' and usd.status = '1'"; 
         }
          
          $query = $this->db->query($sql);
            if($query->num_rows()>0){
                return $query->row_array();
            }else{
                return 0;
            }
     }
	
	/****************** For Reset Password and Password change from Profile ******************/
	
	function getPassword($user_id) // For Reset Password get old Password
	{
		$sql_password = "select `pass_salt`,`pass_hash` from `tbl_userdetails` where `id`=".$user_id;
		$result_password = $this->db->query($sql_password);
		if($result_password->num_rows()>0)
		{
            return $result_password->row_array();
		}
		else
		{
            return 0;
        }
		
	} 

	function resetPassword($user_id,$new_salt,$new_haspassword)	
	{
		$sql_password_update = "UPDATE `tbl_userdetails` SET `pwd_reset_token`='',`token_created_at`='',`pass_salt`='".$new_salt ."',`pass_hash`='".$new_haspassword."' WHERE `id`=".$user_id ;
		$update_password = $this->db->query($sql_password_update);
		if ($update_password)
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}
	
	function checkEmailWithDb($email)  // Email ID Check With DB for Reset Password 
	{
	$sql_chk_email = "SELECT `user_id`,`emailaddress`
					  FROM `tbl_user_email`
					  WHERE `emailaddress` = '".$email."'";
		$is_email_exists = $this->db->query($sql_chk_email);
			if($is_email_exists->num_rows()>0)
			{
				return $is_email_exists->row_array();
			}
			else
			{
				return 0;
			}
	}
	
	
	/**************************** Get Mobile Number and Update Mobile Number for OTP Validation if OTP is is not valid *************************************/
	
	function getMobileNo($user_id,$ph_no){
		$get_ph_no = $this->db->get_where('tbl_user_ph', array('user_id' => $user_id));
		
		if($get_ph_no->num_rows()>0){
		$data = array('ph'=>$ph_no);
		/* echo $user_id;
		exit(); */
		$this->db->where('user_id',$user_id);
		$this->db->update('tbl_user_ph',$data);
		}
		
		
	}
	
	/******************************** Get User Details For Open An Account *******************************************/
	
	function getUserDetails($user_id){
		$this->db->select('usd.fname,usd.lname,uemail.emailaddress,uph.ph');
		$this->db->from('tbl_userdetails usd');
		$this->db->join('tbl_user_email uemail', 'usd.id = uemail.user_id', 'left');
		$this->db->join('tbl_user_ph uph', 'usd.id = uph.user_id', 'left');
		$this->db->where('usd.id', $user_id);
		
		$getEquityAccDetails = $this->db->get(); 
		
		if($getEquityAccDetails->num_rows() > 0){
		return $getEquityAccDetails->row();
		}
	}

	function getReferralCode($email_id){
		$sql = "select referral_id from tbl_userdetails tu join tbl_user_email te on tu.id=te.user_id where te.emailaddress= '".$email_id."';";
		$otherdb = $this->load->database('cdsl', TRUE);
		$query = $otherdb->query($sql);
		if($query->num_rows()>0){
			$referral_id = $query->row_array()['referral_id'];
			if(!isset($referral_id)){
							$ref_code = $this->genRefCode(7);
							$sql = "update tbl_userdetails tu join tbl_user_email te on tu.id=te.user_id SET referral_id = '".$ref_code."' where te.emailaddress= '".$email_id."';";      
			                $query = $otherdb->query($sql);
			                $sql = "select referral_id from tbl_userdetails tu join tbl_user_email te on tu.id=te.user_id where te.emailaddress= '".$email_id."';";
			                $query = $otherdb->query($sql);
			                return $query->row_array();
			            }else{
			            	return $query->row_array();
			            }
            }else{
          	return 0;
         }
	}	
	function genRefCode($length){
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
  }
	
}
?>