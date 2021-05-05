<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

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
        $this->load->library('pagination');
		$this->load->model('faq');
		$this->load->model('Account_model');
    }
    
    function is_uploaded($as_name) {
        return is_uploaded_file($_FILES [$as_name] ['tmp_name']);
    }
    
    function check_file_type($as_name) {
        $this->la_data ['file_ext'] = strtolower(pathinfo($_FILES [$as_name] ['name'], PATHINFO_EXTENSION));
        if ($this->la_data ['file_ext'] == 'csv' || $this->la_data ['file_ext'] == 'xls' || $this->la_data ['file_ext'] == 'txt' || $this->la_data ['file_ext'] == 'tsv') {
            return true;
        } else {
            return false;
        }
    }
	
    public function index()
    {
        if($this->session->userdata('adminId')){
            $this->middle = 'admin/dashboard'; // passing middle to function. change this for different views.
            $this->adminLayout();    
        } else {
            redirect('/admin/login');
        }
        
    }
    
    
    
	public function dashboard()
	{
		if($this->session->userdata('adminId')){
            $this->middle = 'admin/dashboard'; // passing middle to function. change this for different views.
            $this->adminLayout();    
        } else {
            redirect('/admin/login');
        }
        
	}
    
    function login(){
        $this->load->view('admin/login');    
    }
    
    function loginUser(){
       $this->load->model('Users');
       $email=trim($this->input->post('email'));
       $password=trim($this->input->post('password'));
       $userDetails=$this->Users->getUserDetailsByEmail($email,1);
       $userValidate=$this->Users->validateHashPassword($userDetails['pass_salt'],$password);
       //print_r($userValidate);  exit('AA');
       $user=$this->Users->get_user($email,$userValidate,1);
       $this->session->set_userdata("adminId",$user['id']);
       $this->session->set_userdata("adminName",$user['userName']);
       $this->session->set_userdata("adminEmail",$user['emailaddress']);
       $this->session->set_userdata("adminUserType",$user['account_type']);
       $this->session->set_userdata("adminStatus",$user['status']);
       
       $userCount=count($user['id']);
       if($userCount==1){
            echo 1;    
       } else {
           echo 0;
       } 
    }
    
    function logout() {
        $this->session->sess_destroy();
        redirect('admin/login');
    }
    
       
    
    
    function viewSupport(){
        if($this->session->userdata('adminId')){
            $this->load->model('common');
            $this->load->model('supports');
            $this->load->model('Account_model');
            $data = array();
            
            $data["base_url"] = base_url() . "admin/viewSupport";
            $data["totgetSupport"] = $this->supports->totgetSupport();
            $data["total_rows"] = count($data["totgetSupport"]);
            $data["per_page"] = 10;
            $data['use_page_numbers'] = TRUE;
            $data['num_links'] = $data["total_rows"];
            $data['cur_tag_open'] = '&nbsp;<a class="current">';
            $data['cur_tag_close'] = '</a>';
            $data['next_link'] = 'Next';
            $data['prev_link'] = 'Previous';

            $this->pagination->initialize($data);
            if($this->uri->segment(3)){
            $page = ($this->uri->segment(3)) ;
            }
            else{
            $page = 1;
            }
           // $data["getTicket"] = $this->supports->getsupport($data["per_page"], $page);
			$data["getTicket"] = $this->supports->getsupport();
            $str_links = $this->pagination->create_links();
            $data["links"] = explode('&nbsp;',$str_links );
            
            $this->middle = 'admin/viewSupport';
            $this->load->view($this->middle, $data, true);
            $this->adminLayout();
        } else {
            redirect('/admin/login');    
        }
    }
    
    function searchTicket(){
        if($this->session->userdata('adminId')){
            $this->load->model('supports');
            $data=array();
            $data['email_id']=$this->input->post('email_id_search');
        $data['ticket_id']=$this->input->post('ticket_id_search');
        $uId=$this->supports->getEmailId($data['email_id']);
        $data['getUserId']=$uId['user_id'];
            $data['getTicket']=$this->supports->getTicket($data);
            /*$this->middle = 'admin/viewSupport';
            $this->load->view($this->middle, $data, true);
            $this->adminLayout();*/
            $this->load->view('admin/ajax/searchTicket', $data);
        } else {
            redirect('/admin/login');
        }
    }
    
    function viewStatus($id){
        $this->load->model('supports');
        
        $data['getTicketDetails']=$this->supports->getTicketDetails($id);
        $data['getTicketReplyDetails']=$this->supports->getTicketReplyDetails($id);
        
        
        
        $this->middle = 'admin/viewStatus';
        $this->load->view($this->middle, $data, true);
        $this->adminLayout();
    }
    
    function addReply(){
        $this->load->model('supports');
        //if($this->input->post('fileSubmit')){
                
                $addReply=$this->input->post('add_reply');
                $userId=$this->session->userdata('adminId');
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
                 redirect('/admin/viewStatus/'.$issueId);
                
            //}
        
    }
    
    function uploadCode(){
        $data=array();
        $this->middle = 'admin/uploadCode';
        $this->load->view($this->middle, $data, true);
        $this->adminLayout();
    }
    
    function addCode(){
        $this->load->model('supports');
        if(!empty($_FILES['userFiles']['name'])){
                
                $_FILES['userFile']['name'] = $_FILES['userFiles']['name'];
                $_FILES['userFile']['type'] = $_FILES['userFiles']['type'];
                $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'];
                $_FILES['userFile']['error'] = $_FILES['userFiles']['error'];
                $_FILES['userFile']['size'] = $_FILES['userFiles']['size'];

                $uploadPath = 'uploads/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'xls';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('userFile')){
                    $fileData = $this->upload->data(); 
                    
                }
                $this->la_data ['uploaded-data'] = $this->upload->data();         
                $this->load->library('excel_reader');
                            $this->excel_reader->read($this->la_data ['uploaded-data'] ['full_path']);                         
                            $worksheet = $this->excel_reader->sheets[0];
                            $numRows = $worksheet['numRows']; // ex: 14
                            //echo "<br>";
                            $numCols = $worksheet['numCols']; // ex: 4
                            //echo "<br>";
                            $cells = $worksheet['cells']; // the 1st row are usually the field's name
                            
                            $checkData = true;
                            
                            for ($i = 2; $i <= $numRows; $i++) {
                            if($cells[$i][1]!=''){ 
                                for ($j = 1; $j <= $numCols; $j++){
                                       
                                        //$data_array[$i][$j] = !empty($cells[$i][$j]) ? $cells[$i][$j] : '';
                                        $data_array[$i][$j] = (!empty($cells[$i][$j])) ? $cells[$i][$j] : '';
                                        //echo $data_array[$i][$j]."<br>"; 
                                        if( $j==1 || $j==2 || $j==3 || $j==4 )
                                        {
                                            if($data_array[$i][1] == '' && $data_array[$i][2] == '' && $data_array[$i][3] == '' && $data_array[$i][4] == ''){
                                                $checkData = false;
                                                    
                                            }
                                        }
                                        
                                        
                                        //check reference code
                                        
                                        
                                        
                                     }
                                    
                                    
                                          
                                }
                                
                                       
                            }
                            
                            if($checkData){
                                //exit('D');
                                for ($i = 2; $i <= $numRows; $i++) {
                                    
                                    $code = trim($cells[$i][1]);   
                                    $name = trim($cells[$i][2]);                            
                                    $mobile =trim($cells[$i][3]);                            
                                    $email = trim($cells[$i][4]);                            
                                    $pan = trim($cells[$i][5]);                            
                                    $activeFrom = trim($cells[$i][6]);                            
                                    $inActiveFrom = trim($cells[$i][7]);                            
                                    
                                    
                                    
                                    $checkCode=$this->supports->checkCode($code);    //exit('A');
                                    
                                    if($checkCode==0){
                                        //exit('C');
                                        $getUserId=$this->supports->checkUser($email);          
                                        if($getUserId!=0){
                                            //exit('A');
                                            $datacontact = array(
                                                'fname' => $name,
                                                'code' => $code,
                                                'email' => $email,
                                                'mobile' => $mobile,
                                                'pan' => $pan,
                                                'activeFrom' => $activeFrom,
                                                'inActiveFrom' => $inActiveFrom,
                                            );
                                            $updateUser=$this->supports->updateUsers($data,$getUserId['user_id']);        
                                        } else {
                                            //exit('B');
                                            $datacontact = array(
                                                'fname' => $name,
                                                'code' => $code,
                                                'email' => $email,
                                                'mobile' => $mobile,
                                                'pan' => $pan,
                                                'activeFrom' => $activeFrom,
                                                'inActiveFrom' => $inActiveFrom,
                                            );
                                            $updateUser=$this->supports->insertUsers($datacontact);
                                        }
                                        
                                    } 
                                    
                                }//add gift recipient for loop end
                                $this->session->set_flashdata('message', 'Code Added Successfully');
                                redirect('admin/uploadCode');
                            } else {
                                $data['message'] = "Please follow the rules.";
                            }
                
                
                }
    }
  	
	function alluserlist()
    {
        //$this->load->model('users');
        $this->load->model('users');
        $data['allUserList']=$this->users->getUserdetails();
        /*$data['total_rec']=count($this->users->getUserdetails());
         for($i=0;$i<$data['total_rec'];$i++){
            echo $data['total_rec'][$i]['id'];
            $data['getUserId'][$i]=$this->faq->getFaq($data['allUserList'][$i]['id']);
            $data['totgetUserId'][$i]=count($data['getUserId'][$i]);        
        }*/
        
        //$data['allUserList']=$this->users->getAddressList($data['allUserList']['id']);
        //print_r($data['allUserList']->id); 
              
        $this->middle = 'admin/alluserlist'; // passing middle to function. change this for different views.
        $this->load->view($this->middle, $data, true);
        $this->adminLayout(); 
    }
    function viewEnquiry(){
        if($this->session->userdata('adminId')){
            $this->load->model('Account_model');
            $data=array();
            $data['getEnquiry']=$this->Account_model->getEnquiry($data);
            $this->middle = 'admin/viewEnquiry';
            $this->load->view($this->middle, $data, true);
            $this->adminLayout();
        } else {
            redirect('/admin/login');
        }
    }
    
    function viewCallMeBack(){
        if($this->session->userdata('adminId')){
            $this->load->model('common');
            $data = array();
            $data["base_url"] = base_url() . "admin/viewCallMeBack";
            $data["total_rows"] = $this->common->record_count_viewCallMeBack();
            $data["per_page"] = 10;
            $data['use_page_numbers'] = TRUE;
            $data['num_links'] = $data["total_rows"];
            $data['cur_tag_open'] = '&nbsp;<a class="current">';
            $data['cur_tag_close'] = '</a>';
            $data['next_link'] = 'Next';
            $data['prev_link'] = 'Previous';

            $this->pagination->initialize($data);
            if($this->uri->segment(3)){
            $page = ($this->uri->segment(3)) ;
            }
            else{
            $page = 1;
            }
           // $data["viewCallMeBack"] = $this->common->fetch_data_viewCallMeBack($data["per_page"], $page);
			$data["viewCallMeBack"] = $this->common->fetch_data_viewCallMeBack();
			$str_links = $this->pagination->create_links();
            $data["links"] = explode('&nbsp;',$str_links );

            // View data according to array.
            $this->middle = 'admin/viewCallMeBack';
            $this->load->view($this->middle, $data, true);
            $this->adminLayout();
        } else {
            redirect('/admin/login');
        }
    }
    
    function changeStatus(){
        $this->load->model('common');
        $data['id']=trim($this->input->post('id'));
        $data['status']=trim($this->input->post('status'));
        $changeStatus=$this->common->chnangeCallStatus($data);
        echo $changeStatus;
    }
    
    //function viewContactUs(){
	function viewContactUs(){
        if($this->session->userdata('adminId')){
            $this->load->model('common');
            $data = array();
            $data["base_url"] = base_url() . "admin/viewContactUs";
            $data["total_rows"] = $this->common->record_count_viewContactUs();
            $data["per_page"] = 10;
            $data['use_page_numbers'] = TRUE;
            $data['num_links'] = $data["total_rows"];
            $data['cur_tag_open'] = '&nbsp;<a class="current">';
            $data['cur_tag_close'] = '</a>';
            $data['next_link'] = 'Next';
            $data['prev_link'] = 'Previous';

            $this->pagination->initialize($data);
            if($this->uri->segment(3)){
            $page = ($this->uri->segment(3)) ;
            }
            else{
            $page = 1;
            }
            //$data["viewCallMeBack"] = $this->common->fetch_data_viewContactUs($data["per_page"], $page);
			$data["viewCallMeBack"] = $this->common->fetch_data_viewContactUs();
			$str_links = $this->pagination->create_links();
            $data["links"] = explode('&nbsp;',$str_links );

            // View data according to array.
            $this->middle = 'admin/viewContactUs';
            $this->load->view($this->middle, $data, true);
            $this->adminLayout();
        } else {
            redirect('/admin/login');
        }
    }
    
    function changeStatusViewContactUs(){
        $this->load->model('common');
        $data['id']=trim($this->input->post('id'));
        $data['status']=trim($this->input->post('status'));
        $changeStatus=$this->common->chnangeCallStatusContact($data);
        echo $changeStatus;
    }
    
    function viewPayOut(){
        if($this->session->userdata('adminId')){
            $this->load->model('common');
            $data = array();
            $data["base_url"] = base_url() . "admin/viewPayOut";
            $data["total_rows"] = $this->common->record_count_viewPayOut();
            $data["per_page"] = 10;
            $data['use_page_numbers'] = TRUE;
            $data['num_links'] = $data["total_rows"];
            $data['cur_tag_open'] = '&nbsp;<a class="current">';
            $data['cur_tag_close'] = '</a>';
            $data['next_link'] = 'Next';
            $data['prev_link'] = 'Previous';

            $this->pagination->initialize($data);
            if($this->uri->segment(3)){
            $page = ($this->uri->segment(3)) ;
            }
            else{
            $page = 1;
            }
          //  $data["viewCallMeBack"] = $this->common->fetch_data_viewPayOut($data["per_page"], $page);
			$data["viewCallMeBack"] = $this->common->fetch_data_viewPayOut();
            $str_links = $this->pagination->create_links();
            $data["links"] = explode('&nbsp;',$str_links );

            // View data according to array.
            $this->middle = 'admin/viewPayOut';
            $this->load->view($this->middle, $data, true);
            $this->adminLayout();
        } else {
            redirect('/admin/login');
        }
    }
    
    function changeStatusViewPayOut(){
        $this->load->model('common');
        $data['id']=trim($this->input->post('id'));
        $data['status']=trim($this->input->post('status'));
        $changeStatus=$this->common->chnangeCallStatusPayout($data);
        echo $changeStatus;
    }
    
    function viewNeftStatus(){
        if($this->session->userdata('adminId')){
            $this->load->model('common');
            $data = array();
            $data["base_url"] = base_url() . "admin/viewNeftStatus";
            $data["total_rows"] = $this->common->record_count_viewNeftStatus();
            $data["per_page"] = 10;
            $data['use_page_numbers'] = TRUE;
            $data['num_links'] = $data["total_rows"];
            $data['cur_tag_open'] = '&nbsp;<a class="current">';
            $data['cur_tag_close'] = '</a>';
            $data['next_link'] = 'Next';
            $data['prev_link'] = 'Previous';

            $this->pagination->initialize($data);
            if($this->uri->segment(3)){
            $page = ($this->uri->segment(3)) ;
            }
            else{
            $page = 1;
            }
           // $data["viewCallMeBack"] = $this->common->fetch_data_viewNeftStatus($data["per_page"], $page);
			$data["viewCallMeBack"] = $this->common->fetch_data_viewNeftStatus();
			$str_links = $this->pagination->create_links();
            $data["links"] = explode('&nbsp;',$str_links );

            // View data according to array.
            $this->middle = 'admin/viewNeftStatus';
            $this->load->view($this->middle, $data, true);
            $this->adminLayout();
        } else {
            redirect('/admin/login');
        }
    }
    
    function changeStatusViewNeftStatus(){
        $this->load->model('common');
        $data['id']=trim($this->input->post('id'));
        $data['status']=trim($this->input->post('status'));
        $changeStatus=$this->common->chnangeCallStatusNeft($data);
        echo $changeStatus;
    }
    
    function equityOnline(){
        if($this->session->userdata('adminId')){
            $this->load->model('common');
            $this->load->model('users');
            $this->load->model('Account_model');
            $data = array();
            
            $data["base_url"] = base_url() . "admin/equityOnline";
            $data["totGetEquityOnline"] = $this->Account_model->totGetEquityOnline();
            $data["total_rows"] = count($data["totGetEquityOnline"]);
            $data["per_page"] = 10;
            $data['use_page_numbers'] = TRUE;
            $data['num_links'] = $data["total_rows"];
            $data['cur_tag_open'] = '&nbsp;<a class="current">';
            $data['cur_tag_close'] = '</a>';
            $data['next_link'] = 'Next';
            $data['prev_link'] = 'Previous';

            $this->pagination->initialize($data);
            if($this->uri->segment(3)){
            $page = ($this->uri->segment(3)) ;
            }
            else{
            $page = 1;
            }
            $data["getEquityOnline"] = $this->Account_model->getEquityOnline($data["per_page"], $page);
            $str_links = $this->pagination->create_links();
            $data["links"] = explode('&nbsp;',$str_links );
            
            $this->middle = 'admin/equityOnline';
            $this->load->view($this->middle, $data, true);
            $this->adminLayout();
        } else {
            redirect('/admin/login');    
        }
    }
    
    function equityOffline(){
        if($this->session->userdata('adminId')){
            $this->load->model('common');
            $this->load->model('users');
            $this->load->model('Account_model');
            $data = array();
            
            $data["base_url"] = base_url() . "admin/equityOffline";
            $data["totGetEquityOffline"] = $this->Account_model->totGetEquityOffline();
            $data["total_rows"] = count($data["totGetEquityOffline"]);
            $data["per_page"] = 10;
            $data['use_page_numbers'] = TRUE;
            $data['num_links'] = $data["total_rows"];
            $data['cur_tag_open'] = '&nbsp;<a class="current">';
            $data['cur_tag_close'] = '</a>';
            $data['next_link'] = 'Next';
            $data['prev_link'] = 'Previous';

            $this->pagination->initialize($data);
            if($this->uri->segment(3)){
            $page = ($this->uri->segment(3)) ;
            }
            else{
            $page = 1;
            }
            $data["getEquityOffline"] = $this->Account_model->getEquityOffline($data["per_page"], $page);
            $str_links = $this->pagination->create_links();
            $data["links"] = explode('&nbsp;',$str_links );
            
            $this->middle = 'admin/equityOffline';
            $this->load->view($this->middle, $data, true);
            $this->adminLayout();
        } else {
            redirect('/admin/login');    
        }
    }
    
    function onlinePending(){
        if($this->session->userdata('adminId')){
            $this->load->model('common');
            $this->load->model('users');
            $this->load->model('Account_model');
            $data = array();
            
            $data["base_url"] = base_url() . "admin/onlinePending";
            $data["totGetOnlinePending"] = $this->Account_model->totGetOnlinePending();
            $data["total_rows"] = count($data["totGetOnlinePending"]);
            $data["per_page"] = 10;
            $data['use_page_numbers'] = TRUE;
            $data['num_links'] = $data["total_rows"];
            $data['cur_tag_open'] = '&nbsp;<a class="current">';
            $data['cur_tag_close'] = '</a>';
            $data['next_link'] = 'Next';
            $data['prev_link'] = 'Previous';

            $this->pagination->initialize($data);
            if($this->uri->segment(3)){
            $page = ($this->uri->segment(3)) ;
            }
            else{
            $page = 1;
            }
            $data["getOnlinePending"] = $this->Account_model->getOnlinePending($data["per_page"], $page);
            $str_links = $this->pagination->create_links();
            $data["links"] = explode('&nbsp;',$str_links );
            
            $this->middle = 'admin/onlinePending';
            $this->load->view($this->middle, $data, true);
            $this->adminLayout();
        } else {
            redirect('/admin/login');    
        }
    }
    
    function commodityOnline(){
        if($this->session->userdata('adminId')){
            $this->load->model('common');
            $this->load->model('users');
            $this->load->model('Account_model');
            $data = array();
            
            $data["base_url"] = base_url() . "admin/commodityOnline";
            $data["totGetCommodityOnline"] = $this->Account_model->totGetCommodityOnline();
            $data["total_rows"] = count($data["totGetCommodityOnline"]);
            $data["per_page"] = 10;
            $data['use_page_numbers'] = TRUE;
            $data['num_links'] = $data["total_rows"];
            $data['cur_tag_open'] = '&nbsp;<a class="current">';
            $data['cur_tag_close'] = '</a>';
            $data['next_link'] = 'Next';
            $data['prev_link'] = 'Previous';

            $this->pagination->initialize($data);
            if($this->uri->segment(3)){
            $page = ($this->uri->segment(3)) ;
            }
            else{
            $page = 1;
            }
            $data["getCommodityOnline"] = $this->Account_model->getCommodityOnline($data["per_page"], $page);
            $str_links = $this->pagination->create_links();
            $data["links"] = explode('&nbsp;',$str_links );
            
            $this->middle = 'admin/commodityOnline';
            $this->load->view($this->middle, $data, true);
            $this->adminLayout();
        } else {
            redirect('/admin/login');    
        }
    }
    
    function commodityOffline(){
        if($this->session->userdata('adminId')){
            $this->load->model('common');
            $this->load->model('users');
            $this->load->model('Account_model');
            $data = array();
            
            $data["base_url"] = base_url() . "admin/commodityOffline";
            $data["totGetCommodityOffline"] = $this->Account_model->totGetCommodityOffline();
            $data["total_rows"] = count($data["totGetCommodityOffline"]);
            $data["per_page"] = 10;
            $data['use_page_numbers'] = TRUE;
            $data['num_links'] = $data["total_rows"];
            $data['cur_tag_open'] = '&nbsp;<a class="current">';
            $data['cur_tag_close'] = '</a>';
            $data['next_link'] = 'Next';
            $data['prev_link'] = 'Previous';

            $this->pagination->initialize($data);
            if($this->uri->segment(3)){
            $page = ($this->uri->segment(3)) ;
            }
            else{
            $page = 1;
            }
            $data["getCommodityOffline"] = $this->Account_model->getCommodityOffline($data["per_page"], $page);
            $str_links = $this->pagination->create_links();
            $data["links"] = explode('&nbsp;',$str_links );
            
            $this->middle = 'admin/commodityOffline';
            $this->load->view($this->middle, $data, true);
            $this->adminLayout();
        } else {
            redirect('/admin/login');    
        }
    }
    
    function onlinePendingCommodity(){
        if($this->session->userdata('adminId')){
            $this->load->model('common');
            $this->load->model('users');
            $this->load->model('Account_model');
            $data = array();
            
            $data["base_url"] = base_url() . "admin/onlinePendingCommodity";
            $data["totGetOnlinePendingCommodity"] = $this->Account_model->totGetOnlinePendingCommodity();
            $data["total_rows"] = count($data["totGetOnlinePendingCommodity"]);
            $data["per_page"] = 10;
            $data['use_page_numbers'] = TRUE;
            $data['num_links'] = $data["total_rows"];
            $data['cur_tag_open'] = '&nbsp;<a class="current">';
            $data['cur_tag_close'] = '</a>';
            $data['next_link'] = 'Next';
            $data['prev_link'] = 'Previous';

            $this->pagination->initialize($data);
            if($this->uri->segment(3)){
            $page = ($this->uri->segment(3)) ;
            }
            else{
            $page = 1;
            }
            $data["getOnlinePendingCommodity"] = $this->Account_model->getOnlinePendingCommodity($data["per_page"], $page);
            $str_links = $this->pagination->create_links();
            $data["links"] = explode('&nbsp;',$str_links );
            
            $this->middle = 'admin/onlinePendingCommodity';
            $this->load->view($this->middle, $data, true);
            $this->adminLayout();
        } else {
            redirect('/admin/login');    
        }
    }
    
    
    
    function viewUserDetails($id){
        if($this->session->userdata('adminId')){
            $this->load->model('Account_model');
            $data=array();
			
            $data['getAllDetails']=$this->Account_model->getAllDetails($id);
			
			$data['getAccountPayDetails']=$this->Account_model->getAccountPayDetails($id);
			$data['totCountOfAccountPay'] = count($data['getAccountPayDetails']);
			
			/* echo "<pre>";
			print_r($data['getAllDetails']);
			print_r($data['getAccountPayDetails']);
			echo "</pre>"; 
			exit();  */
			
            $data['getAddressPresent']=$this->Account_model->getAddressPresent($id);
            $data['getAddressPermanent']=$this->Account_model->getAddressPermanent($id);
            $data['getPhMob']=$this->Account_model->getPhMob($id);
            $data['getPhHome']=$this->Account_model->getPhHome($id);
            $data['getPhOfc']=$this->Account_model->getPhOfc($id);
            $data['getPhFax']=$this->Account_model->getPhFax($id);
            
            $this->middle = 'admin/viewUserDetails';
            $this->load->view($this->middle, $data, true);
            $this->adminLayout();
        } else {
            redirect('/admin/login');    
        }    
    }
    
    function addCodeModal(){
        if($this->session->userdata('adminId')){
            $this->load->model('Account_model');
            $data=array();
            $data['user_id']=trim($this->input->post('user'));
            $client_code=trim($this->input->post('client_code'));
            $data['status']=trim($this->input->post('status'));
            if(!empty($client_code)){
            $data['client_code']=$client_code;    
            }
            
            $data['type']=trim($this->input->post('type'));
            $data['addClientCode']=$this->Account_model->addClientCode($data);
            if($data['type']==1){
                redirect('/admin/viewAllUserDetails');    
            }
            
        } else {
            redirect('/admin/login');    
        }
            
    }
	
	
	  
   /******************************** FAQ Add **************************************/ 
    function addFaq(){
        $this->load->model('faq');
        $data['getFaqCategory']=$this->faq->getFaqCategory();
        //$data['getTicketReplyDetails']=$this->supports->getTicketReplyDetails($id);
        $this->middle = 'admin/addFaq';
        $this->load->view($this->middle, $data, true);
        $this->adminLayout();    
	}
	
	function addNewFaq(){
		if($this->input->post()){
		$data['faq_category_id'] = trim($this->input->post('faq_cat'));
		$data['faq_question'] = trim($this->input->post('faq_ques'));
		$data['faq_answer'] = trim($this->input->post('faq_answers'));
		$data['faq_created_date']= date('Y-m-d');
		$data['faq_modify_date'] = '0000-00-00';
		$newFaqAdd = $this->faq->insertFaq($data);
		if($newFaqAdd){$this->session->set_flashdata('faq_add_success', 'FAQ Added Successfully.');redirect('admin/addFaq');}
		else{$this->session->set_flashdata('faq_add_faied', 'Please Add FAQ After Sometimes.');redirect('admin/addFaq');}
		}
	}
    /***************************** FAQ View  ************************************/
	   function viewFaq(){
       if($this->session->userdata('adminId')){
       //$this->load->model('Faq');
        $data['getFaqCategory']=$this->faq->getFaqCategory();
        $data['totGetFaqCategory']=count($data['getFaqCategory']);
        for($i=0;$i<$data['totGetFaqCategory'];$i++){
            $data['getFaq'][$i]=$this->faq->getFaq($data['getFaqCategory'][$i]['id']);
            $data['totGetFaq'][$i]=count($data['getFaq'][$i]);        
        }
        $this->middle = 'admin/viewFaq'; // passing middle to function. change this for different views.
        $this->load->view($this->middle, $data, true);
        $this->adminLayout();  
       }
       else{redirect('/admin/login');}
    }
	/*********************************** FAQ Delete *********************************/
	function deleteFaq()
	{
        $faq_id = trim($this->input->post('faq_id'));
		$faq_delete = $this->faq->deleteFaq($faq_id);       
		if($faq_delete){ echo 1;}	  
    }  
	/****************************** FAQ Edit ******************************************/
	function editFaq()
	{
		$faq_id = trim($this->input->post('faq_id'));
		$data['faq_category_id'] = trim($this->input->post('faq_cat_id'));
		$data['faq_question'] = trim($this->input->post('faq_ques'));
		$data['faq_answer'] = trim($this->input->post('faq_answers'));
		$data['faq_modify_date'] = date('Y-m-d');
		$faq_edit = $this->faq->editFaq($faq_id,$data);
		if($faq_edit == 1){$this->session->set_flashdata('faq_update_success', "FAQ Updated Successfully.");redirect('admin/viewFaq');}
		else{$this->session->set_flashdata('faq_update_failed', "Please Update FAQ After Sometimes.");redirect('admin/viewFaq');}
	}
	/************************** Sub Broker Request View ******************************/
	function viewSubBrokerRequest(){
	if($this->session->userdata('adminId')){
        $this->load->model('common');
            $this->load->model('Account_model');            
            //$data['getReferralList'] = $this->Account_model->getReferralList();
            $data = array(); 
            $data["base_url"] = base_url() . "admin/viewSubBrokerRequest";
            $data["totSubBrokerRequestList"] = $this->Account_model->totSubbrokerRequest(); 
            $data["total_rows"] = count($data["totSubBrokerRequestList"]);
            $data["per_page"] =5;
            $data['use_page_numbers'] = TRUE;
            $data['num_links'] = $data["total_rows"];
            $data['cur_tag_open'] = '&nbsp;<a class="current">';
            $data['cur_tag_close'] = '</a>';
            $data['next_link'] = 'Next';
            $data['prev_link'] = 'Previous';
            $this->pagination->initialize($data);
            if($this->uri->segment(3)){
            $page = ($this->uri->segment(3)) ;
            }
            else{
            $page = 1;
            }
            //$data["getSubbrokerRequest"] = $this->Account_model->getSubbrokerRequest($data["per_page"], $page);
			$data["getSubbrokerRequest"] = $this->Account_model->getSubbrokerRequest();
            $str_links=$this->pagination->create_links();
            $data["links"] = explode('&nbsp;',$str_links );            
            $this->middle = 'admin/viewSubBrokerRequest';
            $this->load->view($this->middle, $data, true);
            $this->adminLayout();
            
        }else {
            redirect('/admin/login');    
        }
    }
   
	/********************************* View All Referral *********************************/
	function viewAllReferral()
	{
		if($this->session->userdata('adminId')){
            $this->load->model('common');
            $this->load->model('Account_model');            
			//$data['getReferralList'] = $this->Account_model->getReferralList();
            $data = array(); 
            $data["base_url"] = base_url() . "admin/viewAllReferral";
            $data["totGetReferralList"] = $this->Account_model->totgetReferralList(); 
            $data["total_rows"] = count($data["totGetReferralList"]);
            $data["per_page"] =10;
            $data['use_page_numbers'] = TRUE;
            $data['num_links'] = $data["total_rows"];
            $data['cur_tag_open'] = '&nbsp;<a class="current">';
            $data['cur_tag_close'] = '</a>';
            $data['next_link'] = 'Next';
            $data['prev_link'] = 'Previous';
            $this->pagination->initialize($data);
            if($this->uri->segment(3)){
            $page = ($this->uri->segment(3)) ;
            }
            else{
            $page = 1;
            }
            //$data["getReferralList"] = $this->Account_model->getReferralList($data["per_page"], $page);
			$data["getReferralList"] = $this->Account_model->getReferralList();
            $str_links=$this->pagination->create_links();
            $data["links"] = explode('&nbsp;',$str_links );            
            $this->middle = 'admin/viewReferralList';
            $this->load->view($this->middle, $data, true);
            $this->adminLayout();
            
		}else {
            redirect('/admin/login');    
        }
		
	}
	
	
	
	
	/*************************************************** All User List ****************************************/
	
	function viewAllUserDetails(){
	if($this->session->userdata('adminId')){	
		$this->load->model('common');
        $this->load->model('Account_model');
		$data = array(); 
		$data["base_url"] = base_url() . "admin/viewAllUserDetails";
            $data["totGetAllUserList"] = $this->Account_model->totgetAllUserList(); 
            $data["total_rows"] = count($data["totGetAllUserList"]);
            $data["per_page"] =50;
            $data['use_page_numbers'] = TRUE;
            $data['num_links'] = $data["total_rows"];
            $data['cur_tag_open'] = '&nbsp;<a class="current">';
            $data['cur_tag_close'] = '</a>';
            $data['next_link'] = 'Next';
            $data['prev_link'] = 'Previous';
            $this->pagination->initialize($data);
            if($this->uri->segment(3)){
            $page = ($this->uri->segment(3)) ;
            }
            else{
            $page = 1;
            }
		
		
		//$data['getAllUserList'] = $this->Account_model->getAllUserDetails($data["per_page"], $page);
		$data['getAllUserList'] = $this->Account_model->getAllUserDetails();

		$data['totGetAllUserList'] = count($data['getAllUserList']);
		
		for($i=0;$i<$data['totGetAllUserList'];$i++){
			$data['user_id'][$i] = $data['getAllUserList'][$i]->id;
			
			//echo $data[$i]['user_id']."<br/>";
			
			$data['getAccountPayDetails'][$i] = $this->Account_model->getAccountPayDetails($data['user_id'][$i]);
			$data['totAccountPayDetails'][$i] = count($data['getAccountPayDetails'][$i]);
			
			$data['getPhNo'][$i] =  $this->Account_model->getPhMob($data['user_id'][$i]);
			
		}
		
		$str_links=$this->pagination->create_links();
		$data["links"] = explode('&nbsp;',$str_links );
		
		$this->middle = 'admin/viewAllUserList';
		$this->load->view($this->middle, $data, true);
		$this->adminLayout();
	}
	else {
            redirect('/admin/login','refresh');    
        }
	}
	
	/******************** Change Payment Status From Admin User View **************************************/
	
	function changePaymentStatus(){
		$data['user_id']=trim($this->input->post('user_id'));
		$data['account_type'] = trim($this->input->post('acc_type'));
		$data['status'] = trim($this->input->post('pay_status'));
		//print_r($data);
		//exit();
		$changePaymentStatus = $this->Account_model->changePaymentStatus($data);
		if($changePaymentStatus){
			echo 1;
		}
	}
	/**********************View All Calls ********************************************************************/

	function viewLiveCalls(){
	        if($this->session->userdata('adminId')){
	            $this->load->model('LiveCall');
	
	            $data['getCallCategory']=$this->LiveCall->getCallCategory();
	            $data['totGetCallCategory']=count($data['getCallCategory']);
	            for($i=0;$i<$data['totGetCallCategory'];$i++){
	                $data['getCalls'][$i]=$this->LiveCall->getCalls($data['getCallCategory'][$i]['id']);
	                $data['totGetCall'][$i]=count($data['getCalls'][$i]);        
	            }
	            $this->middle = 'admin/viewLiveCalls'; // passing middle to function. change this for different views.
	            $this->load->view($this->middle, $data, true);
	            $this->adminLayout();  
	            
	        }else {
	            redirect('/admin/login');    
	        }       
    	}
    
    /******************************** Live Call Add **************************************/ 
	function addLiveCall(){
		$this->load->model('LiveCall');
		$data['getCallCategory']=$this->LiveCall->getCallCategory();
		//$data['getTicketReplyDetails']=$this->supports->getTicketReplyDetails($id);
		$this->middle = 'admin/addLiveCall';
		$this->load->view($this->middle, $data, true);
		$this->adminLayout();    
	}
	
	function addNewLiveCall(){
		if($this->input->post()){
			$this->load->model('LiveCall');
			$data['type'] = trim($this->input->post('call_cat'));
			$data['news'] = trim($this->input->post('call_news'));
			$data['update_call'] = trim($this->input->post('call_update'));
			$newCallAdd = $this->LiveCall->insertCall($data);
			if($newCallAdd){
				$this->session->set_flashdata('call_add_success', 'Live Call Added Successfully.');redirect('admin/addLiveCall');
			} 
			else{
				$this->session->set_flashdata('call_add_faied', 'Please Add Live Call After Sometime.');redirect('admin/addLiveCall');
			}
		}
	}
    /*********************************** Live Call Delete *********************************/
	function deleteLiveCall(){
		$this->load->model('LiveCall');
		$call_id = trim($this->input->post('call_id'));
		$call_delete = $this->faq->deleteCall($call_id);       
		if($call_delete){ echo 1;}     
	}  
    /****************************** Live Call Edit ******************************************/
	function editLiveCall(){
		$this->load->model('LiveCall');
		$call_id = trim($this->input->post('call_id'));
		$data['type'] = trim($this->input->post('call_cat_id'));
		$data['news'] = trim($this->input->post('call_news'));
		$data['update_call'] = trim($this->input->post('call_update'));
		$call_edit = $this->LiveCall->editCall($call_id,$data);
		if($call_edit == 1){
			$this->session->set_flashdata('call_update_success', "Live Call Updated Successfully.");redirect('admin/viewLiveCalls');
		}
		else{
			$this->session->set_flashdata('call_update_failed', "Please Update Live Call After Sometime.");redirect('admin/viewLiveCalls');
		}
	}
    /****************************** Get All Account Status ******************************************/
	function allaccountstatus(){
		//$this->load->model('users');
		$this->load->model('Account_model');
		$data['allAccountStatusList']=$this->Account_model->getAllAccountStatusDetails();
		$data['totAllAccountStatusList'] = count($data['allAccountStatusList']);
		/*$data['total_rec']=count($this->users->getUserdetails());
		 for($i=0;$i<$data['total_rec'];$i++){
		    echo $data['total_rec'][$i]['id'];
		    $data['getUserId'][$i]=$this->faq->getFaq($data['allUserList'][$i]['id']);
		    $data['totgetUserId'][$i]=count($data['getUserId'][$i]);        
		}*/
		
		//$data['allUserList']=$this->users->getAddressList($data['allUserList']['id']);
		//print_r($data['allUserList']->id); 
		$this->pagination->initialize($data);
		    if($this->uri->segment(3)){
		    $page = ($this->uri->segment(3)) ;
		    }
		    else{
		    $page = 1;
		    }     
		$this->middle = 'admin/allAccountStatus'; // passing middle to function. change this for different views.
		$this->load->view($this->middle, $data, true);
		$this->adminLayout(); 
	}
    
	function editAllaccountstatus(){
		//$this->load->model('users');
		$this->load->model('Account_model');
		$data['allAccountStatusList']=$this->Account_model->getAllAccountStatusDetails();
		$data['totAllAccountStatusList'] = count($data['allAccountStatusList']);
		/*$data['total_rec']=count($this->users->getUserdetails());
		 for($i=0;$i<$data['total_rec'];$i++){
		    echo $data['total_rec'][$i]['id'];
		    $data['getUserId'][$i]=$this->faq->getFaq($data['allUserList'][$i]['id']);
		    $data['totgetUserId'][$i]=count($data['getUserId'][$i]);        
		}*/
		
		//$data['allUserList']=$this->users->getAddressList($data['allUserList']['id']);
		//print_r($data['allUserList']->id); 
		$this->pagination->initialize($data);
		    if($this->uri->segment(3)){
		    $page = ($this->uri->segment(3)) ;
		    }
		    else{
		    $page = 1;
		    }     
		$this->middle = 'admin/editAllAccountStatus'; // passing middle to function. change this for different views.
		$this->load->view($this->middle, $data, true);
		$this->adminLayout(); 
	}
	
	function updateAccStatus(){
		$this->load->model('Account_model');
		$user_id = trim($this->input->post('user_id'));
		$data['kyc_status'] = trim($this->input->post('kyc_status'));
		$data['ipv_status'] = trim($this->input->post('ipv_status'));
		$data['form_receive_status'] = trim($this->input->post('form_receive_status'));		
		$getUserAccStatus = $this->Account_model->getUserAccStatus($user_id);
		$data['equity_receive_date'] = $getUserAccStatus['equity_receive_date'];
		$data['commodity_receive_date'] = $getUserAccStatus['commodity_receive_date'];
		$data['form_number'] = $getUserAccStatus['form_number'];
		if ($getUserAccStatus['form_receive_status']!=$data['form_receive_status']){
			if($data['form_receive_status'] == '1'){
				$data['equity_receive_date'] = date('Y-m-d');
			}
			else if($data['form_receive_status'] == '2'){
				$data['commodity_receive_date'] = date('Y-m-d');
			}
			else if($data['form_receive_status'] == '3'){
				if ($getUserAccStatus['form_receive_status'] == '1'){
					$data['commodity_receive_date'] = date('Y-m-d');
				}
				else if ($getUserAccStatus['form_receive_status'] == '2'){
					$data['equity_receive_date'] = date('Y-m-d');
				}
			}
			
			if($getUserAccStatus['form_receive_status']=='0'){
				$series = $this->Account_model->getSeries();
				$series['senderReference']++;
				$insert_user_accounts_received = $this->Account_model->insert_user_accounts_received($user_id,($series['senderReference']));
				$data['form_number'] = $series['senderReference'];
				$t = $this->Account_model->incrRef();
				
			}
		}
				
		$updateUserAccStatus = $this->Account_model->updateAccStatus($user_id,$data);
		$getUpdatedAccStatus = $this->Account_model->getUserAccStatus($user_id);	
		$this->session->set_flashdata('status_update_success', "Updated Successfully");
		$ret['user_id']=$getUpdatedAccStatus['user_id'];
		$ret['equity_receive_date']=$getUpdatedAccStatus['equity_receive_date'];
				$ret['commodity_receive_date']=$getUpdatedAccStatus['commodity_receive_date'];
				$ret['kyc_status']=$getUpdatedAccStatus['kyc_status'];
				$ret['ipv_status']=$getUpdatedAccStatus['ipv_status'];				
				$ret['form_receive_status']=$getUpdatedAccStatus['form_receive_status']; // 1 = OTP Verified
			    $ret['succ']=1;
			    $ret['form_number']=$getUpdatedAccStatus['form_number'];
				//echo 1;
				echo json_encode($ret);
		/*if($call_edit == 1){
			$this->session->set_flashdata('status_update_success', "Account Status Updated Successfully");
			redirect('admin/editAllaccountstatus');
		}
		else{
			$this->session->set_flashdata('status_update_failed', "Account Status Update Failed");
			redirect('admin/editAllaccountstatus');
		}*/
	
	}
	
	function nhdlFile(){
		$this->middle = 'admin/nhdlFile';
		$data['temp'] = '1';
		$this->load->view($this->middle,$data,true);
		$this->adminLayout(); 
	}
	
	function nhdlFileDownload(){
		$this->load->library('zip');
		$data['startdate'] = $this->input->post('sdate');
		$data['enddate'] = $this->input->post('edate');
		//$data['series'] = $this->Account_model->getSeries();
		$user_ids = $this->Account_model->getUserIdsForFileDownload($data['startdate'],$data['enddate']);
		$lineCount = count($user_ids);
		$priContent = $this->Account_model->getPriContent($user_ids);
		$addContent = $this->Account_model->getAddContent($user_ids);
		
		$priFileContent = $this->getPriFileContent($priContent,$lineCount,$data['series']['batchNumber']);		
		$addFileContent = $this->getAddFileContent($addContent,$lineCount,$data['series']['batchNumber']);
		$poaFileContent = $this->getPoaFileContent($lineCount,$data['series']['batchNumber']);
		$athFileContent = $this->getAthFileContent($data['series']['batchNumber']);
		
		$newnamepri= 'content/client'.date('Ymd').'_'.$data['series']['batchNumber'].'.PRI';
		$filepri = file_put_contents($newnamepri, $priFileContent);
		
		$newnameadd= 'content/client'.date('Ymd').'_'.$data['series']['batchNumber'].'.ADD';
		$fileadd = file_put_contents($newnameadd, $addFileContent);
		
		$newnamepoa= 'content/client'.date('Ymd').'_'.$data['series']['batchNumber'].'.POA';
		$filepoa = file_put_contents($newnamepoa, $poaFileContent);
		
		$newnameath= 'content/client'.date('Ymd').'_'.$data['series']['batchNumber'].'.ATH';
		$fileath = file_put_contents($newnameath, $athFileContent);
	
		$t = $this->Account_model->incrBatch();
		
		$files_to_zip = array(
		$filepri,
		$fileadd,
		$filepoa,
		$fileath
	);
	
	/*$zipname = 'client'.date('Ymd').'_2749.zip';
	$zip = new ZipArchive;
	$zip->open($zipname, ZipArchive::CREATE);
	foreach ($files_to_zip as $file) {
	    $zip->addFile($file);
	}
	$zip->close();
	
	header('Content-Type: application/zip');
	header('Content-disposition: attachment; filename='.$zipname);
	header('Content-Length: ' . filesize($zipname));*/
	//if true, good; if false, zip creation failed
	//$result = $this->create_zip($files_to_zip,'content/client'.date('Ymd').'_2749.zip');
	
	$this->zip->read_file($newnamepri);
	$this->zip->read_file($newnameadd);
	$this->zip->read_file($newnameath);
	$this->zip->read_file($newnamepoa);
	$this->zip->download('client'.date('Ymd').'_'.$data['series']['batchNumber'].'.zip');
	
	unlink('./'.$newnamepri);
	unlink('./'.$newnameadd);
	unlink('./'.$newnameath);
	unlink('./'.$newnamepoa);
		redirect('/admin/nhdlFile');
		
	}
	
	function create_zip($files = array(),$destination = '',$overwrite = false) {
	//if the zip file already exists and overwrite is false, return false
	if(file_exists($destination) && !$overwrite) { return false; }
	//vars
	$valid_files = array();
	//if files were passed in...
	if(is_array($files)) {
		//cycle through each file
		foreach($files as $file) {
			//make sure the file exists
			if(file_exists($file)) {
				$valid_files[] = $file;
			}
		}
	}
	//if we have good files...
	if(count($valid_files)) {
		//create the archive
		$zip = new ZipArchive();
		if($zip->open($destination,$overwrite ? ZIPARCHIVE::OVERWRITE : ZIPARCHIVE::CREATE) !== true) {
			return false;
		}
		//add the files
		foreach($valid_files as $file) {
			$zip->addFile($file,$file);
		}
		//debug
		//echo 'The zip archive contains ',$zip->numFiles,' files with a status of ',$zip->status;
		
		//close the zip -- done!
		$zip->close();
		
		//check to make sure the file exists
		return file_exists($destination);
	}
	else
	{
		return false;
	}
}
	
	function getPriFileContent($pricontent,$lineCount,$batchNumber){
		$batchNumber = $this->addZeroes(8,$batchNumber);
		$header = $batchNumber.'01'.'000000'.'IN303420'.'01';
		$totRecs = $this->addZeroes(7,$lineCount);
		$header = $header.$totRecs.date('Ymd').'     ACS    '.PHP_EOL;
		$rec = '';
		
		for($i=0; $i<$lineCount; $i++){
			
			$lineNumber = $this->addZeroes(7,$i+1);
			$rec = $rec.'02'.$lineNumber.'A'.'02'.'01'.'01';
			$shortname = substr($pricontent[$i]['fname'],0,1).' '.substr($pricontent[$i]['mname'],0,1).' '.$pricontent[$i]['lname'];
			$shortname = $this->addSpaces(16,$shortname);
			$rec = $rec.$shortname;
			$occupation = $this->addZeroes(2,$pricontent[$i]['occupationid']);
			$rec = $rec.$occupation;
			$name = $pricontent[$i]['fname'].' '.$pricontent[$i]['mname'].' '.$pricontent[$i]['lname'];
			$name = $this->addSpaces(45,$name);
			$rec = $rec.$name.$this->addSpaces(205,'');
			$fathername = $pricontent[$i]['father_fname'].' '.$pricontent[$i]['father_mname'].' '.$pricontent[$i]['father_lname'];
			$fathername = $this->addSpaces(45,$fathername);
			$rec = $rec.$fathername.$this->addSpaces(368,'').'Y';
			$rec = $rec.substr($pricontent[$i]['pancard'],0,10).$this->addSpaces(172,'');
			$rec = $rec.str_replace('-', '', $pricontent[$i]['dob']).$this->addSpaces(8,'');
			$rec = $rec.'Y'.$this->addSpaces(30,$pricontent[$i]['accountnumber']);
			$rec = $rec.$this->addSpaces(35,$pricontent[$i]['bankname']).$this->addSpaces(11,$pricontent[$i]['ifsccode']);
			$rec = $rec.$this->addSpaces(24,'').'NNNNNNNNN'.$this->addSpaces(158,'');
			$rec = $rec.'YYNNN'.$this->addZeroes(11,'');
			//------------------------------ check this
			$rec = $rec.$this->addSpacesBefore(35,$pricontent[$i]['form_number']);
			$rec = $rec.$this->addSpacesBefore(35,'000000');
			//-------------------------------------
			$rec = $rec.substr($pricontent[$i]['micr_no'],0,9);
			if($pricontent[$i]['accounttype'] == '1'){
				$rec = $rec.'10';
			} else if($pricontent[$i]['accounttype'] == '2'){
				$rec = $rec.'11';
			} else{
				$rec = $rec.'13';
			}
			$rec = $rec.'NNNY'.$this->addSpaces(11,'').'00001'.$this->addSpaces(50,$pricontent[$i]['emailaddress']);
			$rec = $rec.$this->addSpaces(8,'').$this->addZeroes(13,$pricontent[$i]['ph']);
			$rec = $rec.'YNYY'.$this->addSpaces(4,'').'00000'.$this->addSpaces(62,'');
			$rec = $rec.$this->addZeroes(13,'').$this->addSpaces(8,'').'00000'.$this->addSpaces(62,'').$this->addZeroes(13,'');
			$rec = $rec.'   '.'N'.$this->addSpaces(61,'');
			$rec = $rec.PHP_EOL;
		}
		return $header.$rec;
	}
	
	function getAddFileContent($addContent,$lineCount,$batchNumber){
		$batchNumber = $this->addZeroes(8,$batchNumber);
		$header = $batchNumber.'03'.'000000'.'IN303420'.'01';
		$temp = $lineCount*2;
		$totRecs = $this->addZeroes(7,$temp);
		$header = $header.$totRecs.date('Ymd').'     ACS    '.PHP_EOL;
		$rec = '';
		for($i=0; $i<$lineCount; $i++){
			$lineNumber = $this->addZeroes(7,$i+1);
			$rec = $rec.'04'.$lineNumber.'01';
			$rec = $rec.$this->addSpaces(36,$addContent[$i]['address1']).$this->addSpaces(36,$addContent[$i]['address2']).$this->addSpaces(36,$addContent[$i]['address3']).$this->addSpaces(36,$addContent[$i]['address4']);
			$rec = $rec.$this->addSpaces(10,$addContent[$i]['pincode']);
			$rec = $rec.$this->addSpaces(48,'');
			$rec = $rec.PHP_EOL;
			$lineNumber = $this->addZeroes(7,$i+1);
			$rec = $rec.'04'.$lineNumber.'02';
			$rec = $rec.$this->addSpaces(36,$addContent[$i]['bankaddress1']).$this->addSpaces(36,$addContent[$i]['bankaddress2']).$this->addSpaces(36,$addContent[$i]['bankaddress3']).$this->addSpaces(36,$addContent[$i]['bankcity']);
			$rec = $rec.$this->addSpaces(10,$addContent[$i]['bankpincode']);
			$rec = $rec.$this->addSpaces(48,'');
			$rec = $rec.PHP_EOL;
		}
		return $header.$rec;
	}
	
	function getPoaFileContent($lineCount,$batchNumber){
		$batchNumber = $this->addZeroes(8,$batchNumber);
		$header = $batchNumber.'07'.'000000'.'IN303420'.'01';
		$totRecs = $this->addZeroes(7,$lineCount);
		$header = $header.$totRecs.date('Ymd').'     ACS    '.PHP_EOL;
		$rec = '';
		for($i=0; $i<$lineCount; $i++){
			$lineNumber = $this->addZeroes(7,$i+1);
			$rec = $rec.'08'.$lineNumber.'11C00100008'.$this->addSpaces(20,'').PHP_EOL;
		}
		return $header.$rec;
	}
	
	function getAthFileContent($batchNumber){
		$batchNumber = $this->addZeroes(8,$batchNumber);
		$header = $batchNumber.'05'.'000000'.'IN303420'.'01';
		$totRecs = $this->addZeroes(7,'');
		$header = $header.$totRecs.date('Ymd').'     ACS    '.PHP_EOL;
		
		return $header;
	}
		
	function addZeroes($len, $data){
		$numZeroesToAdd = $len - strlen($data);
		for($i=0;$i<$numZeroesToAdd;$i++){
			$data = '0'.$data;
		}
		
		return substr($data,0,$len);
	}
	
	function addSpaces($len, $data){
		$numSpacesToAdd = $len - strlen($data);
		for($i=0;$i<$numSpacesToAdd;$i++){
			$data = $data.' ';
		}
		
		return substr($data,0,$len);
	}
	
	function addSpacesBefore($len, $data){
		$numSpacesToAdd = $len - strlen($data);
		for($i=0;$i<$numSpacesToAdd;$i++){
			$data = ' '.$data;
		}
		
		return substr($data,0,$len);
	}
	
	function kraFile(){
		$this->middle = 'admin/kraFile';
		$data['temp'] = '1';
		$this->load->view($this->middle,$data,true);
		$this->adminLayout(); 
	}
	
	
	function kraFileDownload(){
		$this->load->library('zip');
		$data['startdate'] = $this->input->post('sdate');
		$data['enddate'] = $this->input->post('edate');
		$data['series'] = $this->Account_model->getSeries();
		$user_ids = $this->Account_model->getUserIdsForFileDownload($data['startdate'],$data['enddate']);
		$lineCount = count($user_ids);
		$priContent = $this->Account_model->getKraPriContent($user_ids);
		$kraAddContent = $this->Account_model->getKraAddContent($user_ids);
		
		$kraFileContent = $this->getKraFileContent($priContent,$kraAddContent,$lineCount,$data['series']['batchNumber']);
		
		$newnamekra= 'content/client'.date('Ymd').'_'.$data['series']['batchNumber'].'.txt';
		$filekra = file_put_contents($newnamekra, $kraFileContent);
		
	
		$t = $this->Account_model->incrBatch();
		
		$files_to_zip = array(
		$filekra		
	);
	
	/*$zipname = 'client'.date('Ymd').'_2749.zip';
	$zip = new ZipArchive;
	$zip->open($zipname, ZipArchive::CREATE);
	foreach ($files_to_zip as $file) {
	    $zip->addFile($file);
	}
	$zip->close();
	
	header('Content-Type: application/zip');
	header('Content-disposition: attachment; filename='.$zipname);
	header('Content-Length: ' . filesize($zipname));*/
	//if true, good; if false, zip creation failed
	//$result = $this->create_zip($files_to_zip,'content/client'.date('Ymd').'_2749.zip');
	
	$this->zip->read_file($newnamekra);
	$this->zip->download('client'.date('Ymd').'_'.$data['series']['batchNumber'].'.zip');
		redirect('/admin/kraFile');
		
	}
	
	
	function getKraFileContent($pricontent,$kraAddContent,$lineCount,$batchNumber){
		$batchNumber = $this->addZeroes(8,$batchNumber);
		$header = '01'.$batchNumber.$this->addSpaces(6,'00').'P0976'.'01';
		$totRecs = $this->addZeroes(7,$lineCount);
		$header = $header.$totRecs.date('Ymd').'     ACS'.$this->addSpaces(34,'').PHP_EOL;
		$rec='';
		
		for($i=0; $i<$lineCount; $i++){
			
			$lineNumber = $this->addZeroes(7,$i+1);
			$rec = $rec.'02'.$lineNumber.'A';
			$name = $pricontent[$i]['fname'].' '.$pricontent[$i]['mname'].' '.$pricontent[$i]['lname'];
			$name = $this->addSpaces(45,$name);
			$rec = $rec.$name.$this->addSpaces(205,'');
			$fathername = $pricontent[$i]['father_fname'].' '.$pricontent[$i]['father_mname'].' '.$pricontent[$i]['father_lname'];
			$fathername = $this->addSpaces(45,$fathername);
			$rec = $rec.$fathername;
			if($pricontent[$i]['sex'] == '1'){
				$sex = 'M';
			}
			else if($pricontent[$i]['sex'] == '2'){
				$sex = 'F';
			}
			$rec = $rec.$sex;
			if($pricontent[$i]['marital_status'] == '0'){
				$maritalstatus = 'S';
			}
			else if($pricontent[$i]['marital_status'] == '1'){
				$maritalstatus = 'M';
			}
			$rec = $rec.$maritalstatus;
			$rec = $rec.str_replace('-', '', $pricontent[$i]['dob']).$this->addSpaces(83,'');
			$rec = $rec.substr($pricontent[$i]['pancard'],0,10).$this->addSpaces(75,'').$this->addSpaces(16,'').'01';
			$rec = $rec.$this->addSpaces(75,'').'01'.$this->addSpaces(50,'').'05'.$this->addSpaces(75,'');
			$rec = $rec.$this->addSpaces(36,$kraAddContent[$i]['address1']).$this->addSpaces(36,$kraAddContent[$i]['address2']).$this->addSpaces(36,$kraAddContent[$i]['address3']).$this->addSpaces(36,$kraAddContent[$i]['address4']);
			$rec = $rec.$this->addSpaces(10,$kraAddContent[$i]['pincode']);
			$rec = $rec.$this->addZeroes(2,$kraAddContent[$i]['state_id']).$this->addSpaces(75,'');
			$rec = $rec.' 85';
			//---------------------
			$rec = $rec.'12';
			//----------------
			$rec = $rec.$this->addSpaces(75,'').$this->addSpaces(48,'');
			$rec = $rec.$this->addSpaces(15,$pricontent[$i]['ph']).$this->addSpaces(24,'');
			$rec = $rec.$this->addSpaces(50,$pricontent[$i]['emailaddress']);
			$rec = $rec.$this->addSpaces(50,'').'N';
			$rec = $rec.$this->addSpaces(36,$kraAddContent[$i]['peraddress1']).$this->addSpaces(36,$kraAddContent[$i]['peraddress2']).$this->addSpaces(36,$kraAddContent[$i]['peraddress3']).$this->addSpaces(36,$kraAddContent[$i]['peraddress4']);
			$rec = $rec.$this->addSpaces(10,$kraAddContent[$i]['perpincode']);
			$rec = $rec.$this->addZeroes(2,$kraAddContent[$i]['perstate_id']).$this->addSpaces(75,'');
			$rec = $rec.' 85';
			//---------------------START
			$rec = $rec.'12';
			//----------------END
			$rec = $rec.$this->addSpaces(75,'');
			//------ start
			//$rec = $rec.$this->addZeroes(2,$pricontent[$i]['annualincome']);
				$rec = $rec.'  ';
			//--------- end
			//---------------------START
			$rec = $rec.$this->addSpaces(18,'');
			$rec = $rec.$this->addSpaces(8,'');
			//----------------END
			$rec = $rec.$this->addSpaces(3,'').'00';
			//---------------START
			//$rec = $rec.$this->addZeroes(2,$pricontent[$i]['occupationid']);
			$rec = $rec.'  ';
			//--------------_END
			$rec = $rec.$this->addSpaces(75,'');
			$rec = $rec.$this->addSpaces(100,'');
			$rec = $rec.str_replace('-', '',$pricontent[$i]['receive_date']).'YY';
			$rec = $rec.str_replace('-', '',$pricontent[$i]['receive_date']);
			$rec = $rec.'00';
			//------------------------------ check this start
			$rec = $rec.$this->addSpacesBefore(35,$pricontent[$i]['form_number']);
			$rec = $rec.$this->addSpacesBefore(35,'000000');
			//-------------------------------------CHECK THIS start
			//$rec = $rec.date('Ymd').'000000';
			$rec = $rec.$this->addSpaces(14,'');
			//----------------------
			$rec = $rec.$this->addSpaces(14,'');
			$rec = $rec.$this->addSpaces(37,'');
			$rec = $rec.PHP_EOL;
		}
		return $header.$rec;
	}
	
	function classFile(){
		$this->middle = 'admin/classFile';
		$data['temp'] = '1';
		$this->load->view($this->middle,$data,true);
		$this->adminLayout(); 
	}
	
	
	function classFileDownload(){
		$this->load->helper('download');
		$data['startdate'] = $this->input->post('sdate');
		$data['enddate'] = $this->input->post('edate');
		$user_ids = $this->Account_model->getUserIdsForFileDownload($data['startdate'],$data['enddate']);
		$lineCount = count($user_ids);
		$classPriContent = $this->Account_model->getClassPriContent($user_ids);
		$classAddContent = $this->Account_model->getClassAddContent($user_ids);
		$classBankContent = $this->Account_model->getClassBankContent($user_ids);
		
		$classFileContent = $this->getClassFileContent($classPriContent,$classAddContent,$classBankContent,$lineCount);
		
		$newnameclass= 'classFile'.date('Ymd').'.csv';
		force_download($newnameclass, $classFileContent);
		redirect('/admin/kraFile');
		
	}
	
	
	function getClassFileContent($pricontent,$classAddContent,$classBankContent,$lineCount){
		
		$header = 'FirstName,MiddleName,LastName,FatherOrSpouseName,Gender,MaritalStatus,Status,Nationality,DoB,PAN,UID,Proof_of_Identity,Correspondence_Address,Correspondence_Address1,Correspondence_Address2,Correspondence_City,Correspondence_PIN,State,Country,Correspondence_PoA,Mobile,Phone_Res,Phone_Off,Fax,Email,Perm_Address,Perm_Address1,Perm_Address2,Perm_City,Perm_PIN,Perm_State,Perm_Country,Perm_PoA,Perm_Mobile,Perm_Phone_Res,Perm_Phone_Off,Perm_Fax,Perm_Email,Gross_Annual_Income_Range,Net_Worth_Value,Net_Worth_Date,Occupation,Bank_Name,Bank_Address,Bank_City,Bank_Pin,Bank_State,Account_No,Micr_Number,Accont_Type,Ifs_Code,Date'.PHP_EOL;
		$rec='';
		$recs='';
		for($i=0; $i<$lineCount; $i++){
			$name = $pricontent[$i]['fname'].','.$pricontent[$i]['mname'].','.$pricontent[$i]['lname'];
			$rec = $name.',';
			$fathername = $pricontent[$i]['father_fname'].' '.$pricontent[$i]['father_mname'].' '.$pricontent[$i]['father_lname'];
			$rec = $rec.$fathername.',';
			if($pricontent[$i]['sex'] == '1'){
				$sex = 'male';
			}
			else if($pricontent[$i]['sex'] == '2'){
				$sex = 'female';
			}
			$rec = $rec.$sex.',';
			if($pricontent[$i]['marital_status'] == '0'){
				$maritalstatus = 'Unmarried';
			}
			else if($pricontent[$i]['marital_status'] == '1'){
				$maritalstatus = 'Married';
			}
			$rec = $rec.$maritalstatus.',,';
			$rec = $rec.'Indian'.',';
			$date = DateTime::createFromFormat('Y-m-d', $pricontent[$i]['dob']);
			$rec = $rec.$date->format('d/m/Y').',';
			$rec = $rec.$pricontent[$i]['pancard'].',,'.'Pancard,';
			$rec = $rec.str_replace(',', ' ',$classAddContent[$i]['address1']).','.str_replace(',', ' ',$classAddContent[$i]['address2']).','.str_replace(',', ' ',$classAddContent[$i]['address3']).','.str_replace(',', ' ',$classAddContent[$i]['address4']).','.$classAddContent[$i]['pincode'].','.$classAddContent[$i]['state_name'].',';
			$rec = $rec.'India'.',';
			//------------------POA
			
			$rec = $rec.$classAddContent[$i]['address_proof'].',';
			//------------------
			$rec = $rec.$pricontent[$i]['ph'].',0,0,0,';
			$rec = $rec.$pricontent[$i]['emailaddress'].',';
			$rec = $rec.str_replace(',', ' ',$classAddContent[$i]['peraddress1']).','.str_replace(',', ' ',$classAddContent[$i]['peraddress2']).','.str_replace(',', ' ',$classAddContent[$i]['peraddress3']).','.str_replace(',', ' ',$classAddContent[$i]['peraddress4']).','.$classAddContent[$i]['perpincode'].','.$classAddContent[$i]['perstate_name'].',';
			$rec = $rec.'India'.',';
			//------------------POA
			
			$rec = $rec.$classAddContent[$i]['peraddress_proof'].',';
			//------------------
			$rec = $rec.$pricontent[$i]['ph'].',0,0,0,';
			$rec = $rec.$pricontent[$i]['emailaddress'].',';
			
			if($pricontent[$i]['annualincome'] == '1'){
				$income = 'below_1L';
			} else if($pricontent[$i]['annualincome'] == '2'){
				$income = '1L_to_5L';
			} else if($pricontent[$i]['annualincome'] == '3'){
				$income = '5L_to_10L';
			} else if($pricontent[$i]['annualincome'] == '4'){
				$income = '10L_to_25L';
			} else if($pricontent[$i]['annualincome'] == '5'){
				$income = 'above_25L';
			}
			
			$rec = $rec.$income.',';
			
			$rec = $rec.',,'.$pricontent[$i]['occupationname'].',';
			$rec = $rec.$classBankContent[$i]['bankname'].',';
			$rec = $rec.$classBankContent[$i]['bankaddress1'].' '.$classBankContent[$i]['bankaddress2'].' '.$classBankContent[$i]['bankaddress3'].','.$classBankContent[$i]['city'].','.$classBankContent[$i]['pincode'].','.$classBankContent[$i]['bankstate_name'].',';
			$rec = $rec.$classBankContent[$i]['accountnumber'].','.$classBankContent[$i]['micr_no'].',';			
			if($classBankContent[$i]['accounttype'] == '1'){
				$accounttype = 'Saving';
			} else if($classBankContent[$i]['accounttype'] == '2'){
				$accounttype = 'Current';
			}
			$rec = $rec.$accounttype.','.$classBankContent[$i]['ifsccode'].','.date('Y-m-d');
			$rec = str_replace("\r\n", "", $rec);
			$rec = str_replace("\r", "", $rec); 
			$rec = $rec.PHP_EOL;
			$recs = $recs.$rec;
		}
		return $header.$recs;
	}
	
	
	/*function ckycFile(){
		$this->middle = 'admin/kraFile';
		$data['temp'] = '1';
		$this->load->view($this->middle,$data,true);
		$this->adminLayout(); 
	}
	
	
	function ckycFileDownload(){
		$this->load->library('zip');
		$data['startdate'] = $this->input->post('sdate');
		$data['enddate'] = $this->input->post('edate');
		$data['series'] = $this->Account_model->getSeries();
		$user_ids = $this->Account_model->getUserIdsForFileDownload($data['startdate'],$data['enddate']);
		$lineCount = count($user_ids);
		$ckycPriContent = $this->Account_model->getCkycPriContent($user_ids);
		$ckycAddContent = $this->Account_model->getCkycAddContent($user_ids);
		
		$ckycFileContent = $this->getCkycFileContent($ckycPriContent,$ckycAddContent,$lineCount,$data['series']['batchNumber']);
		
		$newnameckyc= 'content/client'.date('Ymd').'_'.$data['series']['batchNumber'].'.txt';
		$fileckyc = file_put_contents($newnamekra, $kraFileContent);
		
	
		$t = $this->Account_model->incrBatch();
		
		$files_to_zip = array(
		$fileckyc		
	);
	
	//if true, good; if false, zip creation failed
	//$result = $this->create_zip($files_to_zip,'content/client'.date('Ymd').'_2749.zip');
	
	$this->zip->read_file($newnameckyc);
	$this->zip->download('client'.date('Ymd').'_'.$data['series']['batchNumber'].'.zip');
		redirect('/admin/ckycFile');
		
	}
	
	
	function getCkycFileContent($ckycPriContent,$ckycAddContent,$lineCount,$batchNumber){
		//$batchNumber = $this->addZeroes(8,$batchNumber);
		$header = '10'.'|'.$batchNumber.'|'.'IN0694'.'|'.'BPL'.'|'.$lineCount.'|'.date('d-m-Y').'|'.'V1.1'.'|||||'.PHP_EOL;
		$rec='';
		for($i=0; $i<$lineCount; $i++){
			$rec = $rec.'|'.'20'.'|'.$i.'|'.'01'.'|'.'ACS';
			$rec = $rec.'|||||||||||'.'01'.'|'.'01'.'|'
			$name = $pricontent[$i]['fname'].' '.$pricontent[$i]['mname'].' '.$pricontent[$i]['lname'];
			$name = $this->addSpaces(45,$name);
			$rec = $rec.$name.$this->addSpaces(205,'');
			$fathername = $pricontent[$i]['father_fname'].' '.$pricontent[$i]['father_mname'].' '.$pricontent[$i]['father_lname'];
			$fathername = $this->addSpaces(45,$fathername);
			$rec = $rec.$fathername;
			if($pricontent[$i]['sex'] == '1'){
				$sex = 'M';
			}
			else if($pricontent[$i]['sex'] == '2'){
				$sex = 'F';
			}
			$rec = $rec.$sex;
			if($pricontent[$i]['marital_status'] == '0'){
				$maritalstatus = 'S';
			}
			else if($pricontent[$i]['marital_status'] == '1'){
				$maritalstatus = 'M';
			}
			$rec = $rec.$maritalstatus;
			$rec = $rec.str_replace('-', '', $pricontent[$i]['dob']).$this->addSpaces(83,'');
			$rec = $rec.substr($pricontent[$i]['pancard'],0,10).$this->addSpaces(75,'').$this->addSpaces(16,'').'01';
			$rec = $rec.$this->addSpaces(75,'').'01'.$this->addSpaces(50,'').'05'.$this->addSpaces(75,'');
			$rec = $rec.$this->addSpaces(36,$kraAddContent[$i]['address1']).$this->addSpaces(36,$kraAddContent[$i]['address2']).$this->addSpaces(36,$kraAddContent[$i]['address3']).$this->addSpaces(36,$kraAddContent[$i]['address4']);
			$rec = $rec.$this->addSpaces(10,$kraAddContent[$i]['pincode']);
			$rec = $rec.$this->addZeroes(2,$kraAddContent[$i]['state_id']).$this->addSpaces(75,'');
			$rec = $rec.' 85';
			//---------------------
			$rec = $rec.'12';
			//----------------
			$rec = $rec.$this->addSpaces(75,'').$this->addSpaces(48,'');
			$rec = $rec.$this->addSpaces(15,$pricontent[$i]['ph']).$this->addSpaces(24,'');
			$rec = $rec.$this->addSpaces(50,$pricontent[$i]['emailaddress']);
			$rec = $rec.$this->addSpaces(50,'').'N';
			$rec = $rec.$this->addSpaces(36,$kraAddContent[$i]['peraddress1']).$this->addSpaces(36,$kraAddContent[$i]['peraddress2']).$this->addSpaces(36,$kraAddContent[$i]['peraddress3']).$this->addSpaces(36,$kraAddContent[$i]['peraddress4']);
			$rec = $rec.$this->addSpaces(10,$kraAddContent[$i]['perpincode']);
			$rec = $rec.$this->addZeroes(2,$kraAddContent[$i]['perstate_id']).$this->addSpaces(75,'');
			$rec = $rec.' 85';
			//---------------------START
			$rec = $rec.'12';
			//----------------END
			$rec = $rec.$this->addSpaces(75,'');
			//------ start
			//$rec = $rec.$this->addZeroes(2,$pricontent[$i]['annualincome']);
				$rec = $rec.'  ';
			//--------- end
			//---------------------START
			$rec = $rec.$this->addSpaces(18,'');
			$rec = $rec.$this->addSpaces(8,'');
			//----------------END
			$rec = $rec.$this->addSpaces(3,'').'00';
			//---------------START
			//$rec = $rec.$this->addZeroes(2,$pricontent[$i]['occupationid']);
			$rec = $rec.'  ';
			//--------------_END
			$rec = $rec.$this->addSpaces(75,'');
			$rec = $rec.$this->addSpaces(100,'');
			$rec = $rec.str_replace('-', '',$pricontent[$i]['receive_date']).'YY';
			$rec = $rec.str_replace('-', '',$pricontent[$i]['receive_date']);
			$rec = $rec.'00';
			//------------------------------ check this start
			$rec = $rec.$this->addSpacesBefore(35,$pricontent[$i]['form_number']);
			$rec = $rec.$this->addSpacesBefore(35,'000000');
			//-------------------------------------CHECK THIS start
			//$rec = $rec.date('Ymd').'000000';
			$rec = $rec.$this->addSpaces(14,'');
			//----------------------
			$rec = $rec.$this->addSpaces(14,'');
			$rec = $rec.$this->addSpaces(37,'');
			$rec = $rec.PHP_EOL;
		}
		return $header.$rec;
	}*/
	
	/************************** Get Payout Exchange Filter List ***************************/
	function getExchangeFilter(){
	if($this->session->userdata('adminId')){
	$data['excgVal'] = trim($this->input->post('exchval'));
	$data['viewPayOutType']=$this->Account_model->getExcgFilterList($data['excgVal']);
	//echo count($data['viewPayOutType']); die('KKKKKKK');
	$this->load->view('admin/ajax/payOutExportType', $data);
	
	}
	
	else {redirect('/admin/login','refresh');}
	}
}
