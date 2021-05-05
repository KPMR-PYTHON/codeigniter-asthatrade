<?php defined('BASEPATH') OR exit('No direct script access allowed');
include_once("payment_config.php");
include_once("atomPayment.php");
include_once ("VtransactSecurity.php");
class Payment extends MY_Controller {
    /**
     * Account Page for this controller.
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
 
 private $respHashKey = "14d986a4b23a0ab95c";
   
    public function __construct(){
        parent::__construct();
        $this->paymentConfig = new TransactionRequest();
        $this->load->model('Account_model');
    }

    function paymentOption()
    {
//        //exit('test');
//        //$showMdd=array(NB,CC,DC,VISADC);
//        $this->load->model('Account_model');
//        $this->Account_model->update_paymentStatus($this->session->userdata('id'));
//        //$this->save_download($this->session->userdata('id'),$_POST['clientcode']);
//
//        //$this->save_download($return_data['clientcode']);
//        $payment = new atompayment();
//        $datenow = date("d/m/Y h:m:s");
//        $modifiedDate = str_replace(" ", "%20", $datenow);
//        $payment->url = $this->paymentConfig->Url;
//        $postFields  = "";
//        $postFields .= "&login=".$_POST['login'];
//        $postFields .= "&pass=".$this->paymentConfig->Password;
//        $postFields .= "&ttype=".$_POST['TType'];
//        $postFields .= "&prodid=".$_POST['product'];
//        $postFields .= "&amt=".$_POST['amt'];
//        $postFields .= "&txncurr=".$this->paymentConfig->TxnCurr;
//        $postFields .= "&txnscamt=".$this->paymentConfig->TxnScAmt;
//        $postFields .= "&clientcode=".urlencode(base64_encode($_POST['clientcode']));
//        //$postFields .= "&txnid=".rand(0,999999);
//        $postFields .= "&txnid=".$_POST['txnid'];
//        $postFields .= "&date=".$modifiedDate;
//        $postFields .= "&custacc=".$_POST['custacc'];
//        $postFields .= "&ru=".$_POST['ru'];
//        $postFields .= "&udf1=".$_POST['udf1']; // Name
//        $postFields .= "&udf2=".$_POST['udf2'];   // Email
//        $postFields .= "&udf3=".$_POST['udf3'];   // Mobile Phone Number
//        $postFields .= "&udf4=".$_POST['udf4']; // Address1+Address2
//
//        echo $postFields;
//        //exit('test');
//        $sendUrl = $payment->url."?".substr($postFields,1)."\n";
//
//        $this->writeLog($sendUrl);
//
//        $returnData = $payment->sendInfo($postFields);
//        $this->writeLog($returnData."\n");
//        $xmlObjArray     = $this->xmltoarray($returnData);
//
//        $url = $xmlObjArray['url'];
//        $postFields  = "";
//        $postFields .= "&ttype=".$_POST['TType'];
//        $postFields .= "&tempTxnId=".$xmlObjArray['tempTxnId'];
//        $postFields .= "&token=".$xmlObjArray['token'];
//        $postFields .= "&txnStage=1";
//
//
//        $url = $payment->url."?".$postFields;
//        $this->writeLog($url."\n");
//        header("Location: ".$url);
        
        
        ///
        date_default_timezone_set('Asia/Calcutta');
$datenow = date("d/m/Y h:m:s");
$transactionDate = str_replace(" ", "%20", $datenow);

$transactionId = rand(1,1000000);
$transactionRequest = new TransactionRequest();


//Setting all values here
$transactionRequest->setMode("live");
$transactionRequest->setLogin(2161);

$transactionRequest->setPassword("ASTHA@123");
$transactionRequest->setProductId("ADMISSION_FORM");
$transactionRequest->setAmount($_POST['amt']);
$transactionRequest->setTransactionCurrency("INR");
$transactionRequest->setTransactionAmount($_POST['amt']);
$transactionRequest->setReturnUrl($_POST['ru']);
$transactionRequest->setClientCode($_POST['clientcode']);
$transactionRequest->setTransactionId($transactionId);
$transactionRequest->setTransactionDate($transactionDate);
$transactionRequest->setCustomerName($_POST['udf1']);
$transactionRequest->setCustomerEmailId($_POST['udf2']);
$transactionRequest->setCustomerMobile($_POST['udf3']);
$transactionRequest->setCustomerBillingAddress($_POST['udf4']);
$transactionRequest->setCustomerAccount(123456789);
$transactionRequest->setReqHashKey("bb3be7d58894edf3bb");

 $url = $transactionRequest->getPGUrl();
 $url =preg_replace('/\s\s+/', ' ', $url);
?>

<script type="text/javascript">

   window.location="<?php echo $url; ?>";

</script>
<?php


    }
  function paymentOptionUpi()
    {
//        //exit('test');
//        //$showMdd=array(NB,CC,DC,VISADC);
//        $this->load->model('Account_model');
//        $this->Account_model->update_paymentStatus($this->session->userdata('id'));
//        //$this->save_download($this->session->userdata('id'),$_POST['clientcode']);
//
//        //$this->save_download($return_data['clientcode']);
//        $payment = new atompayment();
//        $datenow = date("d/m/Y h:m:s");
//        $modifiedDate = str_replace(" ", "%20", $datenow);
//        $payment->url = $this->paymentConfig->Url;
//        $postFields  = "";
//        $postFields .= "&login=".$_POST['login'];
//        $postFields .= "&pass=".$this->paymentConfig->Password;
//        $postFields .= "&ttype=".$_POST['TType'];
//        $postFields .= "&prodid=".$_POST['product'];
//        $postFields .= "&amt=".$_POST['amt'];
//        $postFields .= "&txncurr=".$this->paymentConfig->TxnCurr;
//        $postFields .= "&txnscamt=".$this->paymentConfig->TxnScAmt;
//        $postFields .= "&clientcode=".urlencode(base64_encode($_POST['clientcode']));
//        //$postFields .= "&txnid=".rand(0,999999);
//        $postFields .= "&txnid=".$_POST['txnid'];
//        $postFields .= "&date=".$modifiedDate;
//        $postFields .= "&custacc=".$_POST['custacc'];
//        $postFields .= "&ru=".$_POST['ru'];
//        $postFields .= "&udf1=".$_POST['udf1']; // Name
//        $postFields .= "&udf2=".$_POST['udf2'];   // Email
//        $postFields .= "&udf3=".$_POST['udf3'];   // Mobile Phone Number
//        $postFields .= "&udf4=".$_POST['udf4']; // Address1+Address2
//


         $txnid=rand(0,999999);
       $urll='https://upitest.hdfcbank.com/upi/checkMeVirtualAddress';
       $enckey='d6fe61396fce64c714aa6393079a3ac4';
       $merchantReqStr ='HDFC000000625461|'.$txnid.'|'.$_POST['vpa'].'|T|||||||||NA|NA';
        $vTransactSecurity = new VTransactSecurity();
        $enc_data = $vTransactSecurity->encryptValue($merchantReqStr,$enckey);
    
        $Rdata['requestMsg']=$enc_data; 
        $Rdata['pgMerchantId']='HDFC000000625461';
        $jsondata=json_encode($Rdata);
     
        $opts = array('http' =>
          array(
              'method'  => 'POST',
              'header'  => 'Content-type: application/x-www-form-urlencoded',
              'content' => $jsondata
          )
        );
         $context  = stream_context_create($opts);
         $result = file_get_contents($urll,false,$context);
        $dnc_data = $vTransactSecurity->decryptValue($result,$enckey);
$dnc_data2=explode("|",$dnc_data);
       if($dnc_data2[4]=='VE'){
    
  //collect the transaction request 
$urll2='https://upitest.hdfcbank.com/upi/meTransCollectSvc';
$merchantpaymentReqStr='HDFC000000625461|'.$txnid.'|'.$_POST['vpa'].'|'.$_POST['amt'].'|TEST|10|6012||||||MEBR|'.$_POST['upiAccNo'].'||NA|NA';
$vTransactSecurity = new VTransactSecurity();
$enc_data = $vTransactSecurity->encryptValue($merchantpaymentReqStr,$enckey);
$Rdata['requestMsg']=$enc_data; 
        $Rdata['pgMerchantId']='HDFC000000625461';
        $jsondata=json_encode($Rdata);
     
        $opts = array('http' =>
          array(
              'method'  => 'POST',
              'header'  => 'Content-type: application/x-www-form-urlencoded',
              'content' => $jsondata
          )
        );
         $context  = stream_context_create($opts);
         $result = file_get_contents($urll2,false,$context);
         $dnc_data3 = $vTransactSecurity->decryptValue($result,$enckey);
         $dnc_data3=explode("|",$dnc_data3);
     
         if($dnc_data3[3]=='SUCCESS'){
        $return_data['prod']=$_POST['product'];
        $return_data['bank_txn']=$_POST['txnid'];
        $return_data['bank_name']='UPI';
        $return_data['discriminator']='UPI';
        $return_data['desc']='Upi Payment';
        $return_data['clientcode']=$_POST['clientcode'];
       $this->Account_model->insertIntoAccStatusupi($return_data);
 
            $this->session->set_flashdata('paidStatus',2);
            redirect('site/tracker','refresh');
       
         }else{
            $upiError='Invalid Account  No';
           $this->session->set_flashdata('upiError',$upiError);
           redirect($_SERVER['HTTP_REFERER']);
       } 
       }else{
           $upiError='Invalid Virtual Address'; 
           $this->session->set_flashdata('upiError',$upiError);
           redirect($_SERVER['HTTP_REFERER']);
       }
             die;
         //Check Transaction Status
        $urll3='https://upitest.hdfcbank.com/upi/transactionStatusQuery';
$TransactionReqStatus='HDFC000000625461|1528432763743298|65437829217889||||||||||NA|NA';
$vTransactSecurity = new VTransactSecurity();
$enc_data = $vTransactSecurity->encryptValue($TransactionReqStatus,$enckey);
$Rdata['requestMsg']=$enc_data; 
        $Rdata['pgMerchantId']='HDFC000000625461';
        $jsondata=json_encode($Rdata);
     
        $opts = array('http' =>
          array(
              'method'  => 'POST',
              'header'  => 'Content-type: application/x-www-form-urlencoded',
              'content' => $jsondata
          )
        );
         $context  = stream_context_create($opts);
         $result = file_get_contents($urll3,false,$context);
         echo $dnc_data = $vTransactSecurity->decryptValue($result,$enckey); 
        die;

    }
     function upipaymentstatus()
    {
        echo 'helllo';
        //print_r($_POST);
    }
    function writeLog($data){

        $fileName = date("Y-m-d").".txt";
        $data = date("Y-m-d H:i:s")." - ".$data;
        $path = "log/".$fileName;
        $fp = @fopen($path, 'a+');
        @fwrite($fp,$data);
        @fclose($fp);
        @chmod($path, 0777);
    }

    function xmltoarray($data){
        $parser = xml_parser_create('');
        xml_parser_set_option($parser, XML_OPTION_TARGET_ENCODING, "UTF-8");
        xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, 0);
        xml_parser_set_option($parser, XML_OPTION_SKIP_WHITE, 1);
        xml_parse_into_struct($parser, trim($data), $xml_values);
        xml_parser_free($parser);

        $returnArray = array();
        $returnArray['url'] = $xml_values[3]['value'];
        $returnArray['tempTxnId'] = $xml_values[5]['value'];
        $returnArray['token'] = $xml_values[6]['value'];

        return $returnArray;
    }
 

    /**
     * @return string
     */
    public function getRespHashKey()
    {
        return $this->respHashKey;
    }

    /**
     * @param string $respHashKey
     */
    public function setRespHashKey($respHashKey)
    {
        $this->respHashKey = $respHashKey;
    }
    function paymentResponse()
    {
        $this->load->model('Account_model');
        //var_dump($this->input->post());

        //$return_value=$this->input->post();
         $str = $this->input->post('mmp_txn').$this->input->post("mer_txn").$this->input->post("f_code").$this->input->post("prod").$this->input->post("discriminator").$this->input->post("amt").$this->input->post("bank_txn");
        $signature =  hash_hmac("sha512",$str,$this->respHashKey,false);
        if($signature == $this->input->post("signature")){
        $return_value['f_code']=$this->input->post('f_code');
        $return_data['mmp_txn']=$this->input->post('mmp_txn');
        $return_data['mer_txn']=$this->input->post('mer_txn');
        $return_data['prod']=$this->input->post('prod');
        $return_data['date']=$this->input->post('date');
        $return_data['bank_txn']=$this->input->post('bank_txn');
        $return_data['bank_name']=$this->input->post('bank_name');
        $return_data['discriminator']=$this->input->post('discriminator');
        $return_data['desc']=$this->input->post('desc');
        $return_data['clientcode']=$this->input->post('clientcode');
        $data['pay_status'] = 0;
        //256   444     35374037        500     2           IGABRLSHG1
        /*$return_value['f_code']="Ok";
        $return_data['mmp_txn']=1236547890;
        $return_data['mer_txn']=0693258741;
        $return_data['prod']="2";
        $return_data['date']="2017-07-20";
        $return_data['bank_txn']="IGABRLSHG1";
        $return_data['bank_name']="State Bank of India";
        $return_data['discriminator']=$this->input->post('discriminator');
        $return_data['desc']="ADMISSION_FORM ";
        $return_data['clientcode']=444;
        $data['pay_status'] = 0;*/

       
           
       

        if(($return_value['f_code']=='C')&&($return_data['mmp_txn']=="0"))
        {
            $update_sql_query=$this->Account_model->userPaymentCancel($return_data);
            $getTransactionDetails = $this->Account_model->getTransactionDetailsById($this->session->userdata('id'));
            $paidAmount = $getTransactionDetails['amount'];
            $tranId = $getTransactionDetails['txn_id'];
            $paidStatus = $getTransactionDetails['payment_status'];

            $this->session->unset_userdata('rowId');
            $this->session->unset_userdata('paidAmount');
            $this->session->unset_userdata('tranId');
            $this->session->unset_userdata('paidStatus');


            $this->session->set_flashdata('rowId',$getTransactionDetails['transaction'] );
            $this->session->set_flashdata('paidAmount', $paidAmount);
            $this->session->set_flashdata('tranId', $tranId);
            $this->session->set_flashdata('paidStatus', $paidStatus);

            //redirect('site/payment','refresh');
            redirect('site/tracker','refresh');
        }


        if($return_value['f_code']=='Ok')
        {

            $this->Account_model->updateUserDetailsAfterSuccessfullPayment($return_data);
            $chkIfPresent=$this->Account_model->getUserAccStatus($return_data['clientcode']);
            if(count($chkIfPresent)==0){
                $this->Account_model->insertIntoAccStatus($return_data);
            }

            $data['pay_status'] = 1;
            $this->body = 'Payment/paymentResponse'; // passing body to function. change this for different views.
            $this->load->view($this->body,$data, true);
            // $statusData= $this->Account_model->getAccountStatusDetails($return_data['clientcode']);
            $rows=$this->Account_model->getAccountPayDetails($return_data['clientcode']);
            $totPaid= $rows[0]['payment_status']+$rows[1]['payment_status'];
            
            /****** Modified dated on 19-Apr-2017 Start *******/
            if($totPaid == 1){
                // $accountType=$rows[0]['account_type'];
                $accountType = $this->session->userdata('acc_type');
                // $this->save_download($return_data['clientcode'],$accountType);
                // $this->save_download($return_data['clientcode'],$accountType);
                /****************************************************
                Mail Account Pdf to user if not Aadhaar API
                Aadhaar API = 1
                Non Aadhaar API = 0
                 *****************************************************/
                $user_id = $return_data['clientcode'];
                $emailId = $this->Account_model->getEmailAdd($user_id);
                $getName = $this->Account_model->getName($user_id);

                if($getName['is_aadhaar_api']=='0'){
                    if($getName['mname']){
                        $data['name'] = $getName['fname'].' '.$getName['mname'].' '.$getName['lname'];
                    }else{
                        $data['name'] = $getName['fname'].' '.$getName['lname'];
                    }
                    $this->load->library('email');

                    $accType = $accountType;

                    if($accType == '1'){
                        $acc_type = 'NSE';
                    }else if($accType == '2'){
                        $acc_type = 'MCX';
                    }

                    $this->load->library('email');

                    $subject = "AsthaTrade ".$acc_type." Account Opening Form";
                    if($accType == '1'){
                        $message =  $this->load->view('emailTemplate/nseTemplate',$data,true);
                    }else if($accType == '2'){
                        $message =  $this->load->view('emailTemplate/mcxTemplate',$data,true);
                    }

                    $this->email->set_newline("\r\n");

                    $this->email->from('contact@asthatrade.com');
                    $this->email->to($emailId);
                    //$this->email->to('brajendra.bhati@asthatrade.com');
                    $this->email->subject($subject);
                    $this->email->message($message);

                    $getFilesPath= FCPATH."uploads/eKyc_without_ESign/$user_id/";
                    $getFiles = glob($getFilesPath.'*.pdf');
                    $getPowerofAttorney = FCPATH."uploads/accessories/Power_Of_Attorney.pdf";
                    if ( $getFilesPath !== false )
                    {
                        $filecount = count( $getFiles );
                        if($filecount>0){
                            if($accType == '1'){ //Equity
                                $accountPdf="nse.pdf";
                                $this->email->attach($getFilesPath.$accountPdf);
                                $this->email->attach($getPowerofAttorney);
                            }else if($accType == '2'){ //Commodity
                                $accountPdf="mcx.pdf";
                                $this->email->attach($getFilesPath.$accountPdf);
                            }
                        }
                    }else{ echo "File Not Found";}

                    $this->email->send();
                }

                //redirect('site/ipv');
                $getTransactionDetails = $this->Account_model->getTransactionDetailsById($this->session->userdata('id'));


                $paidAmount = $getTransactionDetails['amount'];
                $tranId = $getTransactionDetails['txn_id'];
                $paidStatus = $getTransactionDetails['payment_status'];

                $this->session->unset_userdata('paidAmount');
                $this->session->unset_userdata('tranId');
                $this->session->unset_userdata('paidStatus');

                $this->session->set_flashdata('paidAmount', $paidAmount);
                $this->session->set_flashdata('tranId', $tranId);
                $this->session->set_flashdata('paidStatus',2);

                redirect('site/tracker','refresh');
            }else{
                $getTransactionDetails = $this->Account_model->getTransactionDetailsById($this->session->userdata('id'));
                $paidAmount = $getTransactionDetails['amount'];
                $tranId = $getTransactionDetails['txn_id'];
                $paidStatus = $getTransactionDetails['payment_status'];

                $this->session->unset_userdata('paidAmount');
                $this->session->unset_userdata('tranId');
                $this->session->unset_userdata('paidStatus');

                $this->session->set_flashdata('paidAmount', $paidAmount);
                $this->session->set_flashdata('tranId', $tranId);
                 $this->session->set_flashdata('paidStatus',2);

                redirect('site/tracker','refresh');
            }


        }
        else
        {
            $this->Account_model->updateUserDetailsAfterFailurePayment($return_data);
            $data['pay_status'] = 2;
            $this->body = 'Payment/paymentResponse'; // passing body to function. change this for different views.
            $this->load->view($this->body,$data, true);
        }
           } else {
            return false;
        }
    }

    /*********************************************************************************************************/
    //public function save_download($user_id,$accountType){ //for pdf download offline profile
    public function save_download($user_id,$accountType){
        $data1 = array();

        $data['user_details'] = $this->Account_model->getUserDetails($user_id);
        $getSignatureImage = $this->Account_model->getSignatureImage($user_id);
        /* $data['user_accountpay_details']=$this->Account_model->getUserAccountPayDetails($user_id,$this->uri->segment(4));
        echo $data['user_accountpay_details']; exit(); */
        $data['email_id']=$this->Account_model->getEmailId($user_id);
        $data['ducument'] = $this->Account_model->getUserDocumentProofDetailsById($user_id);
//        var_dump($data['ducument']);
//        exit;
        $data1['address'] = $this->Account_model->getUserAddress($user_id);

        //Correspondance Address Section
        $data['corr_add'] = $data1['address'][0]['address1']." ".$data1['address'][0]['address2']." ".$data1['address'][0]['address3'];
        $data['corr_city'] = $data1['address'][0]['address4'];
        $data['corr_pincode'] = $data1['address'][0]['pincode'];
        $data['corr_state_id'] = $data1['address'][0]['state_id'];
        $data['corr_state_name']= $this->Account_model->getStateName($data['corr_state_id']);
        $data['corr_country_id'] = $data1['address'][0]['country_id'];
        $data['corr_country_name'] = $this->Account_model->getCountryName($data['corr_country_id']);
        $data['corr_country_iso3166'] = $this->Account_model->getCorrCountryIso3166($data['corr_country_id']);
        if($data['corr_country_iso3166']){
            $data['corr_iso2_code'] = $data['corr_country_iso3166'][0]['iso2_code'];
        }else{
            $data['corr_iso2_code'] ="IN";
        }
        $data['corr_address_proof_id'] = $data1['address'][0]['address_proof_id'];
        $data['corr_address_proof_name'] = $this->Account_model->getAddressProof($data['corr_address_proof_id']);

        /*$data['corr_address_proofId'] = $data1['address'][0]['address_proof_no'];
        $data['address_proof_id_validity'] = $data1['address'][0]['address_proof_id_validity'];     */

        /* $data['corr_address_proofId'] = $data1['address'][0]['address_proof_no'];
        $data['address_proof_id_validity'] = $data1['address'][0]['address_proof_id_validity']; */

        $data['corr_is_permanent_address'] = $data1['address'][0]['is_permanent_address'];

        //Permanent Address Section
        $data['per_add'] = $data1['address'][1]['address1']." ".$data1['address'][1]['address2']." ".$data1['address'][1]['address3'];
        $data['per_city'] = $data1['address'][1]['address4'];
        $data['per_pincode'] = $data1['address'][1]['pincode'];
        $data['per_state_id'] = $data1['address'][1]['state_id'];
        $data['per_state_name']= $this->Account_model->getStateName($data['per_state_id']);
        $data['per_country_id'] = $data1['address'][1]['country_id'];
        $data['per_country_name'] = $this->Account_model->getCountryName($data['per_country_id']);
        $data['per_country_iso3166'] = $this->Account_model->getPerCountryIso3166($data['per_country_id']);
        if($data['per_country_iso3166']){
            $data['per_iso2_code'] = $data['per_country_iso3166'][0]['iso2_code'];
        }else{
            $data['per_iso2_code'] ="IN";
        }
        $data['per_address_proof_id'] = $data1['address'][1]['address_proof_id'];
        $data['per_address_proof_name'] = $this->Account_model->getAddressProof($data['per_address_proof_id']);
        $data['per_is_permanent_address'] = $data1['address'][1]['is_permanent_address'];

        //User Mobile,Office,Home,Fax No Details Section
        $data1['ph_no']     = $this->Account_model->getUserPnNo($user_id);
        $data['mobile']     = $data1['ph_no'][0]['ph'];

        if(isset($data1['ph_no'][1]['ph']))
        {
            $data['office_ph_code'] = $data1['ph_no'][1]['ph_code'];
            $data['office_ph'] = $data1['ph_no'][1]['ph'];
        }
        if(isset($data1['ph_no'][2]['ph']))
        {
            $data['home_ph_code'] = $data1['ph_no'][2]['ph_code'];
            $data['home_ph']    = $data1['ph_no'][2]['ph'];
        }
        if(isset($data1['ph_no'][3]['ph']))
        {
            $data['fax_code'] = $data1['ph_no'][3]['ph_code'];
            $data['fax_ph']    = $data1['ph_no'][3]['ph'];
        }


        /* $data['office_ph']   = $data1['ph_no'][1]['ph'];
        $data['home_ph']    = $data1['ph_no'][2]['ph'];
        $data['fax_ph'] = $data1['ph_no'][3]['ph']; */


        //User Bank Details Section
        $data1['bank_details']  = $this->Account_model->getBankDetails($user_id);
        $data['bank_name']      = $data1['bank_details'][0]['bankname'];
        $data['bank_address']   = $data1['bank_details'][0]['bankaddress1']." ".$data1['bank_details'][0]['bankaddress2']." ".$data1['bank_details'][0]['bankaddress3'];
        /* $data['bank_country_id'] = $data1['bank_details'][0][''];
        $data['bank_country_name'] = $this->Account_model->getCountryName($data['per_country_id']); */
        $data['bank_city']      = $data1['bank_details'][0]['city'];
        $data['bank_pincode']   = $data1['bank_details'][0]['pincode'];
        $data['bank_state_id']  = $data1['bank_details'][0]['stateid'];
        $data['bank_state_name'] = $this->Account_model->getStateName($data['bank_state_id']);
        $data['bank_accountnumber']  = $data1['bank_details'][0]['accountnumber'];
        $data['bank_accounttype']    = $data1['bank_details'][0]['accounttype'];
        $data['bank_ifsccode']  = $data1['bank_details'][0]['ifsccode'];
        $data['bank_micr_no']   = $data1['bank_details'][0]['micr_no'];

        /*------------------------------- Send Data to PDF ------------------------------------*/
        $final_result['user_id']        = $user_id;
        // User Basic Details
        $final_result['fname']          = $data['user_details']->fname;
        $final_result['mname']          = $data['user_details']->mname;
        $final_result['lname']          = $data['user_details']->lname;
        $final_result['name']           = $final_result['fname'].' '.$final_result['mname'].' '.$final_result['lname'];
        //$final_result['fathername']       = $data['user_details']->fathername;
        $final_result['ffname']         = $data['user_details']->father_fname;
        $final_result['fmname']         = $data['user_details']->father_mname;
        $final_result['flname']         = $data['user_details']->father_lname;
        $final_result['mothername']     = $data['user_details']->mother_name;
        $final_result['created']    =   date_create($data['user_details']->created_at);
        $final_result['mfname']         = $data['user_details']->mother_fname;
        $final_result['mmname']         = $data['user_details']->mother_mname;
        $final_result['mlname']         = $data['user_details']->mother_lname;
        $final_result['sex']            = $data['user_details']->sex;
        $final_result['nationality']    = $data['user_details']->nationality;
        $final_result['dob']            = $data['user_details']->dob;
        $final_result['pancard']        = $data['user_details']->pancard;
        $final_result['addharcard']     = $data['user_details']->addharcard;
        $final_result['nonAadharNorPanNo'] = $data['user_details']->nonAadharNorPanNo;
        $final_result['aadharImage']    = $data['user_details']->base_64Image;
        $final_result['signImage']      = $getSignatureImage['uploaded_path'].'/'.$getSignatureImage['file_name'];
        $final_result['validity']       = $data['user_details']->validity;
        $final_result['accounttype']    = $accountType;
        $final_result['annualincome']   = $data['user_details']->annualincome;
        $final_result['gs_amt']         = $data['user_details']->gs_amt;
        $final_result['userResidentialSataus'] = $data['user_details']->userResidentialstatus;
        $final_result['occupationid']   = $data['user_details']->occupationid;
        $final_result['marital_status'] = $data['user_details']->marital_status;
        //$final_result['pay_type']     = $data['user_details']->pay_type;
        $final_result['registred_date'] = $data['user_details']->created_at;
        $final_result['emailaddress']   = $data['email_id'];
        $final_result['mobile']         = $data['mobile'];

        if(isset($data['office_ph']))
        {
            $final_result['office_ph_code']    = $data['office_ph_code'];
            $final_result['office_ph']         = $data['office_ph'];
        }
        if(isset($data['home_ph']))
        {
            $final_result['home_ph_code']        = $data['home_ph_code'];
            $final_result['home_ph']             = $data['home_ph'];
        }
        if(isset($data['fax_ph']))
        {
            $final_result['fax_code']         = $data['fax_code'];
            $final_result['fax_ph']         = $data['fax_ph'];
        }

        /*$final_result['home_ph']         = $data['home_ph'];
        $final_result['fax_ph']         = $data['fax_ph'];  */

        // For Correspondance Address
        $final_result['corr_address']   = $data['corr_add'];
        $final_result['corr_city']      = $data['corr_city'];
        $final_result['corr_pincode']   = $data['corr_pincode'];
        $final_result['corr_state']     = $data['corr_state_name']['sName'];
        $final_result['corr_state_code'] = $data['corr_state_name']['sCode'];
        $final_result['corr_country']   = $data['corr_country_name']['cName'];
        $final_result['corr_iso2_code'] = $data['corr_iso2_code'];
        $final_result['corr_add_proof'] = $data['corr_address_proof_name']['addressproofdoc'];

        // For permanent Address
        $final_result['per_address']    = $data['per_add'];
        $final_result['per_city']       = $data['per_city'];
        $final_result['per_pincode']    = $data['per_pincode'];
        $final_result['per_state']      = $data['per_state_name']['sName'];
        $final_result['per_country']    = $data['per_country_name']['cName'];
        $final_result['per_iso2_code']  = $data['per_iso2_code'];
        $final_result['per_add_proof']  = $data['per_address_proof_name']['addressproofdoc'];

        // For User Bank Full Details  Section
        $final_result['bankname']       = $data['bank_name'];
        $final_result['bankaddress']    = $data['bank_address'];

        $final_result['bankcity']       = $data['bank_city'];
        $final_result['bankpincode']    = $data['bank_pincode'];
        $final_result['bankStateName']  = $data['bank_state_name']['sName'];
        $final_result['accountnumber']  = $data['bank_accountnumber'];
        $final_result['bankaccounttype']= $data['bank_accounttype'];
        $final_result['ifsccode']       = $data['bank_ifsccode'];
        $final_result['micr_no']        = $data['bank_micr_no'];

        /**************** Modified 18-Apr-2017 **************************/
        /*$today_date=date('dmY');
        if($final_result['mname'])
        {
            $pdf_str=$final_result['fname'].'_'.$final_result['mname'].'_'.$final_result['lname'].'_'.$today_date;
        }
        else
        {
            $pdf_str=$final_result['fname'].'_'.$final_result['lname'].'_'.$today_date;
        }*/



        //if($this->uri->segment(4)==1)
        /* if($accountType=='1')
        {
            //$this->saveEquityForm($final_result,$pdf_str);
            $this->saveEquityForm($final_result);
        }
        else if($accountType=='2')
        {
            $this->saveCommodityForm($final_result);
        } else{} */
       
        $this->saveEquityForm($final_result);
        $this->saveCommodityForm($final_result);
        $this->mergeCommodityorEquityForm($final_result);
    }

    /**************** Save Commodity Pdf ***************************/
    //public function saveCommodityForm($data,$pdf_str)
    public function saveCommodityForm($data){
        //load mPDF library
//        var_dump($data);
        $this->load->library('m_pdf');
        //actually, you can pass mPDF parameter on this load() function
        $pdf = $this->m_pdf->load();
        //load the view, pass the variable and do not show it but "save" the output into $html variable
       $html=$this->load->view('account/comodityForm', $data, true);

        //this the the PDF filename that user will get to download

        //$pdfFilePath = $pdf_str."_Commodity_Form.pdf";

        $pdfFilePath = "mcx.pdf";

        //$html = mb_convert_encoding($html, 'UTF-8', 'UTF-8');
        //generate the PDF!
        // $pdf->WriteHTML($html,'UTF-8', 'UTF-8');
        $pdf->WriteHTML($html, 2, false, false);
//        $pdf->Output('test.pdf', "I");

        $file_path = FCPATH."uploads/eKyc_without_ESign/".$data['user_id']."/";
        if (!file_exists($file_path)) {
            mkdir($file_path, 0777, true);
        }
        if($file_path)
        {
            $pdfPath=$file_path.$pdfFilePath;
            $pdf->Output($pdfPath,"F");
            $this->Account_model->save_commodityPdfPath($this->session->userdata('id'),$data['accounttype'],$pdfPath); //save file path to database

            $image_proof_filepath = FCPATH."uploads/eKyc_without_ESign/".$data['user_id']."/proofs.pdf";
            if(file_exists($image_proof_filepath)){
                $image_proof_pdf_path = $image_proof_filepath;
                $income_proof_pdf_path = FCPATH."uploads/eKyc_without_ESign/".$data['user_id']."/income_proof.pdf";
                $mcx_proof_pdf_path = FCPATH."uploads/eKyc_without_ESign/".$data['user_id']."/mcx.pdf";
                $pathToBeDownload = FCPATH."uploads/eKyc_without_ESign/".$data['user_id']."/mcx_proofs.pdf"; //die;
                /****** Merge Pdf(s) Section ******/
                $this->load->library('PDFMerger');
                $mergePdf = new CI_PDFMerger;
                $mergePdf->addPDF($mcx_proof_pdf_path, 'all')
                    ->addPDF($image_proof_pdf_path, 'all')
                    //->addPDF($income_proof_pdf_path, 'all')
                    ->merge('file', $pathToBeDownload);
            }

            //echo $pdfPath;
        }else{echo 'Not Saved To Folder';}

    }

    /**************** Save Equity Pdf ***************************/
    //public function saveEquityForm($data,$pdf_str){
    public function saveEquityForm($data){
        //load mPDF library
        /* echo'<pre>';
        print_r($data);
        die('sdfsdf'); */
        $this->load->library('m_pdf');
        //actually, you can pass mPDF parameter on this load() function
        $pdf = $this->m_pdf->load();
        //load the view, pass the variable and do not show it but "save" the output into $html variable
        $html=$this->load->view('account/equityForm', $data, true);
        //this the the PDF filename that user will get to download
        //$pdfFilePath = $pdf_str."_Equity_Form.pdf";
        $pdfFilePath = "nse.pdf";
        $html = mb_convert_encoding($html, 'UTF-8', 'UTF-8');
        //generate the PDF!
        // $pdf->WriteHTML($html,'UTF-8', 'UTF-8');
        $pdf->WriteHTML($html, 2, false, false);

        //$pdf->Output($pdfFilePath, "D");
        $file_path = FCPATH."uploads/eKyc_without_ESign/".$data['user_id']."/";
        if (!file_exists($file_path)) {
            mkdir($file_path, 0777, true);
        }
        if($file_path)
        {
            $pdfPath=$file_path.$pdfFilePath;
            $pdf->Output($pdfPath,"F");
            $this->Account_model->save_equityPdfPath($this->session->userdata('id'),$data['accounttype'],$pdfPath); //save file path to database
            $image_proof_filepath = FCPATH."uploads/eKyc_without_ESign/".$data['user_id']."/proofs.pdf";
            if(file_exists($image_proof_filepath)){
                $image_proof_pdf_path = $image_proof_filepath;
                $income_proof_pdf_path = FCPATH."uploads/eKyc_without_ESign/".$data['user_id']."/income_proof.pdf";
                $nse_proof_pdf_path = FCPATH."uploads/eKyc_without_ESign/".$data['user_id']."/nse.pdf";
                $pathToBeDownload = FCPATH."uploads/eKyc_without_ESign/".$data['user_id']."/nseproofs.pdf"; //die;
                /****** Merge Pdf(s) Section ******/
                $this->load->library('PDFMerger');
                $mergePdf = new CI_PDFMerger;
                $mergePdf->addPDF($nse_proof_pdf_path, 'all')
                    ->addPDF($image_proof_pdf_path, 'all')
                //  ->addPDF($income_proof_pdf_path, 'all')
                    ->merge('file', $pathToBeDownload);
            }

        }else
        {
            echo 'Not Saved To Folder';
        }
    }

    public function mergeCommodityorEquityForm($data)
    {
        $proof_filepath = FCPATH."uploads/eKyc_without_ESign/".$data['user_id']."/proofs.pdf";
        $nse_filepath = FCPATH."uploads/eKyc_without_ESign/".$data['user_id']."/nse.pdf";
        $mcx_filepath = FCPATH."uploads/eKyc_without_ESign/".$data['user_id']."/mcx.pdf";
        if(file_exists($proof_filepath) && file_exists($nse_filepath) && file_exists($mcx_filepath)){
            $pathToBeDownload = FCPATH."uploads/eKyc_without_ESign/".$data['user_id']."/nse_mcx_proofs.pdf"; //die;
            
            /****** Merge Pdf(s) Section ******/
            $this->load->library('PDFMerger');
            $mergePdf = new CI_PDFMerger;
            $mergePdf->addPDF($nse_filepath, 'all')->addPDF($mcx_filepath, 'all')
                ->addPDF($proof_filepath, 'all')
                ->merge('file', $pathToBeDownload);
        }
    }

}
?>
