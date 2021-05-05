<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Support extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function __construct()
    {
        parent::__construct();
		//$this->load->helper('url');
        
        //$this->load->model('news_model');
    } 
     
	public function index()
    {
        $this->body = 'support/support'; // passing body to function. change this for different views.
        $this->layout();
    }
    
    public function openTicket()
    {
        $this->load->model('supports');
        $data['getCategory']=$this->supports->getMainCategory();
        //$data['getSubCategory']=$this->supports->getCategory(1);
        //print_r($data['viewAlbumList']);
        $data['totGetCategory'] = count($data['getCategory']);
        for($i=0;$i<$data['totGetCategory'];$i++){
            //echo $data['getCategory'][$i]['issue_category'];
            $data['getSubCategory'][$i]=$this->supports->getSubCategory($data['getCategory'][$i]['id']);
            $data['totGetSubCategory'][$i]=count($data['getSubCategory'][$i]);
            /*for($j=0;$j<$data['totGetSubCategory'][$i];$j++){
                echo $data['getSubCategory'][$i][$j]['issue_category'];
            }*/            
        }
        $this->body = 'support/openTicket';
        $this->load->view($this->body, $data, true);
        $this->layout();
    }
    
    function addTicket(){
        $this->load->model('supports');
        if($this->input->post('fileSubmit')){
                
                $issueCategory=$this->input->post('issue_category');
                $supportName=$this->input->post('support_name');
                $supportEmail=$this->input->post('support_email');
                $supportClientCode=$this->input->post('support_client_code');
                $mobileNo=$this->input->post('mobile_no');
                //$registeredMobileNo=$this->input->post('registered_mobile_no');
                $subject=$this->input->post('subject');
                $details=$this->input->post('details');
                
                $getEmailId=$this->supports->getEmailId($supportEmail);
                if($getEmailId['user_id']!=0){
                    //$getUserDetails=$this->supports->getEmailId($getEmailId['user_id']);
                    $insertUser=$getEmailId['user_id'];   
                } else {
                    $insertUser=$this->supports->insertDetails($supportName,$supportEmail,$mobileNo);
                }
                //echo $insertUser; exit('AAA');
                //print_r($getEmailId);        exit('A');
                
                
                if(!empty($_FILES['userFiles']['name'])){
                
                $_FILES['userFile']['name'] = $_FILES['userFiles']['name'];
                $_FILES['userFile']['type'] = $_FILES['userFiles']['type'];
                $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'];
                $_FILES['userFile']['error'] = $_FILES['userFiles']['error'];
                $_FILES['userFile']['size'] = $_FILES['userFiles']['size'];

                $uploadPath = 'uploads/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
                //$config['max_size']    = '100';
                //$config['max_width'] = '1024';
                //$config['max_height'] = '768';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('userFiles')){
                    $fileData = $this->upload->data(); 
                    
                }
                $uploadData['attachment'] = $fileData['file_name'];
                        
                
                
                }
                $uploadData['user_id'] = $insertUser;
                $uploadData['issue_subject'] = $subject;
                $uploadData['issue_details'] = $details;
                $uploadData['issue_created_date'] = date("Y-m-d H:i:s");
                $uploadData['issue_status_id'] = '1';
                $uploadData['issue_category_id'] = $issueCategory;
                $uploadData['issue_modified_date'] = '';
                
                $insertIssue = $this->supports->insertIssue($uploadData);
                
                
                
                $statusMsg = $insertIssue?'Ticket Submitted successfully and your Ticket id is '.$insertIssue.'.':'Some problem occurred, please try again.';
                    $this->session->set_flashdata('statusMsg',$statusMsg);
                 redirect('/support/openTicket');
                
            }
        
    }
    
    function addReply(){
        $this->load->model('supports');
        //if($this->input->post('fileSubmit')){
                
                $addReply=$this->input->post('add_reply'); //exit('AAAA');
                $userId=$this->input->post('user_id');
                $issueId=$this->input->post('issue_id');
                
                
                if(!empty($_FILES['userFiles']['name'])){
                
                $_FILES['userFile']['name'] = $_FILES['userFiles']['name'];
                $_FILES['userFile']['type'] = $_FILES['userFiles']['type'];
                $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'];
                $_FILES['userFile']['error'] = $_FILES['userFiles']['error'];
                $_FILES['userFile']['size'] = $_FILES['userFiles']['size'];

                $uploadPath = 'uploads/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('userFile')){
                    $fileData = $this->upload->data(); 
                    
                }
                        
                $uploadData['reply_attachment'] = $fileData['file_name'];
                
                
                }
                
                $uploadData['user_id'] = $userId;
                $uploadData['issue_id'] = $issueId;
                $uploadData['reply_details'] = $addReply;
                $uploadData['reply_created_date'] = date("Y-m-d H:i:s");
                
                
                $insertIssue = $this->supports->insertIssueReply($uploadData);
                
                
                $statusMsg = $insertIssue?'Ticket Submitted successfully and your Ticket id is '.$insertIssue.'.':'Some problem occurred, please try again.';
                    $this->session->set_flashdata('statusMsg',$statusMsg);
                 redirect('/support/viewStatus/'.$issueId);
                
            //}
        
    }
    
    public function checkTicket()
	{
		$this->body = 'support/checkTicket'; // passing body to function. change this for different views.
        $this->layout();
	}
    
    function checkStatus(){
        
        $this->load->model('supports');
        $data['email_id']=$this->input->post('email_id_search');
        $data['ticket_id']=$this->input->post('ticket_id_search');
        $uId=$this->supports->getEmailId($data['email_id']);
        $data['getUserId']=$uId['user_id'];
        $data['getTicket']=$this->supports->getTicket($data);
        
        
        $this->body = 'support/checkStatus';
        $this->load->view($this->body, $data, true);
        $this->layout();    
    }
    
    function viewStatus($id){
        $this->load->model('supports');
        
        $data['getTicketDetails']=$this->supports->getTicketDetails($id);
        $data['getTicketReplyDetails']=$this->supports->getTicketReplyDetails($id);
        
        
        $this->body = 'support/viewStatus';
        $this->load->view($this->body, $data, true);
        $this->layout();
    }
    
    function getName(){
        $this->load->model('supports');
        $data['code']=$this->input->post('code');
        $data['result']=$this->supports->getName($data['code']);
        echo json_encode($data['result']);
    }
    
    
	
    
    
    
	
}
