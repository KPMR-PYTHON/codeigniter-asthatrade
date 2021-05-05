<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model
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
        $sql="select * from tbl_user_email where emailaddress = '" . $email . "'";
        $query = $this->db->query($sql);
			if($query->num_rows()>0)
			{
				return 1;
			}
			else
			{
				return 2;
			}
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
         $sql = "select uemail.emailaddress, usd.id, CONCAT( usd.fname,  ' ', usd.mname,  ' ', usd.lname ) as userName,usd.pay_type, usd.status, usd.accounttype, usd.reg_status from tbl_user_email as uemail, tbl_userdetails as usd where uemail.user_id=usd.id and usd.id = '" . $userId . "' and usd.status = '1'";    
         
          
          $query = $this->db->query($sql);
            if($query->num_rows()>0){
                return $query->row_array();
            }else{
                return 0;
            }
     }
	 
	function getUserDetailsByEmail($email, $uType){
        
        if($uType==1){
            $sql = "select usd.pass_salt as pass_salt from tbl_user_email as uemail, tbl_userdetails as usd where uemail.user_id=usd.id and uemail.emailaddress = '" . $email . "' and usd.status = '1' and usd.accounttype='4'";    
        } else if($uType==2){
            $sql = "select usd.pass_salt as pass_salt from tbl_user_email as uemail, tbl_userdetails as usd where uemail.user_id=usd.id and uemail.emailaddress = '" . $email . "' and usd.status = '1'";    
        }
        $query = $this->db->query($sql);
        if($query->num_rows()>0){
            return $query->row_array();
        }else{
            return 0;
        }
           
    }
	
	function getPassword($user_id)
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
		$sql_password_update = "UPDATE `tbl_userdetails` SET `pass_salt`='".$new_salt ."',`pass_hash`='".$new_haspassword."' WHERE `id`=".$user_id ;
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
}
?>