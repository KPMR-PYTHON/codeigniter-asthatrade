<?php
   if (!defined('BASEPATH')) exit('No direct script access allowed');

class Atom
{
    
    function __construct()
    {
        $this->ci =& get_instance();
        //$this->ci->load->config('payments');
        $this->ci->load->config('atom');
        $this->endpoint = $this->ci->config->item('atom_api_endpoint');
        $this->settings = array(
            'login'    => $this->ci->config->item('atom_api_username'),
            'pass'    => $this->ci->config->item('atom_api_password'),
            'txncurr' => $this->ci->config->item('atom_TxnCurr'),
            'MARCHANT'    => $this->ci->config->item('atom_merchent_nmae'), 
            'txnscamt'    => $this->ci->config->item('atom_merchent_nmae'),
            'prod'    => $this->ci->config->item('atom_Product'),
            
                   
        );
    }
    
    
    
    function writeLog($data){
        $fileName = date("Y-m-d").".txt";
        $fp = fopen("log/".$fileName, 'a+');
        $data = date("Y-m-d H:i:s")." - ".$data;
        fwrite($fp,$data);
        fclose($fp);
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
    
    function sendInfo($data){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_PORT , 443); 
        //curl_setopt($ch, CURLOPT_SSLVERSION,3);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        $returnData = curl_exec($ch);

        curl_close($ch);
            return $returnData;
    }   
    
    
}
?>
