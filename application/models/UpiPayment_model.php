<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UpiPayment_model extends CI_Model
{
	function __construct()
	{

		parent::__construct();
	}

	function saveMarginPayment($client_code, $response){
		$otherdb = $this->load->database('cdsl', TRUE);
		$query = "INSERT INTO `upi_margin`(`client_code`,`transaction_id`,`order_id`,`status`,`amount`,`vpa`,created_at) 
		VALUES ('".$client_code."','".$response[1]."','".$response[0]."','".$response[3]."','".$response[2]."','".$response[5]."','".date('Y-m-d H:i:s')."');";
		$otherdb->query($query); 
		return $this->db->affected_rows();
	}

	function updateMarginPayment($response){
		$otherdb = $this->load->database('cdsl', TRUE);
		$query = "UPDATE `upi_margin` SET `status`='".$response[4]."',ref_number = '".$response[9]."' where order_id='".$response[1]."';";
		$otherdb->query($query);
		return $this->db->affected_rows();
	}
}