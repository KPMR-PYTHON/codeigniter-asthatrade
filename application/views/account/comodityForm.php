<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>

</head>

<body>

	<?php 
		$reg_date = explode("/",$registred_date);
		$state_code = str_split($corr_state_code);
		$regis_date = date("d/m/y", strtotime($registred_date));
		$regis_date1 = 	date("d-m-Y", strtotime($registred_date));
		$fullname =$fname.' '.$mname.' '.$lname;
	?>
	<div class="container" style="margin:0 50px;">
    <div style="float:left; height:3508px;width:100%;">  

    <table cellpadding="0" cellspacing="0" width="100%">
    	<tr>
            <td><img src="<?php echo base_url();?>content/images/logo_c.png" alt=""/></td>
        </tr>
    </table>
    	<table cellpadding="0" cellspacing="0" width="100%">
        	<tr>
            	<td width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:5px solid #000; border-bottom:5px solid #000; padding:8px 0; text-align:center; font-size:24px; font-family:Arial;">Trading Account Opening Form </td>
            </tr>
            <tr>
            	<td width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:8px 0;text-align:center;">TABLE OF CONTENTS </td>
            </tr>
        </table>
        
        <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border:1px solid #000; text-align:center">
        	<tr>
            	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; font-weight:bold;">DOCUMENT </td>
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; font-weight:bold;">SIGNIFICANCE </td>
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; font-weight:bold;">PAGE No. </td>
            </tr>
            
            <tr>
                <td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;font-weight:bold;border-top:1px solid #000;border-bottom:1px solid #000; padding:10px 0;">MANDATORY DOCUMENTS  </td>
            </tr>
            <tr>
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; border-top:1px solid #000;text-align:left; padding:3px 0 5px 10px; width:25%;">KYC (Account Opening Form) </td>
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000; text-align:left; padding:3px 0 5px 10px;">
a) KYC form - Document captures the basic information about the constituent and 
an instruction/check list.<br>
b) Document captures the additional information about the constituent relevant 
to trading account and an instruction /check list 
                </td>
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:15%;border-top:1px solid #000;">3 - 4 </td>
            </tr>
            
            <tr>
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; border-top:1px solid #000;text-align:left; padding:3px 0 5px 10px; width:25%;">Tariff Sheet  </td>
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000; text-align:left; padding:3px 0 5px 10px;">
Document detailing the rate/amount of brokerage and other charges that will be 
levied on the client for trading 
                </td>
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:15%;border-top:1px solid #000;">7 </td>
            </tr>
            
            <tr>
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; border-top:1px solid #000;text-align:left; padding:3px 0 5px 10px; width:25%;">Acknowledgement  Letter and 
Disclosure   </td>
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000; text-align:left; padding:3px 0 5px 10px;">
Acknowledgement indicating receipt of documents by the client. Disclosure 
document regarding client based trading.                 </td>
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:15%;border-top:1px solid #000;">8 </td>
            </tr>
            
            
            <tr>
                <td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;font-weight:bold;border-top:1px solid #000;border-bottom:1px solid #000; padding:10px 0;">OPTIONAL DOCUMENTS   </td>
            </tr>

            <tr>
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; border-top:1px solid #000;text-align:left; padding:3px 0 5px 10px; width:25%;">Authorization of running account / request letter  </td>
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000; text-align:left; padding:3px 0 5px 10px;">
Letter or authority / request to Astha Credit & Securities (P) Ltd. 
                </td>
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:15%;border-top:1px solid #000;">9 </td>
            </tr>
            
            <tr>
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; border-top:1px solid #000;text-align:left; padding:3px 0 5px 10px; width:25%;">Authorization Electronic 
Contract Notes   </td>
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000; text-align:left; padding:3px 0 5px 10px;">
Letter of Authorization Electronic Contract Notes (ECN) - Declaration 
                </td>
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:15%;border-top:1px solid #000;">10 </td>
            </tr>
            
            <tr>
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; border-top:1px solid #000;text-align:left; padding:3px 0 5px 10px; width:25%;">Internet based Trading   </td>
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000; text-align:left; padding:3px 0 5px 10px;">
Letter of Authorization for Internet based Trading (IBT) and Account Modification</td> 
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:15%;border-top:1px solid #000;">11 </td>
            </tr>
            
			<tr>
                <td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;font-weight:bold;border-top:1px solid #000;border-bottom:1px solid #000; padding:10px 0;">QUICK CHECKLIST    </td>
            </tr>
            
            <tr>
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; border-top:1px solid #000;text-align:center; padding:3px 0 5px 10px; width:5%;"><input type="checkbox">&nbsp;1.  </td>
                <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000; text-align:left; padding:3px 0 5px 10px;">Attach copy of passport, photograph on page 3 and sign across </td>
            </tr>
            
            <tr>
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; border-top:1px solid #000;text-align:center; padding:3px 0 5px 10px; width:5%;"><input type="checkbox">&nbsp;2.  </td>
                <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000; text-align:left; padding:3px 0 5px 10px;">Do Sign in all areas marked with serial numbers </td>
            </tr>
            <tr>
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; border-top:1px solid #000;text-align:center; padding:3px 0 5px 10px; width:5%;"><input type="checkbox">&nbsp;3.  </td>
                <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000; text-align:left; padding:3px 0 5px 10px;">Photocopy of PAN card and address proof with signature  </td>
            </tr>
            <tr>
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; border-top:1px solid #000;text-align:center; padding:3px 0 5px 10px; width:5%;"><input type="checkbox">&nbsp;4.  </td>
                <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000; text-align:left; padding:3px 0 5px 10px;">Photocopy of latest 3 months bank statement </td>
            </tr>
            <tr>
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; border-top:1px solid #000;text-align:center; padding:3px 0 5px 10px; width:5%;"><input type="checkbox">&nbsp;5.  </td>
                <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000; text-align:left; padding:3px 0 5px 10px;">Cancel cheque </td>
            </tr>
			<tr>
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; border-top:1px solid #000;text-align:center; padding:3px 0 5px 10px; width:5%;"><input type="checkbox">&nbsp;6.  </td>
                <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000; text-align:left; padding:3px 0 5px 10px;">Hand-written declaration on <b>page 10</b> </td>
            </tr>


        </table>
        
<table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border:1px solid #000; text-align:center">
        	<tr>
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;text-align:center; padding:15px 0 5px 10px; width:50%; font-weight:bold;">
            	Exchange 
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:center; padding:15px 0 5px 10px; width:50%; font-weight:bold;">
            	Registration No 
            </td>
        </tr>
        
        <tr>
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000;text-align:left; padding:15px 0 5px 10px; width:50%;">
            	MCX (Multi Commoditiy Exchange of India Ltd) 
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left;border-top:1px solid #000;  padding:15px 0 5px 10px; width:50%; ">
            	Membership No. 40000<br>
<!--FMC Reg No. MCX/TCM/PROP/1599-->
            </td>
        </tr>
        
        <!--<tr>
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000;text-align:left;  padding:15px 0 5px 10px; width:50%;">
            	NCDEX (National Commodity & Derivatives Exchange Ltd )
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left;border-top:1px solid #000;  padding:15px 0 5px 10px; width:50%; ">
            	Membership No. 01031<br>
FMC Reg No : NCDEX/TCM/PROP/1008
            </td>
        </tr>-->
        
                        
</table>        
        
<table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; margin:10px 0;border:1px solid #000; text-align:center">
        	<tr>
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;text-align:left; padding:3px 0 5px 10px; width:50%; font-weight:bold;">
            	REGISTERED OFFICE <br> 
 & CORRESPONDENCE OFFICE ADDRESS: 
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left; padding:3px 0 5px 10px; width:50%; ">
                <!--<span style="font-family:Arial, Helvetica, sans-serif;font-weight:bold; font-size:16px">Astha Credit & Securities (P) Ltd. </span><br>-->
                <span style="font-family:Arial, Helvetica, sans-serif;font-weight:bold; font-size:16px">Astha Commodities</span><br>
F - 01,  Usha Preet - 138/42, Malviya Nagar,<br> 
Bhopal ( M.P.) - 462003 ,Contact No :+91-755-4268-555,<br> 
Email id:-  contact@asthatrade.com , asthainv@yahoo.com 
            </td>
        </tr>
        
        <tr>
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000;text-align:left; padding:3px 0 5px 10px; width:50%;">
            	COMPLIANCE OFFICER  
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left;border-top:1px solid #000;  padding:3px 0 5px 10px; width:50%; ">
            	CHIEF EXECUTIVE OFFICER ( CEO )  
            </td>
        </tr>
        
        <tr>
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000;text-align:left;  padding:3px 0 5px 10px; width:50%;">
            	Name : Satish Chandra Gupta <br>
Phone :<span style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left; padding:3px 0 5px 10px; width:50%; ">0755-4220794</span>,<br> E-mail : contact@asthatrade.com 
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left;border-top:1px solid #000;  padding:3px 0 5px 10px; width:50%; ">
            	Name : Satish Chandra Gupta <br>
                Phone :<span style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left; padding:3px 0 5px 10px; width:50%; ">0755-4220794</span>,<br>E-mail : contact@asthatrade.com   
            </td>
        </tr>
        
         
</table>        
        
        
<table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; margin:10px 0;border:1px solid #000; text-align:center">
        	<tr>
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;text-align:left; padding:3px 0 5px 10px; width:30%;">
            	Exchange Name  
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;text-align:left; padding:3px 0 5px 10px; width:30%; ">
            	Email id 
            </td>
             <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left; padding:3px 0 5px 10px; width:30%; ">
            	Phone No 
            </td>
        </tr>
        
        
        <tr>
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000;text-align:left; padding:3px 0 5px 10px; width:30%;">
            	MCX 
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000;text-align:left; padding:3px 0 5px 10px; width:30%; ">
            	grievance@mcxindia.com
            </td>
             <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left;border-top:1px solid #000;padding:3px 0 5px 10px; width:30%; ">
            	022-67318888
            </td>
        </tr>
        
        <!--<tr>
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000;text-align:left; padding:3px 0 5px 10px; width:30%;">
            	NCDEX  
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000;text-align:left; padding:3px 0 5px 10px; width:30%; ">
            	askus@ncdex.com
            </td>
             <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;text-align:left; padding:3px 0 5px 10px; width:30%; ">
            	022-66406084
            </td>
        </tr>-->
        
        <tr>
        	<td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:center; padding:10px; border-top:1px solid #000;" >For any grievance/dispute please contact <b>Astha commodities. At : F-01 " Usha Preet " 138/42 Malviya Nagar, Bhopal- 462003 ( M.P.) Phone : <span style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left; padding:3px 0 5px 10px; width:50%; ">+91-755-4268-555</span>,</b> Email : contact@asthatrade.com In case not satisfied with
the response please contact the concerned exchange(s)</td>
        </tr>


</table>        
 </div>
        
 <!-- page 1 end-->
 <div style="float:left; height:3508px;width:100%;">  

<table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; margin:10px 0;border:1px solid #000; text-align:center">
<tr><td colspan="2" style="border:none;"><br/><br/><br/><br/><br/><br/><br/></td></tr>

	<tr>
    	<td colspan="2" style="padding:3px 0; text-align:center; font-weight:bold; font-size:16px;border-top:1px solid #000;">
        	INSTRUCTIONS
        </td>
    </tr>
    <tr>
    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:center; line-height:24px; border-right:1px solid #000;border-top:1px solid #000;">
        	<span style="font-family:Arial, Helvetica, sans-serif; font-size:10px;font-weight:bold; fonr-size:20px;">A. </span>
         </td>
         <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left;border-top:1px solid #000;">IMPORTANT POINTS:</td>
         </tr>
         <tr>
             
             <td colspan="2"  style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left;border-top:1px solid #000;">1. Self attested copy of PAN card is mandatory for all clients, including Promoters/Partners/Karta/Trustees and whole time directors and persons authorized to deal in securities on behalf of company/firm/others.</td>
          </tr>
          <tr>
          
          <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left;">2.    Copies of all the documents submitted by the applicant should be self-attested and accompanied by originals for verification. In case the original of any document is not produced for verification, then the copies should be properly attested by entities authorized for attesting the documents, as per the below mentioned list.</td>
         </tr>
         <tr>
         <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left;">
               3. If any proof of identity or address is in a foreign language, then translation into English is required.</td>
         </tr>
        <tr>
        <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left;">
               4. Name & address of the applicant mentioned on the KYC form, should match with the documentary proof submitted.</td>
        </tr>
        <tr>
        <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left;">
               5. If correspondence & permanent address are different, then proofs for both have to be submitted.</td>
         </tr>
         <tr>
         <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left;">
               6. Sole proprietor must make the application in his individual name & capacity. </td>
         </tr>
         <tr>
         <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left;">
               7. For non-residents and foreign nationals, (allowed to trade subject to RBI and FEMA guidelines), copy of passport/P10 Card/OCI Card and overseas address proof is mandatory.
               </td>
          </tr>
          <tr>
          <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left;">8. For foreign entities, CIN is optional; and in the absence of DIN no. for the directors, their passport copy should be given.</td>
          </tr>
          <tr>
          <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left;">
               9. In case of Merchant Navy NRI's, Mariner's declaration or certified copy of CDC (Continuous Discharge Certificate) is to be submitted.</td>
          </tr>
          <tr>
          <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left;">
               10. For opening an account with Depository participant or Mutual Fund, for a minor, photocopy of the School Leaving Certificate/Mark sheet issued by Higher Secondary Board/Passport of Minor/Birth Certificate must be provided.</td>
          </tr>
          <tr>
          <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left;">
               11. Politically Exposed Persons (PEP) are defined as individuals who are or have been entrusted with prominent public functions in a foreign country, e.g., Heads of States or of Governments, senior politicians, senior Government/judicial/ military officers, senior executives of state owned corporations, important political party officials, etc.</td>
               </tr>
               
 <tr>
    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:center; line-height:24px; border-right:1px solid #000;border-top:1px solid #000;">
        	<span style="font-family:Arial, Helvetica, sans-serif; font-size:10px;font-weight:bold; fonr-size:20px;">B. </span>
         </td>
         <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left;border-top:1px solid #000;">PROOF OF IDENTITY (POI) - LIST OF DOCUMENTS ADMISSIBLE AS PROOF OF IDENTITY: -</td>
         </tr>              
               
                <tr>
                <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left;border-top:1px solid #000;">
                List of documents admissible as Proof of Identity:<br> 
                1. Unique Identification Number (UID) (Aadhaar)/ Passport/Voter ID card/ Driving license. <br>
                2. PAN card with photograph.<br>
                3. Identity card/ document with applicant's Photo, issued by any of the following: Central/State Government and its Departments, Statutory/Regulatory Authorities, Public Sector Undertakings, Scheduled Commercial Banks, Public Financial Institutions, Colleges affiliated to Universities, Professional Bodies such as ICAI,      ICWAI, ICSI, Bar Council etc., to their Members; and Credit cards/Debit cards issued by Banks.<br><br>
 </td>
 </tr> 
  <tr>
    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:center; line-height:24px; border-right:1px solid #000;border-top:1px solid #000;">
        	<span style="font-family:Arial, Helvetica, sans-serif; font-size:10px;font-weight:bold; fonr-size:20px;">C. </span>
         </td>
         <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left;border-top:1px solid #000;">PROOF OF ADDRESS (POA) LIST OF DOCUMENTS ADMISSIBLE AS PROOF OF ADDRESS:-</td>
         </tr>              
              
           <tr>
          <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left;border-top:1px solid #000;">
           List of documents admissible as Proof of Address: (*Documents having an expiry date should be valid on the date of submission.)<br>
                  1. Passport/ Voters Identity Card/ Ration Card/ Registered Lease or Sale Agreement of Residence/ Driving License/ Flat Maintenance bill/Insurance Copy.<br>
                  2. Utility bills like Telephone Bill (only land line), Electricity bill or Gas bill - Not more than 3 months old.<br>
                  3. Bank Account Statement/Passbook -- Not more than 3 months old. <br>
                  4. Self-declaration by High Court and Supreme Court judges, giving the new address in respect of their own accounts.<br> 
                  5. Proof of address issued byanyof the following: Bank Managers of Scheduled Commercial Banks/Scheduled Co-Operative Bank/Multinational Foreign Banks/Gazetted Officer/Notary public/Elected representatives to the Legislative Assembly/Parliament/Documents issued by any Govt. or Statutory Authority. <br>
                  6. Identity card/document with address, issued by any of the following: Central/State Government and its Departments, Statutory/Regulatory Authorities, Public Sector Undertakings, Scheduled Commercial Banks, Public Financial Institutions, Colleges affiliated to Universities and Professional Bodies such as ICAI, ICWAI,ICSI, Bar Council etc., to their Members. <br>
                  7. For FII/sub account, Power of Attorney given by FII/sub-account to the Custodians (which are duly notarized and/or apostiled or consularised)that gives the registered address should betaken.<br> 
                  8. The proof of address in the name of the spouse may be accepted. <br><br>
  </td>
  </tr>
  
  <tr>
    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:center; line-height:24px; border-right:1px solid #000;border-top:1px solid #000;">
        	<span style="font-family:Arial, Helvetica, sans-serif; font-size:10px;font-weight:bold; fonr-size:20px;">D. </span>
         </td>
         <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left;border-top:1px solid #000;">EXEMPTIONS / CLARIFICATIONS TO PAN</td>
         </tr>                
           <tr>
           <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left;border-top:1px solid #000;">
           (*Sufficient documentary evldence in support of such claims to be collected.)<br> 
                  1. In case of transactions undertaken on behalf of Central Government and/or State Government and by officials appointed by Courts e.g. Official liquidator, Court receiver etc.<br>
                  2. Investors residing in the state of Sikkim.<br> 
                  3. UN entities/multilateral agencies exempt from paying taxes/filing tax returns in India.<br> 
                  4. SIP of Mutual Funds upto Rs 50, 000/-<br> 
                  5. In case of institutional clients, namely, Fils, MFs, VCFs, FVCIs, Scheduled Commercial Banks, Multilateral and Bilateral Development Financial Institutions, State Industrial Development Corporations, Insurance Companies registered with IRDA and Public Financial Institution as defined under section 4A of the Companies Act, 1956, Custodians shall verify the PAN card details with the original PAN card and provide duly certified copies of such verified PAN details to the intermediary. <br/><br/>
 </td>
 </tr>
 <tr>
    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:center; line-height:24px; border-right:1px solid #000;border-top:1px solid #000;">
        	<span style="font-family:Arial, Helvetica, sans-serif; font-size:10px;font-weight:bold; fonr-size:20px;">E. </span>
         </td>
         <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left;border-top:1px solid #000;">LIST OF PEOPLE AUTHORISED TO ATTEST THE DOCUMENTS</td>
         </tr>                 
                   <tr>
  <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left;border-top:1px solid #000;">                
                  
                  1. Notary Public, Gazetted Officer, Manager of a Scheduled Commercial/ Co-operative Bank or Multinational Foreign Banks (Name, Designation &Seal should be affixed on the copy).<br> 
                  2. In case of NRls, authorized officials of overseas branches of Scheduled Commercial Banks registered in India, Notary Public, Court Magistrate, Judge, Indian Embassy /Consulate General in the country where the client resides are permitted to attest the documents. F. In case of Non-Individuals, additional documents to be obtained from non-individuals, over & above the POI & POA, as mentioned below:<br>
                  
                  </td>
                  </tr>
                  
<tr>
    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:center; line-height:24px; border-right:1px solid #000;border-top:1px solid #000;">
        	<span style="font-family:Arial, Helvetica, sans-serif; font-size:10px;font-weight:bold; fonr-size:20px;">F. </span>
         </td>
         <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left;border-top:1px solid #000;">COPY OF CANCELLED CHEQUE LEAF/ PASS BOOK/ BANK STATEMENT</td>
         </tr>                   
<tr>
<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left; border-top:1px solid #000;">             
Please ensure the document specifies the name of the constituent, MICR Code and/or IFSC code of the bank 
        </td>
    </tr>

</table>       
  </div>      
 <!-- page 2 end-->

<div style="float:left; height:3508px;width:100%;">  

<table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:5px solid #000; text-align:center"> 
        
        <tr>
        	<td><br>
            	<span style="font-family:Arial, Helvetica, sans-serif; font-size:10px;font-weight:bold; font-size:18px; padding:10px 0;">
                 KNOW YOUR CLIENT (KYC) APPLICTAION FORM<br></span> (For Individuals)
            </td>
        </tr>
 </table>    
        
<table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border:1px solid #000;border-bottom:0; text-align:center"> 
        
        
         <tr>
        	<td colspan="4" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:3px 10px; text-align:left; width:100%">Please fill this form in ENGLISH and in BLOCK LETTERS </td>
        </tr>
        <tr>
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;text-align:left;">
            	<table width="100%" cellpadding="0"  cellspacing="0" >
                    <tr>
                        <td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:3px 10px;text-align:left; background:#e5e5e5; width:100%;font-weight:bold;">A. IDENTITY DETAILS</td>
                    </tr>
                    
                    <tr>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; width:2%;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">1.</td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:15px 10px;border-top:1px solid #000;"> Name of the Applicant</td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:15px 10px;border-top:1px solid #000; width:80%; text-transform:uppercase;"> <b><?php echo ($fname.' '.$mname.' '.$lname);?></b></td>
                    </tr>
<tr>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; width:2%;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">2.</td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:16px 10px;border-top:1px solid #000;"> Father's/Husband's Name</td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:16px 10px;border-top:1px solid #000;"><b><?php echo strtoupper($ffname.' '.$fmname.' '.$flname);?></b></td>
                    </tr>                    
                </table>
                
            </td>
            
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-right:1px solid #000;border-top:1px solid #000; width:150px; height:130px; float:right;" >PHOTOGRAPH<BR/><BR/>



Please affix your passport size photograph & signature across it<br/><br/>
Signature of client<br/>
<img src="<?php echo base_url(); ?>content/images/tick2.png" alt="" />(1)</td>


        </tr>
   </table>
        
   <table cellpadding="0" cellspacing="0" width="100%">     
        <tr>
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; width:2%;border-top:1px solid #000;border-right:1px solid #000;border-left:1px solid #000;text-align:left; padding:3px 10px;">
            	3.
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            	(a.) Gender
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            	<?php
                if($sex=='1')
                {
				?>
				<input type="radio" checked="checked" />Male<br>
                <input type="radio" />Female
				<?php
                }
                else if($sex=='2')
                {
                ?>
				<input type="radio"  />Male<br>
                <input type="radio" checked="checked" />Female
				<?php
                }
                ?>
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            	(b.) Marital Sataus
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            	<?php
                if($marital_status=='1')
                {
				?>
				<input type="radio" />Single <br>
                <input type="radio" checked="checked"/>Married
				<?php
                }
                else if($marital_status=='0')
                {
                ?>
				<input type="radio" checked="checked"/>Single <br>
                <input type="radio" />Married
				<?php
                }
                ?>
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;text-align:left; padding:3px 10px;">
            	(c.) Date of birth
            </td>
			<?php 
				$dob=explode("/",$dob);
				//print_r($dob);
				//echo $dob[0][1];
			?>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $dob[0][8];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $dob[0][9];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $dob[0][5];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
			<?php echo $dob[0][6];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $dob[0][0];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $dob[0][1];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $dob[0][2];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $dob[0][3];?>
			</td>
            
            
        </tr>
        
        
 </table>    
        
   <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-bottom:1px solid #000;">     
        <tr>
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; width:2%;border-top:1px solid #000;border-right:1px solid #000;border-left:1px solid #000;text-align:left; padding:3px 10px;">
            	4.
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            	(a.) Nationality
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            	<?php
				if($nationality == 'Indian')
				{
				?>
				<input type="radio" checked="checked" />Indian<br>
                <input type="radio" />Other<br>
                (Please Specify,_________)
				<?php
				} 
				else
				{
				?>
				<input type="radio"  />Indian<br>
                <input type="radio" checked="checked" />Other<br>
                (Please Specify,<u><?php echo $nationality;?></u>)
				<?php
				}
				?>
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            	(b.) Sataus
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            	<?php // if($userResidentialstatus == '0') ?>
				<input type="radio" <?php if($userResidentialSataus == 0){?>checked="checked"<?php } ?> />Resident Individual<br>
                <input type="radio" <?php if($userResidentialSataus == 1){?>checked="checked"<?php } ?>/>Non Resident<br>
                <input type="radio" <?php if($userResidentialSataus == 2){?>checked="checked"<?php } ?>/>Foreign National<br>
				<input type="radio" <?php if($userResidentialSataus == 3){?>checked="checked"<?php } ?>/>Person of Indian Origin
            </td>
            
        </tr>
        
 </table> 
     
 
<table cellpadding="0" cellspacing="0" width="100%">     
        <tr>
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; width:2%;border-top:1px solid #000;border-right:1px solid #000;border-left:1px solid #000;text-align:left; padding:3px 10px;">
            	5.
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            	(a.) PAN
				<?php 
				$pan=explode("/",$pancard);
				?>
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $pan[0][0];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $pan[0][1];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $pan[0][2];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $pan[0][3];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $pan[0][4];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $pan[0][5];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
			<?php echo $pan[0][6];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $pan[0][7];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $pan[0][8];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $pan[0][9];?>
			</td>
           
            
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            	(b.) Unique Indentification Number (UID / Adhar If Any
            </td>
            <?php 
			$aadhar=explode("/",$addharcard);
			?>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $aadhar[0][0];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $aadhar[0][1];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $aadhar[0][2];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $aadhar[0][3];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $aadhar[0][4];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $aadhar[0][5];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $aadhar[0][6];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $aadhar[0][7];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $aadhar[0][8];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $aadhar[0][9];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $aadhar[0][10];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $aadhar[0][11];?>
			</td>
            
            
        </tr>
        
        
</table> 
 
<table cellpadding="0" cellspacing="0" width="100%">
     
        <tr>
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; width:2%;border-top:1px solid #000;border-right:1px solid #000;border-left:1px solid #000;text-align:left; padding:3px 10px;">
            	6.
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            	Specify the proof of identity Submitted
            </td>
            
            
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            	<?php if($corr_add_proof == 'PAN Card' ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?>PAN Card<br>
            	<?php if($corr_add_proof != 'PAN Card' ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?>Any Other ( Please Specify,<u><?php echo $corr_add_proof ;?></u>)
			</td>
            
            
        </tr>
        
        
</table> 
 
       
<table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-bottom:1px solid #000;border-top:1px solid #000;" >  
   
        <tr>
        	<td colspan="10" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left; background:#e5e5e5; width:100%; font-weight:bold;">B. CLIENT ADDRESS DETAILS</td>
        </tr>
        <tr>
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; width:2%;border-top:1px solid #000;border-right:1px solid #000;border-left:1px solid #000;text-align:left; padding:3px 10px;">
            	1.
            </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            	Correspondence Address
            </td>
            <td colspan="3" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:0 0px;">
            	<table cellpadding="0" cellspacing="0" width="100%">
                	<tr>
                    	<td colspan="12" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left; padding:3px; height:60px;">
						<?php echo $corr_address;?>
						</td>
                    </tr>
                    <tr>
                    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-bottom:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px; width:100px;">City / Town / Village
                        </td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-bottom:1px solid #000;border-right:1px solid #000;text-align:left; padding:0; width:100px;">
						<?php echo $corr_city; ?>
                        </td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-bottom:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px; width:150px">PIN Code
                        </td>
							<?php $pincode=explode("/",$corr_pincode);?>
							
							<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-bottom:1px solid #000;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
							<?php echo $pincode[0][0];?>
							</td>
							<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-bottom:1px solid #000;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
							<?php echo $pincode[0][1];?>
							</td>
							<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-bottom:1px solid #000;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
							<?php echo $pincode[0][2];?>
							</td>
							<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-bottom:1px solid #000;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
							<?php echo $pincode[0][3];?>
							</td>
							<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-bottom:1px solid #000;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
							<?php echo $pincode[0][4];?>
							</td>
							<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-bottom:1px solid #000;border-top:1px solid #000; text-align:left; padding:3px 10px;">            	
							<?php echo $pincode[0][5];?>
							</td>
							
                    </tr>
                    <tr>
                    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;text-align:left; padding:3px;">State
                        </td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-right:1px solid #000;text-align:left; padding:0;">
						<?php echo $corr_state; ?>
                        </td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;text-align:left; padding:3px;">Country
                        </td>
                        <td colspan="8" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;text-align:left; padding:3px;">
                        <?php echo $corr_country; ?>
						</td>
                        
                    </tr>
                </table>
            </td>
        </tr>
        
        
        
        <tr>
        
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; width:2%;border-top:1px solid #000;border-right:1px solid #000;border-left:1px solid #000;text-align:left; padding:3px 10px;">
            	2.
            </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            	Contact Details
            </td>
            <td colspan="3" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:0 0px;">
            	<table cellpadding="0" cellspacing="0" width="100%">

                	<?php /** Diffination of  $ph_type: 1 for Mobile, 2 for Office, 3 for Home(Res.), 4 for Fax. **/ ?>
					<tr>
                    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-bottom:1px solid #000;text-align:left; padding:3px; width:260px;">Tel. (Off):&nbsp;<?php if($office_ph_code){echo $office_ph_code.'-'.$office_ph;} else{ echo $office_ph;} ?></td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-bottom:1px solid #000;text-align:left; padding:3px; width:260px;">Tel. (Res):&nbsp;<?php if($home_ph_code){echo $home_ph_code.'-'.$home_ph;} else{ echo $home_ph;} ?></td>
                    </tr>
                    <tr>
                    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left; padding:3px;width:260px;">Fax No:&nbsp;<?php if($fax_code){echo $fax_code.'-'.$fax_ph;} else { echo $fax_ph; } ?></td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left; padding:3px;width:260px;">Mob. No:&nbsp;<?php echo '+91-'.$mobile;?>
					</tr>
                    <tr>

                    	<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left;border-top:1px solid #000; padding:3px;width:260px;">E-mail ID:&nbsp;&nbsp;<?php echo $emailaddress;?></td>

					</tr> 


                </table>
            </td>
            
        </tr>
        
        <tr>
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; width:2%;border-top:1px solid #000;border-right:1px solid #000;border-left:1px solid #000;text-align:left; padding:3px 10px;">
            	3.
            </td>
            <td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            	Proof of Correspondence Address
            </td>
            
            
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            <?php echo $corr_add_proof; ?>			
            </td>
        </tr>
        
        <tr>
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; width:2%;border-top:1px solid #000;border-right:1px solid #000;border-left:1px solid #000;text-align:left; padding:3px 10px;">
            	4.
            </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            	Permanent Address (if Different form above Mandatory for Non Resident Applicant to specify overseas Address)
            </td>
            <td colspan="3" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:0 0px;">
            	<table cellpadding="0" cellspacing="0" width="100%">
                	<tr>
                    	<td colspan="12" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left; padding:3px; height:60px;">
						<?php if($per_address){echo $per_address;}else{echo $corr_address;} ?>
						</td>
                    </tr>
                    <tr>
                    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-bottom:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px; width:100px;">
						City / Town / Village
                        </td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-bottom:1px solid #000;border-right:1px solid #000;text-align:left; padding:0;width:100px;">
						<?php if($per_city){echo $per_city;}else{echo $corr_city;}?>

                        
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-bottom:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px; width:150px;">
						PIN Code
                        </td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">
						 <?php if($per_pincode){$pincode1=explode("/",$per_pincode);}else{$pincode1=explode("/",$corr_pincode);} ?>            	
						</td>
						
						<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-bottom:1px solid #000;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">           	
						<?php echo $pincode1[0][0];?>
						</td>
						<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-bottom:1px solid #000;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
						<?php echo $pincode1[0][1];?>
						</td>
						<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-bottom:1px solid #000;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
						<?php echo $pincode1[0][2];?>
						</td>
						<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-bottom:1px solid #000;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">           	
						<?php echo $pincode1[0][3];?>
						</td>
						<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-bottom:1px solid #000;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">          	
						<?php echo $pincode1[0][4];?>
						</td>
						<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-bottom:1px solid #000;border-top:1px solid #000; text-align:left; padding:3px 10px;">          	
						<?php echo $pincode1[0][5];?>
						</td>
						

                    </tr>
					
                    <tr>
                    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;text-align:left; padding:3px;">
						State
                        </td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-right:1px solid #000;text-align:left; padding:0;">
						<?php if($per_state){echo $per_state;} else{ echo $corr_state;}?>
                        </td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;text-align:left; padding:3px;">
						Country
                        </td>
                        <td colspan="8" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;text-align:left; padding:3px;">
						<?php if($per_country){echo $per_country;} else{echo $corr_country;}?>
                        </td>
                        
                    </tr>
                </table>
            </td>
        </tr>
        
        <tr>
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; width:2%;border-top:1px solid #000;border-right:1px solid #000;border-left:1px solid #000;text-align:left; padding:3px 10px;">
            	5.
            </td>
            <td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            	Proof of Permanent Address
            </td>
            
            
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
			<?php if($per_add_proof){echo $per_add_proof;} else{echo $corr_add_proof;}?>
            </td>
        </tr>
        
        
        <tr>
        
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; width:2%;border-top:1px solid #000;border-right:1px solid #000;border-left:1px solid #000;text-align:left; padding:3px 10px;">
            	6.
            </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            	Contact Details
            </td>
            <td colspan="3" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:0 0px;">
            	<table cellpadding="0" cellspacing="0" width="100%">

                	<?php /** Diffination of  $ph_type: 1 for Mobile, 2 for Office, 3 for Home(Res.), 4 for Fax. **/ 
					
					?>
					<tr>
                    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-bottom:1px solid #000;text-align:left; padding:3px; width:260px;">Tel. (Off):&nbsp;<?php if($office_ph_code){echo $office_ph_code.'-'.$office_ph;} else{ echo $office_ph;} ?></td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-bottom:1px solid #000;text-align:left; padding:3px; width:260px;">Tel. (Res):&nbsp;<?php if($home_ph_code){echo $home_ph_code.'-'.$home_ph;} else{ echo $home_ph;} ?></td>
                    </tr>
                    <tr>
                    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left; padding:3px;width:260px;">Fax No:&nbsp;<?php if($fax_code){echo $fax_code.'-'.$fax_ph;} else { echo $fax_ph; } ?></td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left; padding:3px;width:260px;">Mob. No:&nbsp;<?php echo '+91-'.$mobile;?>
					</tr>
                    <tr>

                    	<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left;border-top:1px solid #000; padding:3px;width:260px;">E-mail ID:&nbsp;&nbsp;<?php echo $emailaddress;?></td>

					</tr> 
				</table>
            </td>
            
        </tr>
        
</table> 

<table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-bottom:1px solid #000;border-top:1px solid #000;">     
        <tr>
        	<td colspan="7" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left; background:#e5e5e5; width:100%; font-weight:bold;">C. GROSS ANNUAL INCOME DETAILS (Please Specify)</td>
        </tr>
        <tr>
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; width:2%;border-top:1px solid #000;border-left:1px solid #000;text-align:left; padding:3px 10px;">
            	1.
            </td>
			<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; width:2%;border-top:1px solid #000;border-right:1px solid #000;border-left:1px solid #000;text-align:left; padding:3px 10px;">
            	Income Range
            </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:15%;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;"><?php if($annualincome =='1' ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?> Below  1 lac</td>
			<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:15%;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;"><?php if($annualincome =='2' ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?> 1-5 lac</td>
			<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:15%;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;"><?php if($annualincome =='3' ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?> 5-10 lac</td>
			<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:15%;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;"><?php if($annualincome =='4' ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?> 10-25 lac</td>
			<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:15%;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;"><?php if($annualincome =='5' ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?> More than  25 lac</td>
            
        </tr>
        
        
        
        
        
        <tr>
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; width:2%;border-top:1px solid #000;border-right:1px solid #000;border-left:1px solid #000;text-align:left; padding:3px 10px;">
            	2.
            </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            	Net worth As on
            </td>
            
            
            <td colspan="2" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            		
            </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            	Rs.
            </td>
            
            
            <td  colspan="2" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            <?php echo $gs_amt;?>		
            </td>
        </tr>
        
        <tr>
        	<td colspan="7" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; width:2%;border-top:1px solid #000;border-right:1px solid #000;border-left:1px solid #000;text-align:left; padding:3px 10px;">
            	(Net Worth should not be older than one year)
            </td>
        </tr>
        
</table>  

<table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-bottom:1px solid #000;border-top:1px solid #000;">     
        <tr>
        	<td colspan="4" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left; background:#e5e5e5; width:100%; font-weight:bold;">D. OCCUPATION (Please Tick any one and give brief details)</td>
        </tr>
        
		
            <tr>
				<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
				<?php if($occupationid == 3 ){?> &#x2611; <?php } else { ?><input type="checkbox" /> <?php } ?>Government Service
				</td>
				<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
				<?php if($occupationid == 2){?> &#x2611; <?php } else { ?><input type="checkbox" /> <?php } ?>Public Sector
				</td>
				<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
				<?php if($occupationid == 1){?> &#x2611; <?php } else { ?><input type="checkbox" /> <?php } ?>Private Sector
				</td>
			    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
				<?php if($occupationid == 5){?> &#x2611; <?php } else { ?><input type="checkbox" /> <?php } ?>Professional
				</td>
			</tr>
			
			<tr>
            
				<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;width:20%;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
				<?php if($occupationid == 4){?> &#x2611; <?php } else { ?><input type="checkbox" /> <?php } ?>Business
				<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
				<input type="checkbox" />Farmer
				</td>
				<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
				<?php if($occupationid == 10){?> &#x2611; <?php } else { ?><input type="checkbox" /> <?php } ?>Others | (Please Specify)
				</td>
           
			</tr>
		
</table>  

<table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-bottom:1px solid #000;border-top:1px solid #000;">     
        <tr>
        	<td colspan="4" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left; background:#e5e5e5; width:100%; font-weight:bold;">E. OTHER DETAILS (Please tick if possible)</td>
        </tr>
        <tr>
            <td colspan="4" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            	<input type="checkbox" />Politically Exposed Person (PEP) / Related to a Politically Exposed Person (PEP)
            </td>
            
        </tr>
        
        <tr>
            
            <td colspan="4" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;width:20%;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            	<input type="checkbox" />Not a Politically Exposed Person If Not Related to a Politically Exposed Person (PEP) 
            </td>
           
        </tr>
        
        <tr>
            
            <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;width:20%;border-top:1px solid #000;text-align:left; padding:3px 10px;">
            	Any other Information
            </td>
            <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;width:20%;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">&nbsp;
            	
            </td>
           
        </tr>
        
</table> 
 
</div> 

  <!-- page 3 end-->
<div style="float:left; height:3508px;width:100%;">  

 
<table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 0 0;border-bottom:1px solid #000;border-top:1px solid #000;"> 
<tr><td colspan="2"><br/><br/><br/><br/><br/><br/><br/></td></tr>
    
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:40%;border-left:1px solid #000; padding:3px 10px;text-align:left; background:#e5e5e5; font-weight:bold;">A. BANK ACCOUNT DETAILS</td>
        
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:left; background:#e5e5e5;font-weight:bold;">[Please enclose, Copy of a Cancelled cheque leaf / Pass Book / bank Statement containing name of the constituent]</td>
        </tr>
</table>
<table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-bottom:1px solid #000;border-left:1px solid #000;border-right:1px solid #000;">     
   <tr>
		<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:center;">Primary <br>Bank Name</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:center;"> Branch Address</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:center;"> Bank A/C No.</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-right:1px solid #000; padding:3px 10px;text-align:center;"> A/C type <span style="font-family:Arial, Helvetica, sans-serif; font-size:10px;font-size:10px;">( Saving/ Current / Other in case od NRI / NRE / NRO)</span></td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:center;"> MICR No.</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:3px 10px;text-align:center;"> IFSC Code</td>
    </tr>
   <tr>
		<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:center;"><?php echo strtoupper($bankname);?></td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:center;"><?php echo $bankaddress.','.$bankcity.'-'.$bankpincode.','.$bankStateName;?></td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:center;"><?php echo $accountnumber;?></td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:center;">
		<?php 
		if($bankaccounttype == '1'){echo 'Saving';}	
		else if($bankaccounttype == '2'){echo 'Current';}	
		else if($bankaccounttype == '3'){echo 'NRE/NRO';}	
		?>
		</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:center;"><?php echo $micr_no; ?></td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-top:1px solid #000;padding:3px 10px;text-align:center;"><?php echo $ifsccode; ?></td>
    </tr>
        <tr>
		<td colspan="6" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000; padding:3px 10px;text-align:left;">(Provide a copy of cancelled cheque leaf/passbook/bank statement specifying name of the client, MICR Code or /and IFSC Code of the bank.)</td>
        
    </tr>
</table>    
<table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-bottom:1px solid #000;border-left:1px solid #000;border-right:1px solid #000;">     
    
    <tr>
		<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:3px 10px;text-align:left;">Pay_Out Option</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:3px 10px;text-align:left;"><input type="checkbox">Cheque </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:3px 10px;text-align:left;"><input type="checkbox">Fund Transfer  </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;text-align:center;"><input type="checkbox">Bank Draft </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;text-align:center;"><input type="checkbox">CMS </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;text-align:center;"><input type="checkbox">NEFT </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;text-align:center;"><input type="checkbox">RTGS </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;text-align:center;"><input type="checkbox">As Per Group </td>
    </tr>
</table>
<table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-bottom:1px solid #000;border-left:1px solid #000;border-right:1px solid #000;">     
    <tr>
		<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:center;">Secondery<br> Bank Name</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:center;"> Branch Address</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:center;"> Bank A/C No.</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-right:1px solid #000; padding:3px 10px;text-align:center;"> A/C type <span style="font-family:Arial, Helvetica, sans-serif; font-size:10px;font-size:10px;">( Saving/ Current / Other in case od NRI / NRE / NRO)</span></td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:center;"> MICR No.</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:3px 10px;text-align:center;"> IFSC Code</td>
    </tr>
    <tr>
		<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:center;">&nbsp;</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:center;"></td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:center;"> </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:center;"></td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:center;"></td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-top:1px solid #000;padding:3px 10px;text-align:center;"> </td>
    </tr>
    <tr>
		<td colspan="6" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000; padding:3px 10px;text-align:left;">(Provide a copy of cancelled cheque leaf/passbook/bank statement specifying name of the client, MICR Code or /and IFSC Code of the bank.)</td>
        
    </tr>
</table> 
<table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-bottom:1px solid #000;border-left:1px solid #000;border-right:1px solid #000;">     
    
    <tr>
		<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:3px 10px;text-align:left;">Pay_Out Option</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:3px 10px;text-align:left;"><input type="checkbox">Cheque </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:3px 10px;text-align:left;"><input type="checkbox">Fund Transfer  </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;text-align:center;"><input type="checkbox">Bank Draft </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;text-align:center;"><input type="checkbox">CMS </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;text-align:center;"><input type="checkbox">NEFT </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;text-align:center;"><input type="checkbox">RTGS </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;text-align:center;"><input type="checkbox">As Per Group </td>
    </tr>
</table> 
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 0 0;border-bottom:1px solid #000;border-top:1px solid #000;">     
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:40%;border-left:1px solid #000; padding:3px 10px;text-align:left; background:#e5e5e5; font-weight:bold;">B. DEPOSITORY ACCOUNT DETAILS</td>
        
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:left; background:#e5e5e5;font-weight:bold;">[Please enclose, Demat Master or Recent Holding Statement issued by DP bearing name of the client. ]</td>
        </tr>
</table>
<table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-bottom:1px solid #000;border-left:1px solid #000;border-right:1px solid #000;">     
   <tr>
		<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:center;">Name of Dipository</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:center;"> Type of the depository</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:center;"> Benificiary Name</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:center;"> DP ID No.</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:3px 10px;text-align:center;"> Benificiary ID NO.</td>
    </tr>
   <tr>
		<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:center;"></td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:center;"><input type="checkbox" />NSDL
        <input type="checkbox" />CDSL
        </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:center;"> </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:center;"></td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-top:1px solid #000;padding:3px 10px;text-align:center;"> </td>
    </tr>
    <tr>
		<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:center;"></td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:center;"><input type="checkbox" />NSDL
        <input type="checkbox" />CDSL</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:center;"> </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:center;"></td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-top:1px solid #000;padding:3px 10px;text-align:center;"> </td>
    </tr>
    <tr>
    <td colspan="5" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000; padding:3px 10px;text-align:left;">
     (Provide a copy of either Demat Master or a recent holding statement issued by DP bearing name of the client)</td>
     </tr> 
   
</table> 

 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 0 0;border-bottom:1px solid #000;border-top:1px solid #000;">     
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left; background:#e5e5e5; font-weight:bold; text-transform:uppercase;">C. Trading Preferences</td>
        </tr>
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-right:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:left;">Please sign in the relavent bosex where you wish to Trade.The segment not chosen should be sturck of by the client .</td>
        </tr>
</table>
<table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-bottom:1px solid #000;border-left:1px solid #000;border-right:1px solid #000;">     
   <tr>
		<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:center;">Name of Exchange</td>
        <td colspan="8" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:center;">Date of Consent for trading of concerned Exchange</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:3px 10px;text-align:center;"> Signature of the client</td>
    </tr>
 
   <!--<tr>
		<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:center;"> National Commodity & Derivatives Exchange (NCDEX)  </td>
        <td colspan="8" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000; text-align:center;">
        <table cellpadding="0" cellspacing="0" width="100%">
        	<tr>
            	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:center;">D</td>
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding: 10px;text-align:center;">D</td>
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:10px;text-align:center;">M</td>
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:10px;text-align:center;">M</td>
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;padding:10px;text-align:center;">Y</td>
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:10px;text-align:center;">Y</td>
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:10px;text-align:center;">Y</td>
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:10px;text-align:center;">Y</td>
            </tr>
        
        </table>
        
        
        
        
        </td>
        <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000; padding:15px 10px 15px 0px;text-align:left; background:url(images/tick2.png) no-repeat left center;margin:10px 0  0 0;" >(2)</td>
    </tr>-->
    
    <tr>
		<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:center;"> Multi Commodity Exchange of India Ltd. (MCX) </td>
        <td colspan="8" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000; text-align:center;">
        <table cellpadding="0" cellspacing="0" width="100%">
        	<tr>
            	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:center;">D</td>
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:center;">D</td>
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:center;">M</td>
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:center;">M</td>
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:center;">Y</td>
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:center;">Y</td>
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:center;">Y</td>
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:3px 10px;text-align:center;">Y</td>
            </tr>
        
        </table>
        </td>
       <!-- <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000; padding:15px 10px 15px 0px;text-align:left;margin:10px 0  0 0;" ><img src="<?php echo base_url(); ?>content/images/tick2.png" alt="" />(3)</td>-->
        
         <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000; padding:15px 10px 15px 0px;text-align:left;margin:10px 0  0 0;" ><img src="<?php echo base_url(); ?>content/images/tick2.png" alt="" />(2)</td>
    </tr>
    
   
</table>
</div>
<!-- page 4 end-->
<div style="float:left; height:3508px;width:100%;">  

 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 0 0;border-bottom:1px solid #000;border-top:1px solid #000;">
 <tr><td colspan="3"><br/><br/><br/><br/></td></tr>
     
        <tr>
        	<td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left; background:#e5e5e5; font-weight:bold; text-transform:uppercase;">D. INVESTMENT / TRADING EXPERIENCE</td>
        </tr>
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:left;"><input type="checkbox" />No Prior Experience</td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:left;"><input type="checkbox" /><input type="text" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-bottom:1px solid #000; border-left:0; border-right:0; border-top:0;" />Years in Commodities</td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;"><input type="checkbox" /><input type="text" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-bottom:1px solid #000; border-left:0; border-right:0; border-top:0;" />Years in other Investment related fields </td>
        </tr>
 </table>
 
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 0 0;border-bottom:1px solid #000;border-top:1px solid #000;">     
        <tr>
        	<td colspan="4" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left; background:#e5e5e5;"><b>E. SALES TAX/LOCAL & OTHER VAT REGISTRATION DETAILS</b> (Please give deities of all Stete Where you are Registered) )</td>
        </tr>
        
        <tr>
        	<td colspan="4" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">Local Sales Tax Registration 
          	</td>
       </tr>
        
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:center;">Sl. No.</td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:center;">State </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:center;">Registration No </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:center;">Validity Date </td>
        </tr>
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:center;">1.</td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:center;"> </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:center;"> </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:center;"></td>
        </tr>
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:center;">2.</td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:center;"> </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:center;"> </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:center;"></td>
        </tr>
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:center;">3.</td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:center;"> </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:center;"> </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:center;"></td>
        </tr>
 </table>
 
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin: 0;border-bottom:1px solid #000;">     
	<tr>
    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000; padding:3px 10px;text-align:left;">Central Sales Tax Registration No</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:left;"> </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:left;"> </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:left;"> </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:left;"> </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:left;"> </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:left;"> </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:left;"> </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:left;"> </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:left;"></td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:left;"> </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:left;"> </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:left;"></td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:left;"> </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:left;"> </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:left;"> </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:left;"></td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:left;"></td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:left;"></td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:left;"> </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:3px 10px;text-align:left;">Validity Date</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:left;"> </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:left;"> </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:left;"> </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:left;"> </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:left;"> </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:left;"> </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:left;"> </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:left;"> </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:left;"></td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:left;"> </td>
    </tr>

</table> 
 
<table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 0 0;border-bottom:1px solid #000;border-top:1px solid #000;">     
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:30%;border-left:1px solid #000;border-RIGHT:1px solid #000; padding:3px 10px;text-align:left; background:#e5e5e5; font-weight:bold;">F. PAST REGULATORY ACTONS</td>
        
        </tr>
          <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:100%;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">Details of any action/proceedings inidated/pendingltaken By FMC/SEBI/Stock Exchange/Commodity Exchange/Any Other Authority against the client during last three years.:</td>
        </tr>
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:100%;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; padding:25px 10px;text-align:center;">Please Specify</td>
        </tr>
        
</table>
 
 
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 0 0;border-bottom:1px solid #000;border-top:1px solid #000;">     
        <tr>
        	<td colspan="4" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-RIGHT:1px solid #000; padding:3px 10px;text-align:left; background:#e5e5e5; font-weight:bold;">G. DEALING THROUGH OTHER MEMBERS</td>
        
        </tr>
        <tr>
        	<td colspan="4" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;"><b>If client is dealing through any other member, provide the following details :</b><br> (In case dealing with multiple members, provide details of all in a separate sheet containing all the information as mention below) </td>
        	
           
        </tr>
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:45%;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">Name of member / Authorised Person (AP) </td>
        	<td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">&nbsp;</td>
           
        </tr>
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">Name of Exchange</td>
        	<td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">&nbsp;</td>
           
        </tr>
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;"> Exchange's Registration No.</td>
        	<td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">&nbsp;</td>
           
        </tr>
        
         <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;"> Member's Name with whom AP Is Registered</td>
        	<td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">&nbsp;</td>
           
        </tr>  
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;"> Members Registered Office Address</td>
        	<td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">&nbsp;</td>
           
        </tr>   
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;"> Member's Registered Office Phone & Fax</td>
        	<td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">&nbsp;</td>
           
        </tr> 
          <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;"> Member's E-mail ID </td>
        	<td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">&nbsp;</td>
           
        </tr> 
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">Member's Website  </td>
        	<td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">&nbsp;</td>
           
        </tr> 
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">Client Code</td>
        	<td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">&nbsp;</td>
           
        </tr> 
        
        <tr>
        <td colspan="4" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:100%;border:1px solid #000; padding:3px 10px;text-align:left;">Details of disputes dues pending from / to such member/AP</td>
        <tr>
        	<td colspan="4" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:100%;border-left:1px solid #000;border-right:1px solid #000; padding:25px 10px;text-align:center;">Please Specify</td>
       </tr> 
        
          
</table>

<table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 0 0;border-bottom:1px solid #000;border-top:1px solid #000;">     
        <tr>
        	<td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:30%;border-left:1px solid #000;border-RIGHT:1px solid #000; padding:3px 10px;text-align:left; background:#e5e5e5;"><b>H. ADDITIONAL DETAILS</b>  (Please Tick)</td>
        
        </tr>
          <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">Whether you wish to receive communication from Member In electronic form on your E-mail ID : yes DNo (II yes then please fill In Appendix • A) </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:3%;border-top:1px solid #000; padding:3px 10px;text-align:left;"><input type="checkbox" /> Yes </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:3%;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;"><input type="checkbox" /> No </td>
        </tr>
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">Whether you wish to avail facility of Internet Trading I Wireless Technology : </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:3%;border-top:1px solid #000; padding:3px 10px;text-align:left;"><input type="checkbox" /> Yes </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:3%;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;"><input type="checkbox" /> No </td>
        </tr>
       
        
</table>

<table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 0 0;border-top:1px solid #000;">     
        <tr>
        	<td colspan="6" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:30%;border-left:1px solid #000;border-RIGHT:1px solid #000; padding:3px 10px;text-align:left; background:#e5e5e5;"><b>I. DETAILS OF INTRODUCER</b>  (OPTIONAL)</td>
        
        </tr>
          <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:left;">Status of the Introducer </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:left;"><input type="checkbox" /> Existing Client </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:left;"><input type="checkbox" /> Sub-broker /AP </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:left;"><input type="checkbox" /> Employee </td>
            <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;"><input type="checkbox" /> Others |<span style="font-family:Arial, Helvetica, sans-serif; font-size:10px;font-size:10px;">Please Specify</span></td>
            
        </tr>
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:left;">Name of Introducer </td>
            <td colspan="5" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-right:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:left;"> </td>
        </tr>
        
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:left;">Sub-Broker/AP Registration No. </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:left;"> </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:left;">UCC.</td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:left;"></td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:left;">Employee Code</td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:30%;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;"></td>
            
        </tr>
</table>
<table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-bottom:1px solid #000;">     

        <tr>
        	
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-left:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            	Address
            </td>
            <td colspan="3" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:0 0px;">
            	<table cellpadding="0" cellspacing="0" width="100%">
                	<tr>
                    	<td colspan="9" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left; padding:3px; height:60px;">&nbsp;</td>
                    </tr>
                    <tr>
                    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-bottom:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px;">City / Town / Village
                        </td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-bottom:1px solid #000;border-right:1px solid #000;text-align:left; padding:0; width:150px;">&nbsp;
                        </td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-bottom:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px;">PIN Code
                        </td>
                        <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">&nbsp;            	
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">&nbsp;            	
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">&nbsp;            	
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">&nbsp;            	
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">&nbsp;            	
            </td><td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000;text-align:left; padding:3px 10px;">&nbsp;            	
            </td>
            
                    </tr>
                    <tr>
                    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;text-align:left; padding:3px;">State
                        </td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-right:1px solid #000;text-align:left; padding:0;">&nbsp;
                        </td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;text-align:left; padding:3px;">Country
                        </td>
                        <td colspan="6" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;text-align:left; padding:3px;">&nbsp;
                        </td>
                        
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">Signature of the Introducer </td>
            <td colspan="11" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;"></td>
            
        </tr>
</table>
</div>
<!-- page 5 end-->
<div style="float:left; height:3508px;width:100%;">  

<table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 0 0;border-bottom:1px solid #000;border-top:1px solid #000;"> 
<tr><td><br/><br/><br/><br/><br/><br/><br/></td></tr>
    
        <tr>
        	<td colspan="4" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-RIGHT:1px solid #000; padding:3px 10px;text-align:left; background:#e5e5e5; font-weight:bold;">J. NOMINATIONS DETAILS ( For individuals only)</td>
        
        </tr>
          <tr>
        	<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000;font-size:14px; font-weight:bold; padding:3px 10px;text-align:left;"> I / We wish to Nominate</td>
            <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-right:1px solid #000;font-size:14px; font-weight:bold; padding:3px 10px;text-align:left;"> I / We do not wish to Nominate</td>
        </tr>
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">Name of the Nominee</td>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;"></td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">Relationship with Nominee </td>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;"></td>
        
        </tr>
        
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">PAN of the Nominee</td>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;"></td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">Date of Birth of Nominee  </td>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">____ / ____ /________</td>
        
        </tr>
        
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">Nominee Address</td>
        	<td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">&nbsp;</td>
           
        </tr>
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">&nbsp;</td>
        	<td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">&nbsp;</td>
           
        </tr>
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">Contact Number </td>
        	<td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">&nbsp;</td>
           
        </tr>
        <tr>
        	<td colspan="4" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000;font-size:15px; font-weight:bold; padding:3px 10px;text-align:left;"> If Nominee is a Minor Details of Guardian</td>
         </tr>
         <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">Name of the Guardian </td>
        	<td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">&nbsp;</td>
           
        </tr>  
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">Guardian Address </td>
        	<td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">&nbsp;</td>
           
        </tr>  
         <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">&nbsp; </td>
        	<td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">&nbsp;</td>
           
        </tr>
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">Contact Number</td>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;"></td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">Signature of guardian </td>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">&nbsp;</td>
        
        </tr>
        <tr>
        	<td colspan="4" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000;font-size:15px; font-weight:bold; padding:3px 10px;text-align:left;"> WITNESS (Only Applicable in case the account holder has made nomination)</td>
         </tr>
         <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">First Witness Name</td>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;"></td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">Second Witness Name</td>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">&nbsp;</td>
        
        </tr>  
         <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">Witness Signature</td>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;"></td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">Witness Signature</td>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">&nbsp;</td>
        
        </tr>  
         <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">Address</td>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;"></td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">Address</td>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">&nbsp;</td>
        
        </tr>
         <tr>
        	<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;"></td>
        	<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">&nbsp;</td>
        
        </tr>  
        
</table>


 
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 0 0;border-bottom:1px solid #000;border-top:1px solid #000;">     
        <tr>
        	<td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-bottom:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left; background:#e5e5e5; font-weight:bold; text-transform:uppercase;">DECLARATION</td>
        </tr>
        <tr>
        	<td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:3px 10px 10px 10px;text-align:left;  ">1. I /We hereby declare that the details furnished above are true & correct to the best of my/our knowledge and belief, and I / We undertake to inform you of any changes therein immediately in writing. In case any of the above information is found to be false or untrue or misleading or misrepresenting. I am / we are aware that I/we may be held liable for it.<br><br> 
             2. I / We confirm having read / been explained and understood the contents of the Documents on policy & procedures of the stock brokers and the tariff sheet.<br> <br> 
             3. I / We further confirm having read & understood the contents of the 'Mandatory as well as Voluntary'. 'Rights & Obligation' document(s) and 'Risk Disclosure Document. I / We do hereby agree to be bound by such provisions as outlined in these document. I / We have also been informed that the standard set of documents has been displayed for information on stock brokers designated website, if any. </td>
        </tr>
        
        <tr>
        	<td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:3px 10px 10px 10px;text-align:left;  ">Name Of Applicent &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $fullname;?></b> </td>
        </tr>
        
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:10px ; text-align:left;">Date :<?php echo '<u>'.$regis_date.'</u>';?></td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:10px ; text-align:left;">Place :<?php echo '<u>'.$corr_city.'</u>';?></td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-bottom:1px solid #000; padding:15px 10px 15px 10px;text-align:left;margin:-10px 0  0 0;" ><img src="<?php echo base_url(); ?>content/images/tick2.png" alt="" />(3)<BR/><BR/><span style="text-align:C<br>
">Signature of Applicant</span></td>
        </tr>

        <tr>
        	<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:10px 10px 20px 10px ; text-align:left;">Signatory (ies) </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:10px ; text-align:left;">Signature of Client / (all) Authorised 
</td>
            
        </tr>
        
         
 
</table> 
 </div>
<!-- page 6 end-->  
 <!--<div style="float:left; height:3508px;width:100%;">  

 <table  cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 30px 0;border-bottom:1px solid #000;"> 
 <tr><td colspan="2"><br/><br/><br/><br/><br/><br/><br/></td></tr>

 <tr>
     	<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:35px 10px;text-align:center; font-size:20px; text-transform:uppercase;">Tariff Sheet</td>
        </tr>
        <tr>
        	<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:15px 10px;text-align:left; text-transform:uppercase;">BROKERAGE STRUCTURE ( MCX )</td>
        </tr>
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; border-left:1px solid #000; border-top:1px solid #000; padding:15px 10px;text-align:center;font-weight:bold;">MCX</td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;  border-top:1px solid #000; padding:15px 10px;text-align:center;">Rs. 20 Per Order</td>
            
        </tr>
        
 </table>
 
 
 
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 30px 0;border-bottom:1px solid #000;">     
        
        <tr>
        	<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:15px 10px;text-align:left; text-transform:uppercase;">Astha Commodities</td>
        </tr>
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-left:1px solid #000; border-top:1px solid #000; padding:25px 10px;text-align:left;">Client's Name :<B><?php echo '<u>'.$fullname.'</u>';?></B></td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;  border-top:1px solid #000; padding:25px 10px;text-align:left;">Date :<?php echo '<u>'.$regis_date.'</u>';?></td>
        </tr>
        <tr>
        	<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; border-left:1px solid #000;  padding:25px 10px;text-align:left;">Signature Of Client ( 5 )<img src="<?php echo base_url(); ?>content/images/tick2.png" alt="" />_____________________________________</td>
            
        </tr>
       
 </table>
 
  <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 30px 0;border-bottom:1px solid #000;">     
        
      
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-left:1px solid #000; border-top:1px solid #000; border-right:1px solid #000;padding:15px 10px;text-align:left;">For Office Use Only</td>
            
        </tr>
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; border-left:1px solid #000;  padding:15px 10px;text-align:left;">Clients' Trading Account Number ________________________________________________</td>
            
        </tr>
       
 </table>
 </div>-->
 
  <div style="float:left; height:3508px;width:100%;">  

 <table  cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 30px 0;border-bottom:1px solid #000;"> 
 <tr><td colspan="2"><br/><br/><br/><br/><br/><br/><br/></td></tr>

    
    <tr>
         <td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:35px 10px;text-align:center; font-size:20px; text-transform:uppercase;">Tariff Sheet</td>
    </tr>
    <tr>
        <td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:15px 10px;text-align:left; text-transform:uppercase;">BROKERAGE STRUCTURE ( MCX )</td>
    </tr>
     <tr>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; border-left:1px solid #000; border-top:1px solid #000; padding:15px 10px;text-align:center;font-weight:bold;">Brokerage Rate</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;  border-top:1px solid #000; padding:15px 10px;text-align:center;">Percentage (%)</td>
        <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;  border-top:1px solid #000; padding:15px 10px;text-align:center;">In terms of Paisa</td>
    </tr>
    
    <tr>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; border-left:1px solid #000; border-top:1px solid #000; padding:15px 10px;text-align:center;width:33%;">MCX</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;  border-top:1px solid #000; padding:15px 10px;text-align:center;width:33%;">&nbsp;</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;  border-top:1px solid #000; padding:15px 10px; text-align:right; width:18%;">&nbsp;</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;  border-top:1px solid #000; padding:15px 10px; text-align:center;">Paisa</td>

   </tr>
 </table>
 
<table  cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 30px 0;border-bottom:1px solid #000;"> 
 <tr>
 <td colspan="4" style="font-size:12.5px;" ><br/>
 In Case the brokerage rate is not specified on the brokerage chart as above, the default brokerage as mentioned below will be applicable.
<br/><br/><br/><br/>
</td>
</tr>

    
    
    <tr>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; border-left:1px solid #000; border-top:1px solid #000; padding:15px 10px;text-align:center;font-weight:bold;">Brokerage Rate</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;  border-top:1px solid #000; padding:15px 10px;text-align:center;">Percentage (%)</td>
        <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;  border-top:1px solid #000; padding:15px 10px;text-align:center;">In terms of Paisa</td>
    </tr>
    
    <tr>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; border-left:1px solid #000; border-top:1px solid #000; padding:15px 10px;text-align:center;width:33%;">MCX</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;  border-top:1px solid #000; padding:15px 10px;text-align:center;width:33%;">0.01</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;  border-top:1px solid #000; padding:15px 10px; text-align:right; width:18%;">1</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;  border-top:1px solid #000; padding:15px 10px; text-align:center;">Paisa</td>

   </tr>
 </table> 
 
 
 
 <br><br><br><br><br><br> 
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 30px 0;border-bottom:1px solid #000;">     
        
        <tr>
            <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:15px 10px;text-align:left;">Astha Commodities</td>
        </tr>
        <tr>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-left:1px solid #000; border-top:1px solid #000; padding:25px 10px;text-align:left;">Client's Name :<B><?php echo '<u>'.$fullname.'</u>';?></B></td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;  border-top:1px solid #000; padding:25px 10px;text-align:left;">Date :<?php echo '<u>'.$regis_date.'</u>';?></td>
        </tr>
        <tr>
            <td colspan="" style="font-family:Arial, Helvetica, sans-serif;  border-left:1px solid #000;font-size:10px;padding:25px 10px;text-align:left;">Signature Of Client ( 4 )<img src="<?php echo base_url(); ?>content/images/tick2.png" alt="" />_____________________________________</td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:25px 10px;text-align:left;">DATE(DD/MM/YYYY)</td>
            
        </tr>
       
 </table>
 
  <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 30px 0;border-bottom:1px solid #000;">     
        
      
        <tr>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-left:1px solid #000; border-top:1px solid #000; border-right:1px solid #000;padding:15px 10px;text-align:left;">For Office Use Only</td>
            
        </tr>
        <tr>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; border-left:1px solid #000;  padding:15px 10px;text-align:left;">Clients' Trading Account Number ________________________________________________</td>
            
        </tr>
       
 </table>
 
 </div>
<!-- page 7 end-->  
<div style="float:left; height:3508px;width:100%;">  

 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 30px 0;">     
        <tr><td><br/><br/><br/><br/><br/><br/><br/></td></tr>

        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:15px 10px;text-align:center; text-transform:uppercase;">ACKNOWLEDGEMENT </td>
        </tr>
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:15px 10px;text-align:left;">To<br> 
 Astha Commodities<br> 
F-01,  Usha Preet - 138/42, <br>
 Malviya Nagar, Bhopal ( M.P.) - 462003<br> 
<br><br> 
Dear Sir , <br><br>
 
I/We hereby acknowledge receipt of the following documents<br><br>  
1. Rights and Obligations of Members, Authorised Persons and Clients<br><br> 
2. Risk Disclosure Document <br><br>
3. Guidance Note - Do's and Don'ts for Trading on the Exchange(s) for Investors <br><br>
4. General Terms and Conditions governing commodities trading and broking services of Astha Commodities.<br><br> 
5. Internet & Wireless Technology Based Trading Facility Provided by Members To client .<br><br>
 6. We acknowledge the brokerage calculator provided to us and it is acceptable to us. We agree to pay Rs 390 per crore as transaction charges which includes exchange transaction charges and clearing charges. All other statury levies and taxes and brokerage shall be in addition to above.<br><br>
  l/We understand that the Voluntary documents executed by me/us are out of my/our own free will.<br>
   l/We hereby confirm that I/We have clearly understood and agree to abide by the Terms and Conditions described by Astha Commodities. I/We also understand that these Terms and Conditions can be changed by Astha Commodities and their applicability with prospective effect. All intraday as well as positional holding will be square up at 80% mark To mark (M-to-M) loss. This is as per RMS Policy. I understood and agreed to this. If We state that I have read and understood all above documents including the Terms and Conditions governing commodities trading and broking services of Astha Commodities. and agree to abide by the same. Yours faithfully,<br> <br>
   Yours Faithfully
</td>

        </tr>
</table>  

<table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 30px 0;border-bottom:1px solid #000;">     
        
      
        <tr>
        	<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-left:1px solid #000; border-top:1px solid #000; border-right:1px solid #000;padding:15px 10px;text-align:left;">CLIENT'S NAME&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $fullname;?> </b>   </td>
            
        </tr>
        <tr>
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-left:1px solid #000;text-align:left; padding:10px 10px;">
            	<span style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:15px 100px 15px 0;background:url(images/tick.png) no-repeat right top;">SIGNATURE OF CLIENT'S  (5)<img src="<?php echo base_url(); ?>content/images/tick2.png" alt="" /> </span>
            </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;  padding:15px 10px;text-align:left;">Date (DD / MM / YY)&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $regis_date;?></td>
            
        </tr>
       
 </table> 
 
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 0px 0;border:1px solid #000;">     
<tr>
     <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:center; padding:10px; font-weight:bold;">DISCLOSER INFORMATION
 </td>
</tr>
<tr>
     <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left; padding:10px;border-top:1px solid #000;"> 

Dear Sir/Madam,<br><br>
This is to inform you as per Rules, Regulations and Bye-laws of Multi Commodity Exchange of India Ltd. (MCX) That We do Client based trading and Proprietary trading and we are not
indulged in portfolio management services.
 </td>
</tr>
<tr>
     <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left; padding:10px;"> 

Regards, </td>
</tr>

<tr>
     <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left; padding:10px;"> 

Astha Commodities . </td>
</tr>
<tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-top:1px solid #000; padding:15px 10px;text-align:left;">I/We acknowledge receipt of information given above by Astha Commodities that they do Client based trading and
Proprietrary trading and they are not indulged in portfolio management services.    </td>
            
        </tr>

</table> 
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:0;border-bottom:1px solid #000;">     
        
      
        <tr>
        	<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-left:1px solid #000;  border-right:1px solid #000;padding:15px 10px;text-align:left;">CLIENT'S NAME &nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $fullname;?>  </b>  </td>
            
        </tr>
        <tr>
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-left:1px solid #000;text-align:left; padding:10px 10px;">
            	<span style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:15px 100px 15px 0;background:url(images/tick.png) no-repeat right top;">SIGNATURE OF CLIENT'S  (6) <img src="<?php echo base_url(); ?>content/images/tick2.png" alt="" /></span>
            </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;  padding:15px 10px;text-align:left;">Date (DD / MM / YY)&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $regis_date;?></td>
            
        </tr>
       
 </table>
 
 </div>

<!-- page 8 end-->  
<div style="float:left; height:3508px;width:100%;">  

 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 30px 0;">     
        <tr><td><br/><br/><br/><br/><br/><br/><br/></td></tr>

        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:15px 10px;text-align:center; text-transform:uppercase; font-weight:bold; font-size:20px; page-break-before: always;">AUTHORIZATION FOR RUNNING ACCOUNT  </td>
        </tr>
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:15px 10px;text-align:left;">To<br>
 Astha Commodities<br>
F-01, Usha Preet - 138/42,<br>
Malviya Nagar, Bhopal ( M.P.) - 462003<br> 
<br><br> 
I am a registered client with you, and am dealing in Commodity Market, and have a Astha Commodities. client code as mentioned
below. 
<br> <br>  
I am aware that payout / credited from the exchange(s) against settlement of transaction as per settlement cycle is available within
the prescribed time of the payout from the Exchange. It is difficult for me to make available the required funds on every pay-in of
funds obligation / margin obligation, hence I request you to maintain my account on a running basis and retain the payout received /
credit balance in my account for my future obligation / margin obligation or other liabilities unless I instruct otherwise. <br> <br> 
If payment of funds is required, I shall request you in writing or through the web option for funds withdrawal on the web login.
Further it may be noted that if required I may revoke this authorization at any time after giving request in writing.<br> <br>
This running account authorization would continue until it is revoked by me. The actual settlement of funds shall be done at least
once in a quarter. While settling the account having outstanding obligations on the settlement date, you may retain the requisite
funds towards such obligations and may also retain the funds expected to be required to meet margin obligations for next 5 trading
days, calculated in the manner specified by the exchanges.<br> <br>
I shall bring any dispute arising from the statement of account or settlement so made to your notice within 7 working days from the
date of receipt of funds or statement, as the case may be. In case of non-receipt of any such communication the statement /
settlement of running account shall be considered as final as agreed and accepted by me.</td>
</tr>
<tr>
<tr>
	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:15px 10px;text-align:left;">
Yours faithfully, 
    </td>
</tr>
</table> 

 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 30px 0;border-bottom:1px solid #000;">     
        
      
        <tr>
        	<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-left:1px solid #000; border-top:1px solid #000; border-right:1px solid #000;padding:15px 10px;text-align:left;">CLIENT'S NAME&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $fullname;?> </b>   </td>
            
        </tr>
        <tr>
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-left:1px solid #000;text-align:left; padding:10px 10px;">
            	<span style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:15px 100px 15px 0;background:url(images/tick.png) no-repeat right top;">SIGNATURE OF CLIENT'S  (7)<img src="<?php echo base_url(); ?>content/images/tick2.png" alt="" /> </span>
            </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;  padding:15px 10px;text-align:left;">Date (DD / MM / YY)&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $regis_date;?> </td>
            
        </tr>
       
 </table>
 
   <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 0px 0;border:1px solid #000;">     
<tr>
     <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:center; padding:10px; font-weight:bold;">AUTHORIZATION FOR ACCOUNT MODIFICATION
 </td>
</tr>
<tr>
     <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left; padding:10px;border-top:1px solid #000;"> 
<br/><br>
If I/we were to add/modify/ remove any of my detail including brokerage plans with Astha Commodities. I/we authorize you to carry
it out based on my request sent through an email to contact@asthatrade.com from my registered email address or intimation
through an interface provided by you, where to I have been allowed secured access.<br><br>
If you feel the need to do so, then at your own discretion, you may put in place appropriate mechanism to confirm the request
before or after its execution by way of a call from a recorded line, or otherwise, personal meeting, SMS or other such other mode as
you may deem fit.<br/><br> </td>
</tr>

</table> 
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:0;border-bottom:1px solid #000;">     
        
      
        <tr>
        	<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-left:1px solid #000;  border-right:1px solid #000;padding:15px 10px;text-align:left;">CLIENT'S NAME&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $fullname;?></b></td>
            
        </tr>
        <tr>
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-left:1px solid #000;text-align:left; padding:10px 10px;">
            	<span style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:15px 100px 15px 0;background:url(images/tick.png) no-repeat right top;">SIGNATURE OF CLIENT'S  (8)<img src="<?php echo base_url(); ?>content/images/tick2.png" alt="" /> </span>
          </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;  padding:15px 10px;text-align:left;">Date (DD / MM / YY)&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $regis_date;?></td>
            
        </tr>
       
 </table>
</div>
 
 <!-- page 9 end-->  
<div style="float:left; height:3508px;width:100%;">  

 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 30px 0;">     
        
        <tr>
        	<td colspan="2" style="padding:15px 10px;text-align:center; text-transform:uppercase; font-weight:bold; font-size:20px;page-break-before: always;"><br/><br><br/><br>ELECTRONIC CONTRACT NOTES (ECN) - DECLARATION  </td>
        </tr>
        <tr>
        	<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:15px 10px;text-align:left;"> 
To<br>  
Astha Commodities<br> 
F-01,  Usha Preet - 138/42, <br>  
 Malviya Nagar, Bhopal ( M.P.) - 462003 <br> <br> 
 
Dear Sir,
I, <input type="text" value="<?php echo $fullname;?>" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border:0; width:200px;"/> as a client of Astha Commodities , member of
MCX  as my broker undertake as follows:
I am aware that the Member has to provide physical contract note in respect to all the trades placed by me
unless I myself want the same in the electronic form.<br><br>
I am aware that the Member has to provide electronic contract note for my convenience on my request only.<br><br>
Though the Member is required to deliver physical contract note, I find that it is inconvenient for me to receive
physical contract notes. Therefore, I am voluntarily requesting for delivery of electronic contract note pertaining
to all the trades carried out / ordered by me.<br><br>
I have access to a computer and am a regular internet user, having sufficient knowledge of handling the<br><br>
email operations. </td>
</tr>
<tr>
<td style="font-family:Arial, Helvetica, sans-serif; padding:5px 10px;text-align:left; font-size:20px; font-weight:bold; border:1px solid #000;">
	EMAIL ID :-   
</td>
<td style="font-family:Arial, Helvetica, sans-serif; width:50%; padding:5px 10px;text-align:left; font-size:12px; font-weight:bold; border:1px solid #000;">
	<?php echo $emailaddress;?>    
</td>

        </tr>
<tr>
	<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:15px 10px;text-align:left;">
    	This has been created by me and not by someone else.<br>
I am aware that this declaration form should be in English or in any other Indian language known to me.<br>
This declaration is valid until the date mentioned below.
    </td>
</tr>
<tr>
	<td colspan="2" style="padding:15px 10px;text-align:left; font-size:20px; font-family:'Times New Roman', Times, serif; background:#e5e5e5; ">
    	[The above declaration has been read and understood by me. I am aware of the
risk involved in dispensing with the physical contract note, and do hereby take
full responsibility for the same]
    </td>
</tr>
<tr>
	<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:10px 10px;text-align:left;">
    	(The above lines must be reproduced in own handwriting of the client in the box provided below)
    </td>
</tr>

<tr>
	<td colspan="2" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:15px 10px;text-align:left; background:url(../images/input.png)no-repeat center; background-size:100%;  ">
    <textarea style="width:100%;height:120px;"></textarea>
    	
    </td>
</tr>




</table>  

 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 30px 0;border-bottom:1px solid #000;">     
        
      
        <tr>
        	<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-left:1px solid #000; border-top:1px solid #000; border-right:1px solid #000;padding:15px 10px;text-align:left;">CLIENT'S NAME&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $fullname;?> </b>   </td>
            
        </tr>
        <tr>
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-left:1px solid #000;border-top:1px solid #000;text-align:left; padding:10px 10px;">
            	<span style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:15px 100px 15px 0;background:url(images/tick.png) no-repeat right top;">SIGNATURE OF CLIENT'S  (9)<img src="<?php echo base_url(); ?>content/images/tick2.png" alt="" /> </span>
            </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000; border-left:1px solid #000; padding:15px 10px;text-align:left;">Date (DD / MM / YY)&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $regis_date;?> </td>
            
        </tr>
       
 </table>
 
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 30px 0;border-bottom:1px solid #000;">     
        <tr>
        	<td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border:1px solid #000;padding:15px 10px;text-align:CENTER;">FOR OFFICIAL USE ONLY    </td>
            
        </tr>
        <tr>
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-left:1px solid #000;text-align:left; padding:10px 10px;">
            	<span style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:15px 10px 15px 0;">IN VERIFICATION DONE BY </span>
            </td>
            <td colspan="2" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-left:1px solid #000;border-right:1px solid #000;text-align:left;">
            	<table cellpadding="0" cellspacing="0" width="100%">
                	<tr>
                    	<td colspan="" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-right:1px solid #000;text-align:left; padding:10px 10px;">Date (DD / MM / YY)</td>
                        
                        
                        </tr>
                        <tr>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000;  padding:15px 10px;text-align:left;">UNIQUE CLIENT CODE : </td>
                    </tr>
                </table>
                </td>
        </tr>
       
 </table>
 </div>
 <!-- page 10 end-->  

 
 <div style="height:3508px !important; width:100%; float:left;">
	<div style=" float:left; width:100%; height:100%; margin:0;">   
         <table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 10px 0;">     
            <tr>
                <td valign="top" colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;
                background:#92cddc;">
                    CENTRAL KYC REGISTRY | Know Your Customer (KYC) Application Form | Individual
                </td>

            </tr>
            <tr>
                <td valign="top" colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; padding:3px 10px;">
                    Important Instructions:
                </td>

            </tr>
            <tr>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; text-align:left; padding:3px 10px;">
                    A) Fields marked with '*' are mandatory fields.<br>

B) Please fill the form in English and in BLOCK letters.<br>

C) Please fill the date in DD-MM-YYYY format.<br>

D) Please read section wise detailed guidelines / instructions

at the end.
                </td>
                
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left; padding:3px 10px;">
                    E) List of State / U.T code as per Indian Motor Vehicle Act, 1988 is available at the end.<br>

F) List of two character ISO 3166 country codes is available at the end.<br>

G) KYC number of applicant is mandatory for update application.<br>

H) For particular section update, please tick (&#10004;) in the box available before the

section number and strike off the sections not required to be updated.
                </td>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; text-align:left; padding:3px 10px;">
                    <img src='<?php echo base_url();?>content/images/kyc.png' alt=" " />
                </td>
                

            </tr>
            
        
        </table>
          
         <table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 0px 0; background:#f5f5f5;">     
				
                
            	<tr>
                    <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; text-align:left; padding:3px 10px;">
        				For office use only <br>
                        <p style="font-size:10px;">(To be filled by financial institution)</p>
                    </td>
                    
                    <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left; padding:3px 10px;">
        				Application Type* <br><br>
                        KYC Number<br><br>
                        Account  Type* 

                    </td>
                    <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; text-align:left; padding:3px 10px;">
        				<table cellpadding="0" cellspacing="0">
                            <tr>
                            <td colspan="15"><input type="checkbox"/> NEW
                        <input type="checkbox"/> Update</td>
                        </tr>
                         <tr>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="padding-left:30px;">(Mandatory for KYC update request) </td>
                        </tr>
                        <tr>
                            <td colspan="15"><input type="checkbox"/> Normal
                        		<input type="checkbox"/> Simplified (for low risk customers)
                                <input type="checkbox"/>Small
                        	</td>
                        </tr>
                        
                        </table>
                    </td>
                    

	            </tr>
            	
            
            </table> 
         
         <table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:0px 0 0px 0;">     
            <tr>
                <td valign="top" colspan="40" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;
                background:#92cddc;">
                   <b> 1.  PERSONAL DETAILS</b>  (Please refer instruction <b>A</b> at the end)
                </td>

            </tr>
            
            <tr>
                <td valign="top" style="width:180px;font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">&nbsp;
                    
                </td>
                
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:center; font-size:10px;padding:3px 10px;">
                 Prefix   
                </td>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:center; font-size:10px; padding:3px 10px;">
                   First Name
                </td>
                 <td valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:center; font-size:10px;padding:3px 10px;">
                  Middle Name  
                </td>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:center; font-size:10px;padding:3px 10px;">
                  Last Name 
                </td>
                

            </tr>
            <tr>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                    <input type="checkbox" />Name* (Same as ID proof)
                </td>
                
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:10px;padding:3px 10px;">
                 			<table cellpadding="0" cellspacing="0">
                            <tr>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            </tr>
                            </table>  
                </td>
                
                
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:10px; padding:3px 10px;">
                   <table cellpadding="0" cellspacing="0">
                       <tr>
                            <?php 
						   $fname_arr = str_split(strtoupper($fname));
						   $mname_arr = str_split(strtoupper($mname));
						   $lname_arr = str_split(strtoupper($lname));
						?>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $fname_arr[0]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $fname_arr[1]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $fname_arr[2]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $fname_arr[3]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $fname_arr[4]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $fname_arr[5]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $fname_arr[6]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $fname_arr[7]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $fname_arr[8]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $fname_arr[9]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $fname_arr[10]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $fname_arr[11]; ?></td>
                       </tr>
                    </table>
                </td>
                 <td valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:10px;padding:3px 10px;">
                  			<table cellpadding="0" cellspacing="0">
                            <tr>
                                <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $mname_arr[0]; ?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $mname_arr[1]; ?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $mname_arr[2]; ?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $mname_arr[3]; ?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $mname_arr[4]; ?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $mname_arr[5]; ?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $mname_arr[6]; ?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $mname_arr[7]; ?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $mname_arr[8]; ?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $mname_arr[9]; ?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $mname_arr[10]; ?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $mname_arr[11]; ?></td>
                            </tr>
                            </table>  
                </td>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:10px;padding:3px 10px;">
                  			<table cellpadding="0" cellspacing="0">
                            <tr>
                                <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $lname_arr[0]; ?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $lname_arr[1]; ?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $lname_arr[2]; ?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $lname_arr[3]; ?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $lname_arr[4]; ?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $lname_arr[5]; ?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $lname_arr[6]; ?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $lname_arr[7]; ?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $lname_arr[8]; ?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $lname_arr[9]; ?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $lname_arr[10]; ?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $lname_arr[11]; ?></td>
                            </tr>
                            </table>
                </td>
                

            </tr>
            
            <tr>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                   Maiden Name (If any*)
                </td>
                
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:10px;padding:3px 10px;">
                 			<table cellpadding="0" cellspacing="0">
                            <tr>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            </tr>
                            </table>  
                </td>
                
                
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:10px; padding:3px 10px;">
                   <table cellpadding="0" cellspacing="0">
                       <tr>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                       </tr>
                    </table>
                </td>
                 <td valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:10px;padding:3px 10px;">
                  			<table cellpadding="0" cellspacing="0">
                            <tr>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            </tr>
                            </table>  
                </td>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:10px;padding:3px 10px;">
                  			<table cellpadding="0" cellspacing="0">
                            <tr>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            </tr>
                            </table>
                </td>
                

            </tr>
            
            <tr>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                   Father / Spouse Name*
                </td>
                
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:10px;padding:3px 10px;">
                 			<table cellpadding="0" cellspacing="0">
                            <tr>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            </tr>
                            </table>  
                </td>
                
                
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:10px; padding:3px 10px;">
                   <table cellpadding="0" cellspacing="0">
				   <?php $ffname=str_split(strtoupper($ffname));$fmname=str_split(strtoupper($fmname));$flname=str_split(strtoupper($flname));?>
                       <tr>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ffname[0];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ffname[1];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ffname[2];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ffname[3];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ffname[4];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ffname[5];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ffname[6];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ffname[7];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ffname[8];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ffname[9];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ffname[10];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ffname[11];?></td>
                       </tr>
                       
                    </table>
                </td>
                 <td valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:10px;padding:3px 10px;">
                  			<table cellpadding="0" cellspacing="0">
                            <tr>
                                <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $fmname[0];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $fmname[1];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $fmname[2];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $fmname[3];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $fmname[4];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $fmname[5];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $fmname[6];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $fmname[7];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $fmname[8];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $fmname[9];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $fmname[10];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $fmname[11];?></td>
                            </tr>
                            </table>  
                </td>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:10px;padding:3px 10px;">
                  			<table cellpadding="0" cellspacing="0">
                            <tr>
                                <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $flname[0];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $flname[1];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $flname[2];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $flname[3];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $flname[4];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $flname[5];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $flname[6];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $flname[7];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $flname[8];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $flname[9];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $flname[10];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $flname[11];?></td>
                            </tr>
                            </table>
                </td>
                

            </tr>
            
            <tr>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                Mother Name* 
                </td>
                
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:10px;padding:3px 10px;">
                 			<table cellpadding="0" cellspacing="0">
                            <tr>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            </tr>
                            </table>  
                </td>
                
                
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:10px; padding:3px 10px;">
                   <table cellpadding="0" cellspacing="0">
				   <?php $mfname=str_split(strtoupper($mfname));$mmname=str_split(strtoupper($mmname));$mlname=str_split(strtoupper($mlname));?>
                       <tr>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mfname[0];?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mfname[1];?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mfname[2];?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mfname[3];?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mfname[4];?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mfname[5];?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mfname[6];?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mfname[7];?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mfname[8];?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mfname[9];?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mfname[10];?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mfname[11];?></td>
                       </tr>
                    </table>
                </td>
                 <td valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:10px;padding:3px 10px;">
                  			<table cellpadding="0" cellspacing="0">
                            <tr>
                                <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mmname[0];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mmname[1];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mmname[2];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mmname[3];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mmname[4];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mmname[5];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mmname[6];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mmname[7];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mmname[8];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mmname[9];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mmname[10];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mmname[11];?></td>
                            </tr>
                            </table>  
                </td>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:10px;padding:3px 10px;">
                  			<table cellpadding="0" cellspacing="0">
                            <tr>
                                <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mlname[0];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mlname[1];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mlname[2];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mlname[3];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mlname[4];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mlname[5];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mlname[6];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mlname[7];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mlname[8];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mlname[9];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mlname[10];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mlname[11];?></td>
                            </tr>
                            </table>
                </td>
                

            </tr>
            
        
        </table> 
            	
         <table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:0px 0 10px 0;">     
            
            
            
            <tr>
                <td valign="top" style="width:180px;font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                    Date of Birth*
                </td>
                
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:10px;padding:3px 10px;">
                 			<table cellpadding="0" cellspacing="0">
                            <tr>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center"><?php echo $dob[0][8];?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center"><?php echo $dob[0][9];?></td>
                                <td style="width:15px ; height:15px; border:none; text-align:center">--</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center"><?php echo $dob[0][5];?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center"><?php echo $dob[0][6];?></td>
                                <td style="width:15px ; height:15px; border:none; text-align:center">--</td>
								<td style="width:15px ; height:15px; border:1px solid #666; text-align:center"><?php echo $dob[0][0];?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center"><?php echo $dob[0][1];?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center"><?php echo $dob[0][2];?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center"><?php echo $dob[0][3];?></td>
                            </tr>
                            </table>  
                </td>
                
                <td rowspan="6" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:right; padding:3px 10px;">
                    <img src='<?php echo base_url();?>content/images/photo2.png' alt="" />
                </td>

            </tr>
            
            <tr>
                <td valign="top" style="width:180px;font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                    Gender*</td>
                
  <td valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:10px;padding:3px 10px;">
                 			<table cellpadding="0" cellspacing="0">
                            <tr>
                                <td style="width:15px ; height:15px; text-align:left; width:180px;"><?php if($sex=='1'){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?> M-Male</td>
                                <td style="width:15px ; height:15px; text-align:left; width:180px;"><?php if($sex=='2'){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?> F-Female</td>
                                <td style="width:15px ; height:15px; border:none; text-align:left; width:180px;"><?php if($sex=='3'){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?> T-Transgender</td>
                            </tr>
                            </table>  
                </td>
                
                

            </tr>
            
            <tr>
                <td valign="top" style="width:180px;font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                    Marital Status* </td>
                
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:10px;padding:3px 10px;">
                 			<table cellpadding="0" cellspacing="0">
                             <tr>
                              <td style="width:15px ; height:15px; text-align:left; width:180px;"><?php if($marital_status=='1'){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?>
                                Married </td>
                              <td style="width:15px ; height:15px; text-align:left; width:180px;"><?php if($marital_status=='0'){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?>
                                Unmarried</td>
                              <td style="width:15px ; height:15px; border:none; text-align:left; width:180px;"><?php if($marital_status=='2'){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?>
                                Others </td>
                                
                            </tr>
                            </table>  
                </td>
                
                

            </tr>
            
            <tr>
                <td valign="top" style="width:180px;font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">(ISO 3166 Country Code <br>
                Citizenship*</td>
                
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:10px;padding:3px 10px;">
                 			<table cellpadding="0" cellspacing="0">
                            <tr>
                              <td style="width:15px ; height:15px; text-align:left; width:180px;"><?php if($nationality == "Indian" ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?>
                                IN- Indian </td> 
                              <td style="width:15px ; height:15px; text-align:left; width:280px;">
                                <table cellpadding="0" cellspacing="0">
                            <tr>
                             <td><?php if($nationality !="Indian" ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?>
                                Others(ISO 3166 Country Code </td>
								<?php $corrISO_3166 = str_split($corr_iso2_code);  if($nationality !="Indian" ){ ?>
                                <td style="width:15px; height:15px; border:1px solid #999;"><?php echo $corrISO_3166[0];?></td>
                                <td style="width:15px; height:15px; border:1px solid #999;"><?php echo $corrISO_3166[1];?></td>
								<?php } else{?>
								<td style="width:15px; height:15px; border:1px solid #999;text-align:center;">&nbsp;</td>
                                <td style="width:15px; height:15px; border:1px solid #999;text-align:center;">&nbsp;</td>
								<?php } ?>
                                <td style="width:15px; height:15px; text-align:center;">  )</td>
                                </tr>
                                </table>
                              </td>
                                
                            </tr>
                            </table>  
                </td>
                
                

            </tr>
            
            <tr>
                <td valign="top" style="width:180px;font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;"><p><br>
                Residential Status* </p></td>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:12px;padding:3px 10px;">
                 			<table cellpadding="0" cellspacing="0">
                            <tr>
                              <td style="width:15px ; height:15px; text-align:left; width:180px;"><?php if($userResidentialSataus ==0 ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?>
                                Resident Individual</td>
                              <td style="width:15px ; height:15px; text-align:left; width:180px;"><?php if($userResidentialSataus ==1 ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?>
                                Non Resident Indian</td>
                              
                                
                            </tr>
                            <tr>
                              <td style="width:15px ; height:15px; text-align:left; width:180px;"><?php if($userResidentialSataus ==2 ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?>
                                Foreign National</td>

                              <td style="width:15px ; height:15px; text-align:left; width:180px;"><?php if($userResidentialSataus ==3 ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?>
                                Person of Indian Origin</td>
                              
                                
                            </tr>
                            </table>  
                </td>

                
                
                

            </tr>
            
            <tr>
                <td valign="top" style="width:180px;font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;"><p><br>
                Occupation Type*</p></td>
                
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:12px;padding:3px 10px;">
                 			<table cellpadding="0" cellspacing="0">
                            <tr>
                              
                              <td style="text-align:left; width:100px;"><?php if($occupationid ==1 ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?>
                                Private Sector</td>
                                
                              <td style="text-align:left; width:100px;"><?php if($occupationid ==2 ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?>
                                Public Sector</td>
                                
                              <td style="text-align:left; width:150px;"><?php if($occupationid ==3 ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?>
                                Government Sector  </td>
                              
                                
                            </tr>
                            <tr>
                              
                              <td style="text-align:left; width:120px;"><?php if($occupationid ==5 ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?>
                                Professional</td>
                                <td style="text-align:left; width:140px;"><?php if($occupationid ==6 ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?>
                                Self Employed</td>
                                
                            
                              <td style="text-align:left;"><?php if($occupationid ==7 ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?>
                                Retired</td>
                                <td style="text-align:left; width:100px;"><?php if($occupationid ==8 ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?>
                                Housewife</td>
                              <td style="text-align:left; width:100px;"><?php if($occupationid ==9 ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?>
                                Student</td>
                              
                                
                            </tr>
                            <tr>
                              <td colspan="2" style="text-align:left;"><?php if($occupationid ==4 ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?>
                                Business</td>
                              <td style="text-align:left;"><?php if($occupationid ==10 ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?>
                                Others </td>
                                <td style="text-align:left; width:100px">&nbsp; 
                                </td>
                            </tr>
                            <tr>
                              <td colspan="2" style="text-align:left;"><?php if($occupationid ==11 ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?>
                               Not Categorised </td>
                              
                                
                            </tr>
                            </table>  
                </td>
                
                

            </tr>
        
        </table>  
        
         <table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 0px 0;">     
            <tr>
                <td colspan="4" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; text-align:left; padding:3px 10px;background:#ddd9c3;">
                   <input type="checkbox" /><b>2.  TICK IF APPLICABLE </b>  <input type="checkbox" /> RESIDENCE FOR TAX PURPOSES IN JURISDICTION(S) OUTSIDE INDIA (Please refer instruction <b>B</b> at the end)
                </td>

            </tr>
            
            <tr>
                <td colspan="4"  valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; text-align:left; padding:3px 10px;">
					ADDITIONAL DETAILS REQUIRED*  (Mandatory only if section 2 is ticked)
                </td>

            </tr>
            <tr>
                <td colspan="2" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; text-align:left; padding:3px 10px;">
                    ISO 3166 Country Code of Jurisdiction of Residence* 
                </td>
                <td colspan="2">
                	<table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                        </tr>
                    </table>
                
                
                </td>
                

            </tr>
            
            <tr>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                    Tax Identification Number or equivalent (If issued by jurisdiction)* </td>
                <td>
           	  <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>


                        </tr>
                    </table>
                
                
                </td>
                

            </tr>
            
            <tr>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                    Place / City of Birth*  </td>
                    
                
                <td>
           	  <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>


                        </tr>
                  </table>
                
                
                </td>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                    ISO 3166 Country Code of Birth*</td>
                    
                
                <td>
           	  <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            

                        </tr>
                  </table>
                
                
                </td>
                

            </tr>
            
         </table> 
         
         <table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 0px 0;">     
            <tr>
                <td valign="top" colspan="4" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;
                background:#92cddc;">
                    <input type="checkbox" /><b>3.  PROOF OF IDENTITY (PoI)*   </b>  <input type="checkbox" /> (Please refer instruction <b>C</b> at the end)
                </td>

            </tr>
            <tr>
                <td valign="top" colspan="4" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                    (Certified copy of any one of the following Proof of Identity [PoA] needs to be submitted)                 </td>

            </tr>
            
            <tr>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                   <input type="checkbox" /> A- Passport Number</td>
                    
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                     <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                        </tr>
                  </table>
                    
              </td>
              
              <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                   Passport Expiry Date</td>
                    
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                     <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:none; text-align:center">--</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:none; text-align:center">--</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                        </tr>
                  </table>
                    
              </td>

            </tr>
            
            <tr>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                   <input type="checkbox" /> B- Voter ID Card</td>
                    
                <td colspan="3" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                     <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>

                        </tr>
                  </table>
                    
              </td>
              
              
                    
                

            </tr>
            
            <tr>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                   <?php if($corr_add_proof =='PAN Card' ){?> &#x2611; <?php } else { ?><input type="checkbox" /> <?php } ?>C- PAN Card</td>
                    
                <td colspan="3" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                     <table cellpadding="0" cellspacing="0">
						<?php  if($corr_add_proof == 'PAN Card'){ ?>
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $pan[0][0];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $pan[0][1];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $pan[0][2];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $pan[0][3];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $pan[0][4];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $pan[0][5];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $pan[0][6];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $pan[0][7];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $pan[0][8];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $pan[0][9];?></td>
						</tr>
						<?php } else { ?>
						<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
						</tr>
						<?php } ?>
                  </table>
                    
              </td>
            </tr>
            
            
            <tr>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                   <input type="checkbox" />               D- Driving Licence</td>
                    
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                     <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                        </tr>
                  </table>
                    
              </td>
              
              <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                    Driving Licence Expiry Date</td>
                    
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                     <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:none; text-align:center">--</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:none; text-align:center">--</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                        </tr>
                  </table>
                    
              </td>

            </tr>
            
            <tr>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                   <?php if($corr_add_proof =='Aadhaar' ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?>E- UID (Aadhaar) </td>
                    
                <td colspan="3" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                     <table cellpadding="0" cellspacing="0">
					 <?php if($corr_add_proof == 'Aadhaar'){?>
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $aadhar[0][0];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $aadhar[0][1];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $aadhar[0][2];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $aadhar[0][3];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $aadhar[0][4];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $aadhar[0][5];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $aadhar[0][6];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $aadhar[0][7];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $aadhar[0][8];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $aadhar[0][9];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $aadhar[0][10];?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $aadhar[0][11];?></td>
						</tr>
						<?php } else { ?>
						<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
							<td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
						</tr>
						<?php } ?>
                  </table>
                    
              </td>
            </tr>
            
            <tr>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                   <input type="checkbox" />               F- NREGA Job Card </td>
                    
                <td colspan="3" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                     <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>

                        </tr>
                  </table>
                    
              </td>
            </tr>
            
       </table>     
         <table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:0px 0 10px 0;">     
            <tr>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                   <input type="checkbox" />
Z- Others (any document notified by the central government)</td>
                    
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                     <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                           
                        </tr>
                  </table>
                    
              </td>
              
              <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                  Identification Number</td>
                    
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                     <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            
                        </tr>
                  </table>
                    
              </td>

            </tr>
            
            <tr>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                   <input type="checkbox" />
S- Simplified Measures Account  - Document Type code</td>
                    
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                     <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            
                           
                        </tr>
                  </table>
                    
              </td>
              
              <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                  Identification Number</td>
                    
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                     <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            
                        </tr>
                  </table>
                    
              </td>

            </tr>
            
         </table>
         
         <table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 0px 0;">     
            <tr>
                <td valign="top" colspan="6" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;
                background:#92cddc;">
                    <b>4.   PROOF OF ADDRESS (PoA)* </b>
                </td>

            </tr>
            <tr>
            <td valign="top" colspan="6" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;
                background:#e9e4c8;">
                    <input type="checkbox"/> 
                4.1 CURRENT / PERMANENT / OVERSEAS ADDRESS  DETAILS   (Please see instruction <b>D</b> at the end) 
            </td>

            </tr>
            <tr>
            <td valign="top" colspan="6" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                (Certified copy of any one of the following Proof of Address [PoA] needs to be submitted)  
            </td>

            </tr>
            <tr>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                Address Type*  
            </td>
            
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                <input type="checkbox" /> Residential / Business  
            </td>
            
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                <input type="checkbox" />  Residential  
            </td>
            
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                <input type="checkbox" />  Business  
            </td>
            
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                <input type="checkbox" />  Registered Office  
            </td>
            
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                <input type="checkbox" />  Unspecified  
            </td>

            </tr>
            
            <tr>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                Proof of Address*  
            </td>
            
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                <input type="checkbox" /> Passport  
            </td>
            
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                <input type="checkbox" />  Driving Licence  
            </td>
            
            <td colspan="3" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                <input type="checkbox" <?php if($corr_add_proof == 'Aadhaar') { ?>checked="checked"<?php } ?> />  UID (Aadhaar)  
            </td>
            

            </tr>
            
            <tr>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
              
          </td>
            
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                <input type="checkbox" />                Voter Identity Card </td>
            
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                <input type="checkbox" />            
                  NREGA Job Card 
            </td>
            
          <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                <input type="checkbox" />
                Others</td>
            
			<td colspan="2" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                <table cellpadding="0" cellspacing="0">
                    	<?php if($corr_add_proof == 'Aadhaar' ) { ?>
						<tr>
                        	
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $aadhar[0][0];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $aadhar[0][1];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $aadhar[0][2];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $aadhar[0][3];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $aadhar[0][4];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $aadhar[0][5];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $aadhar[0][6];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $aadhar[0][7];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $aadhar[0][8];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $aadhar[0][9];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $aadhar[0][10];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $aadhar[0][11];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $aadhar[0][12];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $aadhar[0][13];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $aadhar[0][14];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $aadhar[0][15];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $aadhar[0][16];?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $aadhar[0][17];?></td>
						</tr>
						<?php } else{?>
						<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
							<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
						</tr>
						<?php } ?>
                        
              </table>
            </td>
            </tr>
            
            <tr>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
              
          </td>
            
            <td valign="top" colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                <input type="checkbox" />Simplified Measures Account  - Document Type code </td>
            
			<td colspan="3" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            

                        </tr>
              </table>
            </td>
            </tr>
            
         </table>
         
         <table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:0;">     
            
            <tr>
            <td valign="top" colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                <b>Address </b>  
            </td>

            </tr>
            <tr>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px; width:100px;">
                Line 1*  
            </td>

            <td colspan="3" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
               <table cellpadding="0" cellspacing="0">
                    	<?php $ca = str_split($corr_address);?>
                    	<tr>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[0]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[1]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[2]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[3]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[4]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[5]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[6]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[7]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[8]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[9]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[10]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[11]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[12]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[13]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[14]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[15]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[16]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[17]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[18]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[19]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[20]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[21]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[22]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[23]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[24]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[25]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[26]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[27]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[28]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[29]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[30]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[31]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[32]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[33]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[34]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[35]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[36]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[37]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[38]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[39]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[40]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[41]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[42]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[43]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[44]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[45]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[46]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[47]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[48]; ?></td>
						</tr>
                  </table> 
            </td>
            
            

            </tr>
            
            <tr>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px; width:100px;">
                Line 2  
            </td>

            <td colspan="3" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
               <table cellpadding="0" cellspacing="0">
                    	<tr>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[49]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[50]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[51]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[52]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[53]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[54]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[55]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[56]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[57]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[58]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[59]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[60]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[61]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[62]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[63]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[64]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[65]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[66]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[67]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[68]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[69]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[70]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[71]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[72]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[73]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[74]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[75]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[76]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[77]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[78]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[79]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[80]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[81]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[82]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[83]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[84]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[85]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[86]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[87]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[88]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[89]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[90]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[91]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[92]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[93]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[94]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[95]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[96]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[97]; ?></td>
                        </tr>
                  </table> 
            </td>
            
            

            </tr>
            
            <tr>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px; width:100px;">
                Line 3  
            </td>

            <td  valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
               <table cellpadding="0" cellspacing="0">
                    	<tr>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[98]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[99]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[100]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[101]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[102]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[103]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[104]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[105]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[106]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[107]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[108]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[109]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[110]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[111]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[112]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[113]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[114]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[115]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[116]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[117]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[118]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[119]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[120]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[121]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[122]; ?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[123]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $ca[124]; ?></td>
						</tr>
                  </table> 
            </td>
            
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px; width:120px;">
                City / Town / Village*  
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px; width:120px;">
                <table cellpadding="0" cellspacing="0">
                    	<?php $city=str_split($corr_city); ?>
                    	<tr>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $city[0];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $city[1];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $city[2];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $city[3];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $city[4];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $city[5];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $city[6];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $city[7];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $city[8];?></td>
						</tr>
                  </table>  
            </td>
            

            </tr>
            
         </table>
         
         <table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:0;"> 
             
            <tr>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px; width:100px;">
                District*   
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                <table cellpadding="0" cellspacing="0">
                    	<?php $state =  str_split($corr_state);?>
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $state[0];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $state[1];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $state[2];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $state[3];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $state[4];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $state[5];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $state[6];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $state[7];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $state[8];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $state[9];?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $state[10];?></td>
                        </tr>
                  </table>  
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                Pin / Post Code*  
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                <table cellpadding="0" cellspacing="0">
					<?php $pin = str_split($corr_pincode);?>
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $pin[0];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $pin[1];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $pin[2];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $pin[3];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $pin[4];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $pin[5];?></td>
                        </tr>
                  </table>   
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                State / U.T Code*   
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
               <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $state_code[0];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $state_code[1];?></td>
                        </tr>
                  </table>    
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                ISO 3166 Country Code*   
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $corrISO_3166[0];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $corrISO_3166[1];?></td>
                        </tr>
                  </table>    
            </td>

            </tr>
		</table>
        
	</div>
</div>

 <!-- page 11 end-->    
<div style="height:3508px !important; width:100%; float:left;">
	<div style=" float:left; width:100%; height:100%; margin:0;">   
        <table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 0px 0;">     
            
            <tr>
            <td valign="top" colspan="6" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;
                background:#e9e4c8;">
                    <input type="checkbox"/> 
                4.2 CORRESPONDENCE / LOCAL ADDRESS DETAILS * (Please see instruction <b>E</b> at the end) </td>

            </tr>
            
            
         </table>
         
         <table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:0;">     
            
            <tr>
            <td valign="top" colspan="4" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                Same as Current / Permanent / Overseas Address details  (In case of multiple correspondence / local addresses, please fill 'Annexure A1') 
            </td>

            </tr>
            <tr>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px; width:100px;">
                Line 1*  
            </td>

            <td colspan="3" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
               <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                             <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
							<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                        </tr>
                  </table> 
            </td>
            
            

            </tr>
            
            <tr>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px; width:100px;">
                Line 2  
            </td>

            <td colspan="3" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
               <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                             <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
							<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                        </tr>
                  </table> 
            </td>
            
            

            </tr>
            
            <tr>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px; width:100px;">
                Line 3  
            </td>

            <td  valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
               <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                           

                        </tr>
                  </table> 
            </td>
            
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px; width:120px;">
                City / Town / Village*  
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px; width:120px;">
                <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                        </tr>
                  </table>  
            </td>
            

            </tr>
            
         </table>
        
         <table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:0;"> 
             
            <tr>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px; width:100px;">
                District*   
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                           
                        </tr>
                  </table>  
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                Pin / Post Code*  
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            
                           
                        </tr>
                  </table>   
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                State / U.T Code*   
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
               <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                        </tr>
                  </table>    
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                ISO 3166 Country Code*   
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                        </tr>
                  </table>    
            </td>

            </tr>
		</table>
        
         <table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 0px 0;">     
            
            <tr>
            <td valign="top" colspan="6" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;
                background:#e9e4c8;">
                    <input type="checkbox"/> 
                4.3 ADDRESS IN THE JURISDICTION DETAILS WHERE APPLICANT IS RESIDENT OUTSIDE INDIA FOR TAX PURPOSES* (Applicable if section 2 is ticked)  </td>

            </tr>
            
            
         </table>       
         
         <table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:0;">     
            
            <tr>
            <td valign="top" colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                <input type="checkbox"/> Same as Current / Permanent / Overseas Address details  </td>
				<td valign="top" colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                <input type="checkbox"/> Same as Current / Permanent / Overseas Address details  </td>
				
            </tr>
            <tr>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px; width:100px;">
                Line 1*  
            </td>

            <td colspan="3" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
               <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                             <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
							<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                        </tr>
                  </table> 
            </td>
            
            

            </tr>
            
            <tr>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px; width:100px;">
                Line 2  
            </td>

            <td colspan="3" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
               <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                             <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
							<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                        </tr>
                  </table> 
            </td>
            
            

            </tr>
            
            <tr>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px; width:100px;">
                Line 3  
            </td>

            <td  valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
               <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            

                        </tr>
                  </table> 
            </td>
            
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px; width:120px;">
                City / Town / Village*  
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px; width:120px;">
                <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                        </tr>
                  </table>  
            </td>
            

            </tr>
            
         </table>
        
         <table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:0;"> 
             
            <tr>
          <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px; width:100px;">
                State   
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                           
                        </tr>
              </table>  
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                ZIP / Post Code*</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            
                           
                        </tr>
              </table>   
            </td>
            
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                ISO 3166 Country Code*   
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                        </tr>
              </table>    
            </td>

            </tr>
		</table>

        <table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 10px 0;">     
            <tr>
                <td valign="top" colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;
                background:#92cddc;">
                    <input type="checkbox"/> <b>5.  CONTACT DETAILS</b> (All communications will be sent on provided Mobile no. / Email-ID) (Please refer instruction <b>F</b> at the end)
                </td>

            </tr>
        </table>
        <table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:0;"> 
             
            <tr>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px; width:100px;">
                Tel. (Off)  </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                <table cellpadding="0" cellspacing="0">
				<?php 
				$off_ph_code=str_split($office_ph_code);
				$length_off=count($off_ph_code);
				?>
                    	<tr>
							<?php if($length_off == 4){?>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $off_ph_code[0];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $off_ph_code[1];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $off_ph_code[2];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $off_ph_code[3];?></td>
							<?php } else  { ?>
								<td style="width:15px ; height:15px; border:1px solid #666;"></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $off_ph_code[0];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $off_ph_code[1];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $off_ph_code[2];?></td>
							<?php } ?>
                            <td style="width:15px ; height:15px; border:none; text-align:center;">--</td>
							<?php $off_ph =str_split($office_ph); ?>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $off_ph[0];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $off_ph[1];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $off_ph[2];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $off_ph[3];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $off_ph[4];?></td>
                           <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $off_ph[5];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $off_ph[6];?></td>
                           <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $off_ph[7];?></td>
                           
                        </tr>
              </table>  
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                Tel. (Res)</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                <table cellpadding="0" cellspacing="0">
				<?php 
				$home_ph_code=str_split($home_ph_code);
				$length_home=count($home_ph_code);
				?>
                    	<tr>
                        	<?php if($length_home == 4){?>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $home_ph_code[0];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $home_ph_code[1];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $home_ph_code[2];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $home_ph_code[3];?></td>
							<?php } else  { ?>
								<td style="width:15px ; height:15px; border:1px solid #666;"></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $home_ph_code[0];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $home_ph_code[1];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $home_ph_code[2];?></td>
							<?php } ?>
							
                            <td style="width:15px ; height:15px; border:none; text-align:center;">--</td>
							<?php $home= str_split($home_ph);?>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $home[0];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $home[1];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $home[2];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $home[3];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $home[4];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $home[5];?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $home[6];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $home[7];?></td>
                            
                           
                        </tr>
              </table>   
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                Mobile </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
               <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;">+</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">9</td>
							<td style="width:15px ; height:15px; border:1px solid #666;">1</td>
                            <td style="width:15px ; height:15px; border:none; text-align:center;">--</td>
							<?php $mob=str_split($mobile); ?>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mob[0];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mob[1];?></td>
                           <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mob[2];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mob[3];?></td>
                           <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mob[4];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mob[5];?></td>
                           <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mob[6];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mob[7];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mob[8];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $mob[9];?></td>
                          
                        </tr>
              </table>    
            </td>
            

            </tr>
            
            <tr>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px; width:100px;">
                FAX</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                <table cellpadding="0" cellspacing="0">
				<?php 
				$fax_code=str_split($fax_code);
				$length_fax=count($fax_code);
				?>
                    	<tr>
						
                        	<?php if($length_fax == 4){?>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $fax_code[0];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $fax_code[1];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $fax_code[2];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $fax_code[3];?></td>
							<?php } else  { ?>
								<td style="width:15px ; height:15px; border:1px solid #666;"></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $fax_code[0];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $fax_code[1];?></td>
								<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $fax_code[2];?></td>
							<?php } ?>
                            <td style="width:15px ; height:15px; border:none; text-align:center;">--</td>
							<?php $fax =str_split($fax_ph);?>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $fax[0]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $fax[1]; ?></td>
                           <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $fax[2]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $fax[3]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $fax[4]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $fax[5]; ?></td>
                           <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $fax[6]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $fax[7]; ?></td>
                           
                        </tr>
              </table>  
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">Email ID <br></td>
            <td colspan="3" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                <table cellpadding="0" cellspacing="0">
				<?php $email = str_split($emailaddress);?>
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $email[0]; ?></td>
                           <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $email[1]; ?></td>
                           <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $email[2]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $email[3]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $email[4]; ?></td>
                           <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $email[5]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $email[6]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $email[7]; ?></td>
                           <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $email[8]; ?></td>
                           <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $email[9]; ?></td>
                           <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $email[10]; ?></td>
                           <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $email[11]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $email[12]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $email[13]; ?></td>
                           <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $email[14]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $email[15]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $email[16]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $email[17]; ?></td>
                           <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $email[18]; ?></td>
                           <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $email[19]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $email[20]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $email[21]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $email[22]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $email[23]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $email[24]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $email[25]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $email[26]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $email[27]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $email[28]; ?></td>
                           
                        </tr>
              </table>   
            </td>
            </tr>
		</table>
        
        <table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 0px 0;">     
            <tr>
                <td valign="top" colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;
                background:#92cddc;">
                    <input type="checkbox"/> <b>6.  DETAILS OF RELATED PERSON </b>  
                     (In case of additional related persons, please fill 'Annexure B1' ) (please refer instruction <b>G</b> at the end)  
                </td>

            </tr>
        </table>
        
        <table cellpadding="0" cellspacing="0" border="0" width="100%" style="background:#e9e4c8;font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:0;"> 
             
            <tr>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                <input type="checkbox"/>Addition of Related Person</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                <input type="checkbox"/>Deletion  of Related Person  
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                KYC Number of Related Person  (if available*)</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                           
                        </tr>
              </table>   
            </td>
            
            
            

            </tr>
            
            
		</table>
        
        <table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:0;"> 
             
            <tr>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                Related Person Type* </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                <input type="checkbox"/>Guardian of Minor  
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                <input type="checkbox"/>Assignee  </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                <input type="checkbox"/>Authorized Representative     
            </td>
            
            </tr>
            
            
		</table>
      <table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:0;"> 
		 
            <tr>
                <td valign="top" style="width:180px;font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">&nbsp;
                    
                </td>
                
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:center; font-size:10px;padding:3px 10px;">
                 Prefix   
                </td>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:center; font-size:10px; padding:3px 10px;">
                   First Name
                </td>
                 <td valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:center; font-size:10px;padding:3px 10px;">
                  Middle Name  
                </td>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:center; font-size:10px;padding:3px 10px;">
                  Last Name 
                </td>
                

            </tr>
            <tr>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                    <input type="checkbox" />                Name*</td>
                
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:10px;padding:3px 10px;">
                 			<table cellpadding="0" cellspacing="0">
                            <tr>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            </tr>
                            </table>  
                </td>
                
                
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:10px; padding:3px 10px;">
                   <table cellpadding="0" cellspacing="0">
                       <tr>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                       </tr>
                    </table>
                </td>
                 <td valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:10px;padding:3px 10px;">
                  			<table cellpadding="0" cellspacing="0">
                            <tr>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            </tr>
                            </table>  
                </td>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:10px;padding:3px 10px;">
                  			<table cellpadding="0" cellspacing="0">
                            <tr>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            </tr>
                            </table>
                </td>
                

            </tr>
            <tr>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
            </td>
                
                <td colspan="3" valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:10px;padding:3px 10px;">
                 			
                                (If KYC number and name are provided, below details of section 6 are optional)
                </td>
                
               
                

            </tr>
    
    </table>
    
    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 0px 0;">     
            <tr>
                <td valign="top" colspan="4" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;
                background:#e9e4c8;">
 PROOF  OF IDENTITY [PoI] OF RELATED PERSON* (Please see instruction <B>(H)</B> at the end)                </td>

            </tr>

            
            
            <tr>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                   <input type="checkbox" /> A- Passport Number</td>
                    
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                     <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                        </tr>
                  </table>
                    
              </td>
              
              <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                   Passport Expiry Date</td>
                    
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                     <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:none; text-align:center">--</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:none; text-align:center">--</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                        </tr>
                  </table>
                    
              </td>

            </tr>
            
            <tr>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                   <input type="checkbox" /> B- Voter ID Card</td>
                    
                <td colspan="3" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                     <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>

                        </tr>
                  </table>
                    
              </td>
              
              
                    
                

            </tr>
            
            <tr>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                   <input type="checkbox" /> C- PAN Card</td>
                    
                <td colspan="3" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                     <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>

                        </tr>
                  </table>
                    
              </td>
            </tr>
            
            
            <tr>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                   <input type="checkbox" />               D- Driving Licence</td>
                    
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                     <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                        </tr>
                  </table>
                    
              </td>
              
              <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                    Driving Licence Expiry Date</td>
                    
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                     <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:none; text-align:center">--</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:none; text-align:center">--</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                        </tr>
                  </table>
                    
              </td>

            </tr>
            
            <tr>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                   <input type="checkbox" /> E- UID (Aadhaar) </td>
                    
                <td colspan="3" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                     <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>

                        </tr>
                  </table>
                    
              </td>
            </tr>
            
            <tr>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                   <input type="checkbox" />               F- NREGA Job Card </td>
                    
                <td colspan="3" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                     <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>

                        </tr>
                  </table>
                    
              </td>
            </tr>
            
       </table>
       
    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 0px 0;">     
       <tr>
                <td valign="top" colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;
                background:#92cddc;">
                    <input type="checkbox"/> <b>7.  REMARKS (If any) </b>  
                </td>

            </tr>
       
       <tr>
            <td colspan="3" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
               <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                             <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
							<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                             <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
							<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                        </tr>
                  </table> 
            </td>
            
       </tr>
       <tr>
            <td colspan="3" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
               <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                             <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
							<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                             <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
							<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                        </tr>
                  </table> 
            </td>
            
       </tr>
       <tr>

            <td colspan="3" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
               <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                             <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
							<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                             <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
							<td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;">&nbsp;</td>
                        </tr>
                  </table> 
            </td>
            
       </tr>
    </table>
    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 0px 0;">     
       <tr>
                <td valign="top" colspan="5" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;
                background:#92cddc;">
                    <b>8.  APPLICANT DECLARATION</b>
                </td>

            </tr>
            <tr>
              <td colspan="4" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                    I hereby declare that the details furnished above are true and correct to the  best  of  my knowledge and  belief and  I  undertake 
     to inform you of any changes therein, immediately. In case any of the above information is found to be false or untrue or misleading or misrepresenting, I am aware that I may be held liable 
    for it. <br/><br/>
    I hereby consent to receiving information from Central KYC Registry through SMS/Email on the above registered number/email address. </td>
                <td valign="top" rowspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                    <img src="<?php echo base_url();?>content/images/signature2.png" alt="" />
                </td>

            </tr>
            <tr>
              <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                     Date  : </td>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                    <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666; text-align:center"><?php echo $reg_date [0][8]; ?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center"><?php echo $reg_date [0][9]; ?></td>
                                <td style="width:15px ; height:15px; border:none; text-align:center">--</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center"><?php echo $reg_date [0][5];?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center"><?php echo $reg_date [0][6];?></td>
                                <td style="width:15px ; height:15px; border:none; text-align:center">--</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center"><?php echo $reg_date [0][0];?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center"><?php echo $reg_date [0][1];?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center"><?php echo $reg_date [0][2];?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center"><?php echo $reg_date [0][3];?></td>
                        </tr>
                  </table>
                </td>
                
               <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                     Place :</td>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                    <table cellpadding="0" cellspacing="0">
                    	<tr>
								<td style="width:15px ; height:15px; border:1px solid #666; text-align:center"><?php echo $city[0]; ?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center"><?php echo $city[1]; ?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center"><?php echo $city[2]; ?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center"><?php echo $city[3]; ?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center"><?php echo $city[4]; ?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center"><?php echo $city[5]; ?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center"><?php echo $city[6]; ?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center"><?php echo $city[7]; ?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center"><?php echo $city[8]; ?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center"><?php echo $city[9]; ?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center"><?php echo $city[10]; ?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center"><?php echo $city[11]; ?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center"><?php echo $city[12]; ?></td>
                        </tr>
                  </table>
                </td>

            </tr>
     </table>
        <table cellpadding="0" cellspacing="0" border="0" width="100%" style="background:#eaeaea;font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 0px 0;">     
           <tr>
          <td valign="top" colspan="5" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;
                    background:#92cddc;">
                        <input type="checkbox"/>
                        9. <b>ATTESTATION / FOR OFFICE USE ONLY </b></td>
            </tr>
            
            <tr>
          <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                        <b>Documents Received </b>
           </td>
         <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                        <input type="checkbox"/>
                        Certified Copies
          </td>
            </tr>
            <tr>
          <td valign="top" colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:center; background:#d7d7d7; padding:3px 10px;">
                        <b>KYC VERIFICATION CARRIED OUT BY</b>
           </td>
           <td valign="top" style="width:20px;font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:center; padding:3px 10px;">
                        
           </td>
          <td valign="top" colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:center; background:#d7d7d7; padding:3px 10px;">
                        <b>INSTITUTION DETAILS </b>
           </td>
         
            </tr>
            
            <tr>
          <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                        Date 
           </td>
           <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
               <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:none; text-align:center">--</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:none; text-align:center">--</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                        </tr>
                  </table>         
           </td>
            <td valign="top" style="width:30px;font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                        
           </td>

          <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:center; padding:3px 10px;">
                        Name
           </td>
         <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
               <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                        </tr>
                  </table>         
           </td>
            </tr>
            
            <tr>
          <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                        Emp. Name</td>
           <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
               <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                          <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                          <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                        </tr>
             </table>         
           </td>
            <td valign="top" style="width:30px;font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                        
           </td>

          <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:center; padding:3px 10px;">
                       Code
           </td>
         <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
               <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                        </tr>
            </table>         
           </td>
            </tr>
            
            <tr>
          <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                        Emp. Code  </td>
           <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
               <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                  <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                  <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                        </tr>
             </table>         
           </td>
            <td valign="top" style="width:30px;font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                        
           </td>

          
         <td valign="middle" colspan="2" rowspan="4" style="font-family:Arial, Helvetica, sans-serif; color:#ccc; font-size:12px; text-align:center; padding:3px 10px; border:2px solid #ccc;">
                 [Institution Stamp]       
           </td>
            </tr>
            
            <tr>
          <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                        Emp. Designation   </td>
           <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
               <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                  <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                  <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                        </tr>
             </table>         
           </td>
            <td valign="top" style="width:30px;font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                        
           </td>
         
            </tr>
            
            <tr>
          <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                        Emp. Branch</td>
           <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
               <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                  <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                  <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center">&nbsp;</td>
                        </tr>
             </table>         
           </td>
            <td valign="top" style="width:30px;font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                        
           </td>
         
            </tr>
            
            <tr>
         <td valign="middle" colspan="2" style="height:50px;font-family:Arial, Helvetica, sans-serif; color:#ccc; font-size:12px; text-align:center; padding:3px 10px; border:2px solid #ccc;">
                 [Institution Stamp]       
           </td>
           
            <td valign="top" style="width:30px;font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                        
           </td>
         
            </tr>
        </table>
    
    </div>
</div>
  
<!-- page 12 end-->


<div style="height:3508px !important; width:100%; float:left;">
	<div style=" float:left; width:100%; height:100%; margin:0;">  
</br></br>
 <table style="height: 970px; margin-left: auto; margin-right: auto;" border="1" width="700" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td>
<table style="height: 82px;" border="1" cellspacing="0" cellpadding="0" width="700">
<tbody>
<tr>
<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-bottom:1px solid #000; text-align:center; width:100%;"><img src="<?php echo base_url();?>content/images/logo.png" alt="" />
          
            </td>
<td style="text-align: left;">
<h3 style="text-align: center;"><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  FATCA-CRS Declaration &amp; Supplementary KYC Information</strong></h3>
<blockquote></br>
<p style="text-align: center;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; DECLARATION FORM FOR INDIVIDUALS</p>
<p style="text-align: center;"><br />(Please consult a tax professional for further guidance regarding your tax residency for FATCA &amp; CRS compliance)</p>
</blockquote>
</td>
</tr>
</tbody>
</table>
<p style="text-align: left;">&nbsp;</p>
<table style="height: 28px; float: left;" border="1" cellspacing="0" cellpadding="0" width="700">
<tbody>
<tr>
 <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            	1. PAN
            </td>
			
			
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
			<?php echo $pan[0][0];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
			<?php echo $pan[0][1];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $pan[0][2];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $pan[0][3];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $pan[0][4];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $pan[0][5];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
			<?php echo $pan[0][6];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $pan[0][7];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $pan[0][8];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $pan[0][9];?>
			</td>
<td>PAN Exempt KYC Ref No<em>. (</em>PEKRN)</td>
</tr>
</tbody>
</table>
<table style="height: 21px; float: left;" border="1" cellspacing="0" cellpadding="0" width="700">
<tbody>
<tr>

<td style="font-family:Arial, Helvetica, sans-serif; font-size:14px;padding:15px 10px;border-top:1px solid #000; font-weight:bold; width:60%;"> 2.Name :- <?php echo strtoupper($fname.' '.$mname.' '.$lname);?> </td>

</tr>
<tr>
<td> 3.Father<strong>&rsquo;</strong>s Name:-</td>

</tr>
</tbody>
</table>
<table style="height: 108px; float: left;" border="1" cellspacing="0" cellpadding="0" width="700">
<tbody>
<tr>
<td>4.Gender &nbsp; <input type="checkbox" /> Male &nbsp; <input type="checkbox" /> Female <input type="checkbox" />Other &nbsp; &nbsp;</td>
<td>&nbsp;5. Nationality&nbsp;<input type="checkbox" />Indian &nbsp;<input type="checkbox" />U.S. &nbsp;<input type="checkbox" />Others (Please specify]</td>
</tr>
<tr>
<td colspan="2">6. Status:. &nbsp; <input type="checkbox" /> Resident &nbsp; <input type="checkbox" />NRI &nbsp; <input type="checkbox" />Foreign National &nbsp; <input type="checkbox" />Others (Please specify]</td>
</tr>
<tr>
<td colspan="2">
<p>7. Address Type [for KYC address] &nbsp; <input type="checkbox" />Residential &nbsp; <input type="checkbox" />Residential / Business <input type="checkbox" />Business &nbsp;</p>
<p>Address of tax residence would be taken as available in KYC Registration Agency (KRA) database. In case of any change, please fill up and submit <br />a separate KYC Change Request Form with supporting documents to update the changes</p>
</td>
</tr>
</tbody>
</table>
<table style="height: 21px; float: left;" border="1" cellspacing="0" cellpadding="0" width="700">
<tbody>
<tr>
<td>8. Place of Birth:</td>
<td>&nbsp;9. Country of Birth:</td>
<td>10. Date of Birth(DD/YY/YYY)</td>
</tr>
</tbody>
</table>
<table style="height: 21px; float: left;" border="1" cellspacing="0" cellpadding="0" width="700">
<tbody>
<tr>
<td>11. Occupation<br />Details [Please tick<br />any one (&radic;)</td>
<td><input type="checkbox" />Business<br /> <input type="checkbox" />Professional<br /> <input type="checkbox" />Public Sector Service<br /> <input type="checkbox" />Private Sector Service</td>
<td><input type="checkbox" />Agriculturist<br /> <input type="checkbox" />Student<br /> <input type="checkbox" />Forex Dealer<br /> <input type="checkbox" />Government Service</td>
<td><input type="checkbox" />Housewife<br /> <input type="checkbox" />Retired<br /> <input type="checkbox" />Others [Please specify]</td>
</tr>
<tr>
<td colspan="4">
<p>12.Gross Annual Income &nbsp; ( in INR)&nbsp;: &nbsp; <input type="checkbox" />Below 1 Lakh &nbsp; <input type="checkbox" />1-5 Lakh &nbsp; <input type="checkbox" />5-10 Lakh <input type="checkbox" />10-25 Lakh <br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="checkbox" />25 Lakh-1crore &gt; <input type="checkbox" />1 Crore</p>
</td>
</tr>
<tr>
<td colspan="4">
<p>13. Net Worth (Optional) INR ________________ Lakh &nbsp; &nbsp;Net Worth as of (DD/MM/YYYY)&nbsp;</p>
</td>
</tr>
</tbody>
</table>
<p style="text-align: left;">&nbsp;</p>
<p style="text-align: left;">&nbsp;</p>
<table style="height: 481px; float: left;" border="1" cellspacing="0" cellpadding="0" width="700">
<tbody>
<tr>
<td>14. Are you a Politically Exposed Person [PEP]&nbsp;&nbsp;<br />&nbsp; &nbsp; &nbsp;<input type="checkbox" /> Yes &nbsp;<input type="checkbox" />No &nbsp;&nbsp;</td>
<td>15. Are you Related to a PEP<br />&nbsp; &nbsp; &nbsp;<input type="checkbox" />Yes <input type="checkbox" />No</td>
</tr>
<tr>
<td colspan="2">
<p>16. Are you a tax resident (i.e.,are you assessed for Tax) in any other country outside India? &nbsp;<input type="checkbox" />Yes <input type="checkbox" />No &nbsp;<br />(If &lsquo;YES&rsquo;, please provide the following details for ALL countries ( other than India) in which you are a Resident for tax purposes i.e., where you are a Citizen / Resident / Green Card Holder / Tax Resident in the respective countries)</p>
</td>
</tr>
<tr>
<td colspan="2">
<table style="height: 98px; margin-left: auto; margin-right: auto;" border="1" cellspacing="0" cellpadding="0" width="700">
<tbody>
<tr>
<td>&nbsp;Sr.No.</td>
<td>Country of Tax Residency</td>
<td>Tax Identification Number or<br />Functional Equivalent</td>
<td>Identification Type<br />[TIN or other, please specify]</td>
<td>
<p>If TIN is not available,<br />please tick &thorn; the <br />reason A, B or C [as defined below] &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;Reason &nbsp;-&gt; <input type="checkbox" />A <input type="checkbox" />B &nbsp;<input type="checkbox" />C</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp; Reason -&gt; <input type="checkbox" />A <input type="checkbox" />B <input type="checkbox" />C</td>
</tr>
</tbody>
</table>
<p>&nbsp; =&gt;Reason A &egrave; The country where the Account Holder is liable to pay tax does not issue Tax <br />&nbsp; &nbsp; &nbsp; Identification Numbers to its residents.<br />&nbsp; =&gt;Reason B &egrave; The Account Holder is otherwise unable to obtain a TIN or equivalent number. &nbsp; &nbsp; <br />&nbsp; &nbsp; &nbsp; &nbsp;(Please explain below why you are unable to obtain a TIN in the table below if you have <br />&nbsp; &nbsp; &nbsp; &nbsp; selected this reason)&nbsp;</p>
<table style="height: 40px;" border="1" cellspacing="0" cellpadding="0" width="700">
<tbody>
<tr>
<td>1</td>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</td>
</tr>
<tr>
<td>2.</td>
<td>&nbsp;</td>
</tr>
</tbody>
</table>
<p>&nbsp; =&gt;Reason C &egrave; No TIN required. (Select this reason Only if the authorities of the respective country of <br />&nbsp; &nbsp; &nbsp; &nbsp;tax residence do not require the TIN to be disclosed)</p>
<p>&nbsp;</p>
<table style="height: 21px;" border="1" cellspacing="0" cellpadding="0" width="700">
<tbody>
<tr>
<td style="text-align: left;">
<p>Declaration:</p>
</td>
</tr>
<tr>
<td style="text-align: left;">
<p>&nbsp;I hereby conﬁrm that the information provided hereinabove is true, correct, and complete to the best of my knowledge and belief and that</p>
<p>&nbsp;I shall be responsible to the reporting agency which relies on this information for compliance with FATCA and CRS. I also o fi that I have read and understood the FATCA &amp; CRS Terms and Conditions below and hereby accept the same. I hereby authorize you, the Mutual Fund /AMC/ RTA/ broker/DP or any other intermediary to disclose, share, rely, remit in any form, mode or manner, all / any of the information provided by me, including all changes, updates to such information as and when provided by me to / any of the Mutual Fund, its Sponsor, Asset Management Company, trustees, Brokers/DPS /any other intermediary, their employees / RTAs ('the Authorized Parties') to any Indian or foreign governmental or statutory or judicial authorities / agencies including but not limited to the Financial Intelligence Unit-India (FIU-IND), the tax / revenue authorities in India or outside India wherever it is legally required and other investigation agencies without any obligation of advising me of the same. Further, I authorize to share the given information to other SEBI Registered Intermediaries/ and / or to any other regulated intermediaries registered with any other authorities / regulator/s including RBI / IRDA / PFRDA to facilitate single submission / update &amp; for other relevant purposes. I also undertake to keep you informed in writing about any changes / modification to the above information in future and also undertake to provide any other additional information as</p>
<p>&nbsp;may be required at your / Fund&rsquo;s end or by domestic or overseas regulators/ tax authorities. I/We authorize the Mutual Fund/AMC/RTA to provide relevant information to upstream payers to enable withholding to occur and pay out any sums from my account or close or suspend my account(s) without any obligation of advising me of the same</p>
</td>
</tr>
</tbody>
</table>
<table style="height: 68px;" border="1" cellspacing="0" cellpadding="0" width="700">
<tbody>
<tr>
<td>Date:</td>
<td style="text-align: justify;" rowspan="2">&nbsp; &nbsp; Signature (21)<img src="<?php echo base_url(); ?>content/images/tick2.png" alt="" /></td>
</tr>
<tr>
<td>&nbsp;Place:&nbsp;&nbsp;</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>

<p>&nbsp;</p>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>



</div></div>


     
</div>
</div>
</div>
</body>
</html>
