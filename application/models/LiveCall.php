<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LiveCall extends CI_Model
{
	function __construct()
    {
		// Call the Model constructor
        parent::__construct();
	}
	
	function getList($limit,$page)
	{

		$page=$limit*($page-1);
		$sql = "select * from `live_call` ORDER BY `id` DESC  limit $page,$limit";
		$query = $this->db->query($sql);
                if ($query->num_rows() > 0) {
       	          foreach ($query->result() as $row) {
                  $data[] = $row;
                }
                return $data;
            }
                return false;
	}
	
	function totCalls()
	{
		$sql = "select count(*) as total from `live_call`";
		$query = $this->db->query($sql);
		$getrows=$query->row_array(); 
		if($getrows['total'])
           	{	
	               return $getrows['total'];
           	}
                return false;
		
	}
	
	function getCallCategory(){
          $sql = "select * from live_call_category";
          $query = $this->db->query($sql);
          return $query->result_array();
    	}
     
        function insertCall($data = array()){
          $insert = $this->db->insert('live_call',$data);
          $insert_id = $this->db->insert_id();
          $sql = "select * from live_call_category where id=".$data['type'];
          $query = $this->db->query($sql);
          $getrows=$query->row_array();
          
          $botToken = "326197265:AAEyYrDT51LJfZe-F_ACNwlsuxP_crI_PWU";
	  $chat_id = "@AsthaTradeCalls";
	  $message = $getrows['live_call_category_name']." : ".$data['news'];
	  $bot_url    = "https://api.telegram.org/bot$botToken/";
	  $url = $bot_url."sendMessage?chat_id=".$chat_id."&text=".urlencode($message);
	  file_get_contents($url);
          return $insert_id;
        }
        
        function  deleteCall($id) //Delete Faq
	{
		$this->db->where('id',$id);
		$this->db->delete('live_call');
		if($this->db->affected_rows()){	echo 1;	}
	}
	
	function editCall($id,$data) //Edit Faq
	{
		$this->db->where('id', $id);
		$this->db->update('live_call', $data);
		$sql = "select * from live_call_category where id=".$data['type'];
          	$query = $this->db->query($sql);
          	$getrows=$query->row_array();
		if($this->db->affected_rows()){	
		  $botToken = "326197265:AAEyYrDT51LJfZe-F_ACNwlsuxP_crI_PWU";
		  $chat_id = "@AsthaTradeCalls";
		  $message = $getrows['live_call_category_name']." : ".$data['update_call'];
		  $bot_url    = "https://api.telegram.org/bot$botToken/";
		  $url = $bot_url."sendMessage?chat_id=".$chat_id."&text=".urlencode($message);
		  file_get_contents($url);
		  return 1;	}
	}
	
	function getCalls($id){
        $sql="select lcat.id as catId, live_call.id as lId, lcat.live_call_category_name as catName, live_call.news as news, live_call.update_call as update_call, live_call.created_at as lcd from live_call, live_call_category as lcat where live_call.type=lcat.id and live_call.type='".$id."'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
?>