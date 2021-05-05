<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
//Declaring the class variable 
var $template = array();
var $data = array();


//Load layout for user end
public function layout()
{

$this->template['header'] 	= $this->load->view('layout/header',$this->data,true); //header part view load
$this->template['body'] 	= $this->load->view($this->body,$this->data,true);  // body content view load
$this->template['footer']	= $this->load->view('layout/footer',$this->data,true); // footer part view load
$this->load->view('layout/index',$this->template); //load the index page
}

 public function adminLayout() {
     // making temlate and send data to view.
     $this->template['header']   = $this->load->view('adminLayout/header', $this->data, true);
     $this->template['left']   = $this->load->view('adminLayout/left', $this->data, true);
     $this->template['middle'] = $this->load->view($this->middle, $this->data, true);
     $this->template['footer'] = $this->load->view('adminLayout/footer', $this->data, true);
     $this->load->view('adminLayout/index', $this->template);
   }
public function SetReferralCookie(){

		$this->load->helper('cookie');
		$cookie = get_cookie('referred_by', TRUE);
    $domain = '.asthatrade.com' ;

        if(!empty($cookie)&&!empty($_GET['c'])){
	        if($cookie != $_GET['c'] ) {
            delete_cookie('referred_by', $domain,'/'); 
	        	$cookie = array(
		          'name' => 'referred_by',
		          'value'=> $_GET['c'] ,
		          'expire' => 2592000,
		          'secure' => (ENVIRONMENT == 'production')? TRUE: FALSE,
              'domain' => $domain
		          );
	        $this->input->set_cookie($cookie);
	      	}      	
      	}
      	elseif(empty($cookie)&&!empty($_GET['c'])){
      		$cookie = array(
		          'name' => 'referred_by',
		          'value'=> $_GET['c'] ,
		          'expire' => 2592000,
		          'secure' => (ENVIRONMENT == 'production')? TRUE: FALSE,
              'domain' => $domain
		          );
      		$this->input->set_cookie($cookie);
      	}
      // 	      log_message("error","Oh hellO!");
      // if (null != get_cookie("referred_by")){
      //   delete_cookie("referred_by");
      //   log_message("error",get_cookie("referred_by"));
      // }
	}

  public function SetGadsCookie(){
    $this->load->helper('cookie');
    $domain = (ENVIRONMENT == 'testing')? '.acstrade.in': ((ENVIRONMENT == 'production')? '.asthatrade.com' : '');
    foreach (array("gclid","dclid") as $key ) {
      $existing = get_cookie($key, TRUE);
      $new = $this->input->get($key, TRUE);
      if(!empty($existing) && !empty($new)){
        delete_cookie($key, $domain,'/');
        $cookie = array(
          "name"=>$key,
          "value" =>$new,
          "expire"=>7776000,
          'secure' => (ENVIRONMENT == 'production')? TRUE: FALSE,
          'domain' => $domain
          );
        $this->input->set_cookie($cookie);
      }elseif(empty($existing)&&!empty($new)){
        $cookie = array(
          "name"=>$key,
          "value" =>$new,
          "expire"=>7776000,
          'secure' => (ENVIRONMENT == 'production')? TRUE: FALSE,
          'domain' => $domain
          );
        $this->input->set_cookie($cookie);
      }
    }
  }
}


?>