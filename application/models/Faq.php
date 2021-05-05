<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Faq extends CI_Model
{
    function __construct(){
          // Call the Model constructor
          parent::__construct();
    }

     //get the username & password from tbl_usrs
    function getFaqCategory(){
         //exit('AAA');
          $sql = "select * from tbl_faq_category";
          $query = $this->db->query($sql);
          return $query->result_array();
    }
     
    function insertFaq($data = array()){
        $insert = $this->db->insert('tbl_faq',$data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    

 function getFaq($id){
        $sql="select fcat.id as catId, faq.id as faqId, fcat.faq_category_name as catName, faq.faq_question as ques, faq.faq_answer as ans,faq.faq_created_date fcd, faq.faq_modify_date fmd from tbl_faq as faq, tbl_faq_category as fcat where faq.faq_category_id=fcat.id and faq.faq_category_id='".$id."'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	
	function getFaqAllDetails(){
		$this->db->select('*')->from('tbl_faq_category  tfc')->join('tbl_faq tf', 'tf.faq_category_id = tfc.id', 'left');
		$result = $this->db->get();
		return $result->result_array();
	}

	function getFaqCategoryDetails()
	{
		$this->db->select('*');
		$this->db->from('tbl_faq_category');
		$result = $this->db->get();
		return $result->result_array();
	}
	
	/* function getFaqAllDetailsCategoryWise($id) 
	{
		$this->db->select('*');
		$this->db->from('tbl_faq');
		$this->db->where('faq_category_id',$id);		
		$result = $this->db->get();
		return $result->result_array();
	} */
	
	function  deleteFaq($id) //Delete Faq
	{
		$this->db->where('id',$id);
		$this->db->delete('tbl_faq');
		if($this->db->affected_rows()){	echo 1;	}
	}
	
	function editFaq($id,$data) //Edit Faq
	{
		$this->db->where('id', $id);
		$this->db->update('tbl_faq', $data);
		if($this->db->affected_rows()){	return 1;	}
	}

}
?>