<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Supports extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     //get the username & password from tbl_usrs
     function getMainCategory()
     {
          $sql = "select * from tbl_issue_category where parent_id=0";
          $query = $this->db->query($sql);
          return $query->result_array();
     }
     
     function getSubCategory($id){
          $sql = "select * from tbl_issue_category where parent_id='".$id."'";
          $query = $this->db->query($sql);
          return $query->result_array();
     }
     
     function getEmailId($email){
          $sql = "select user_id from tbl_user_email where emailaddress='".$email."'";
          $query = $this->db->query($sql);
          if($query->num_rows()>0){
                return $query->row_array();
          } else {
                return 0;
          }
     }
     
    function insertDetails($supportName,$supportEmail,$mobileNo){
        $userDetailsQry="insert into tbl_userdetails set fname='".$supportName."'";
        $this->db->query($userDetailsQry); 
        $user_id=$this->db->insert_id();
        $userPhDetailsQry="INSERT INTO `tbl_user_ph` SET 
                          `user_id`=".$user_id.",
                          `ph`='".$mobileNo."',
                          `ph_type`='1'";  
         $this->db->query($userPhDetailsQry);
         $userEmailDetailsQry="INSERT INTO `tbl_user_email` SET 
                          `user_id`=".$user_id.",
                          `emailaddress`='".$supportEmail."'";  
         $this->db->query($userEmailDetailsQry); 
         return $user_id;  
    }
     
    function insertIssue($data = array()){
        $insert = $this->db->insert('tbl_issue',$data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    
    function insertIssueReply($data = array()){
        $insert = $this->db->insert('tbl_issue_reply',$data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    
    function insertAttachment($data = array()){
        $insert = $this->db->insert('tbl_issue_attachment',$data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    
   // function getsupport($limit,$page)
	function getsupport()
    {
        //$page=$limit*($page-1);
        //$sql="select * from tbl_issue iss LEFT JOIN tbl_issue_category isscat ON iss.issue_category_id=isscat.id order by issue_id desc limit $page,$limit";
		$sql="select * from tbl_issue iss LEFT JOIN tbl_issue_category isscat ON iss.issue_category_id=isscat.id order by issue_id desc";
          $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
                return false;
    }
    
    function totgetSupport()
    {
        $sql="select * from tbl_issue iss LEFT JOIN tbl_issue_category isscat ON iss.issue_category_id=isscat.id order by issue_id desc";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 1) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }

                return $data;
            }
                return false;   
    }
    
    
    
    
    function getTicket($data = array()){
         
        if($data['email_id']==''){
            $email = "";
        }else{
            $email = " and iss.user_id = ".$data['getUserId']."  ";
        }
        if($data['ticket_id']==0){
            $ticketId = "";
        }else{
            $ticketId = " and iss.issue_id = '".$data['ticket_id']."'  ";
        }
         
        
        $sql = "select * from 
                tbl_issue iss LEFT JOIN tbl_issue_category isscat ON iss.issue_category_id=isscat.id where 1 $ticketId $email order by issue_id desc";
        //print_r ($sql);
        $query = $this->db->query($sql);
        return $query->result_array();
    }             
    
    
    
    function getTicketDetails($id){
         
        $sql = "select 
            CONCAT( usd.fname,  ' ', usd.mname,  ' ', usd.lname ) as userName, 
            iss.issue_id as ticketNo, 
            iss.issue_id as issueId, 
            usd.id as userId, 
            iss.issue_created_date as issueCreatedDate, 
            usd.user_code as userCode, 
            email.emailaddress as email, 
            ph.ph as phone, 
            iss.issue_subject as issueSubject, 
            iss.issue_details as issueDetails, 
            iss.attachment as attachment 
             
            from tbl_issue iss 
            LEFT JOIN tbl_issue_category isscat ON iss.issue_category_id=isscat.id 
            LEFT JOIN tbl_userdetails usd ON usd.id=iss.user_id 
            LEFT JOIN tbl_user_email email ON email.user_id=iss.user_id 
            LEFT JOIN tbl_user_ph ph ON ph.user_id=iss.user_id 
            
            where iss.issue_id='".$id."' and ph.ph_type=1";
        //print_r ($sql);
        $query = $this->db->query($sql);
        return $query->row_array();
    }
   function getTicketReplyDetails($id){
         
        $sql = "select 
            CONCAT( usd.fname,  ' ', usd.mname,  ' ', usd.lname ) as userName, 
            iss.reply_created_date as replyCreatedDate, 
            iss.reply_details as replyDetails, 
            iss.reply_attachment as replyAttachment 
             
            from tbl_issue_reply iss 
            LEFT JOIN tbl_userdetails usd ON usd.id=iss.user_id 
            
            where iss.issue_id='".$id."' order by iss.id desc";
        //print_r ($sql);
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    function checkCode($code){
        $sql="select id from tbl_userdetails where user_code='".$code."'";
        $query = $this->db->query($sql); 
        if($query->num_rows()>0){
            return 1;
        }else{
            return 0;
        }    
    }
    
    function checkUser($email){
        $sql="select user_id from tbl_user_email where emailaddress='".$email."'";
        $query = $this->db->query($sql); 
        if($query->num_rows()>0){
            return $query->row_array();
        }else{
            return 0;
        }    
    }
    
    function insertUsers($data){
        //$sql="insert into tbl_userdetails set fname='".$data['fname']."', pancard=, user_code=, active_from=, inactive_from=";
        $userDetailsQry="insert into tbl_userdetails set fname='".$data['fname']."', pancard='".$data['pan']."', user_code='".$data['code']."', active_from='".$data['activeFrom']."', inactive_from='".$data['inActiveFrom']."'";
        $this->db->query($userDetailsQry); 
        $user_id=$this->db->insert_id();
        $userPhDetailsQry="INSERT INTO `tbl_user_ph` SET 
                          `user_id`=".$user_id.",
                          `ph`='".$data['mobile']."',
                          `ph_type`='1'";  
         $this->db->query($userPhDetailsQry);
         $userEmailDetailsQry="INSERT INTO `tbl_user_email` SET 
                          `user_id`=".$user_id.",
                          `emailaddress`='".$data['email']."'";  
         $this->db->query($userEmailDetailsQry); 
         return $user_id;
    }
    
    function getName($code){
        $sql="select usd.fname, ph.ph, email.emailaddress from tbl_userdetails as usd 
        left join tbl_user_ph as ph on ph.user_id=usd.id
        left join tbl_user_email as email on email.user_id=usd.id
        where user_code='".$code."' and ph.ph_type='1'
        ";
        $query = $this->db->query($sql);
        if($query->num_rows()>0){
            return $query->row_array();
        }else{
            return 0;
        }
    }
     
}
?>
