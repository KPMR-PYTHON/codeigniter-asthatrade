<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Common extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     public function record_count_viewCallMeBack() {
        return $this->db->count_all("tbl_enquiry");
     }

    // Fetch data according to per_page limit.
   // public function fetch_data_viewCallMeBack($limit, $page) {
		 public function fetch_data_viewCallMeBack() {
        
       /*  $page=$limit*($page-1);
        $this->db->limit($limit,$page); */
        
        $this->db->order_by("id", "desc");
        $query = $this->db->get("tbl_enquiry");
    if ($query->num_rows() > 0) {
        foreach ($query->result() as $row) {
            $data[] = $row;
        }

        return $data;
    }
        return false;
    }
    
    function chnangeCallStatus($data){
        $sql="update tbl_enquiry set is_called='".$data['status']."' where id='".$data['id']."'";
        $this->db->query($sql);
        if($this->db->affected_rows() >=0){
          return 1; // your code
        }else{
          return 0; // your code. 
        }
        
    }
    
    public function record_count_viewContactUs() {
        return $this->db->count_all("tbl_contact");
     }

    // Fetch data according to per_page limit.
    //public function fetch_data_viewContactUs($limit, $page) {
	public function fetch_data_viewContactUs() {
        
        /* $page=$limit*($page-1);
        $this->db->limit($limit,$page);
         */
        $this->db->order_by("id", "desc");
        $query = $this->db->get("tbl_contact");
    if ($query->num_rows() > 0) {
        foreach ($query->result() as $row) {
            $data[] = $row;
        }

        return $data;
    }
        return false;
    }
    
    function chnangeCallStatusContact($data){
        $sql="update tbl_contact set status='".$data['status']."' where id='".$data['id']."'";
        $this->db->query($sql);
        if($this->db->affected_rows() >=0){
          return 1; // your code
        }else{
          return 0; // your code. 
        }
        
    }
    
    public function record_count_viewPayOut() {
        return $this->db->count_all("tbl_payopt");
     }

    // Fetch data according to per_page limit.
    //public function fetch_data_viewPayOut($limit, $page) {
         public function fetch_data_viewPayOut() {
       // $page=$limit*($page-1);
       // $this->db->limit($limit,$page);
        
        $this->db->order_by("id", "desc");
        $query = $this->db->get("tbl_payopt");
    if ($query->num_rows() > 0) {
        foreach ($query->result() as $row) {
            $data[] = $row;
        }

        return $data;
    }
        return false;
    }
    
    function changeStatusViewPayOut($data){
        $sql="update tbl_payopt set status='".$data['status']."' where id='".$data['id']."'";
        $this->db->query($sql);
        if($this->db->affected_rows() >=0){
          return 1; // your code
        }else{
          return 0; // your code. 
        }
        
    }
    
    public function record_count_viewNeftStatus() {
        return $this->db->count_all("tbl_fund_status");
     }

    // Fetch data according to per_page limit.
    //public function fetch_data_viewNeftStatus($limit, $page) {
	public function fetch_data_viewNeftStatus() {
        
        /* $page=$limit*($page-1);
        $this->db->limit($limit,$page); */
        
        $this->db->order_by("id", "desc");
        $query = $this->db->get("tbl_fund_status");
    if ($query->num_rows() > 0) {
        foreach ($query->result() as $row) {
            $data[] = $row;
        }

        return $data;
    }
        return false;
    }
    
    function changeStatusViewNeftStatus($data){
        $sql="update tbl_fund_status set status='".$data['status']."' where id='".$data['id']."'";
        $this->db->query($sql);
        if($this->db->affected_rows() >=0){
          return 1; // your code
        }else{
          return 0; // your code. 
        }
        
    }
     
     
     
}
?>