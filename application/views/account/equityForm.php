<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
    <?php 
		$regis_date = date("d/m/y", strtotime($registred_date));
		$regis_date1 = 	date("d-m-Y", strtotime($registred_date));
		$fullname =$fname.' '.$mname.' '.$lname;
	?>
	<div class="container" style="margin:0 50px;">
    
    <div style="height:3508px !important; width:100%; float:left;">
	<div style=" float:left; width:100%; height:100%; margin:0;">
    
    <img src="<?php echo base_url(); ?>content/images/logo_a.png" alt=""/>
    
    	<table cellpadding="0" cellspacing="0" width="100%">
        	<tr>
            	<td width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:16px;border-top:5px solid #000; border-bottom:5px solid #000; padding:5px 0; text-align:center;">TRADING ACCOUNT OPENING FORM </td>
            </tr>
            <tr>
            	<td width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:3px 0;text-align:center;">TABLE OF CONTENTS </td>
            </tr>
        </table>
        
        <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border:1px solid #000; text-align:center">
        	<tr>
            	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; font-weight:bold;">DOCUMENT </td>
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; font-weight:bold;">SIGNIFICANCE </td>
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; font-weight:bold;">PAGE No. </td>
            </tr>
            
            <tr>
                <td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;font-weight:bold;border-top:1px solid #000;border-bottom:1px solid #000; padding:3px 0;">MANDATORY DOCUMENTS  </td>
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
                <td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;font-weight:bold;border-top:1px solid #000;border-bottom:1px solid #000; padding:3px 0;">OPTIONAL DOCUMENTS   </td>
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
                <td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;font-weight:bold;border-top:1px solid #000;border-bottom:1px solid #000; padding:3px 0;">QUICK CHECKLIST    </td>
            </tr>
            
            <tr>
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; border-top:1px solid #000;text-align:center; padding:3px 0 5px 10px; width:5%;"><input type="checkbox">&nbsp;1.  </td>
                <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000; text-align:left; padding:3px 0 5px 10px;">Attach copy of passport photograph on page 3 and sign across </td>
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
                <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000; text-align:left; padding:3px 0 5px 10px;">Initial margin cheque (In  Favor of <span style="font-family:Arial, Helvetica, sans-serif; font-size:10px;font-weight:bold;">'Astha Credit & Securities Pvt Ltd.'</span>) </td>
            </tr>


        </table>
        
         <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border:1px solid #000; text-align:center">
            <tr>
                <td valign="top" style="border-right:1px solid #000; border-top:1px solid #000;text-align:left; padding:15px 0 5px 10px; width:45%;"><SPAN style="font-family:Arial, Helvetica, sans-serif; font-size:14px;font-weight:bold;">Astha Credit & Securities (P) Ltd.</SPAN><br> 
    <SPAN style="font-family:Arial, Helvetica, sans-serif; font-size:10px;font-weight:bold;">(Trading Clearing Member :NSE)</SPAN><br>  
    F-01,  Usha Preet, 138/42,Malviya Nagar,Bhopal(MP) 462003<br>  
    Contact No : +91-9926765473,<span style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left; padding:3px 0 5px 10px; width:50%; ">+91-755-4268-555,</span><br>  
    Email id:-  contact@asthatrade.com 
    </td>
    
                <td valign="top" style="border-top:1px solid #000;border-right:1px solid #000;  text-align:left; padding:15px 0 5px 10px;">&nbsp;</td>
    
    
                <td valign="top" style="border-top:1px solid #000; text-align:left; padding:15px 0 5px 10px;">&nbsp;</td>
            </tr>
    </table>        
        
        <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border:1px solid #000; text-align:center">
                    <tr>
                    <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;text-align:center; padding:5px 0 5px 10px; width:50%; font-weight:bold;">
                        Exchange 
                    </td>
                    <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:center; padding:5px 0 5px 10px; width:50%; font-weight:bold;">
                        Registration No 
                    </td>
                </tr>
                
                <tr>
                    <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000;text-align:left; padding:5px 0 5px 10px; width:50%;">
                        NSE CASH  (National Stock Exchange-CAPITAL MARKET) 
                    </td>
                    <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left;border-top:1px solid #000;  padding:5px 0 5px 10px; width:50%; ">
                SEBI Registration No: NSE (Cash) : INB231222739  
                    </td>
                </tr>
                
                        <tr>
                    <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000;text-align:left;  padding:5px 0 5px 10px; width:50%;">
                        NSE F&O  (National Stock Exchange- FUTURE & OPTION) 
                    </td>
                    <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left;border-top:1px solid #000;  padding:5px 0 5px 10px; width:50%; ">
                        SEBI Registration No : NSE (F&O) : INF231222739  
                    </td>
                </tr>
                
                                
        </table>        
                
        <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; margin:10px 0;border:1px solid #000; text-align:center">
                    <tr>
                    <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;text-align:left; padding:3px 0 5px 10px; width:50%; font-weight:bold;">
                        REGISTERED OFFICE <br> 
         & CORRESPONDENCE OFFICE ADDRESS: 
                    </td>
                    <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left; padding:3px 0 5px 10px; width:50%; ">
                        <span style="font-family:Arial, Helvetica, sans-serif;font-weight:bold; font-size:16px">Astha Credit & Securities (P) Ltd. </span><br>
        F - 01,  Usha Preet - 138/42, Malviya Nagar,<br> 
        Bhopal ( M.P.) - 462003 ,Contact No:+91-755-4268-555,<br> 
        Email id:- <span style="color:#03C;"> contact@asthatrade.com , asthainv@yahoo.com</span> 
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
        Phone : <span style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left; padding:3px 0 5px 10px; width:50%; ">0755 - 4220794</span>, E-mail : <span style="color:#03C;">contact@asthatrade.com </span>
                    </td>
                    <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left;border-top:1px solid #000;  padding:3px 0 5px 10px; width:50%; ">
                        Name : Satish Chandra Gupta <br>
                        Phone : 0755 - 4220794,E-mail : <span style="color:#03C;">contact@asthatrade.com </span>  
                    </td>
                </tr>
                
                 
        </table>        
                
        <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; margin:10px 0; text-align:center">
            <tr>
                <td>
                    For any grievance/dispute please contact <span style="font-family:Arial, Helvetica, sans-serif;font-weight:bold; font-size:14px;">Astha Credit & Securities (P) Ltd.</span> At : F - 01, Usha Preet - 138/42, Malviya Nagar,
        Bhopal ( M.P.) - 462003   Phone :<span style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left; padding:3px 0 5px 10px; width:50%; "> +91-755-4268-555, </span> Email : <span style="color:#03C;">contact@asthatrade.com</span>, <span style="font-family:Arial, Helvetica, sans-serif; font-size:10px;font-weight:bold; font-size:11px;">website:www.asthatrade.com </span> In case
        not satisfied with the response please contact the concerned exchange(s) at 
                </td>
            </tr>
        
        </table> 
               
        <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; margin:10px 0;border:1px solid #000; text-align:center">
                    <tr>
                    <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;text-align:left; padding:3px 0 3px 10px; width:30%;">
                        Exchange Name  
                    </td>
                    <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;text-align:left; padding:3px 0 3px 10px; width:30%; ">
                        Email id 
                    </td>
                     <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left; padding:3px 0 3px 10px; width:30%; ">
                        Phone No 
                    </td>
                </tr>
                
                
                <tr>
                    <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000;text-align:left; padding:3px 0 3px 10px; width:30%;">
                        NSE 
                    </td>
                    <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000;text-align:left; padding:3px 0 3px 10px; width:30%;color:#03C;">
                        ignse@nse.co.in 
                    </td>
                     <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left;border-top:1px solid #000;padding:3px 0 3px 10px; width:30%; ">
                        022-26598190 
                    </td>
                </tr>
                
        
        </table>  
        
    </div>
     </div>     
 <!-- page 1 end-->
<div style="height:3508px !important; width:100%; float:left;">
	<div style=" float:left; width:100%; height:100%; margin:0;">
<table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; margin:10px 0; text-align:center">
<tr>
	<td><br><br></td>
</tr><tr>
	<td style="border-top:5px solid #000; width:100%;"><br><br></td>
</tr>
	<tr>
    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 0 5px 0; text-align:center; font-weight:bold; font-size:16px;">
        	INSTRUCTIONS/CHECK LIST FOR FILLING KYC FORM 
        </td>
    </tr>
    <tr>
    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:12px;padding:3px 0; text-align:left; line-height:24px;">
        	<span style="font-family:Arial, Helvetica, sans-serif; font-size:14px;font-weight:bold;">A. IMPORTANT POINTS:</span><br>
             1. Self attested copy of PAN card is mandatory for all clients, including Promoters/Partners/Karta/Trustees and whole time directors and persons authorized to deal in securities on behalf of company/firm/others.<br>
              2. Copies of all the documents submitted by the applicant should be self-attested and accompanied by originals for verification. In case the original of any document is not produced for verification, then the copies should be properly attested by entities authorized for attesting the documents, as per the below mentioned list.<br>
               3. If any proof of identity or address is in a foreign language, then translation into English is required.<br> 
               4. Name & address of the applicant mentioned on the KYC form, should match with the documentary proof submitted.<br> 
               5. If correspondence & permanent address are different, then proofs for both have to be submitted. <br>
               6. Sole proprietor must make the application in his individual name & capacity. <br>
               7. For non-residents and foreign nationals, (allowed to trade subject to RBI and FEMA guidelines), copy of passport/P10 Card/OCI Card and overseas address proof is mandatory.<br>
               8. For foreign entities, CIN is optional; and in the absence of DIN no. for the directors, their passport copy should be given.<br>
               9. In case of Merchant Navy NRI's, Mariner's declaration or certified copy of CDC (Continuous Discharge Certificate) is to be submitted.<br>
               10. For opening an account with Depository participant or Mutual Fund, for a minor, photocopy of the School Leaving Certificate/Mark sheet issued by Higher Secondary Board/Passport of Minor/Birth Certificate must be provided.<br>
               11. Politically Exposed Persons (PEP) are defined as individuals who are or have been entrusted with prominent public functions in a foreign country, e.g., Heads of States or of Governments, senior politicians, senior Government/judicial/ military officers, senior executives of state owned corporations, important political party officials, etc.<br><br>
               
                <span style="font-family:Arial, Helvetica, sans-serif;font-weight:bold; font-size:14px;">B. Proof of Identity (POI): - List of documents admissible as Proof of Identity:</span><br> 
                1. Unique Identification Number (UID)(Aadhaar)/ Passport/Voter ID card/ Driving license. <br>
                2. PAN card with photograph.<br>
                3. Identity card/ document with applicant's Photo, issued by any of the following: Central/State Government and its Departments, Statutory/Regulatory Authorities, Public Sector Undertakings, Scheduled Commercial Banks, Public Financial Institutions, Colleges affiliated to Universities, Professional Bodies such as ICAI,ICWAI, ICSI, Bar Council etc., to their Members; and Credit cards/Debit cards issued by Banks.<br><br>
                
                 <span style="font-family:Arial, Helvetica, sans-serif;font-weight:bold; font-size:14px;">C. Proof of Address (P0A):-</span> List of documents admissible as Proof of Address: (*Documents having an expiry date should be valid on the date of submission.)<br>
                  1. Passport/ Voters Identity Card/ Ration Card/ Registered Lease or Sale Agreement of Residence/ Driving License/ Flat Maintenance bill/Insurance Copy.<br>
                  2. Utility bills like Telephone Bill (only land line), Electricity bill or Gas bill - Not more than 3 months old.<br>
                  3. Bank Account Statement/Passbook -- Not more than 3 months old. <br>
                  4. Self-declaration by High Court and Supreme Court judges, giving the new address in respect of their own accounts.<br> 
                  5. Proof of address issued by any of the following: Bank Managers of Scheduled Commercial Banks/Scheduled Co-Operative Bank/Multinational Foreign Banks/Gazetted Officer/Notary public/Elected representatives to the Legislative Assembly/Parliament/Documents issued by any Govt. or Statutory Authority. <br>
                  6. Identity card/document with address, issued by any of the following: Central/State Government and its Departments, Statutory/Regulatory Authorities, Public Sector Undertakings, Scheduled Commercial Banks, Public Financial Institutions, Colleges affiliated to Universities and Professional Bodies such as ICAI, ICWAI,ICSI, Bar Council etc., to their Members. <br>
                  7. For FII/sub account, Power of Attorney given by FII/sub-account to the Custodians (which are duly notarized and/or apostilkd or consularised)that gives the registered address should be taken.<br> 
                  8. The proof of address in the name of the spouse may be accepted. <br><br>
                  
                  <span style="font-family:Arial, Helvetica, sans-serif;font-weight:bold; font-size:14px;">D. Exemptions/clarifications to PAN </span>(*Sufficient documentary evidence in support of such claims to be collected.)<br> 
                  1. In case of transactions undertaken on behalf of Central Government and/or State Government and by officials appointed by Courts e.g. Official liquidator, Court receiver etc.<br>
                  2. Investors residing in the state of Sikkim.<br> 
                  3. UN entities/multilateral agencies exempt from paying taxes/filing tax returns in India.<br> 
                  4. SIP of Mutual Funds upto Rs 50, 000/-<br> 
                  5. In case of institutional clients, namely, Fils, MFs, VCFs, FVCIs, Scheduled Commercial Banks, Multilateral and Bilateral Development Financial Institutions, State Industrial Development Corporations, Insurance Companies registered with IRDA and Public Financial Institution as defined under section 4A of the Companies Act, 1956, Custodians shall verify the PAN card details with the original PAN card and provide duly certified copies of such verified PAN details to the intermediary. <br><br>
                  
                  <span style="font-family:Arial, Helvetica, sans-serif;font-weight:bold; font-size:14px;">E. List of people authorized to attest the documents:</span><br> 
                  1. Notary Public, Gazetted Officer, Manager of a Scheduled Commercial/ Co-operative Bank or Multinational Foreign Banks (Name, Designation &Seal should be affixed on the copy).<br> 
                  2. In case of NRls, authorized officials of overseas branches of Scheduled Commercial Banks registered in India, Notary Public, Court Magistrate, Judge, Indian Embassy /Consulate General in the country where the client resides are permitted to attest the documents. F. In case of Non-Individuals, additional documents to be obtained from non-individuals, over & above the POI & POA, as mentioned below: 

        </td>
    </tr>

</table> 
       
 </div> 
 </div>      
 <!-- page 2 end-->
<div style="height:3508px !important; width:100%; float:left;">
	<div style=" float:left; width:100%; height:100%; margin:0;">    
<table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:5px solid #000; text-align:center"> 
        
        <tr>
        	<td><br/><br/>Annesure I<br>
            	<span style="font-family:Arial, Helvetica, sans-serif; font-size:10px;font-weight:bold; font-size:18px; padding:3px 0;">
                <br/><br/>PART -1 KNOW YOUR CLIENT (KYC) APPLICTAION FORM (For Individuals)</span>
            </td>
        </tr>
 </table>    
 
<table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border:1px solid #000;border-bottom:0; text-align:center"> 
        
        <tr>
        	<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-bottom:1px solid #000; text-align:center; width:100%;"><img src="<?php echo base_url();?>content/images/logo_a.png" alt="" />
            
            </td>
        </tr>
         <tr>
        	<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:14px; padding:3px 10px; text-align:left; width:100%">Please fill this form in ENGLISH and in BLOCK LETTERS  
            
            </td>
        </tr>
        <tr>
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;border-top:1px solid #000;text-align:left;">
            	<table width="100%" cellpadding="0"  cellspacing="0" >
                    <tr>
                        <td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:14px; padding:3px 10px;text-align:left; background:#e5e5e5; width:100%;font-weight:bold;">A. IDENTITY DETAILS</td>
                    </tr>
                    
                    <tr>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; width:2%;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">1.</td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px;padding:15px 10px;border-top:1px solid #000;"> Name of the Applicant</td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px;padding:15px 10px;border-top:1px solid #000; font-weight:bold; width:60%;"><?php echo strtoupper($fname.' '.$mname.' '.$lname);?> </td>
                    </tr>
					<tr>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; width:2%;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">2.</td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px;padding:16px 10px;border-top:1px solid #000;"> Father's/Husband's Name</td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px;padding:16px 10px;border-top:1px solid #000; font-weight:bold; width:60%;"><?php echo strtoupper($ffname.' '.$fmname.' '.$flname);?></td>
                    </tr>                    
                </table>
                
            </td>
            
            <td rowspan="3" valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000; width:130px; height:130px; float:right;" ><p>Photograph</p><br/><br/>
              <p>Please affix your passport size photograph &amp; signature across it<br/><img src="<?php echo base_url(); ?>content/images/tick2.png" alt="" /> (1)
            </p></td>
        </tr>
   </table>
        
   <table cellpadding="0" cellspacing="0" width="100%">     
        <tr>
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px; width:2%;border-top:1px solid #000;border-right:1px solid #000;border-left:1px solid #000;text-align:left; padding:3px 10px;">
            	3.
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            	(a.) Gender
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:11px;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 5px;">
            	<?php
                if($sex=='1')
                {
				?>
                <input type="radio" name="gender"  checked="checked"/>Male<br>
                <input type="radio" name="gender"  />Female<br>
				<?php
                }
                else if($sex=='2')
                {
                ?>
                    <input type="radio" name="gender" />Male<br>
                    <input type="radio" name="gender" checked="checked" />Female<br>
                <?php
                }
                ?>
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            	(b.) Marital Status
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:11px;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 5px;">
            	<?php
                if($marital_status=='1')
                {
				?>
                <input type="radio" name="marital_status"  />Single<br>
                <input type="radio" name="marital_status" checked="checked" />Married<br>
				<?php
                }
                else if($marital_status=='0')
                {
                ?>
                    <input type="radio" name="marital_status" checked="checked"/>Single<br>
                    <input type="radio" name="marital_status" />Married<br>
                <?php
                }
                ?>
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;border-top:1px solid #000;text-align:left; padding:3px 10px;">
            	(c.) Date of birth
				<?php 
				$dob=explode("/",$dob);
				//print_r($dob);
				//echo $dob[0][1];
				?>
            </td>
			<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">                
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">      
			<?php echo $dob[0][8];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
			<?php echo $dob[0][9];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $dob[0][5];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
			<?php echo $dob[0][6];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $dob[0][0];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
			<?php echo $dob[0][1];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
			<?php echo $dob[0][2];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $dob[0][3];?>
			</td>
            
            
            
        </tr>
        
        
 </table>    
        
   <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;">     
        <tr>
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px; width:2%;border-top:1px solid #000;border-right:1px solid #000;border-left:1px solid #000;text-align:left; padding:3px 10px;">
            	4.
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            	(a.) Nationality
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            	<?php
				if($nationality == 'Indian')
				{
				?>
				<input type="radio" checked="checked" />Indian<br>
                <input type="radio" />Other<br>
                (Please Specify,________)
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
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            	(b.) Status
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            	<?php //if($userResidentialstatus == '0')?>
				
				<input type="radio" <?php if($userResidentialSataus == 0){?>checked="checked"<?php } ?> />Resident Individual<br>
                <input type="radio" <?php if($userResidentialSataus == 1){?>checked="checked"<?php } ?>/>Non Resident<br>
                <input type="radio" <?php if($userResidentialSataus == 2){?>checked="checked"<?php } ?>/>Foreign National<br>
				<input type="radio" <?php if($userResidentialSataus == 3){?>checked="checked"<?php } ?>/>Person of Indian Origin
				
				
            </td>
            
        </tr>
        
 </table>     
 
<table cellpadding="0" cellspacing="0" width="100%">     
        <tr>
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px; width:2%;border-top:1px solid #000;border-right:1px solid #000;border-left:1px solid #000;text-align:left; padding:3px 10px;">
            	5.
				<?php 
				$pan=explode("/",$pancard);
				?>
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            	(a.) PAN
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
           
            
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            	(b.) Unique Indentification Number (UID / Adhar If Any
				<?php 
				$aadhar=explode("/",$addharcard);
				?>
            </td>
            
            
			<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
			<?php echo $aadhar[0][0];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $aadhar[0][1];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $aadhar[0][2];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $aadhar[0][3];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $aadhar[0][4];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
			<?php echo $aadhar[0][5];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $aadhar[0][6];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $aadhar[0][7];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $aadhar[0][8];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $aadhar[0][9];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $aadhar[0][10];?>
			</td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
            <?php echo $aadhar[0][11];?>
			</td>
            
        </tr>
        
        
 </table> 
 
<table cellpadding="0" cellspacing="0" width="100%">     
        <tr>
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px; width:2%;border-top:1px solid #000;border-right:1px solid #000;border-left:1px solid #000;text-align:left; padding:3px 10px;">
            	6.
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            	Specify the proof of identity Submitted
				
            </td>
            
            
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
				<?php
				if($corr_add_proof == 'PAN Card')
				{
				?>
				&#x2611; PAN Card<br>
            	<input type="Checkbox" />Any Other ( Please Specify, _______________________)
				<?php 
				}
				else
				{
				?>
				<input type="Checkbox" />PAN Card<br>
            	&#x2611; Any Other ( Please Specify, <u><?php echo $corr_add_proof;?></u>)
				<?php 
				} 
				?>
            </td>
				
            
        </tr>
        
        
 </table> 
 
        
<table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;border-bottom:1px solid #000;border-top:1px solid #000;float:left; height:3508px;">     
        <tr>
        	<td colspan="10" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;border-left:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left; background:#e5e5e5; width:100%; font-weight:bold;">B. ADDRESS DETAILS</td>
        </tr>
        <tr>
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px; width:2%;border-top:1px solid #000;border-right:1px solid #000;border-left:1px solid #000;text-align:left; padding:3px 10px;">
            	1.
            </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:20%;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            	Correspondence Address
            </td>
            <td colspan="3" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:0 0px;">
            	<table cellpadding="0" cellspacing="0" width="100%">
                	<tr>
                    	<td colspan="12" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;text-align:left; padding:3px; height:60px;">
						<?php echo $corr_address;?>
						</td>
                    </tr>
                    <tr>
                    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:14px;border-top:1px solid #000;border-bottom:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px;">City / Town / Village
                        </td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:20%;border-top:1px solid #000;border-bottom:1px solid #000;border-right:1px solid #000;text-align:left; padding:0; width:150px;">
						<?php echo $corr_city; ?>
						</td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px;border-top:1px solid #000;border-bottom:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px;">PIN Code
                        </td>
						<?php $pincode=explode("/",$corr_pincode);?>
                        
						<td valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:2%;border-top:1px solid #000;border-bottom:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
						<?php echo $pincode[0][0];?>
						</td>
						<td valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:2%;border-top:1px solid #000;border-bottom:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
						<?php echo $pincode[0][1];?>
						</td>
						<td valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:2%;border-top:1px solid #000;border-bottom:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
						<?php echo $pincode[0][2];?>
						</td>
						<td valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:2%;border-top:1px solid #000;border-bottom:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
						<?php echo $pincode[0][3];?>
						</td>
						<td valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:2%;border-top:1px solid #000;border-bottom:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
						<?php echo $pincode[0][4];?>
						</td>
						<td valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:2%;border-top:1px solid #000;border-bottom:1px solid #000;text-align:left; padding:3px 10px;">            	
						<?php echo $pincode[0][5];?>
						</td>
						
                    </tr>
                    <tr>
                    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:14px;border-right:1px solid #000;text-align:left; padding:3px;">State
                        </td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:20%;border-right:1px solid #000;text-align:left; padding:0; width:120px;">
                        <?php echo $corr_state; ?>
						</td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px;border-right:1px solid #000;text-align:left; padding:3px;">Country
                        </td>
                        <td colspan="8" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:20%;text-align:left; padding:3px;">
						<?php echo $corr_country; ?>
                        </td>
                        
                    </tr>
                </table>
            </td>
        </tr>
        
        <tr>
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px; width:2%;border-top:1px solid #000;border-right:1px solid #000;border-left:1px solid #000;text-align:left; padding:3px 10px;">
            	2.
            </td>
            <td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:20%;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            	Specify the proof of identity Submitted
            </td>
            
            
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            <?php echo $corr_add_proof ;?>		
            </td>
        </tr>
        
        <tr>
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px; width:2%;border-top:1px solid #000;border-right:1px solid #000;border-left:1px solid #000;text-align:left; padding:3px 10px;">
            	3.
            </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:20%;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            	Contact Details
            </td>
            <td colspan="3" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:0 0px;">
            	<table cellpadding="0" cellspacing="0" width="100%">
                	
					<?php /** Diffination of  $ph_type: 1 for Mobile, 2 for Office, 3 for Home(Res.), 4 for Fax. **/ ?>
					
					
					
					<tr>
                    	<td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;border-bottom:1px solid #000;text-align:left; padding:3px; width:200px;">
						Tel. (Off):&nbsp;<?php if($office_ph_code){echo $office_ph_code.'-'.$office_ph;} else{ echo $office_ph;} ?></td>
                        <td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;border-bottom:1px solid #000;text-align:left; padding:3px; width:200px">
						Tel. (Res):&nbsp;<?php if($home_ph_code){echo $home_ph_code.'-'.$home_ph;} else{ echo $home_ph;} ?> </td>
                    </tr>
                    <tr>
                    	<td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;border-bottom:1px solid #000;text-align:left; padding:3px;width:200px;">
						Fax No:&nbsp;<?php if($fax_code){echo $fax_code.'-'.$fax_ph;} else { echo $fax_ph; } ?></td>
                        <td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;border-bottom:1px solid #000;text-align:left; padding:3px;width:200px;">
						Mob. No:&nbsp;<?php echo '+91-'.$mobile; ?></td>
                    </tr>
					
                    <tr>
                    	<td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;text-align:left; padding:3px;">E-mail ID:&nbsp;<?php echo $emailaddress;?></td>
                    </tr>
                    
                    
                </table>
            </td>
        </tr>
        
        
        <tr>
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px; width:2%;border-top:1px solid #000;border-right:1px solid #000;border-left:1px solid #000;text-align:left; padding:3px 10px;">
            	4.
            </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:20%;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            	Permanent Address (if Different form above Mandatory for Non Resident Applicant to specify overseas Address)
            </td>
            <td colspan="3" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:0 0px;">
            	<table cellpadding="0" cellspacing="0" width="100%">
                	<tr>
                    	<td colspan="12" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;text-align:left; padding:3px; height:100px;">
						<?php if($per_address){echo $per_address;}else{echo $corr_address;} ?>
						
						</td>
                    </tr>
                    <tr>
                    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:14px;border-top:1px solid #000;border-bottom:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px;">
						City / Town / Village
                        </td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:20%;border-top:1px solid #000;border-bottom:1px solid #000;border-right:1px solid #000;text-align:left; padding:0; width:150px;">&nbsp;
						<?php if($per_city){echo $per_city;}else{echo $corr_city;}?>
						</td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px;border-top:1px solid #000;border-bottom:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px;">
						PIN Code
                        </td>
                       <?php if($per_pincode){$pincode1=explode("/",$per_pincode);}else{$pincode1=explode("/",$corr_pincode);} ?>
                        
						<td valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:2%;border-bottom:1px solid #000;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
						<?php echo $pincode1[0][0];?>
						</td>
						<td valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:2%;border-bottom:1px solid #000;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
						<?php echo $pincode1[0][1];?>
						</td>
						<td valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:2%;border-bottom:1px solid #000;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
						<?php echo $pincode1[0][2];?>
						</td>
						<td valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:2%;border-bottom:1px solid #000;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
						<?php echo $pincode1[0][3];?>
						</td>
						<td valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:2%;border-bottom:1px solid #000;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
						<?php echo $pincode1[0][4];?>
						</td>
						<td valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:2%;border-bottom:1px solid #000;border-top:1px solid #000;text-align:left; padding:3px 10px;">            	
						<?php echo $pincode1[0][5];?>
						</td>
                    </tr>
                    <tr>
                    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:14px;border-right:1px solid #000;text-align:left; padding:3px;">
						State
                        </td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:20%;border-right:1px solid #000;text-align:left; padding:0;">
						<?php if($per_state){echo $per_state;} else{ echo $corr_state;}?>
                        </td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px;border-right:1px solid #000;text-align:left; padding:3px;">
						Country
                        </td>
                        <td colspan="8" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;width:20%;text-align:left; padding:3px;">
						<?php if($per_country){echo $per_country;} else{echo $corr_country;}?>
                        </td>
                        
                    </tr>
                </table>
            </td>
        </tr>
</table>
        
</div> 
</div>
  <!-- page 3 end-->
<div style="height:3508px !important; width:100%; float:left;">
	<div style=" float:left; width:100%; height:100%; margin:0;">          
<table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;page-break-before: always;">
		<tr>
        	<td><br/><br/><br/><br/><br/><br/></td>
        </tr>   
	<tr>
    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:12px;border:1px solid #000;text-align:left; padding:3px 10px; font-weight:bold; text-transform:uppercase;">
            	C. Declaration
            </td>
    </tr>
    
    <tr>
    	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;border-left:1px solid #000;border-right:1px solid #000;text-align:left; padding:15px 10px;">
            	I hereby declare that the details furnished above are true and correct to the best of my knowledge and belief
and I undertake to inform you of any changes therein, immediately. In case any of the above information is
found to be false or untrue or misleading or misrepresenting. I am aware that I may be held liable for it.
            </td>
    </tr>
    
</table>    
<table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-bottom:1px solid #000;">     
    
    <tr>
    	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; border-left:1px solid #000;border-right:1px solid #000;text-align:left; padding:1px 30px;">
            	<span style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:15px 100px 15px 0;"><img src="<?php echo base_url(); ?>content/images/tick2.png" alt="" />Signature of the Applicant (2)</span>
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;border-right:1px solid #000;border-top:1px solid #000;text-align:left; padding:3px 10px;">
            	Date
            </td>
			<?php $registered_dt= explode('/',$registred_date);?>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;width:4%;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;"><?php echo $registered_dt[0][8];?></td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;width:4%;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;"><?php echo $registered_dt[0][9];?></td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;width:4%;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;"><?php echo $registered_dt[0][5];?></td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;width:4%;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;"><?php echo $registered_dt[0][6];?></td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;width:4%;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;"><?php echo $registered_dt[0][0];?></td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;width:4%;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;"><?php echo $registered_dt[0][1];?></td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;width:4%;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;"><?php echo $registered_dt[0][2];?></td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;width:4%;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;"><?php echo $registered_dt[0][3];?></td>
            
    </tr>
    <tr>
    	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; float:left; font-size:10px; border-left:1px solid #000;text-align:left; padding:15px 30px; ">
            	Name of Applicant :<b><?php echo '<u>'.$fname.' '.$mname.' '.$lname.'</u>';?></b>
            </td>
            <td colspan="9" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000;text-align:left; padding:15px 10px;">
            	Place :<?php echo '<u>'.$corr_city.'</u>';?>
            </td>
       </td>
    </tr>

 </table>      
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-bottom:1px solid #000;border-left:1px solid #000;border-right:1px solid #000;">     
	<tr>
    	<td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:center; padding:3px 10px; font-weight:bold;">For office use Only</td>
    </tr>
    <tr>
    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:10%;text-align:center; padding:3px 10px;border-top:1px solid #000;border-right:1px solid #000;">S No.</td>
        <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left; padding:3px 10px;border-top:1px solid #000;">Particulars</td>
    </tr>
    <tr>
    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:10%;text-align:center; padding:3px 10px;border-top:1px solid #000;border-right:1px solid #000;">1.</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left; padding:3px 10px;border-top:1px solid #000; width:20px;"><input type="checkbox" style=" background:#C00; border:none;"/></td>
        
                <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left; padding:3px 10px;border-top:1px solid #000;">
Originals verified and self Attested Document copies received</td>
    </tr>
     <tr>
    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:10%;text-align:center; padding:3px 10px;border-top:1px solid #000;border-right:1px solid #000;">2.</td>
        <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left; padding:3px 10px;border-top:1px solid #000;">
        In Person-Verification (IPV) Details:<br>
a) Name of the person doing IPV<br>
b) Designation<br>
c) Name of Organization<br>
d) Signature<br>
e) Date</td>
    </tr>
    
</table> 

 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-bottom:1px solid #000;border-left:1px solid #000;border-right:1px solid #000;">     
	<tr>
    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left;border-right:1px solid #000;">
        <table cellpadding="0" cellspacing="0" width="100%">
        	<tr>
            	<td colspan="10" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left; width:100%; padding:3px 10px">Name & Signature of the
Authorised Signatory</td>
            </tr>
            <tr>
            	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000; padding:3px 10px">Date</td>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:4%;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">&nbsp;</td>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:4%;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">&nbsp;</td>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:4%;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">&nbsp;</td>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:4%;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">&nbsp;</td>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:4%;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">&nbsp;</td>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:4%;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">&nbsp;</td>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:4%;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">&nbsp;</td>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:4%;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">&nbsp;</td>
            </tr>
        
        </table>
        </td>
        
        <td  style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left; padding:3px 10px;">
        	Seal / Stamp of the Intermediary
        </td>
     </tr>
     
</table>
         
</div>

</div>

  <!-- page 4 end-->
<div style="height:3508px !important; width:100%; float:left;">
	<div style="float:left; width:100%; height:100%; margin:0;">    
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:5px solid #000; text-align:center; margin-top: 5px;"> 
        
        <tr>
        	<td>Annesure 3<br>
            	<span style="font-family:Arial, Helvetica, sans-serif; font-size:10px;font-weight:bold; font-size:18px; padding:3px 0;">
                TRADING ACCOUNT RELATED DETAILS</span><br>
                (For Individuals & Non-Individuals)
            </td>
        </tr>
 </table>  
   
<table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 0 0;border-bottom:1px solid #000;border-top:1px solid #000;">     
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:40%;border-left:1px solid #000; padding:3px 10px;text-align:left; background:#e5e5e5; font-weight:bold;">A. BANK ACCOUNT DETAILS</td>
        
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:left; background:#e5e5e5;font-weight:bold;">[Please enclose, Copy of a Cancelled cheque leaf / Pass Book / bank Statement containing name of the constituent]</td>
        </tr>
</table>

<table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-bottom:1px solid #000;border-left:1px solid #000;border-right:1px solid #000;">     
   <tr>
		<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:center;"> Bank Name</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:center;"> Branch Address</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:center;"> Bank A/C No.</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-right:1px solid #000; padding:3px 10px;text-align:center;"> A/C type <span style="font-family:Arial, Helvetica, sans-serif; font-size:10px;font-size:10px;">( Saving/ Current / Other in case od NRI / NRE / NRO)</span></td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:center;"> MICR No.</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:3px 10px;text-align:center;"> IFSC Code</td>
    </tr>
   <tr>
		<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:center;"><?php echo $bankname;?></td>
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
		<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:center;">&nbsp;</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:center;"></td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:center;"> </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:center;"></td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:center;"></td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-top:1px solid #000;padding:3px 10px;text-align:center;"> </td>
    </tr>
    
    <tr>
		<td colspan="6" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000; padding:3px 10px;text-align:left;">Note: Please provide the above details with Care as the same ahall be used for Payment throughNEFT / RTGS</td>
        
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
		<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:center;">Name of DP</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:center;"> Name of the depository</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:center;"> Benificiary Name</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:center;"> DP ID No.</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:3px 10px;text-align:center;"> DP ID NO. / BO ID NO.</td>
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
    
   
</table> 

 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 0 0;border-bottom:1px solid #000;border-top:1px solid #000;">     
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left; background:#e5e5e5; font-weight:bold; text-transform:uppercase;">C. Trading Preferences</td>
        </tr>
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-right:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:left;">Please sign in the relavent boxes where you wish to Trade.The segment not chosen should be sturck of by the client .</td>
        </tr>
</table>

<table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-bottom:1px solid #000;border-left:1px solid #000;border-right:1px solid #000;">     
   <tr>
		<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:center;">Exchanges</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:center;">Segment</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:center; width:25%;"> Signature</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; padding:3px 10px;text-align:center;">Segment</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:3px 10px;text-align:center; width:25%;">Signature</td>
    </tr>
   <tr>
		<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:center;">NSE</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:center;">Cash
        </td>
        <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000; padding:15px 10px 15px 10px;text-align:left;margin:-10px 0  0 0;" >(3)<img src="<?php echo base_url(); ?>content/images/tick2.png" alt="" /></td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:center;">Future & Options</td>
        <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000; padding:15px 10px 15px 10px;text-align:left; background:url(images/tick.png) no-repeat left top;margin:-10px 0  0 0;" >(4)<img src="<?php echo base_url(); ?>content/images/tick2.png" alt="" /></td>
    </tr>
   <!-- <tr>
		<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:center;">&nbsp;</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:center;">&nbsp;</td>
        <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000; padding:15px 10px 15px 10px;text-align:left; background:url(images/tick.png) no-repeat left top;margin:-10px 0  0 0;" >(5)<img src="<?php echo base_url(); ?>content/images/tick2.png" alt="" /></td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:center;"></td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-top:1px solid #000;padding:3px 10px;text-align:center;"> </td>
    </tr>-->
    
   
</table>
 
<table cellpadding="0" cellspacing="0" width="100%">     
	<tr>
    	<td>    # If in future the client wants to trade on any new segments/new exchange, separate authorisation letter should be submitted by the client to the stock broker. 
</td>
    </tr>

</table> 

 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 0 0;border-bottom:1px solid #000;border-top:1px solid #000;">     
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:30%;border-left:1px solid #000; padding:3px 10px;text-align:left; background:#e5e5e5; font-weight:bold;">D. PAST ACTIONS</td>
        
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; font-size:12px; padding:3px 10px;text-align:left; background:#e5e5e5;font-weight:bold;">Details of any action / proceedings initiated / pending / taken by SEBI / Stock Exchange / any other authority against the applicant / constituent or its partner / promoters / Wholetime Director / authorised person in charge of dealing in securities during the last three years. [Please specify in the col. below ]</td>
        </tr>
          <tr>
        	<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:100%;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left; height:60px;"></td>
        
        
        </tr>
</table>
 
<table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 0 0;border-bottom:1px solid #000;border-top:1px solid #000;">     
        <tr>
        	<td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:30%;border-left:1px solid #000;border-RIGHT:1px solid #000; padding:3px 10px;text-align:left; background:#e5e5e5; font-weight:bold;">E. DEALING THROUGH SUB-BROKER & OTHER STOCK BROKER'S</td>
        
        </tr>
          <tr>
        	<td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:100%;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000;font-size:14px; font-weight:bold; padding:3px 10px;text-align:left;">If client is dealing through the sub-broker, provide the following details</td>
        </tr>
        <tr>
        	<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:left;">Sub-Broker Name</td>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-right:1px solid #000;border-left:1px solid #000; padding:3px 10px;text-align:left;">SEBI Reg. No.:</td>
        
        </tr>
        <tr>
        	<td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:100%;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">Regd. Office Address</td>
        
        
        </tr>
        <tr>
        	<td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:100%;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">&nbsp;</td>
        
        
        </tr>
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:left;">Tel. No. : </td>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-left:1px solid #000; padding:3px 10px;text-align:left;">Fax No. :</td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-right:1px solid #000; border-left:1px solid #000; padding:3px 10px;text-align:left;">Website : </td>
        
        </tr>
        <tr>
        	<td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:100%;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; font-size:14px;font-weight:700; padding:3px 10px;text-align:left;">Website : Whether dealing with any other stock broker / sub-broker (if case dealing with multiple stock brokers / sub-brokers provide details of all. </td>
        </tr>
        <tr>
        	<td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:100%;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">Stock Broker Name </td>
        </tr>
        <tr>
        	<td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:100%;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">Name of Sub-broker if any </td>
        </tr>
        <tr>
        	<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000; padding:3px 10px;text-align:left;">Client Code</td>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-left:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">Exchange</td>
        
        </tr>
        <tr>
        	<td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:100%;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">Details of disputes / dues pending from / to such stock broker / sub-broker  </td>
        </tr>
</table>
 
 </div>
 </div>
<!-- page 5 end--> 
 <div style="height:3508px !important; width:100%; float:left;">
	<div style=" float:left; width:100%; height:100%; margin:0;">   
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 0 0;border-bottom:1px solid #000;border-top:1px solid #000;"> 
 <tr><td colspan="4"><br/><br/><br/><br/><br/><br/><br/></td></tr>
    
        <tr>
        	<td colspan="4" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-RIGHT:1px solid #000; padding:3px 10px;text-align:left; background:#e5e5e5; font-weight:bold;">F. NOMINATIONS DETAILS ( For individuals only)</td>
        
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
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">Witness Name</td>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-right:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;"></td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left;">Witness Name</td>
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
        	<td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-left:1px solid #000;border-bottom:1px solid #000;border-right:1px solid #000; padding:3px 10px;text-align:left; background:#e5e5e5; font-weight:bold; text-transform:uppercase;  float:left; margin:100px 0;">DECLARATION</td>
        </tr> 
        <tr>
        	<td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:3px 10px 100px 10px;text-align:left;  ">1. I /We hereby declare that the details furnished above are true & correct to the best of my/our knowledge and belief, and I / We undertake to inform you of any changes therein immediately in writing. In case any of the above information is found to be false or untrue or misleading or misrepresenting. I am / we are aware that I/we may be held liable for it.<br><br> 
             2. I / We confirm having read / been explained and understood the contents of the Documents on policy & procedures of the stock brokers and the tariff sheet.<br> <br> 
             3. I / We further confirm having read & understood the contents of the 'Mandatory as well as Voluntary'. 'Rights & Obligation' document(s) and 'Risk Disclosure Document. I / We do hereby agree to be bound by such provisions as outlined in these document. I / We have also been informed that the standard set of documents has been displayed for information on stock brokers designated website, if any. </td>
        </tr>
        
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px ; text-align:left;">Date :<?php echo '<u>'.$regis_date.'</u>';?></td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px ; text-align:left;">Place :<?php echo '<u>'.$corr_city.'</u>'?></td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-bottom:1px solid #000; padding:15px 10px 15px 10px;text-align:left; background:url(images/tick.png) no-repeat left top;margin:-10px 0  0 0;" >(5)<img src="<?php echo base_url(); ?>content/images/tick2.png" alt="" /></td>
        </tr>
        <tr>
        	<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px 200px 10px ; text-align:left;">Signatory (ies) </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px ; text-align:left;">Signature of Client / (all) Authorised 
</td>
            
        </tr>
        
         
 
</table>
  
</div> 
</div>
<!-- page 6 end-->  
 <div style="height:3508px !important; width:100%; float:left;">
	<div style=" float:left; width:100%; height:100%; margin:0;">   
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 30px 0;border-bottom:1px solid #000;"> 
 <tr><td colspan="3"><br/><br/><br/><br/><br/><br/><br/></td></tr>
    
        <tr>
        	<td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:35px 10px;text-align:center; font-size:20px; text-transform:uppercase;">Tariff Sheet</td>
        </tr>
        <tr>
        	<td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:15px 10px;text-align:left; text-transform:uppercase;">BROKERAGE STRUCTURE ( NSE )</td>
        </tr>
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; border-left:1px solid #000; border-top:1px solid #000; padding:15px 10px;text-align:center;font-weight:bold;">Cash Market Segment</td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;  border-top:1px solid #000; padding:15px 10px;text-align:center;">In terms of Percentage ( % )</td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; border-top:1px solid #000; padding:15px 10px;text-align:center;">In terms Of Paisa</td>
        </tr>
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; border-left:1px solid #000; border-top:1px solid #000; padding:15px 10px;text-align:left;">Intraday</td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;  border-top:1px solid #000; padding:15px 10px;text-align:center;"></td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; border-top:1px solid #000; padding:15px 10px;text-align:right;"> Paisa</td>
        </tr>
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; border-left:1px solid #000; border-top:1px solid #000; padding:15px 10px;text-align:left;">Delivery</td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;  border-top:1px solid #000; padding:15px 10px;text-align:center;"></td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; border-top:1px solid #000; padding:15px 10px;text-align:right;">Paisa</td>
        </tr>
 </table>
 
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 30px 0;border-bottom:1px solid #000;">     
        
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; border-left:1px solid #000; border-top:1px solid #000; padding:15px 10px;text-align:center;font-weight:bold;">Derivatives Segment</td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;  border-top:1px solid #000; padding:15px 10px;text-align:center;">In terms of Percentage ( % )</td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; border-top:1px solid #000; padding:15px 10px;text-align:center;">In terms Of Paisa / Per Lot</td>
        </tr>
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; border-left:1px solid #000; border-top:1px solid #000; padding:15px 10px;text-align:left;">Future</td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;  border-top:1px solid #000; padding:15px 10px;text-align:center;"></td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; border-top:1px solid #000; padding:15px 10px;text-align:right;"></td>
        </tr>
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; border-left:1px solid #000; border-top:1px solid #000; padding:15px 10px;text-align:left;">Option</td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;  border-top:1px solid #000; padding:15px 10px;text-align:center;"></td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; border-top:1px solid #000; padding:15px 10px;text-align:right;"></td>
        </tr>
 </table>
 
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 30px 0;border-bottom:1px solid #000;">     
        
        <tr>
        	<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:15px 10px;text-align:left; text-transform:uppercase;">Astha Credit & Securities (P) Ltd.</td>
        </tr>
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-left:1px solid #000; border-top:1px solid #000; padding:25px 10px;text-align:left;">Client's Name : <b><?php echo '<u>'.$fname.' '.$mname.' '.$lname.'</u>'?></b></td>
            
			<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;  border-top:1px solid #000; padding:25px 10px;text-align:left;">Date :<?php echo '<u>'.$regis_date.'</u>'?></td>
        </tr>
        <tr>
        	<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; border-left:1px solid #000;  padding:25px 10px;text-align:left;">Signature Of Client (6)<img src="<?php echo base_url(); ?>content/images/tick2.png" alt="" />_____________________________________</td>
            
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
 </div>
<!-- page 7 end-->  
<div style="height:3508px !important; width:100%; float:left;">
	<div style=" float:left; width:100%; height:100%; margin:0;">   
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 30px 0;">     
        <tr><td><br/><br/><br/><br/><br/><br/><br/></td></tr>

        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:15px 10px;text-align:center; text-transform:uppercase;">ACKNOWLEDGEMENT </td>
        </tr>
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:15px 10px;text-align:left;">To<br> 
 Astha Credit & Securities (P) Ltd.<br> 
F-01,  Usha Preet -138/42, <br>
 Malviya Nagar, Bhopal ( M.P.) - 462003<br> 
<br><br> 
Dear Sir or Madam, 
 
I/We hereby acknowledge receipt of the following documents<br><br>  
1. Rights and Obligations of Stock Brokers, Sub-brokers and Clients (including additional rights &amp; obligations in case of internet / wireless technology based trading). 
<div data-canvas-width="305.5104000000001"></div>
2. Risk Disclosure Document for Capital Market and Derivatives Segments.<br>
3. Rights and Obligations of beneficial owner and depository participant as prescribed by SEBI and depositories.<br>
4. Guidance Note - Do's and Don'ts for Trading on the Exchange(s) for Investors <br>
5. Policies and Procedures Document pursuant to the SEBI circular dated December 03, 2009.<br>
6. Additional voluntary rights and obligations as mutually agreed between Stock Brokers and Clients.  <br>
7. General Terms and Conditions governing Securities trading and broking services of Astha Credit &amp; Securities Pvt ltd.<br>
8. We acknowledge the brokerage calculator provided to us and is acceptable to us. We agree to pay Rs 450 per crore for Exchange transaction charges and Other charges. Other charges  includes F&O clearing charges, SEBI turnover charges, call-n-trade charges and softwares including mobile app. All other statury levies, taxes and brokerage shall be in addition to above.
<div data-canvas-width="819.1151999999988"></div>
<br><br>
 
I/We understand that the Voluntary documents executed by me/us are out of my/our own free will. I/We hereby confirm that I/We have clearly understood and agree to abide by the Terms and Conditions described by Astha Credit & Securities Pvt Ltd. I/We also understand that these Terms and Conditions can be changed by Astha Credit & Securities Pvt Ltd.from time to time with prior notice of 7 days and subject to posting of the amendments and modification therein on it's website and their application with prospective effect. All intraday as well as positional <br>
holding will be square up at 80% mark To mark (M-to-M) loss. This is as per RMS Policy. I understood and agreed to this. <br><br>
I/We state that I have read and understood all above documents and these documents are binding upon me. <br><br>
Yours faithfully, 
</td>

        </tr>
</table>  

<table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 30px 0;border-bottom:1px solid #000;">     
        
      
        <tr>
        	<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-left:1px solid #000; border-top:1px solid #000; border-right:1px solid #000;padding:15px 10px;text-align:left;">CLIENT'S NAME&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $fullname; ?></b>  </td>
            
        </tr>
        <tr>
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-left:1px solid #000;text-align:left; padding:3px 10px;">
            	<span style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:15px 100px 15px 0;background:url(images/tick.png) no-repeat right top;">SIGNATURE OF CLIENT'S  (7)<img src="<?php echo base_url(); ?>content/images/tick2.png" alt="" /> </span>
            </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;  padding:15px 10px;text-align:left;">Date (DD / MM / YY)&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $regis_date; ?></td>
            
        </tr>
       
 </table> 
 
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 0px 0;border:1px solid #000;">     
<tr>
     <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:center; padding:3px; font-weight:bold;">KYC FORM RECEIPT 
 </td>
</tr>
<tr>
     <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left; padding:3px;">To<br> 
 Astha Credit & Securities (P) Ltd.<br> 
F-01,  Usha Preet - 138/42,<br>  
 Malviya Nagar, Bhopal ( M.P.) -462003 <br><br>
 
Subject: Acknowledgment of Receipt of Copy KYC/F&O/RDD <br><br>
Dear sir <br><br>
This is to Acknowledgment that I/We <input type="text" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border:none; width:40%; font-weight:bold;" value="<?php echo $fullname;?>"/>                                                                                               with Trading code<input type="text" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border:none; width:20%;"/>                                              
From(KYC) Rights and Obligations(R&O), Risk Disclosure Document(RDD), Guidance Note, Policies and Procedures, Teriff 
sheet and copy of other documentary executed by me /us as a Client for NSE(CASH+F&amp;O)/MCX-SX(Currency).<b> These  all 
documents already send on your Email id</b><br><br>                                                                                                                               
I/We hereby declare that I/We have the full intimation of trading code and email id for the purpose of receiving 
electronic contract note and other. 
 </td>
</tr>
</table> 

 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:0;border-bottom:1px solid #000;">     
        
      
        <tr>
        	<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-left:1px solid #000;  border-right:1px solid #000;padding:15px 10px;text-align:left;">CLIENT'S NAME&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $fullname; ?></b></td>
            
        </tr>
        <tr>
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-left:1px solid #000;text-align:left; padding:3px 10px;">
            	<span style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:15px 100px 15px 0;background:url(images/tick.png) no-repeat right top;">SIGNATURE OF CLIENT'S  (8)<img src="<?php echo base_url(); ?>content/images/tick2.png" alt="" /></span>
            </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;  padding:15px 10px;text-align:left;">Date (DD / MM / YY)&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $regis_date; ?></td>
            
        </tr>
       
 </table>

</div>
</div>
 
<!-- page 8 end-->  
<div style="height:3508px !important; width:100%; float:left;">
	<div style=" float:left; width:100%; height:100%; margin:0;">   
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;margin:10px 0 30px 0;">     
        <tr><td><br/><br/><br/><br/><br/><br/><br/></td></tr>

        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:12px; padding:15px 10px;text-align:center; text-transform:uppercase; font-weight:bold; font-size:20px;">AUTHORIZATION FOR RUNNING ACCOUNT  </td>
        </tr>
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:12px; padding:15px 10px;text-align:left;">To<br>
 Astha Credit & Securities (P) Ltd.<br> 
F-01,  Usha Preet - 138/42, <br>
 Malviya Nagar, Bhopal ( M.P.) - 462003<br> 
<br><br> 
I am a registered client with you, and am dealing in Capital Market/ Derivative Market/ Currency Market segment(s),and 
have a Astha Credit & Securities Pvt. Ltd. client code as mentioned below. 
<br> <br>  
I  am  aware  that  payout  /  dividend  received  /  credited  from  the  exchange(s)  against  settlement  of  transaction  as 
per settlement  cycle  is  available within 1 working day of  the payout  from  the  Exchange.  It  is difficult  for me  to make 
available the required funds on every pay-in of funds obligation / margin obligation, hence I request you to maintain my 
account on  a  running basis and  retain  the payout  received  /  credit balance  in my  account  for my  future obligation  / 
margin obligation or other liabilities unless I instruct otherwise. 
 <br> <br> 
I hereby further authorize you to debit / credit / transfer the amounts between the various segments either on the same 
Exchange and / or Exchanges to meet my/our obligation or various dues payable to you / Exchange(s). 
 <br> <br> 
If payment of funds is required, I shall request you in writing or through the web option for funds withdrawal on the web 
login. Further it may be noted that if required I may revoke this authorization at any time after giving request in writing. 
 <br> <br> 
This  running  account authorization would  continue until  it  is  revoked by me. The  actual  settlement of  funds  shall be 
done at least once in the preference period selected below: 
</td>
</tr>
<tr>
<td style="font-family:Arial, Helvetica, sans-serif; font-size:12px; padding:15px 10px;text-align:center; font-size:20px;">
	<input type="radio" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;width:30px;"/> QUARTERLY 
    <input type="radio" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;width:30px;" /> MONTHLY      
</td>

        </tr>
<tr>
	<td style="font-family:Arial, Helvetica, sans-serif; font-size:12px; padding:15px 10px;text-align:left;">
    	While  settling the account having outstanding obligations on the  settlement date, you may  retain the  requisite  funds 
towards such obligations and may also retain the funds expected to be required to meet margin obligations for next 5 
trading days, calculated in the manner specified by the exchanges.<br><br> 
 
I shall bring any dispute arising from the statement of account or settlement so made to your notice within 30 working 
days  from  the  date  of  receipt  of  funds  or  statement,  as  the  case may  be.  In  case  of  non-receipt  of  any  such  communication the statement / settlement of running account shall be considered as final as agreed and accepted by me <br><br>
Yours faithfully, 
    </td>
</tr>
</table>  

 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 30px 0;border-bottom:1px solid #000;">     
        
      
        <tr>
        	<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-left:1px solid #000; border-top:1px solid #000; border-right:1px solid #000;padding:15px 10px;text-align:left;">CLIENT'S NAME&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $fullname;?></b></td>
            
        </tr>
        <tr>
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-left:1px solid #000;border-top:1px solid #000;text-align:left; padding:3px 10px;">
            	<span style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:15px 100px 15px 0;background:url(images/tick.png) no-repeat right top;">SIGNATURE OF CLIENT'S  (9)<img src="<?php echo base_url(); ?>content/images/tick2.png" alt="" /> </span>
            </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000; border-left:1px solid #000; padding:15px 10px;text-align:left;">Date (DD / MM / YY)&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $regis_date;?></td>
            
        </tr>
       
 </table>

 </div>
 </div>
 <!-- page 9 end-->  
<div style="height:3508px !important; width:100%; float:left;">
	<div style=" float:left; width:100%; height:100%; margin:0;">   
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 30px 0;">     
        <tr><td colspan="2" ><br/><br/><br/><br/><br/><br/><br/></td></tr>

        <tr>
        	<td colspan="2"  style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:15px 10px;text-align:center; text-transform:uppercase; font-weight:bold; font-size:20px;">LETTER FOR AUTHORIZATION FOR ELECTRONIC CONTRACT NOTES   </td>
        </tr>
        <tr>
        	<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:15px 10px;text-align:left;">To<br>  
 Astha Credit & Securities (P) Ltd.<br> 
F-01,  Usha Preet - 138/42, <br>  
 Malviya Nagar, Bhopal ( M.P.) - 462003 <br> <br> 
 
Sub Authorization for Electronic Contract Notes 
 <br> <br> 
I have been/shall be dealing through you as my broker on the Capital Market and/or Futures & Options and/or Currency Derivatives 
and/or Interest Rate Futures Segments. As my broker i.e. agent I direct and authorize you to carry out trading/dealings on my behalf 
as per instructions given below. <br> <br>
I understand that, I have the option to receive the contract notes in physical form or electronic form. In pursuance of the same, I 
hereby opt to receive contract notes in electronic form. I understand that for the above purpose, you are required to take from the client "An appropriate e-mail account" for you to send the electronic contract notes.Accordingly, please take the following email 
account /email id on your record for sending the contract notes to me: 
 </td>
</tr>
<tr>
<td style="font-family:Arial, Helvetica, sans-serif; padding:3px 10px;text-align:left; font-size:20px; font-weight:bold; border:1px solid #000;">
	EMAIL ID :-    
</td>
<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:3px 10px;text-align:left; font-weight:bold; border:1px solid #000; width:80%;">
	<?php echo $emailaddress;?>
</td>


        </tr>
<tr>
	<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:15px 10px;text-align:left;">
    	I also agree that non-receipt of bounced mail notification by you shall amount to delivery at my email account / email id. <br><br>
 
I agree not to hold you responsible for late/non-receipt of contract notes sent in electronic form and any other communication for 
any reason including but not limited to failure of email services, loss of connectivity, email in transit etc. <br><br>
 
I agree that the log reports of your dispatching software shall be a conclusive proof of dispatch of contract notes to me and such 
dispatch shall be deemed to mean receipt by me and shall not be disputed by me on account of any non-receipt/delayed receipt for 
any reason whatsoever. <br><br>
 
I understand that I am required to intimate any change in the email id/email account mentioned herein above needs to be 
communicated by me through a physical letter to you, provided however that if I am an internet client then in that event the request 
for change in email id/email account can be made by me through a secured access using client specific user id and password. Please 
treat this authorization as written ratification of my verbal directions/authorizations given and carried out by you earlier. I shall be 
liable for all losses, damages and actions which may arise as a consequence of your adhering to and carrying out my directions given 
above. 
 <br><br>
I understand that, you shall send physical copy of the contract note within 24 hours if you received a bounced email.<br><br> 
Yours faithfully, 
    </td>
</tr>
</table>  

 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 30px 0;border-bottom:1px solid #000;">     
        
      
        <tr>
        	<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-left:1px solid #000; border-top:1px solid #000; border-right:1px solid #000;padding:15px 10px;text-align:left;">CLIENT'S NAME&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $fullname;?></b></td>
            
        </tr>
        <tr>
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-left:1px solid #000;border-top:1px solid #000;text-align:left; padding:3px 10px;">
            	<span style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:15px 100px 15px 0;background:url(images/tick.png) no-repeat right top;">SIGNATURE OF CLIENT'S  (10)<img src="<?php echo base_url(); ?>content/images/tick2.png" alt="" /> </span>
            </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000; border-left:1px solid #000; padding:15px 10px;text-align:left;">Date (DD / MM / YY)&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $regis_date;?> </td>
            
        </tr>
       
 </table>

</div>
</div> 
 <!-- page 10 end-->  
<div style="height:3508px !important; width:100%; float:left;">
	<div style=" float:left; width:100%; height:100%; margin:0;">   
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 30px 0;">     
        <tr><td><br/><br/><br/><br/></td></tr>

        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:15px 10px;text-align:center; text-transform:uppercase; font-weight:bold; font-size:18px;">INTERNET & WIRELESS TECHNOLOGY BASED TRADING FACILITY PROVIDED BY STOCK BROKERS TO CLIENT 
(ALL THE CLAUSES MENTIONED IN THE 'RIGHTS AND OBLIGATIONS' DOCUMENT(S) SHALL BE APPLICABLE.
ADDITIONALLY, THE CLAUSES MENTIONED HEREIN SHALL ALSO BE APPLICABLE)    </td>
        </tr>
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:15px 10px;text-align:left;">To 
1. Stock broker is eligible for providing Internet based trading (IBT) and securities trading through the use of wireless technology that shall include the use of devices such as mobile phone, laptop with data card, etc. which use Internet Protocol (IP). The stock broker shall comply with all requirements applicable to internet based trading/ securities trading using wireless technology as may be pacified by SEBI & the Exchanges from time to time.<br><br>

 2. The client is desirous of investing/ trading in securities and for this purpose, the client is desirous of using either the internet based trading facility or the facility for securities trading through use of wireless technology. The Stock broker shall provide the Stock broker's IBT Service to the Client, and the Client shall avail of the Stock broker's IBT Service, on and subject to SEBI/ Exchanges Provisions and the terms and conditions specified on the Stock broker's IBT Web Site provided that they are in line with the norms prescribed by Exchanges/ SEBI.<br><br>
 
  3. The stock broker shall bring to the notice of client the features, risks, responsibilities, obligations and liabilities associated with securities trading through wireless technology/ internet/ smart order routing or any other technology should be brought to the notice of the client by the stock broker.<br><br>
  
   4. The stock broker shall make the client aware that the Stock Broker's IBT system itself generates the initial password and its password policy as stipulated in line with norms prescribed by Exchanges/ SEBI. <br><br>
   
   5. The Client shall be responsible for keeping the Username and Password confidential and secure and shall be solely responsible for all orders entered and transactions done by any person whosoever through the Stock broker's IBT System using the Client's Username and/ or Password whether or not such person was authorized to do so. Also the client is aware that authentication technologies and strict security measures are required for the internet trading/securities trading through wireless technology through order routed system and undertakes to ensure that the pass word of the client and/ or his authorized representative are not revealed to any third party including employees and dealers of the stock broker.<br><br>
   
    6. The Client shall immediately notify the Stock broker in writing if he forgets his password, discovers security flaw in Stock Broker's IBT System, discovers/ suspects discrepancies/ unauthorized access through his username/ password/ account with full details of such unauthorized use, the date, the manner and the transactions effected pursuant to such unauthorized use, etc.. <br><br>
   7. The Client is fully aware of and understands the risks associated with availing of a service for routing orders over the internet/ securities trading through wireless technology and Client shall be fully liable and responsible for any and all acts done in the Client's Username/ password in any manner whatsoever. <br><br>
   
   8. The stock broker shall send the order/ trade confirmation through email to the client at his request. The client is aware that the order/ trade confirmation is also provided on the web portal. In case client is trading using wireless technology, the stock broker shall send the order/ trade confirmation on the device of the client.<br><br>
   
    9. The client is aware that trading over the internet involves many uncertain factors and complex hardware, software, systems, communication lines, peripherals, etc. are susceptible to interruptions and dislocations. The Stock broker and the Exchange do not make any representation or warranty that the Stock broker's IBT Service will be available to the Client at all times without any interruption.
    <br><br>
     10. The Client shall not have any claim against the Exchange or the Stock broker on account of any suspension, interruption, non-availability or malfunctioning of the Stock broker's IBT System or Service or the Exchange's service or systems or non-execution of his orders due to any link/ system failure at the Client/ Stock brokers/ Exchange end for any reason beyond the control of the stock broker/ Exchanges. 
 </td>
</tr>


</table>  

 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 30px 0;border-bottom:1px solid #000;">     
        
      
        <tr>
        	<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-left:1px solid #000; border-top:1px solid #000; border-right:1px solid #000;padding:15px 10px;text-align:left;">CLIENT'S NAME&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $fullname;?></b>    </td>
            
        </tr>
        <tr>
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-left:1px solid #000;border-top:1px solid #000;text-align:left; padding:3px 10px;">
            	<span style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:15px 100px 15px 0;background:url(images/tick.png) no-repeat right top;">SIGNATURE OF CLIENT'S  (11) <img src="<?php echo base_url(); ?>content/images/tick2.png" alt="" /></span>
            </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000; border-left:1px solid #000; padding:15px 10px;text-align:left;">Date (DD / MM / YY)&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $regis_date;?> </td>
            
        </tr>
       
 </table>
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 0px 0;border:1px solid #000;">     
<tr>
     <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:center; padding:3px; font-weight:bold; border-bottom:1PX SOLID #000;">AUTHORIZATION FOR ACCOUNT MODIFICATION  
 </td>
</tr>
<tr>
     <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left; padding:3px;">To<br> 
If I/we were to add/modify/remove any of my detail including brokerage plans with Astha Credit & Securities (P) Ltd., I/we authorize 
you to carry it out based on my request sent through an email to <span style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-decoration:underline; font-weight:bold;">contact@asthatrade.com</span> from my registered email address or 
intimation through an interface provided by you, whereto I have been allowed secured access.<br> 
If you feel the need to do so, then at your own discretion, you may put in place appropriate mechanism to confirm the request 
before or after its execution by way of a call from a recorded line, or otherwise, personal meeting, SMS or other such other mode as 
you may deem fit  </td>
</tr>
</table> 
<table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:x 0;border-bottom:1px solid #000;">     
        
      
        <tr>
        	<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-left:1px solid #000; border-right:1px solid #000;padding:15px 10px;text-align:left;">CLIENT'S NAME&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $fullname;?></b>    </td>
            
        </tr>
        <tr>
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-left:1px solid #000;border-top:1px solid #000;text-align:left; padding:3px 10px;">
            	<span style="font-family:Arial, Helvetica, sans-serif; font-size:10px; padding:15px 100px 15px 0;background:url(images/tick.png) no-repeat right top;">SIGNATURE OF CLIENT'S  (12)<img src="<?php echo base_url(); ?>content/images/tick2.png" alt="" /> </span>
            </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000; border-left:1px solid #000; padding:15px 10px;text-align:left;">Date (DD / MM / YY)&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $regis_date;?> </td>
            
        </tr>
       
 </table>

 </div>
 </div>
 <!-- page 11 end-->
 
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

H) For particular section update, please tick ( ) in the box available before the

section number and strike off the sections not required to be updated.
                </td>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; text-align:left; padding:3px 10px;">
                    <img src='<?php echo base_url();?>content/images/kyc.png' alt=" " />
                </td>
                

            </tr>
            
        
        </table>
          
         <table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:10px 0 0px 0; background:#f5f5f5;">     
				
                
            	<tr>
                    <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; text-align:left; padding:3px 10px;">
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
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
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
                                <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
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
                                <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            </tr>
                            </table>  
                </td>
                
                
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:10px; padding:3px 10px;">
                   <table cellpadding="0" cellspacing="0">
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
                    </table>
                </td>
                 <td valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:10px;padding:3px 10px;">
                  			<table cellpadding="0" cellspacing="0">
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
                            </table>  
                </td>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:10px;padding:3px 10px;">
                  			<table cellpadding="0" cellspacing="0">
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
                            </table>
                </td>
                

            </tr>
            
            <tr>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                   Father / Spouse Name*
                </td>
                
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:12px;padding:3px 10px;">
                 			<table cellpadding="0" cellspacing="0">
                            <tr>
                                <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            </tr>
                            </table>  
                </td>
                
                
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:10px; padding:3px 10px;">
                   <table cellpadding="0" cellspacing="0">
				   <?php strtoupper($fathername)?>
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
                  			<table cellpadding="0" cellspacing="0" style="text-align:center;">
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
                  			<table cellpadding="0" cellspacing="0" style="text-align:center;">
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
                 			<table cellpadding="0" cellspacing="0" style="text-align:center;">
                            <tr>
                                <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                                <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            </tr>
                            </table>  
                </td>
                
                
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:10px; padding:3px 10px;">
                   <table cellpadding="0" cellspacing="0" style="text-align:center;">
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
                  			<table cellpadding="0" cellspacing="0" style="text-align:center;">
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
                  			<table cellpadding="0" cellspacing="0" style="text-align:center;">
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
                    <img src='<?php echo base_url(); ?>content/images/photo.png' alt="" />
                </td>

            </tr>
            
            <tr>
                <td valign="top" style="width:180px;font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                    Gender*</td>
                
  <td valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:12px;padding:3px 10px;">
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
                
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:12px;padding:3px 10px;">
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
                <td valign="top" style="width:180px;font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                Citizenship*</td>
                
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:12px;padding:3px 10px;">
                 			<table cellpadding="0" cellspacing="0">
                            <tr>
                              <td style="width:15px ; height:15px; text-align:left; width:180px;"><?php if($nationality == "Indian" ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?>
                                IN- Indian </td> 
                              <td style="width:15px ; height:15px; text-align:left; width:280px;">
                                <table cellpadding="0" cellspacing="0">
                            <tr>
                             <td><?php if($nationality !="Indian" ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?>
                                Others (ISO 3166 Country Code </td>
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
                <td colspan="4" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;
                background:#ddd9c3;">
                   <input type="checkbox" /><b>2.  TICK IF APPLICABLE </b>  <input type="checkbox" /> RESIDENCE FOR TAX PURPOSES IN JURISDICTION(S) OUTSIDE INDIA (Please refer instruction <b>B</b> at the end)
                </td>

            </tr>
            
            <tr>
                <td colspan="4"  valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
					ADDITIONAL DETAILS REQUIRED*  (Mandatory only if section 2 is ticked)
                </td>

            </tr>
            <tr>
                <td colspan="2" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                    ISO 3166 Country Code of Jurisdiction of Residence* 
                </td>
                <td colspan="2">
                	<table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
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
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>


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
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>


                        </tr>
                  </table>
                
                
                </td>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                    ISO 3166 Country Code of Birth*</td>
                    
                
                <td>
           	  <table cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            

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
                        	<td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
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
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
						</tr>
						
                  </table>
                    
              </td>
              
            </tr>
            
            <tr>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                   <?php if($corr_add_proof =='PAN Card' ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?> C- PAN Card</td>
                    
                <td colspan="3" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                     <table cellpadding="0" cellspacing="0">
                    	<?php  if($corr_add_proof == 'PAN Card'){ ?>
						<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666; text-align:center;"><?php echo $pan[0][0];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;"><?php echo $pan[0][1];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;"><?php echo $pan[0][2];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;"><?php echo $pan[0][3];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;"><?php echo $pan[0][4];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;"><?php echo $pan[0][5];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;"><?php echo $pan[0][6];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;"><?php echo $pan[0][7];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;"><?php echo $pan[0][8];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;"><?php echo $pan[0][9];?></td>
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
                   <?php if($corr_add_proof =='Driving License' ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?> D- Driving Licence</td>
                    
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                     <table cellpadding="0" cellspacing="0">
						
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
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
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
                   <?php if($corr_add_proof =='Aadhaar' ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?> E- UID (Aadhaar) </td>
                    
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
                   <input type="checkbox" />F- NREGA Job Card </td>
                    
                <td colspan="3" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                     <table cellpadding="0" cellspacing="0">
                    	
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
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
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
                  </table>
                    
              </td>
              
              <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                  Identification Number</td>
                    
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                     <table cellpadding="0" cellspacing="0">
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
                        	<td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            
                           
                        </tr>
                  </table>
                    
              </td>
              
              <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                  Identification Number</td>
                    
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                     <table cellpadding="0" cellspacing="0">
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
                <?php if($corr_add_proof =='Passport' ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?> Passport  
            </td>
           
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                <?php if($corr_add_proof =='Driving License' ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?> Driving Licence  
            </td>
            
            <td colspan="3" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                <?php if($corr_add_proof =='Aadhaar' ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?> UID (Aadhaar)  
            </td>
            

            </tr>
            
            <tr>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
              
          </td>
            
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                <?php if($corr_add_proof =='Voter ID Card' ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?> Voter Identity Card </td>
            
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                <?php if($corr_add_proof =='NREGA Job Card' ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?>            
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
						<?php } elseif($corr_add_proof == 'PAN Card' ){?>
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
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $pan[0][10];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $pan[0][11];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $pan[0][12];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $pan[0][13];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $pan[0][14];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $pan[0][15];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $pan[0][16];?></td>
							<td style="width:15px ; height:15px; border:1px solid #666;"><?php echo $pan[0][17];?></td>
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
                        	<td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;">&nbsp;</td>
                            

                        </tr>
              </table>
            </td>
            </tr>
            
         </table>
         
         <table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;margin:0;">     
            
            <tr>
            <td valign="top" colspan="5" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
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

                        	<td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[0]; ?></td>
                           <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[1]; ?></td>
                           <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[2]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[3]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[4]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[5]; ?></td>
                           <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[6]; ?></td>
                           <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[7]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[8]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[9]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[10]; ?></td>
                           <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[11]; ?></td>
                           <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[12]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[13]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[14]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[15]; ?></td>
                           <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[16]; ?></td>
                           <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[17]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[18]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[19]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[20]; ?></td>
                           <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[21]; ?></td>
                           <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[22]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[23]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[24]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[25]; ?></td>
                           <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[26]; ?></td>
                           <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[27]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[28]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[29]; ?></td>
                           <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[30]; ?></td>
                           <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[31]; ?></td>
                           <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[32]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[33]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[34]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[35]; ?></td>
                           <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[36]; ?></td>
                           <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[37]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[38]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[39]; ?></td>
                           <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[40]; ?></td>
                           <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[41]; ?></td>
                           <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[42]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[43]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[44]; ?></td>
                             <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[45]; ?></td>
                           <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[46]; ?></td>
                           <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[47]; ?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $ca[48]; ?></td>
                            

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
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $state[11];?></td>
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
			   <?php $state_code = str_split($corr_state_code);?>
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $state_code[0];?></td>
                            <td style="width:15px ; height:15px; border:1px solid #666;text-align:center;"><?php echo $state_code[1];?></td>
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



<!-- page 12 end --> 
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
                        	<td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                             <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
							<td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
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
                        	<td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                             <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
							<td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
                            <td style="width:15px ; height:15px; border:1px solid #666; text-align:center;">&nbsp;</td>
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
                <td valign="top" colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; text-align:left; padding:3px 10px;
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
                <td valign="top" colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; text-align:left; padding:3px 10px;
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
                    <img src="<?php echo base_url(); ?>content/images/signature.png" alt="" />
                </td>

            </tr>
            <tr>
              <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                     Date: </td>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                    <table cellpadding="0" cellspacing="0">
					<?php $er_date=explode("/",$registred_date);?>
                    	<tr>
                        	<td style="width:15px ; height:15px; border:1px solid #666; text-align:center"><?php echo $er_date[0][8]; ?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center"><?php echo $er_date[0][9]; ?></td>
                                <td style="width:15px ; height:15px; border:none; text-align:center">--</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center"><?php echo $er_date[0][5]; ?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center"><?php echo $er_date[0][6]; ?></td>
                                <td style="width:15px ; height:15px; border:none; text-align:center">--</td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center"><?php echo $er_date[0][0]; ?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center"><?php echo $er_date[0][1]; ?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center"><?php echo $er_date[0][2]; ?></td>
                                <td style="width:15px ; height:15px; border:1px solid #666; text-align:center"><?php echo $er_date[0][3]; ?></td>
                        </tr>
                  </table>
                </td>
                
               <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                     Place :</td>
                <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:left; padding:3px 10px;">
                    <table cellpadding="0" cellspacing="0">
					<?php $city=str_split($corr_city); ?>
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
 <!-- page 13 end-->   
<div style="height:3508px !important; width:100%; float:left;">
	<div style=" float:left; width:100%; height:100%; margin:0;">   
  <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:5px solid #000; text-align:center"> 
        
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:100%;"><img src="<?php echo base_url(); ?>content/images/dmat.png" alt="" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:100%" />
            	
            </td>
            
        </tr>
 </table> 
   
</div>
</div>
 <!-- page 14 end--> 
 <div style="height:3508px !important; width:100%; float:left;">
	<div style=" float:left; width:100%; height:100%; margin:0;">   
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:5px solid #000;text-align:center"> 
        
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px; font-weight:bold;">Annesure J
            	
            </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px;font-weight:bold;">
                PART -II
            </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px;font-weight:bold; text-transform:uppercase;">
                Account Opening Form <br>
                <span style="font-family:Arial, Helvetica, sans-serif; font-size:10px;font-weight:normal;">(Demat Account)</span>
            </td>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px; text-transform:uppercase; text-align:left">
                (For Individuals)</span>
                
            </td>
        </tr>
 </table>    
<table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border:1px solid #000; text-align:center"> 
        
        
        <tr>
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left; ">
            	<table width="100%" cellpadding="0"  cellspacing="0" >
                   
                    <tr>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:15%;padding:3px;border-right:1px solid #000;">Participent DP ID </td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000;">I</td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000;">N</td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000;">3</td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000;">0</td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000;">3</td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000;">4</td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000;">2</td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000;">0</td>
                    </tr>
                     <tr>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000;border-top:1px solid #000;">CLIENT -  ID </td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>
                    </tr>
                </table>
                
            </td>
            
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px; text-align:right; width:35%;" >Stock Brocker and DP <br>Member : NSE, NSDL</td>
        </tr>
   </table>
 
<table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border:1px solid #000;border-bottom:0; text-align:center"> 
        
        <tr>
        	<td colspan="10" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-bottom:1px solid #000; text-align:center; width:100%;"><img src="<?php echo base_url();?>content/images/logo_a.png" alt="" />
            
            </td>
        </tr>
        <tr>
        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-bottom:1px solid #000; text-align:left; padding:3px 10px;">I/We request you to open a depository account in my/our name as per the following
details: (Please all the details in CAPITAL LETTERS only )
            
            </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-bottom:1px solid #000;border-left:1px solid #000;padding:3px 10px; text-align:left;">Date
            </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:4%;padding:3px;border-right:1px solid #000;border-left:1px solid #000;border-bottom:1px solid #000;"><?php echo $er_date[0][8]; ?></td>
			<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:4%;padding:3px;border-right:1px solid #000;border-bottom:1px solid #000;"><?php echo $er_date[0][9]; ?></td>
			<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:4%;padding:3px;border-right:1px solid #000;border-bottom:1px solid #000;"><?php echo $er_date[0][5]; ?></td>
			<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:4%;padding:3px;border-right:1px solid #000;border-bottom:1px solid #000;"><?php echo $er_date[0][6]; ?></td>
			<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:4%;padding:3px;border-right:1px solid #000;border-bottom:1px solid #000;"><?php echo $er_date[0][0]; ?></td>
			<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:4%;padding:3px;border-right:1px solid #000;border-bottom:1px solid #000;"><?php echo $er_date[0][1]; ?></td>
			<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:4%;padding:3px;border-right:1px solid #000;border-bottom:1px solid #000;"><?php echo $er_date[0][2]; ?></td>
			<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:4%;padding:3px;border-bottom:1px solid #000;"><?php echo $er_date[0][3]; ?></td>
        </tr>
</table> 
 
<table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border:1px solid #000;border-top:0; text-align:center"> 

	<tr>
    
    	<td rowspan="4" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;">A)</td>
        
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-left:1px solid #000; text-align:left">
        
             
 <table cellpadding="0" cellspacing="0"  width="100%">
            
            	<tr>
                	<td colspan="4" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;">Details of Account holder(s) :</td>



        
        		</tr>
           

<tr>
<td colspan="1" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">Account holder(s) :</td>
<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">Sole/First Holder</td>
<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">Second Holder</td>
<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-top:1px solid #000;">Third Holder</td>
        
        		</tr>



                <tr>
                	<td colspan="1" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">Name</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;"><?php echo strtoupper($fname.' '.$mname.' '.$lname); ?></td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-top:1px solid #000;">&nbsp;</td>
        
        		</tr>
                
                <tr>
                	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">PAN</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000;border-bottom:1px solid #000;">
                    <table cellpadding="0" cellspacing="0" >
                    	<tr>
                        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000;"><?php echo $pan[0][0];?></td>
                            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000;"><?php echo $pan[0][1];?></td>
                            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000;"><?php echo $pan[0][2];?></td>
                            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000;"><?php echo $pan[0][3];?></td>
                            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000;"><?php echo $pan[0][4];?></td>
                            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000;"><?php echo $pan[0][5];?></td>
                            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000;"><?php echo $pan[0][6];?></td>
                            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000;"><?php echo $pan[0][7];?></td>
                            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000;"><?php echo $pan[0][8];?></td>
                            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;"><?php echo $pan[0][9];?></td>
                        </tr>
                    </table>
                    
                    
                    </td>
                    
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-bottom:1px solid #000;border-top:1px solid #000;">
                    <table cellpadding="0" cellspacing="0" width="100%">
                    	<tr>
                        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000; text-align:center;">&nbsp;</td>
                            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000; text-align:center;">&nbsp;</td>
                            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000; text-align:center;">&nbsp;</td>
                            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000; text-align:center;">&nbsp;</td>
                            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000; text-align:center;">&nbsp;</td>
                            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000; text-align:center;">&nbsp;</td>
                            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000; text-align:center;">&nbsp;</td>
                            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000; text-align:center;">&nbsp;</td>
                            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000; text-align:center;">&nbsp;</td>
                            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;"></td>
                        </tr>
                    </table>
                    
                    
                    </td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-bottom:1px solid #000;">
                    <table cellpadding="0" cellspacing="0" width="100%">
                    	<tr>
                        	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000;">&nbsp;</td>
                            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000;">&nbsp;</td>
                            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000;">&nbsp;</td>
                            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000;">&nbsp;</td>
                            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000;">&nbsp;</td>
                            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000;">&nbsp;</td>
                            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000;">&nbsp;</td>
                            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000;">&nbsp;</td>
                            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;border-right:1px solid #000;">&nbsp;</td>
                            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px;"></td>
                        </tr>
                    </table>
                    
                    
                    </td>
        
        		</tr>
                
                <tr>
                	<td rowspan="6" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">Occupation
(please tick<br>
any one and
give brief
details)</td>

                    <td valign="top">
                    	<TABLE width="100%" cellpadding="0" cellspacing="0">
                        	<tr>
                               <td style="width:50%;font-family:Arial, Helvetica, sans-serif; font-size:10px;font-size:10px;padding:3px;border-right:1px solid #000;border-bottom:1px solid #000;"><?php if($occupationid ==1 ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?> Private Sector</td>
                                <td style="width:50%;font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px;border-right:1px solid #000;border-bottom:1px solid #000;"><?php if($occupationid ==6 ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?> 
                                <span style="text-align:left; width:140px;">Agriculturist</span></td>
                             </tr>
                             
                             <tr>
                                <td style="width:50%;font-family:Arial, Helvetica, sans-serif; font-size:10px;width:16%;font-size:10px;padding:3px;border-right:1px solid #000;border-bottom:1px solid #000;"><?php if($occupationid ==2 ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?> Public Sector</td>
                                <td style="width:50%;font-family:Arial, Helvetica, sans-serif; font-size:10px;width:16%;font-size:10px;padding:3px;border-right:1px solid #000;border-bottom:1px solid #000;"><?php if($occupationid ==7 ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?> Retired</td>

                             </tr>
                             <tr>
                             	<td style="width:50%;font-family:Arial, Helvetica, sans-serif; font-size:10px;width:16%;font-size:10px;padding:3px;border-right:1px solid #000;border-bottom:1px solid #000;"><?php if($occupationid ==3 ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?> Government
Service</td>
                                <td style="width:50%;font-family:Arial, Helvetica, sans-serif; font-size:10px;width:16%;font-size:10px;padding:3px;border-right:1px solid #000;border-bottom:1px solid #000;"><?php if($occupationid ==8 ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?> Housewife</td>

                             </tr>
                             <tr>
                             	<td style="width:50%;font-family:Arial, Helvetica, sans-serif; font-size:10px;width:16%;font-size:10px;padding:3px;border-right:1px solid #000;border-bottom:1px solid #000;"><?php if($occupationid ==4 ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?> Business</td>
                                <td style="width:50%;font-family:Arial, Helvetica, sans-serif; font-size:10px;width:16%;font-size:10px;padding:3px;border-right:1px solid #000;border-bottom:1px solid #000;"><?php if($occupationid ==9 ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?> Student</td>
                             </tr>
                             <tr>
                             	<td style="width:50%;font-family:Arial, Helvetica, sans-serif; font-size:10px;width:16%;font-size:10px;padding:3px;border-right:1px solid #000;"><?php if($occupationid ==5 ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?> Professional</td>
                                <td style="width:50%;font-family:Arial, Helvetica, sans-serif; font-size:10px;width:16%;font-size:10px;padding:3px;border-right:1px solid #000;"><?php if($occupationid ==10 ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?> Others (Please Specify_____________)</td>
                             </tr>

                        </TABLE>
                    </td>
                    
                    <td valign="top">
                    	<TABLE width="100%" cellpadding="0" cellspacing="0">
                        	<tr>
                               <td style="width:50%;font-family:Arial, Helvetica, sans-serif; font-size:10px;font-size:10px;padding:3px;border-right:1px solid #000;border-bottom:1px solid #000;"><input type="checkbox" />Private Sector</td>
                                <td style="width:50%;font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px;border-right:1px solid #000;border-bottom:1px solid #000;"><input type="checkbox" />
                                <span style="text-align:left; width:140px;">Agriculturist</span></td>
                             </tr>
                             
                             <tr>
                                <td style="width:50%;font-family:Arial, Helvetica, sans-serif; font-size:10px;width:16%;font-size:10px;padding:3px;border-right:1px solid #000;border-bottom:1px solid #000;"><input type="checkbox" />Public Sector</td>
                                <td style="width:50%;font-family:Arial, Helvetica, sans-serif; font-size:10px;width:16%;font-size:10px;padding:3px;border-right:1px solid #000;border-bottom:1px solid #000;"><input type="checkbox" />Retired</td>

                             </tr>
                             <tr>
                             	<td style="width:50%;font-family:Arial, Helvetica, sans-serif; font-size:10px;width:16%;font-size:10px;padding:3px;border-right:1px solid #000;border-bottom:1px solid #000;"><input type="checkbox" />Government
Service</td>
                                <td style="width:50%;font-family:Arial, Helvetica, sans-serif; font-size:10px;width:16%;font-size:10px;padding:3px;border-right:1px solid #000;border-bottom:1px solid #000;"><input type="checkbox" />Housewife</td>

                             </tr>
                             <tr>
                             	<td style="width:50%;font-family:Arial, Helvetica, sans-serif; font-size:10px;width:16%;font-size:10px;padding:3px;border-right:1px solid #000;border-bottom:1px solid #000;"><input type="checkbox" />Business</td>
                                <td style="width:50%;font-family:Arial, Helvetica, sans-serif; font-size:10px;width:16%;font-size:10px;padding:3px;border-right:1px solid #000;border-bottom:1px solid #000;"><input type="checkbox" />Student</td>
                             </tr>
                             <tr>
                             	<td style="width:50%;font-family:Arial, Helvetica, sans-serif; font-size:10px;width:16%;font-size:10px;padding:3px;border-right:1px solid #000;"><input type="checkbox" />Professional</td>
                                <td style="width:50%;font-family:Arial, Helvetica, sans-serif; font-size:10px;width:16%;font-size:10px;padding:3px;border-right:1px solid #000;"><input type="checkbox" />Others (Please Specify_____________)</td>
                             </tr>

                        </TABLE>
                    </td>
                    
                    <td valign="top">
                    	<TABLE width="100%" cellpadding="0" cellspacing="0">
                        	<tr>
                               <td style="width:50%;font-family:Arial, Helvetica, sans-serif; font-size:10px;font-size:10px;padding:3px;border-right:1px solid #000;border-bottom:1px solid #000;"><input type="checkbox" />Private Sector</td>
                                <td style="width:50%;font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px;border-bottom:1px solid #000;"><input type="checkbox" />
                                <span style="text-align:left; width:140px;">Agriculturist</span></td>
                             </tr>
                             
                             <tr>
                                <td style="width:50%;font-family:Arial, Helvetica, sans-serif; font-size:10px;width:16%;font-size:10px;padding:3px;border-right:1px solid #000;border-bottom:1px solid #000;"><input type="checkbox" />Public Sector</td>
                                <td style="width:50%;font-family:Arial, Helvetica, sans-serif; font-size:10px;width:16%;font-size:10px;padding:3px;border-bottom:1px solid #000;"><input type="checkbox" />Retired</td>

                             </tr>
                             <tr>
                             	<td style="width:50%;font-family:Arial, Helvetica, sans-serif; font-size:10px;width:16%;font-size:10px;padding:3px;border-right:1px solid #000;border-bottom:1px solid #000;"><input type="checkbox" />Government
Service</td>
                                <td style="width:50%;font-family:Arial, Helvetica, sans-serif; font-size:10px;width:16%;font-size:10px;padding:3px;border-bottom:1px solid #000;"><input type="checkbox" />Housewife</td>

                             </tr>
                             <tr>
                             	<td style="width:50%;font-family:Arial, Helvetica, sans-serif; font-size:10px;width:16%;font-size:10px;padding:3px;border-right:1px solid #000;border-bottom:1px solid #000;"><input type="checkbox" />Business</td>
                                <td style="width:50%;font-family:Arial, Helvetica, sans-serif; font-size:10px;width:16%;font-size:10px;padding:3px;border-bottom:1px solid #000;"><input type="checkbox" />Student</td>
                             </tr>
                             <tr>
                             	<td style="width:50%;font-family:Arial, Helvetica, sans-serif; font-size:10px;width:16%;font-size:10px;padding:3px;border-right:1px solid #000;"><input type="checkbox" />Professional</td>
                                <td style="width:50%;font-family:Arial, Helvetica, sans-serif; font-size:10px;width:16%;font-size:10px;padding:3px;"><input type="checkbox" />Others (Please Specify_____________)</td>
                             </tr>

                        </TABLE>
                    </td>
                    
    </tr> 
    
    			
 <tr>
                	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">Brief details:</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-top:1px solid #000;">&nbsp;</td>


                    
        
        		</tr> 

 
               
</table>

</td>
</tr>
</table> 
 
 
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border:1px solid #000;border-top:0; text-align:center"> 

	<tr>
    
    	<td rowspan="5" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;">B)</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-left:1px solid #000; text-align:left">
             
        	<table cellpadding="0" cellspacing="0"  width="100%">
            
            	<tr>
                	<td colspan="13" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-bottom:1px solid #000;">For HUF, Association of Persons (AOP), Partnership Firm, Unregistered Trust, etc., although the account is opened in the name of the
natural persons, the name & PAN
of
the HUF, Association of Persons (AOP), Partnership Firm, Unregistered Trust, etc., should be
mentioned below:</td>
        
        		</tr>
                <tr>
                	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px;border-right:1px solid #000;">a) Name</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px;border-right:1px solid #000; width:150px;">&nbsp;</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px;border-right:1px solid #000;">b) PAN</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px 10px;border-right:1px solid #000;">&nbsp;</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px 10px;border-right:1px solid #000;">&nbsp;</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px 10px;border-right:1px solid #000;">&nbsp;</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px 10px;border-right:1px solid #000;">&nbsp;</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px 10px;border-right:1px solid #000;">&nbsp;</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px 10px;border-right:1px solid #000;">&nbsp;</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px 10px;border-right:1px solid #000;">&nbsp;</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px 10px;border-right:1px solid #000;">&nbsp;</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px 10px;border-right:1px solid #000;">&nbsp;</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px 10px;"></td>
        		</tr>
        
        </table> 
 		</td>
	</tr>
</table>	
 
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; margin:10px 0 0 0;border:1px solid #000; text-align:center"> 

	<tr>
    
    	<td rowspan="5" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:4%;padding:3px 10px;">C)</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-left:1px solid #000; text-align:left">
             
        	<table cellpadding="0" cellspacing="0"  width="100%">
            
            	<tr>
                	<td colspan="8" style="width:100%;font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-bottom:1px solid #000; font-weight:bold;">Type of account</td>
        
        		</tr>
                <tr>
                	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px;"><input type="checkbox" />Ordinary Resident</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px;"><input type="checkbox" />NRI-Repatriable</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px;"><input type="checkbox" />NRI-Non Repatriable</td>
                    
        		</tr>
                <tr>
                	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px;"><input type="checkbox" />Qualified Foreign Investor</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px;"><input type="checkbox" />Foreign National</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px;"><input type="checkbox" />Promoter</td>
                    
        		</tr>
                <tr>
                	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px;"><input type="checkbox" />Margin</td>
                    <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;"><input type="checkbox" />Others (Please specify) _________________</td>
                    
        		</tr>
        
        </table> 
 		</td>
	</tr>
</table>
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border:1px solid #000; border-top:0; text-align:center"> 

	<tr>
    
    	<td rowspan="5" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:4%;padding:3px 10px;">D)</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-left:1px solid #000; text-align:left">
             
        	<table cellpadding="0" cellspacing="0"  width="100%">
            
            	<tr>
                	<td colspan="5" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-bottom:1px solid #000; font-weight:bold;">Gross Annual Income Details</td>
        
        		</tr>
                <tr>
                	<td colspan="5" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-bottom:1px solid #000; ">Income Range per annum (please tick any one)</td>
        
        		</tr>
                <tr>
                	<td style="font-family:Arial, Helvetica, sans-serif; font-size:12px;padding:3px 10px; width:130px;"><?php if($annualincome =='1' ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?> Below  1 lac</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:12px;padding:3px 10px;width:130px;"><?php if($annualincome =='2' ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?> 1-5 lac</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:12px;padding:3px 10px;width:130px;"><?php if($annualincome =='3' ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?> 5-10 lac</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:12px;padding:3px 10px;width:130px;"><?php if($annualincome =='4' ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?> 10-25 lac</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:12px;padding:3px 10px;width:130px;"><?php if($annualincome =='5' ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?> More than 25 lac</td>

        		</tr>
                
                
        
        </table> 
 		</td>
	</tr>
</table>
 
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border:1px solid #000;border-top:0; text-align:center"> 

	<tr>
    
    	<td rowspan="5" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:4%;padding:3px 10px;">E)</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-left:1px solid #000; text-align:left">
             
        	<table cellpadding="0" cellspacing="0"  width="100%">
            
            	<tr>
                	<td colspan="9" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-bottom:1px solid #000; font-weight:bold;">In case of NRIs/ Foreign Nationals</td>
        
        		</tr>
                <tr>
                	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-bottom:1px solid #000;">RBI Approval Reference Number</td>
                    <td colspan="8" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-bottom:1px solid #000;">&nbsp;</td>
                    </tr>
                
                <tr>
                	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px;border-right:1px solid #000;">RBI Approval date</td>

                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px 10px;border-right:1px solid #000; color:#ccc; text-align:center">D</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px 10px;border-right:1px solid #000; color:#ccc;text-align:center">D</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px 10px;border-right:1px solid #000; color:#ccc;text-align:center">M</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px 10px;border-right:1px solid #000; color:#ccc;text-align:center">M</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px 10px;border-right:1px solid #000; color:#ccc;text-align:center">Y</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px 10px;border-right:1px solid #000; color:#ccc;text-align:center">Y</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px 10px;border-right:1px solid #000; color:#ccc;text-align:center">Y</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;padding:3px 10px; color:#ccc;text-align:center">Y</td>


                    
        		</tr>
        
        </table> 
 		</td>
	</tr>
</table>
 
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border:1px solid #000;border-top:0;text-align:center"> 

	<tr>
    
    	<td rowspan="5" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:4%;padding:3px 10px;">F)</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; border-left:1px solid #000; text-align:left">
             
        	<table cellpadding="0" cellspacing="0"  width="100%">
            
            	<tr>
                	<td colspan="5" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:100%;padding:3px 10px;border-bottom:1px solid #000; font-weight:bold;">Bank details</td>
        
        		</tr>
                <tr>
                	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:5%;padding:3px 10px;border-right:1px solid #000;border-bottom:1px solid #000;">1. </td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-bottom:1px solid #000;">Bank account type</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-bottom:1px solid #000;"><?php if($bankaccounttype =='1' ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?> Savings Account</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-bottom:1px solid #000;"><?php if($bankaccounttype =='2' ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?> Current Account</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-bottom:1px solid #000;"><?php if($bankaccounttype =='3' ){?> &#x2611; <?php } else { ?> <input type="checkbox" /> <?php } ?> Others (Please specify) <?php if($bankaccounttype == '3'){ echo "<u>NRE/NRO</u>"; } else{ ?>_________________<?php } ?></td>
                </tr>
                
                <tr>
                	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:5%;padding:3px 10px;border-right:1px solid #000;border-bottom:1px solid #000;">2. </td>
                    <td colspan="4" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-bottom:1px solid #000;">Bank account Number - <?php echo $accountnumber;?></td>
                    
                </tr>
                
                <tr>
                	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:5%;padding:3px 10px;border-right:1px solid #000;border-bottom:1px solid #000;">3. </td>
                    <td colspan="4" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-bottom:1px solid #000;">Bank Name <?php echo $bankname;?></td>
                    
                </tr>
                
                    
                    <tr>
        	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; width:2%;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            	4.
            </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            	Branch Address
            </td>
            <td colspan="3" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left; padding:0 0px;">
            	<table cellpadding="0" cellspacing="0" width="100%">
                	<tr>
                    	<td colspan="12" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:left; padding:3px; height:60px;"><?php echo $bankaddress; ?></td>
                    </tr>
                    <tr>
                    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-bottom:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px;">City / Town / Village
                        </td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;border-bottom:1px solid #000;border-right:1px solid #000;text-align:left; padding:0; width:100px;">
						<?php echo $bankcity;?>
						</td>
                        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;border-bottom:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px; ">PIN Code
                        </td>
						<?php $bpin=explode("/",$bankpincode);?>
							<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">           	
							<?php echo $bpin[0][0]; ?>
							</td>
							<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">        	
							<?php echo $bpin[0][1]; ?>
							</td>
							<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">          	
							<?php echo $bpin[0][2]; ?>
							</td>
							<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">          	
							<?php echo $bpin[0][3]; ?>
							</td>
							<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">            	
							<?php echo $bpin[0][4]; ?>
							</td>
							<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000; border-right:1px solid #000;text-align:left; padding:3px 10px;">           	
							<?php echo $bpin[0][5]; ?>
							</td>
							<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;border-top:1px solid #000;text-align:left; padding:3px 10px;">           	
							<?php echo $bpin[0][6]; ?>
							</td>
						</tr>
						<tr>
							<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;text-align:left; padding:3px;">State
							
							</td>
							<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-right:1px solid #000;text-align:left; padding:0;">
							<?php echo $bankStateName;?>
							</td>
							<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;text-align:left; padding:3px;">Country
							</td>
							<td colspan="10" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;border-top:1px solid #000;text-align:left; padding:3px;">&nbsp;
							
							</td>
							
						</tr>
						
                    
                </table>
            </td>
        </tr>
        
        			
        
        </table> 
 		</td>
	</tr>
</table>


</div>
</div>
 <!-- page 15 end--> 
 <div style="height:3508px !important; width:100%; float:left;">
	<div style=" float:left; width:100%; height:100%; margin:0;">   
 
  <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border:1px solid #000; text-align:center"> 
  
   <tr><td colspan="13"><br/><br/><br/><br/><br/><br/><br/></td></tr>

</table>
  <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border:1px solid #000; text-align:center"> 

 <tr>

 <td rowspan="2" valign="top" style=" width:2%;border-right:1px solid #000;text-align:left; padding:3px 10px;">&nbsp;
            	
            </td>
        	<td valign="top" style=" width:2%;border-right:1px solid #000;text-align:left; padding:3px 10px;">
            	5.
            </td>
            <td colspan="3" style="border-right:1px solid #000;text-align:left; padding:3px 10px;">
            	MICR Code
            </td>
			<?php $micr=explode("/",$micr_no);?>
            <td style="width:2%;padding:3px 10px;border-right:1px solid #000;text-align:center"><?php echo $micr[0][0]; ?></td>
			<td style="width:2%;padding:3px 10px;border-right:1px solid #000;text-align:center"><?php echo $micr[0][1]; ?></td>
			<td style="width:2%;padding:3px 10px;border-right:1px solid #000;text-align:center"><?php echo $micr[0][2]; ?></td>
			<td style="width:2%;padding:3px 10px;border-right:1px solid #000;text-align:center"><?php echo $micr[0][3]; ?></td>
			<td style="width:2%;padding:3px 10px;border-right:1px solid #000;text-align:center"><?php echo $micr[0][4]; ?></td>
			<td style="width:2%;padding:3px 10px;border-right:1px solid #000;text-align:center"><?php echo $micr[0][5]; ?></td>
			<td style="width:2%;padding:3px 10px;border-right:1px solid #000;text-align:center"><?php echo $micr[0][6]; ?></td>
			<td style="width:2%;padding:3px 10px;border-right:1px solid #000;text-align:center"><?php echo $micr[0][7]; ?></td>
			<td style="width:2%;padding:3px 10px;text-align:center"><?php echo $micr[0][8]; ?></td>
</tr>
        
 <tr>
 <td rowspan="2" valign="top" style=" width:2%;border-right:1px solid #000;border-top:1px solid #000;text-align:left; padding:3px 10px;">6.
            	
            </td>
        	
            <td style="width:20%;border-right:1px solid #000;border-top:1px solid #000;text-align:left; padding:3px 10px;">
            	IFSC Code
            </td>
			<?php $ifcs=explode("/",$ifsccode);?>
            <td style="border-top:1px solid #000;width:2%;padding:3px 10px;border-right:1px solid #000;text-align:center"><?php echo $ifcs[0][0];?></td>
			<td style="border-top:1px solid #000;width:2%;padding:3px 10px;border-right:1px solid #000;text-align:center"><?php echo $ifcs[0][1];?></td>
			<td style="border-top:1px solid #000;width:2%;padding:3px 10px;border-right:1px solid #000;text-align:center"><?php echo $ifcs[0][2];?></td>
			<td style="border-top:1px solid #000;width:2%;padding:3px 10px;border-right:1px solid #000;text-align:center"><?php echo $ifcs[0][3];?></td>
			<td style="border-top:1px solid #000;width:2%;padding:3px 10px;border-right:1px solid #000;text-align:center"><?php echo $ifcs[0][4];?></td>
			<td style="border-top:1px solid #000;width:2%;padding:3px 10px;border-right:1px solid #000;text-align:center"><?php echo $ifcs[0][5];?></td>
			<td style="border-top:1px solid #000;width:2%;padding:3px 10px;border-right:1px solid #000;text-align:center"><?php echo $ifcs[0][6];?></td>
			<td style="border-top:1px solid #000;width:2%;padding:3px 10px;border-right:1px solid #000;text-align:center"><?php echo $ifcs[0][7];?></td>
			<td style="border-top:1px solid #000;width:2%;padding:3px 10px;border-right:1px solid #000;text-align:center"><?php echo $ifcs[0][8];?></td>
			<td style="border-top:1px solid #000;width:2%;padding:3px 10px;border-right:1px solid #000;text-align:center"><?php echo $ifcs[0][9];?></td>
            <td style="border-top:1px solid #000;width:2%;padding:3px 10px;text-align:center"><?php echo $ifcs[0][10];?></td>
            
        </tr>
  
 </table>
 
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border:1px solid #000;border-top:0; text-align:center"> 

 <tr>
 <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; width:2%;border-right:1px solid #000;text-align:left; padding:3px 10px;">A)
            	
</td>
        	
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:30%;text-align:left; padding:3px 10px;border-right:1px solid #000; ">
            	Please tick, if applicable:
            </td>
            
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:30%;text-align:left; padding:3px 10px;border-right:1px solid #000; ">
            	<input type="checkbox" />Politically Exposed Person (PEP)
            </td>
            
            
            <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:30%;text-align:left; padding:3px 10px;">
            	<input type="checkbox" />Related to a Politically Exposed Person (PE P)
            </td>
            
            
           
        </tr>
</table>
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border:1px solid #000;border-top:0; text-align:center"> 
        
 <tr>
  <td rowspan="5" valign="top" style=" width:2%;border-right:1px solid #000;text-align:left; padding:3px 10px;">B)
            	
</td>
<td colspan="4" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; width:2%; font-weight:bold;text-align:left; padding:3px 10px;border-right:1px solid #000;">Standing Instructions
            	
</td>
</tr>
<tr>
 <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; width:5%;border-right:1px solid #000;border-top:1px solid #000;text-align:left; padding:3px 10px;">1.
            	
            </td>
        	
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:60%;border-right:1px solid #000;border-top:1px solid #000;text-align:left; padding:3px 10px;">
            	I/We authorise you to receive credits automatically into my/our account.
            </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;padding:3px 10px; text-align:center"><input type="checkbox" /> Yes</td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;padding:3px 10px; text-align:center;border-right:1px solid #000;"><input type="checkbox" /> No</td>        
            
        </tr>
        
        <tr>
 <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; width:5%;border-right:1px solid #000;border-top:1px solid #000;text-align:left; padding:3px 10px;">2.
            	
            </td>
        	
            <td  style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:60%;border-right:1px solid #000;border-top:1px solid #000;text-align:left; padding:3px 10px;">
            	Account to be operated through Power of Attorney (PoA)
            </td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;padding:3px 10px; text-align:center"><input type="checkbox" /> Yes</td>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;padding:3px 10px; text-align:center;border-right:1px solid #000;"><input type="checkbox" /> No</td>        
            
        </tr>
  <tr>
 <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; width:5%;border-right:1px solid #000;border-top:1px solid #000;text-align:left; padding:3px 10px;">3.
            	
            </td>
        	
            <td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;text-align:left;border-right:1px solid #000; ">
            	<table cellpadding="0" cellspacing="0" width="100%">
                <tr>
                    <td colspan="4" style="padding:3px 10px; width:100%;border-bottom:1px solid #000;">
                    <b>SMS Alert facility: </b>[Mandatory if you are giving Power of Attorney (PoA). Ensure that the mobile number is provided in
    the KYC Application Form]
                    </td>
                </tr>
                <tr>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:center; border-right:1px solid #000;">Sr. No.                 
                    </td>
                     <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;text-align:center; border-right:1px solid #000;">Holder                 
                    </td>
                     <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:center; border-right:1px solid #000;">Yes                 
                    </td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:center;"> No                 
                    </td>
                </tr>
                
                <tr>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:center;border-top:1px solid #000; border-right:1px solid #000;">1.                 
                    </td>
                     <td style="padding:3px 10px;text-align:center;border-top:1px solid #000; border-right:1px solid #000;">Sole/First Holder                    </td>
                     <td style="padding:3px 10px; text-align:center; border-top:1px solid #000;border-right:1px solid #000;"><input type="checkbox" />               
                    </td>
                    <td style="padding:3px 10px; text-align:center;border-top:1px solid #000;"> <input type="checkbox" />                    
                    </td>
                </tr>
                
                <tr>
                    <td style="padding:3px 10px; text-align:center;border-top:1px solid #000; border-right:1px solid #000;">2.                 
                    </td>
                     <td style="padding:3px 10px;text-align:center;border-top:1px solid #000; border-right:1px solid #000;">Second Holder                    </td>
                     <td style="padding:3px 10px; text-align:center; border-top:1px solid #000;border-right:1px solid #000;"><input type="checkbox" />               
                    </td>
                    <td style="padding:3px 10px; text-align:center;border-top:1px solid #000;"> <input type="checkbox" />                    
                    </td>
                </tr>
                
                <tr>
                    <td style="padding:3px 10px; text-align:center;border-top:1px solid #000; border-right:1px solid #000;">3.                 
                    </td>
                     <td style="padding:3px 10px;text-align:center;border-top:1px solid #000; border-right:1px solid #000;">Third Holder                    </td>
                     <td style="padding:3px 10px; text-align:center; border-top:1px solid #000;border-right:1px solid #000;"><input type="checkbox" />               
                    </td>
                    <td style="padding:3px 10px; text-align:center;border-top:1px solid #000;"> <input type="checkbox" />                    
                    </td>
                </tr>
                
                
                
			
            
            </table>

            </td>
                   
            
        </tr>
        
  <tr>
 <td valign="top" style=" width:5%;border-right:1px solid #000;border-top:1px solid #000;text-align:left; padding:3px 10px;">4.
            	
            </td>
        	
             <td colspan="1" style="padding:3px 10px; text-align:left;border-top:1px solid #000; border-right:1px solid #000;">
            	Mode of receiving
Statement of Account [Tick
any one]
            </td>
            <td colspan="3" style="border-top:1px solid #000; text-align:center">
            	<table cellpadding="0" cellspacing="0" width="100%">
                	<tr>
                    <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left; border-bottom:1px solid #000;"><input type="checkbox" />Physical Form
                    </td>
                    </tr>
                    <tr>
                    <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left;"><input type="checkbox" />Electronic Form [Read Note 4 and ensure that email ID is provided in KYC Application Form].
                    </td>
                    </tr>
                    
                </table>
            </td>        
            
        </tr>      
        
        
 </table>
 
 
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border:1px solid #000;border-top:0; text-align:center"> 
        
 <tr>
  <td colspan="1" rowspan="5" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; width:2%;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">C)
            	
</td>
<td colspan="11" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000; width:2%;text-align:left; padding:3px 10px;"><b>Guardian Details</b>
(where sole holder is a minor):<br>
[For account of a minor, two KYC Application Forms must be filled i.e. one for the guardian and another for the minor (to be
signed by guardian)]
            	
</td>
</tr>
<tr>
    
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000;text-align:left; padding:3px 10px;">
        Guardian Name
    </td>
    <td colspan="10" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;padding:3px 10px; text-align:center">&nbsp;</td>
                   
            
</tr>
        
<tr>
    
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000;text-align:left; padding:3px 10px;">
        Pan
    </td>
    <td style="border-top:1px solid #000;border-right:1px solid #000;padding:3px 10px; text-align:center">&nbsp;</td>
    <td style="border-right:1px solid #000;border-top:1px solid #000;padding:3px 10px; text-align:center">&nbsp;</td>
    <td style="border-right:1px solid #000;border-top:1px solid #000;padding:3px 10px; text-align:center">&nbsp;</td>
    <td style="border-right:1px solid #000;border-top:1px solid #000;padding:3px 10px; text-align:center">&nbsp;</td>
    <td style="border-right:1px solid #000;border-top:1px solid #000;padding:3px 10px; text-align:center">&nbsp;</td>
    <td style="border-right:1px solid #000;border-top:1px solid #000;padding:3px 10px; text-align:center">&nbsp;</td>
    <td style="border-right:1px solid #000;border-top:1px solid #000;padding:3px 10px; text-align:center">&nbsp;</td>
    <td style="border-right:1px solid #000;border-top:1px solid #000;padding:3px 10px; text-align:center">&nbsp;</td>
    <td style="border-right:1px solid #000;border-top:1px solid #000;padding:3px 10px; text-align:center">&nbsp;</td>
    <td style="border-top:1px solid #000;padding:3px 10px; text-align:center">&nbsp;</td>
                   
            
</tr>
<tr>
    
    <td style="width:40%;border-right:1px solid #000;border-top:1px solid #000;text-align:left; padding:3px 10px;">
        Relationship of guardian with
minor
    </td>
    <td colspan="10" style="border-top:1px solid #000;padding:3px 10px; text-align:center">&nbsp;</td>
                   
            
</tr>
        
        
 </table>
 
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border:1px solid #000;border-top:0; text-align:center"> 
        
 <tr>
  <td colspan="1" rowspan="5" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; width:2%;border-top:1px solid #000;border-right:1px solid #000;text-align:left; padding:3px 10px;">D)
</td>
<td colspan="13" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:2%;text-align:left; padding:3px 10px;"><b>Nomination Option</b></td>
</tr>
<tr>
    
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000;text-align:left; padding:3px 10px;"><input type="checkbox"/>
        I/We wish to make a nomination.<br>
[As per details given below]
    </td>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:40%;border-top:1px solid #000;padding:3px 10px; text-align:left;border-right:1px solid #000;"><input type="checkbox"/> 
I/We wish to cancel the nomination made by me/ us earlier and consequently all rights
<br>and liabilities in respect of beneficiary ownership in the securities held by me / us in the said account 
<br> shall vest in me/ us. [Strike off the nomination details below]</td>
                   
</tr>
        
<tr>
    
   <td colspan="2" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000; width:2%;text-align:left; padding:3px 10px;border-right:1px solid #000;"><b>Nomination Details</b></td>
</tr>
<tr>
    
    <td colspan="3"  style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-top:1px solid #000;text-align:left; padding:3px 10px; border-right:1px solid #000;">
        I/We wish to make a nomination and do hereby nominate the following person(s) who shall receive all securities held in the Depository by me / us in the said beneficiary owner account in the event of my / our death.
    </td>
                   
            
</tr>
        
	<tr>
    
        <td colspan="5" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000; border-top:1px solid #000; text-align:left">
             
        	<table cellpadding="0" cellspacing="0"  width="100%">
            
        <!--    	
                <tr>
                	<td style="width:5%;padding:3px 10px;border-right:1px solid #000;border-bottom:1px solid #000;">1. </td>
                    <td style="padding:3px 10px;border-bottom:1px solid #000;border-right:1px solid #000;">Name of the Nominee
(Mr./Ms.)</td>
                    <td colspan="1" style="padding:3px 10px;border-bottom:1px solid #000;">&nbsp;</td>
                    <td colspan="1" style="padding:3px 10px;border-bottom:1px solid #000;">&nbsp;</td>
                    <td colspan="1" style="padding:3px 10px;border-bottom:1px solid #000;">&nbsp;</td>
                   
                </tr> -->
                
<tr>


<td colspan="2" style="padding:3px 10px;border-bottom:1px solid #000;border-right:1px solid #000;">Nomination can be <br>made upto three <br>nominees in the account.</td>
 
<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;&nbsp;&nbsp;Details of 1st Nominee&nbsp;&nbsp;</td>

<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;&nbsp;&nbsp;Details of 2nd Nominee&nbsp;&nbsp;&nbsp;</td>

<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;&nbsp;&nbsp;Details of 3rd Nominee&nbsp;&nbsp;&nbsp;</td>
</tr>



<tr>
<td style="width:15%;padding:3px 10px;border-right:1px solid #000;border-bottom:1px solid #000;">1. </td>

<td style="padding:3px 10px;border-bottom:1px solid #000;border-right:1px solid #000;">Name of the Nominee<br>
(Mr./Ms.)</td>
 
<td colspan="1" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>

<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>

<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>
</tr>

<tr>
<td style="width:15%;padding:3px 10px;border-right:1px solid #000;border-bottom:1px solid #000;">2. </td>

<td style="padding:3px 10px;border-bottom:1px solid #000;border-right:1px solid #000;">Share of each Nominee <br> 

Equally <input type="checkbox" name="ch1"/><label>&nbsp;&nbsp;</label><br>
[If not equally, <br>please specify percentage]
 </td>

<td colspan="1" align="center" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">%</td>

<td align="center" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">%</td>

<td align="center" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">%</td>
</tr>

<tr>
<td style="width:15%;padding:3px 10px;border-right:1px solid #000;border-bottom:1px solid #000;"></td>

<td style="padding:3px 10px;border-bottom:1px solid #000;border-right:1px solid #000;"> </td>

<td colspan="3"  style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">Any odd lot after division shall be transferred to the first nominee mentioned in the form.</td>


</tr>

<tr>
<td style="width:5%;padding:3px 10px;border-right:1px solid #000;border-bottom:1px solid #000;">3. </td>

<td style="padding:3px 10px;border-bottom:1px solid #000;border-right:1px solid #000;">Relationship with the<br> Applicant (if any) </td>

<td colspan="1" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>

<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>

<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>
</tr>







<tr>
<td style="width:5%;padding:3px 10px;border-right:1px solid #000;border-bottom:1px solid #000;">4. </td>

<td style="padding:3px  10px;border-bottom:1px solid #000;border-right:1px solid #000;">Address of Nominee <br><br><br><br><br> </td>

<td colspan="1" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>

<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>

<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>
</tr>
 



<tr>
<td style="width:5%;padding:3px 10px;border-right:1px solid #000;border-bottom:1px solid #000;">5. </td>

<td style="padding:3px 10px;border-bottom:1px solid #000;border-right:1px solid #000;">Mobile/Telephone No.<br> of nominee(s) </td>

<td colspan="1" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>

<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>

<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>
</tr>        

<tr>
<td style="width:5%;padding:3px 10px;border-right:1px solid #000;border-bottom:1px solid #000;">6. </td>

<td style="padding:3px 10px;border-bottom:1px solid #000;border-right:1px solid #000;">Email ID of <br> nominee(s) </td>

<td colspan="1" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>

<td style="font-family:Arial, HeMobile/Telephone No. of <br> nominee(s)
lvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>

<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>
</tr>   



        
        </table>
        </td>
        </tr> 
       
        </table>
        
</div>
</div>
 <!-- page 16 end-->
 <div style="height:3508px !important; width:100%; float:left;">
	<div style=" float:left; width:100%; height:100%; margin:0;"> 

<table cellpadding="0" cellspacing="0" style="width:100%; border:1px solid #000; "> 
        
 <td>
 <tr>
<td colspan="5" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;"><br>

<br><br><br></td>

</tr>
<tr> 
<td style="width:5%;padding:3px 10px;border-right:1px solid #000;border-bottom:1px solid #000;">7. </td>

<td style="padding:3px  10px;border-bottom:1px solid #000;border-right:1px solid #000;">Nominee Identification <br>details[Please tick any one of<br> following and provide<br> details of same] <br>
<input type="checkbox" name="ch1"/><label>&nbsp;&nbsp;Photograph & Signature</label><br>
<input type="checkbox" name="ch1"/><label>&nbsp;&nbsp;PAN</label>&nbsp;&nbsp;&nbsp;&nbsp;
<input type="checkbox" name="ch1"/><label>&nbsp;&nbsp;Aadhaar</label><br>
<input type="checkbox" name="ch1"/><label>&nbsp;&nbsp;Saving Bank account no. </label><br>
<input type="checkbox" name="ch1"/><label>&nbsp;&nbsp;Proof of Identity</label><br>
<input type="checkbox" name="ch1"/><label>&nbsp;&nbsp;Demat Account ID</label>
</td>  


<td colspan="1" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>

<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>

<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>
</tr>
 

 <tr>
<td colspan="5" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;"><br>

&nbsp;&nbsp;&nbsp;Sr. Nos. 8-14 should be filled only if nominee(s) is a minor:<br></td>

</tr>


<tr>
<td style="width:5%;padding:3px 10px;border-right:1px solid #000;border-bottom:1px solid #000;">8. </td>

<td style="padding:3px 10px;border-bottom:1px solid #000;border-right:1px solid #000;">Date of Birth {in case <br>of minor nominee(s)} </td>

<td colspan="1" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>

<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>

<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>
</tr>


<tr>
<td style="width:5%;padding:3px 10px;border-right:1px solid #000;border-bottom:1px solid #000;">9. </td>

<td style="padding:3px 10px;border-bottom:1px solid #000;border-right:1px solid #000;">Name of Guardian (Mr./Ms.)<br> {in case of minor nominee(s) } </td>

<td colspan="1" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>

<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>

<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>
</tr>




<tr>
<td style="width:5%;padding:3px 10px;border-right:1px solid #000;border-bottom:1px solid #000;">10. </td>

<td style="padding:3px 10px;border-bottom:1px solid #000;border-right:1px solid #000;">Address of Guardian(s)<br><br><br><br><br><br><br> </td>

<td colspan="1" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>

<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>

<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>
</tr>



<tr>
<td style="width:5%;padding:3px 10px;border-right:1px solid #000;border-bottom:1px solid #000;">11. </td>

<td style="padding:3px 10px;border-bottom:1px solid #000;border-right:1px solid #000;">Mobile/Telephone no.<br> of Guardian </td>

<td colspan="1" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>

<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>

<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>
</tr>

<tr>
<td style="width:5%;padding:3px 10px;border-right:1px solid #000;border-bottom:1px solid #000;">12. </td>

<td style="padding:3px 10px;border-bottom:1px solid #000;border-right:1px solid #000;">Email ID of Guardian</td>

<td colspan="1" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>

<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>

<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>
</tr>

<tr>
<td style="width:5%;padding:3px 10px;border-right:1px solid #000;border-bottom:1px solid #000;">13. </td>

<td style="padding:3px 10px;border-bottom:1px solid #000;border-right:1px solid #000;">Relationship of Guardian<br> with nominee</td>

<td colspan="1" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>

<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>

<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>
</tr>


<tr>
<td style="width:5%;padding:3px 10px;border-right:1px solid #000;border-bottom:1px solid #000;">14. </td>

<td style="padding:3px  10px;border-bottom:1px solid #000;border-right:1px solid #000;">Guardian Identification <br>details[Please tick any one of<br> following and provide<br> details of same] <br>
<input type="checkbox" name="ch1"/><label>&nbsp;&nbsp;Photograph & Signature</label><br>
<input type="checkbox" name="ch1"/><label>&nbsp;&nbsp;PAN</label>&nbsp;&nbsp;&nbsp;&nbsp;
<input type="checkbox" name="ch1"/><label>&nbsp;&nbsp;Aadhaar</label><br>
<input type="checkbox" name="ch1"/><label>&nbsp;&nbsp;Saving Bank account no. </label><br>
<input type="checkbox" name="ch1"/><label>&nbsp;&nbsp;Proof of Identity</label><br>
<input type="checkbox" name="ch1"/><label>&nbsp;&nbsp;Demat Account ID</label>
</td> 
<td colspan="1" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>

<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>

<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>
</tr>

 <tr>
<td colspan="4" align="center" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;"> Name(s) of holder(s)</td>
<td align="center" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;Signature(s) of holder</td>
</tr>

<tr>
<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;"> &nbsp;Sole/ First Holder (Mr./Ms.)<br><br></td>
<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>
<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;X(15)<img src="<?php echo base_url(); ?>content/images/tick2.png" alt="" /></td>

</tr>

<tr>
<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;"> &nbsp;Second Holder (Mr./Ms.)<br><br></td>
<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>
<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;X</td>

</tr>
<tr>
<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;"> &nbsp;Third Holder (Mr./Ms.)<br><br></td>
<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>
<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;X</td>

</tr>

<tr>
<td colspan="5" align="center" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">Signature of Witness for Nomination</td>


</tr>

<tr>
<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;"> &nbsp;Name of the Witness<br></td>
<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;Address </td>
<td align="center" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;Signature of witness</td>

</tr>

<tr>
<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;"><br><br><br><br></td>
<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;"><br><br><br><br> </td>
<td align="center"style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;Signature of witness<br><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date - &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/
</td>

</tr>





       </table>
       

       </div>
 </div> 
 
 
	<!-- page 17 end-->
 <div style="height:3508px !important; width:100%; float:left;">
	<div style=" float:left; width:100%; height:100%; margin:0;">   

<!-- <table cellpadding="0" cellspacing="0" style="width:100%; border:1px solid #000; ">  
 <tr>
 <td colspan="18" style="border-right:1px solid #000;"><br/><br/><br/><br/></td>
 </tr>    
        <tr>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; width:2%;border-right:1px solid #000;border-top:1px solid #000;text-align:left; padding:3px 10px;">
                (d)
            </td>
            
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; width:2%;border-right:1px solid #000;border-top:1px solid #000;text-align:left; padding:3px 10px;">
                <input type="checkbox" />
            </td>
            <td colspan="3" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; width:2%;border-right:1px solid #000;border-top:1px solid #000;text-align:left; padding:3px 10px;">
               Savings bank account number of guardian, if maintained with
the same Participant
            </td>
            
            <td colspan="12" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; width:2%;border-top:1px solid #000;border-bottom:1px solid #000;text-align:left; padding:3px 10px;border-right:1px solid #000;">&nbsp;
                
            </td>
             
            
            
        </tr>
        
        <tr>
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; width:2%;border-right:1px solid #000;border-top:1px solid #000;text-align:left; padding:3px 10px;">
                (e)
            </td>
            
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; width:2%;border-right:1px solid #000;border-top:1px solid #000;text-align:left; padding:3px 10px;">
                <input type="checkbox" />
            </td>
            <td colspan="3" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000;text-align:left; padding:3px 10px; ">
                Copy of any proof of identity document (accompanied by
original for verfication or duly attested by any entity authorized
for attesting the documents, as provided in Annexure JB)
            </td>
            <td colspan="14" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; width:2%;text-align:left; padding:3px 10px;">
            </td>
 </tr>
 <tr> 
 <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; width:2%;border-right:1px solid #000;border-top:1px solid #000;-align:left; padding:3px 10px;">
                (f)
            </td>
            
            <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; width:2%;border-right:1px solid #000;border-top:1px solid #000;text-align:left; padding:3px 10px;">
                <input type="checkbox" />
            </td>
            <td rowspan="2" colspan="3" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border-right:1px solid #000;border-top:1px solid #000;text-align:left; padding:3px 10px;">
                Demat account details of guardian
            </td>          
            <td colspan="12" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; width:2%;border-top:1px solid #000;-align:left; ">
            <table cellpadding="0" cellspacing="0" width="100%">
                <tr>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left; border-right:1px solid #000;border-bottom:1px solid #000;">DP ID</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left;border-bottom:1px solid #000; border-right:1px solid #000;">&nbsp;</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left;border-bottom:1px solid #000; border-right:1px solid #000;">&nbsp;</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left;border-bottom:1px solid #000; border-right:1px solid #000;">&nbsp;</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left;border-bottom:1px solid #000; border-right:1px solid #000;">&nbsp;</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left;border-bottom:1px solid #000; border-right:1px solid #000;">&nbsp;</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left;border-bottom:1px solid #000; border-right:1px solid #000;">&nbsp;</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left;border-bottom:1px solid #000;border-right:1px solid #000; ">&nbsp;</td>
                </tr>
                
                <tr>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left; border-right:1px solid #000;">Client ID</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left; border-right:1px solid #000;">&nbsp;</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left; border-right:1px solid #000;">&nbsp;</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left; border-right:1px solid #000;">&nbsp;</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left; border-right:1px solid #000;">&nbsp;</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left; border-right:1px solid #000;">&nbsp;</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left; border-right:1px solid #000;">&nbsp;</td>
                    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left;border-right:1px solid #000;"></td>
                </tr>
            </table>
                
            </td>
             
            
            
        </tr>
 </table> -->
 
  <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; margin:5px 0 0 0;border:0; text-align:center"> 

	<tr>
    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:center; border:none; text-transform:uppercase; font-weight:bold;"><br><br><br><br>Declaration</td>
    </tr>
 <tr>
    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:center; border:none; font-size:12px;">The rules and regulations of the Depository and Depository Participants pertaining to an account which are in force now have been read by
me/us and I/we have understood the same and I/we agree to abide by and to be bound by the rules as are in force from time to time for such
accounts. I/we hereby declare that the details furnished above are true and correct to the best of my/our knowledge and belief and I/we
undertake to inform you of any changes therein, immediately. In case any of the above information is found to be false or untrue or misleading
or misrepresenting, I am/ we are aware that I/we may be held liable for it. In case non-resident account, I/we also declare that I/we have
complied and will continue to comply with FEMA regulations. I/we acknowledge the receipt of copy of the document, "Rights and Obligations
of the Beneficial Owner and Depository Participant".</td>
    </tr>
 </table>
 
  <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; margin:5px 0 0 0;border:1px solid #000; text-align:center"> 
	<tr>
    	<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:center; border-right:1px solid #000;">Name(s) of holder(s)</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:center;">Signature( s) of holder</td>
    </tr>
    <tr>
    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;padding:3px 10px; text-align:center; border-right:1px solid #000;border-top:1px solid #000;">Sole/ First Holder/
Guardian (in case sole
holder is minor) (Mr./Ms.)</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:35%;padding:3px 10px; text-align:center;border-right:1px solid #000;border-top:1px solid #000;"><?php echo $fullname;?></td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px 5px 10px; text-align:left;border-top:1px solid #000; background:url(images/tick.png)no-repeat left center"> (16)<img src="<?php echo base_url(); ?>content/images/tick2.png" alt="" /></td>
    </tr>
    
    <tr>
    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;padding:3px 10px; text-align:center; border-right:1px solid #000;border-top:1px solid #000;">Second Holder
(Mr./Ms.)</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:35%;padding:3px 10px; text-align:center;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px 5px 10px; text-align:left;border-top:1px solid #000; ">  X </td>
    </tr>
    
    <tr>
    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:20%;padding:3px 10px; text-align:center; border-right:1px solid #000;border-top:1px solid #000;">Third Holder
(Mr./Ms.)</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:35%;padding:3px 10px; text-align:center;border-right:1px solid #000;border-top:1px solid #000;">&nbsp;</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px 5px 10px; text-align:left;border-top:1px solid #000; ">  X </td>
    </tr>

</table>

 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; margin:5px 0 0 0;border:0; text-align:center"> 
	<tr>
    	
    </tr>
 <tr>
    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:12px;padding:3px 10px; text-align:left; border:none;">
       <b> Notes :</b></td>
 </tr>
 <tr>
 <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:left; padding:3px 10px;"> 1.</td>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:left; padding:3px 10px;"> The nomination can be made only by individuals holding beneficiary owner accounts on their own behalf singly or jointly. Non- individuals including society, trust, body corporate and partnership firm, karta of Hindu Undivided Family, holder of power of attorney cannot nominate. If the account is held jointly, all joint holders will sign the nomination form.</td>
</tr>

<tr>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:left; padding:3px 10px;">2.</td>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:left; padding:3px 10px;"> A minor can be nominated. In that event, the name and address of the Guardian of the minor nominee shall be provided by the beneficial owner.</td>
</tr>

<tr>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:left; padding:3px 10px;">3.</td>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:left; padding:3px 10px;"> The Nominee(s) shall not be a trust, society, body corporate, partnership firm, karta of Hindu Undivided Family or a power of Attorney holder. A non-resident Indian can be a Nominee, subject to the exchange controls in force, from time to time.</td>
</tr>


<tr>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:left; padding:3px 10px;">4.</td>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:left; padding:3px 10px;"> Nomination in respect of the beneficiary owner account stands rescinded upon closure of the beneficiary owner account. Similarly, the nomination in respect of the securities shall stand terminated upon transfer of the securities.</td>
</tr>


<tr>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:left; padding:3px 10px;">5.</td>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:left; padding:3px 10px;"> Transfer of securities in favour of a Nominee(s) shall be valid discharge by the depository and the Participant against the legal heir.</td>
</tr>

<tr>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:left; padding:3px 10px;">6.</td>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:left; padding:3px 10px;"> The cancellation of nomination can be made by individuals only holding beneficiary owner accounts on their own behalf singly or jointly by the same persons who made the original nomination. Non- individuals including society, trust, body corporate and partnership firm, karta of Hindu Undivided Family, holder of power of attorney cannot cancel the nomination. If the beneficiary owner account is held jointly, all joint holders will sign the cancellation form.</td>
</tr>

<tr>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:left; padding:3px 10px;">7.</td>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:left; padding:3px 10px;"> On cancellation of the nomination, the nomination shall stand rescinded and the depository shall not be under any obligation to transfer the securities in favour of the Nominee(s).</td>
</tr>

<tr>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:left; padding:3px 10px;">8.</td>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:left; padding:3px 10px;"> Nomination can be made upto three nominees in a demat account. In case of multiple nominees, the Client must specify the percentage of share for each nominee that shall total upto hundred percent. In the event of the beneficiary owner not indicating any percentage of allocation/share for each of the nominees, the default option shall be to settle the claims equally amongst all the nominees.</td>
</tr>

<tr>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:left; padding:3px 10px;">9.</td>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:left; padding:3px 10px;"> On request of Substitution of existing nominees by the beneficial owner, the earlier nomination shall stand rescinded. Hence, details of nominees as mentioned in the FORM 10 at the time of substitution will be considered. Therefore, please mention the complete details of all the nominees.</td>
</tr>

<tr>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:left; padding:3px 10px;">10.</td>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:left; padding:3px 10px;"> Copy of any proof of identity must be accompanied by original for verification or duly attested by any entity authorized for attesting the documents, as provided in Annexure D.</td>
</tr>


<tr>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:left; padding:3px 10px;">11.</td>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:left; padding:3px 10px;"> Savings bank account details shall only be considered if the account is maintained with the same participant.</td>
</tr>


<tr>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:left; padding:3px 10px;">12.</td>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:left; padding:3px 10px;"> DP ID and client ID shall be provided where demat details is required to be provided.</td>
</tr>

<!--
<tr>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:left; padding:3px 10px;">
333.</td>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:left; padding:3px 10px;"> Instructions related to nomination, are as below:</td>
</tr>
<tr>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:right; padding:3px 20px;">I.</td>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:left; padding:3px 10px;"> The nomination can be made only by individuals holding beneficiary owner accounts on their own behalf singly or
jointly. Non- individuals including society, trust, body corporate, partnership firm, karta of Hindu Undivided Family,
holder of power of attorney cannot nominate. If the account is held jointly all joint holders will sign the nomination
form.</td>
</tr>
<tr>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:right; padding:3px 20px;">II.</td>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:left; padding:3px 10px;"> A minor can be nominated. In that event, the name and address of the Guardian of the minor nominee shall be
provided by the beneficial owner.</td>
</tr>
<tr>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:right; padding:3px 20px;">III.</td>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:left; padding:3px 10px;"> The Nominee shall not be a trust, society, body corporate, partnership firm, karta of Hindu Undivided Family or a
power of Attorney holder. A non-resident Indian can be a Nominee, subject to the exchange controls in force, from
time to time.</td>
</tr>
<tr>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:right; padding:3px 20px;">
IV.
</td>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:left; padding:3px 10px;"> Nomination in respect of the beneficiary owner account stands rescinded upon closure of the beneficiary owner
account. Similarly, the nomination in respect of the securities shall stand terminated upon transfer of the securities.</td>
</tr>
<tr>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:right; padding:3px 20px;">V.</td>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:left; padding:3px 10px;"> Transfer of securities in favour of a Nominee shall be valid discharge by the depository and the Participant against the
legal heir.</td>
</tr>
<tr>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:right; padding:3px 20px;">VI.</td>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:left; padding:3px 10px;"> The cancellation of nomination can be made by individuals only holding beneficiary owner accounts on their own
behalf singly or jointly by the same persons who made the original nomination. Non- individuals including society,
trust, body corporate, partnership firm, karta of Hindu Undivided Family, holder of power of attorney cannot cancel
the nomination. If the beneficiary owner account is held jointly, all joint holders will sign the cancellation form.</td>
</tr>
<tr>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:right; padding:3px 20px;">
VII. </td>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:left; padding:3px 10px;">On cancellation of the nomination, the nomination shall stand rescinded and the depository shall not be under any
obligation to transfer the securities in favour of the Nominee.</td>
    </tr>  -->
    </table>

</div>
</div>      
 <!-- page 18 end--> 
 <!-- <div style="height:3508px !important; width:100%; float:left;">
	<div style=" float:left; width:100%; height:100%; margin:0;">   
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; margin:5px 0 0 0;border:0; text-align:center"> 
<tr><td colspan="2"><br/><br/><br/><br/><br/><br/><br/></td></tr>
<tr>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:left; padding:3px 10px;">
4.</td>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:left; padding:3px 10px;"> For receiving Statement of Account in electronic form:</td></tr>
<tr>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:right; padding:3px 20px;">I.</td>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:left; padding:3px 10px;">Client must ensure the confidentiality of the password of the email account.</td>
</tr>
<tr>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:right; padding:3px 20px;">II.</td>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:left; padding:3px 10px;">Client must promptly inform the Participant if the email address has changed.</td>
</tr>
<tr>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:right; padding:3px 20px;">III.</td>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:left; padding:3px 10px;">Client may opt to terminate this facility by giving 10 days prior notice. Similarly, Participant may also terminate this
facility by giving 10 days prior notice.</td>
</tr>
 <tr>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:left; padding:3px 10px;">
5.</td>
<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;text-align:left; padding:3px 10px;"> Strike off whichever is not applicable.</td></tr>
<tr>
    
 </table> 
 
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; margin:5px 0 0 0;border-top:1px dashed #000;border-bottom:1px solid #000; text-align:center"> 
	<tr>
    	<td colspan="4" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:15px 10px; text-align:center; font-weight:bold;">For Office Use Only</td>
    </tr>
    
    <tr>
    	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left; border-top:1px solid #000; border-left:1px solid #000; border-right:1px solid #000;height:60px;">Entered By</td>
        <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left; border-top:1px solid #000;  border-right:1px solid #000;">Date</td>
        <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left; border-top:1px solid #000;  border-right:1px solid #000;">Name</td>
        <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left; border-top:1px solid #000;  border-right:1px solid #000;">Signature</td>
    </tr>
    <tr>
    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left; border-top:1px solid #000; border-left:1px solid #000; border-right:1px solid #000;">Released By</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left; border-top:1px solid #000;  border-right:1px solid #000;">&nbsp;</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left; border-top:1px solid #000;  border-right:1px solid #000;">&nbsp;</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left; border-top:1px solid #000;  border-right:1px solid #000;">&nbsp;</td>
    </tr>
</table> 
 
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; margin:5px 0 0 0;border-top:none;border-bottom:1px solid #000; text-align:center"> 
	<tr>
    	<td colspan="4" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:15px 10px; text-align:center; font-weight:bold;">Demat services & Charges schedule ( SCHEDULE A)</td>
    </tr>
    
    <tr>
    	<td rowspan="2" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:left; border-top:1px solid #000; border-left:1px solid #000; border-right:1px solid #000; width:25%;">Services</td>
        <td>
        <table cellpadding="0" cellspacing="0" width="100%" >
        <tr>
        <td colspan="3" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000;">Charges</td>
        
        </tr>
        <tr>
        <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000; width:25%;">Scheme C<br>
        (With or Without POA)</td>
        <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000; width:25%;">Scheme E<br>
        (With POA One time deposite Rs. 1,000/- )</td>
        <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000; width:25%;">Scheme F<br>
        (With POA) One time deposite Rs. 10,000/-<br> (Refundable on closure of a/c not before 3 years)</td>
        </tr>
        </table>
        </td>
    </tr>
    
</table>
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; margin: 0;border-bottom:1px solid #000; text-align:center"> 
    <tr>
    	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px; text-align:left; border-left:1px solid #000; border-right:1px solid #000;">1. Account Opening Charges</td>
        <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px; text-align:center;   border-right:1px solid #000;">Nil</td>
        <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px; text-align:center;  border-right:1px solid #000;">Nil</td>
        <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px; text-align:center; border-right:1px solid #000;">Nil</td>
    </tr>
    <tr>
    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px; text-align:left; border-top:1px solid #000; border-left:1px solid #000; border-right:1px solid #000;">2. Monthly Maintenance Charges </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000;">150/- processing charges for 1" Year, then MMC Rs. 300/- for 1" month balance 11 month free
 </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000;">&nbsp;</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000;">&nbsp;</td>
    </tr>
    
    <tr>
    	<td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px; text-align:left; border-left:1px solid #000; border-right:1px solid #000;border-top:1px solid #000;">3. A/c Closing</td>
        <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px; text-align:center;   border-right:1px solid #000;border-top:1px solid #000;">Nil</td>
        <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px; text-align:center;  border-right:1px solid #000;border-top:1px solid #000;">Nil</td>
        <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px; text-align:center; border-right:1px solid #000;border-top:1px solid #000;">Nil</td>
    </tr>
    <tr>
    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px; text-align:left; border-top:1px solid #000; border-left:1px solid #000; border-right:1px solid #000;">4. Dematerialasation </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000;">Rs. 3/-per Cert. subject to minimum of Rs. 25/- plus postage actual 
 </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000;">Rs. 3/-per Cert. subject to minimum of Rs. 25/- minimum plus postage actual</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000;">Rs. 3/-per Cert. subject to minimum of Rs. 25/- plus postage actual</td>
    </tr>
    <tr>
    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px; text-align:left; border-top:1px solid #000; border-left:1px solid #000; border-right:1px solid #000;">5. Rematerialisation </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000;">0.15% Of Market Value 
 </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000;">0.15% Of Market Value</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000;">0.15% Of Market Value</td>
    </tr>
    <tr>
    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px; text-align:left; border-top:1px solid #000; border-left:1px solid #000; border-right:1px solid #000;">6. Kit charges </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000;">30/- ( One time) 
 </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000;">30/- ( One time) </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000;">30/- ( One time) </td>
    </tr>
    <tr>
    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px; text-align:left; border-top:1px solid #000; border-left:1px solid #000; border-right:1px solid #000;"> 7.Transaction Charges Buy ( Mkt. & Off Mkt.) Sale (Mkt. & Off Mkt.)  </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000;">NIL<br> 0.05%(Min. Rs. 20/-) plus NDSL Charges for intradp, Rs.35 plus service tax for other DP 
 </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000;">NIL<br> 0.05%(Min. Rs. 20/-) plus NSDL Charges for intradp, Rs.35 plus service tax for other DP  </td>
        <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000;">NIL<br> for other dp, Rs.35 plus service tax for other DP </td>
    </tr>
<tr>
    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px; text-align:left; border-top:1px solid #000; border-left:1px solid #000; border-right:1px solid #000;"> 8. Pledge Services: Creation Closure Invocation  </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000;">0.04% subject to min. of Rs. 50/-<br> 0.04% subject to min. of Rs. 50/-<br> 0.04% subject to min. of Rs. 50/-  
 </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000;">0.04% subject to min. of Rs. 50/-<br> 0.04% subject to min. of Rs. 50/-<br> 0.04% subject to min. of Rs. 50/- </td>
        <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000;">0.04% subject to min. of Rs. 50/-<br> 0.04% subject to min. of Rs. 50/-<br> 0.04% subject to min. of Rs. 50/-</td>
    </tr>
<tr>
    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px; text-align:left; border-top:1px solid #000; border-left:1px solid #000; border-right:1px solid #000;">9. POA  </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000;">125/-  
 </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000;">125/- </td>
        <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000;">125/-</td>
    </tr>
<tr>
    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px; text-align:left; border-top:1px solid #000; border-left:1px solid #000; border-right:1px solid #000;">10. All Taxes/ levies/CESS as applicable, will be charged Extra  </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000;">Actual Charges
 </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000;">Actual Charges </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;width:25%;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000;">Actual Charges</td>
    </tr>
</table>
 
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:center"> 
	<tr>
    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:20px 10px; text-align:left;">Choice Sheme</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:20px 10px; text-align:left;">Sheme C <input type="checkbox" /></td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:20px 10px; text-align:left;">Sheme E <input type="checkbox" /></td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:20px 10px; text-align:left;">Sheme F <input type="checkbox" /></td>
    </tr>
    
</table>
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:center"> 
    <tr>
    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:20px 5px; text-align:left; background:url(images/tick2.png)no-repeat right center;">Signature  (17)</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:20px 5px; text-align:left; width:100px;">First Holder<img src="<?php echo base_url(); ?>content/images/tick2.png" alt="" /> </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:20px 5px; text-align:left;"> <input type="text" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border:none; border-bottom:1px dashed #000; width:150px;"/></td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:20px 5px; text-align:left;">Second Holder</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:20px 5px; text-align:left;"> <input type="text" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border:none; border-bottom:1px dashed #000; width:150px;"/></td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:20px 5px; text-align:left;">Third Holder</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:20px 5px; text-align:left;"> <input type="text" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border:none; border-bottom:1px dashed #000; width:150px;"/></td>
    </tr>
    
</table> 
 
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:center"> 
 
 
    <tr>
    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:20px 5px; text-align:left;">Name Of Client</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:20px 5px; text-align:left;"> <input type="text" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border:none; border-bottom:1px dashed #000; width:150px;" value="<?php echo $fullname;?>"/></td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:20px 5px; text-align:left;">Client ID</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:20px 5px; text-align:left;"> <input type="text" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border:none; border-bottom:1px dashed #000; width:150px;"/></td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:20px 5px; text-align:left;">Date</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:20px 5px; text-align:left;"> <input type="text" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border:none; border-bottom:1px dashed #000; width:150px;"/></td>
    </tr>
</table> 
 </div>
 </div>-->
 
 
 
 <!-- Modified Page 20 Start -->
 
 <div style="height:3508px !important; width:100%; float:left;">
    <div style="float:left; width:100%; height:100%; margin:0;">   

<!--
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:11px;border:0; text-align:center"> 
    <tr><td colspan="2"><br/><br/>
    <tr>
        <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:11px;text-align:left; padding:3px 10px;">
        4.</td>
        <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:11px;text-align:left; padding:3px 10px;"> For receiving Statement of Account in electronic form:</td>
    </tr>
    
    <tr>
        <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:11px;text-align:left; padding:3px 20px;">&nbsp;</td>
        <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:11px;text-align:left; padding:3px 10px;">I.  Client must ensure the confidentiality of the password of the email account.</td>
    </tr>
    
    <tr>
        <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:11px;text-align:left; padding:3px 20px;">&nbsp;</td>
        <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:11px;text-align:left; padding:3px 10px;">II.  Client must promptly inform the Participant if the email address has changed.</td>
    </tr>
    
    <tr>
        <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:11px;text-align:left; padding:3px 20px;">&nbsp;</td>
        <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:11px;text-align:left; padding:3px 10px;">III.  Client may opt to terminate this facility by giving 10 days prior notice. Similarly, Participant may also terminate this
    facility by giving 10 days prior notice.</td>
    </tr>
    
    <tr>
        <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:11px;text-align:left; padding:3px 10px;">
        5.</td>
        <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:11px;text-align:left; padding:3px 10px;"> Strike off whichever is not applicable.</td>
    </tr>
</table> -->
<table cellpadding="0" cellspacing="0" width="97%" style="font-family:Arial, Helvetica, sans-serif; font-size:11px; margin:0 auto;border-bottom:1px solid #000; text-align:center;vertical-align:middle;"> 
    <tr>
        <td colspan="4">
<br> <br> <br> <br>
        </td>
    </tr>
    
    <tr>
        <td colspan="4" style="font-family:Arial, Helvetica, sans-serif; font-size:15px;padding:15px 10px; text-align:center; font-weight:bold;">For Office use only</td>
    </tr>
    
    <tr>
        <td rowspan="2" valign="top" style="width:250px;font-weight:bold;text-align:right;font-family:Arial, Helvetica, sans-serif; font-size:13px;padding:3px 10px; border-top:1px solid #000; border-left:1px solid #000; border-right:1px solid #000;">Entered By</td>
        <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:11px;padding:3px 10px; text-align:left; border-top:1px solid #000;  border-right:1px solid #000;">Date</td>
        <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:11px;padding:3px 10px; text-align:left; border-top:1px solid #000;  border-right:1px solid #000;">Name</td>
        <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:11px;padding:3px 10px; text-align:left; border-top:1px solid #000;  border-right:1px solid #000;">Signature</td>
    </tr>
    
    <tr>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:11px;padding:3px 10px; text-align:left; border-top:1px solid #000;  border-right:1px solid #000;">&nbsp;</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:11px;padding:3px 10px; text-align:left; border-top:1px solid #000;  border-right:1px solid #000;">&nbsp;</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:11px;padding:3px 10px; text-align:left; border-top:1px solid #000;  border-right:1px solid #000;">&nbsp;</td>
    </tr>
    
    <tr>
        <td style="width:250px;font-weight:bold;text-align:right;font-family:Arial, Helvetica, sans-serif; font-size:13px;padding:3px 10px; border-top:1px solid #000; border-left:1px solid #000; border-right:1px solid #000;">Released By</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:11px;padding:3px 10px; text-align:left; border-top:1px solid #000;  border-right:1px solid #000;">&nbsp;</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:11px;padding:3px 10px; text-align:left; border-top:1px solid #000;  border-right:1px solid #000;">&nbsp;</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:11px;padding:3px 10px; text-align:left; border-top:1px solid #000;  border-right:1px solid #000;">&nbsp;</td>
    </tr>

</table> 
<br/>
<table cellpadding="0" cellspacing="0" width="90%" style="margin:0 auto;vertical-align:middle;font-family:Arial, Helvetica, sans-serif; font-size:11px;border-bottom:1px solid #000;" > 
    
    <tr>
        <td colspan="3" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:11px;padding:20px 10px; text-align:left;text-align:center;font-weight:bold;">
            Demat services and charges schedule (Schedule A)
        </td>
    </tr>
    <tr>
        <td rowspan="2" valign="top" style="vertical-align:middle;text-align:center;font-family:Arial, Helvetica, sans-serif; font-size:11px;width:15%;padding:3px 10px; border-left:1px solid #000; border:1px solid #000;border-bottom:none;">
        SERVICES
        </td>
        
        <td colspan="2" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:11px;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000;">Charges</td>
    </tr>
    
    <tr>
        <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:11px;width:25%;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000;">SCHEME C<br>
        (With or Without POA)
        </td>
        <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:11px;width:25%;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000;">SCHEME E<br>
        Rs. 1000/- life time maintenance charges
        </td>
    </tr>
 
    <tr>
        <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:11px;width:15%;padding:3px 10px; text-align:left; border-left:1px solid #000; border-right:1px solid #000;border-top:1px solid #000;">1. Account Opening Charges</td>
        <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:11px;width:25%;padding:3px 10px; text-align:center;   border-right:1px solid #000;border-top:1px solid #000;">Nil</td>
        <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:11px;width:25%;padding:3px 10px; text-align:center;  border-right:1px solid #000;border-top:1px solid #000;">Nil</td>
    </tr>
    <tr>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:11px;width:25%;padding:3px 10px; text-align:left; border-top:1px solid #000; border-left:1px solid #000; border-right:1px solid #000;">2. Monthly Maintenance Charges </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:11px;width:25%;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000;">Rs 200/- AMC for 1st year, then MMC Rs 300/- for 1st month bal. 11th free, ( other than Corporate Account), Rs. 2000/- (in case of Corporate Account)
 </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:11px;width:25%;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000;">NIL</td>

 </tr>
    
    <tr>
        <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:11px;width:15%;padding:3px 10px; text-align:left; border-left:1px solid #000; border-right:1px solid #000;border-top:1px solid #000;">3. A/c Closing</td>
        <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:11px;width:25%;padding:3px 10px; text-align:center;   border-right:1px solid #000;border-top:1px solid #000;">Nil</td>
        <td valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:11px;width:25%;padding:3px 10px; text-align:center;  border-right:1px solid #000;border-top:1px solid #000;">Nil</td>
</tr>
 
    <tr>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:11px;width:15%;padding:3px 10px; text-align:left; border-top:1px solid #000; border-left:1px solid #000; border-right:1px solid #000;">4. Dematerialasation </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:11px;width:25%;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000;">Rs. 3/-per Cert. subject to minimum of Rs. 100/- plus postage actual 
 </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:11px;width:25%;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000;">Rs. 3/-per Cert. subject to minimum of Rs. 100/- minimum plus postage actual</td>
</tr>
 
    <tr>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:11px;width:15%;padding:3px 10px; text-align:left; border-top:1px solid #000; border-left:1px solid #000; border-right:1px solid #000;">5. Rematerialisation </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:11px;width:25%;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000;">
            Rs. 25/- per every 100 securities or flat fee Rs. 50/- per certificate whichever is higher is payable or part thereof subject 
            to max. fee off Rs, 5 lakhs
        </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:11px;width:25%;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000;">
            Rs. 25/- per every 100 securities or flat fee Rs. 50/- per certificate whichever is higher is payable or part thereof subject 
            to max. fee off Rs, 5 lakhs
        </td>
</tr>
 
   
    <tr>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:11px;width:15%;padding:3px 10px; text-align:left; border-top:1px solid #000; border-left:1px solid #000; border-right:1px solid #000;"> 6. Transaction Charges Buy ( Mkt. & Off Mkt.) Sale (Mkt. & Off Mkt.)  </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:11px;width:25%;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000;">NIL<br> 0.05%(Min. Rs. 20/-) plus NDSL Charges for intradp, Rs.35 plus service tax for other DP 
        </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:11px;width:25%;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000;">NIL<br> 0.05%(Min. Rs. 20/-) plus NSDL Charges for intradp, Rs.35 plus service tax for other DP  </td>
    </tr>
    
    <tr>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:11px;width:15%;text-align:left; border-top:1px solid #000; border-left:1px solid #000; border-right:1px solid #000;"> 
            <table style="font-family:Arial, Helvetica, sans-serif; font-size:11px;padding:3px 10px; text-align:left;">
                <tr>
                    <td>7. Pledge Services:</td>
                    <td>Creation</td>
                </tr>    
                <tr>    
                    <td>&nbsp;</td>
                    <td>Closure</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>Invocation</td>
                </tr>
            </table>
        </td>
        
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:11px;width:25%;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000;">0.04% subject to min. of Rs. 50/-<br> 0.04% subject to min. of Rs. 50/-<br> 0.04% subject to min. of Rs. 50/-  
        </td>
        
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:11px;width:25%;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000;">0.04% subject to min. of Rs. 50/-<br> 0.04% subject to min. of Rs. 50/-<br> 0.04% subject to min. of Rs. 50/- </td>
    </tr>


<tr>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:11px;width:15%;padding:3px 10px; text-align:left; border-top:1px solid #000; border-left:1px solid #000; border-right:1px solid #000;">8. POA  </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:11px;width:25%;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000;">Actual Charges   
 </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:11px;width:25%;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000;">Actual Charges </td>
 </tr>

<tr>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:11px;width:15%;padding:3px 10px; text-align:left; border-top:1px solid #000; border-left:1px solid #000; border-right:1px solid #000;">9. All Taxes/ levies/CESS as applicable, will be charged Extra  </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:11px;width:25%;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000;">Actual Charges
 </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:11px;width:25%;padding:3px 10px; text-align:center; border-top:1px solid #000;  border-right:1px solid #000;">Actual Charges </td>
    </tr>

</table>
 <br/>
 
  <table cellpadding="0" cellspacing="0" width="50%" style="font-family:Arial, Helvetica, sans-serif; font-size:11px;text-align:center"> 
    <tr>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:11px;text-align:left;font-weight:bold;vertical-align:top;padding:20px 10px;">Choice Scheme -</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:11px; text-align:left;font-weight:bold;padding:20px 10px;" >Scheme C <input type="checkbox" style="vertical-align: middle;" /></td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:11px;text-align:left;font-weight:bold;padding:20px 10px;" >Scheme E <input type="checkbox" style="vertical-align: middle;" /></td>
    </tr>
    
</table>
 
<table cellpadding="0" cellspacing="0" width="97%" style="font-family:Arial, Helvetica, sans-serif; font-size:11px;"> 
    <tr>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:11px;padding:20px 5px; text-align:left;width:100px;">
        Signature  (17)<img src="<?php echo base_url(); ?>content/images/tick2.png" alt="" />
        &nbsp;&nbsp;&nbsp;&nbsp;
        <span style="font-weight:bold;background:#B0B0B0;padding:1.5px;">First Holder</span>
        .................................
        Second Holder
        ..................................
        Third Holder
        ...................................
        <br/><br/><br/>
    
        Name Of Client
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <span style="margin-top:5px;font-weight:bold;">&nbsp;&nbsp;<?php echo $fullname;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
        
        Client ID
        ...............................................
        Date
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $regis_date;?>
    </tr>
    
</table>

 </div>
 </div> 

<!-- Modified Page 20 End -->


 
 
<!-- page 19 end-->
 <div style="height:3508px !important; width:100%; float:left;">
	<div style=" float:left; width:100%; height:100%; margin:0;">   
 <table  cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:center">
 <tr><td colspan="2"><br/><br/><br/><br/><br/><br/><br/></td></tr>

 <tr>
                	<td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:center; padding:3px; font-weight:bold; font-size:24px; text-transform:uppercase;">POWER OF ATTORNEY</td>
                </tr> 
	<tr>
    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:center;">
        	<table cellspacing="0" cellpadding="0" width="100%" >
            	
                <tr>
                	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px; text-align:left; float:left;width:200px;">
					 To all to whom these present shall come I/we 
                    </td>
                     <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px; text-align:left; float:left; width:200px; border-bottom:1px dotted #000;">&nbsp;
					 
                    </td>

                </tr>
                <tr>
                	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px; text-align:left; float:left;width:200px;">
					 individual Indian inhabitant send greetings 
                    </td>
                     <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px; text-align:left; float:left; width:190px; border-bottom:1px dotted #000;">&nbsp;
					 
                    </td>

                </tr>
                <tr>
                	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px; text-align:left; float:left;width:200px;">
					 Whereas I/we have a beneficiary account bearing BO-ID 
                    </td>
                     <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px; text-align:left; float:left; width:200px; border-bottom:1px dotted #000;">&nbsp;
					 
                    </td>
<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px; text-align:left; float:left;">
					 in the name and style of  
                    </td>
                </tr>
                <tr>
                	
                     <td colspan="3" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:6px 3px; text-align:left; float:left; width:100px; border-bottom:1px solid #000;">&nbsp;
					 
                    </td>
                </tr>
                
            </table>
        </td>
        <td rowspan="4" valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border:1px solid #000;text-align:center;  width:150px; height:350px; margin:5px;">(To be executed to stamp paper of Rs. 100/-)<br/><br/></td>
    </tr>

</table>


 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:center">
	<tr>
    <td colspan="6" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px; text-align:left">

(Here in after referred to as 'said account') with National Securities Depository Ltd. through depository participant <b>Astha Credit & Securities (P) Ltd.</b>, bearing DP-ID IN303420 having its head office. Usha Preet Complex, 138/42, Malvira Nagar, Bhopal.) (here in after called. " The DP"). and whereas l/We am/are an investor/s and engaged in buying &amp; selling of securities through <b>Astha Credit & Securities (P) Ltd.</b> member of NSE bearing SEBI Reg. No. -INB/F231222739<br>
 Due to exigency and paucity of time, l/We am/are desirous of appointing agents/attorneys to operate the said account on my/our behalf in the manner herein after appering.<br/>
  Now know we all and these present witness that I/we, the above named do hereby nominate, constitute and oppoint <b>Astha Credit &Securities (P) Ltd.</b> an Indian company having its registered officce at Usha Preet Complex, 138/42, Malviya Nagar, Bhopal, M.P. as my/our true and lawful attorney (s) [here in after referred to as " The Attorney (s).] for me/us and or my/our behalf and in my/our name to do all such acts, deeds and things and exercise the following powers and authorities and give all such instructions as mentioned below concerning the said accounts as I/we myself/ourselves could give if I/we was/were personally present.<br><br>
  1. To instruct the DP to debit securities to said account and/or transfer securities from the said account, to the extent of shares sold/ Margin through <b>Astha Credit & Securities (P) Ltd.</b> for pay in obligations as well as for margins towards stock exchange both in cash and derivatives segments to the demat account (s) existing as of the day or which may be opened in future by <b>Astha Credit & Securities (P) Ltd.</b> for above purpose (s). The detaiLs of existing accounts are as under 
  
  
:</td>
</tr>

<tr>
	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px; text-align:center; border-top:1px solid #000; border-right:1px solid #000; border-left:1px solid #000;">Sr. No.</td>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px; text-align:center; border-top:1px solid #000; border-right:1px solid #000; ">DP Name</td>
     <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px; text-align:center; border-top:1px solid #000; border-right:1px solid #000; ">Account Type</td>
      <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px; text-align:center; border-top:1px solid #000; border-right:1px solid #000; ">DP ID</td>
       <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px; text-align:center; border-top:1px solid #000; border-right:1px solid #000; ">A/C No.</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px; text-align:center; border-top:1px solid #000; border-right:1px solid #000; ">Cm BP ID</td>
</tr>
<tr>
	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px; text-align:center; border-top:1px solid #000; border-right:1px solid #000; border-left:1px solid #000;border-bottom:1px solid #000;">1.</td>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px; text-align:center; border-bottom:1px solid #000;border-top:1px solid #000; border-right:1px solid #000; ">Astha Credit & Securities Pvt. Ltd.</td>
     <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px; text-align:center; border-bottom:1px solid #000;border-top:1px solid #000; border-right:1px solid #000; ">Pool A/C</td>
      <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px; text-align:center; border-bottom:1px solid #000;border-top:1px solid #000; border-right:1px solid #000; ">IN303420</td>
       <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px; text-align:center; border-bottom:1px solid #000;border-top:1px solid #000; border-right:1px solid #000; ">10000660</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px; text-align:center; border-bottom:1px solid #000;border-top:1px solid #000; border-right:1px solid #000; ">IN564254</td>
</tr>
	<tr>
    <td colspan="6" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px; text-align:left">

2. To return the securities to me/my accounts by M/s <b>Astha Credit & Securities (P) Ltd.</b> stock broker that may have been received. by it/they (I.e., stock broker) erroneously or those securities that it/they (i.e., stock broker) was/were not entitled to receive from me. <br><br>
3 To pledge the securities in favour of the stock broker for the limited purpose of meeting my/our margin requirements in connection with the trades executed by me/us on any recognized stock exchange through the stockbroker.<br><br>
 4. To send consolidated summary of your scrip-wise buy and sell position taken with average rates to me/us by way of SMS/email on a daily basis, not with standing any other documents to be disseminated as specified by SEBI from time to time.<br><br>
  5. To apply for various products llke Mutual Funds, public issues (share as well as debentures), rights, offers of shares, tendering shares in open offers etc pursuant to oral/written/electronic instructions given by me/us to the stock broker.<br>
  I/we further agree and confirm that the powers and authorities conferred by this 'power of Attorney, shall continue until it is revoked (without notice) in writing by me and that the said revocation shall be effective from the date on which the revocation notice is received by the stock broker in his office at Usha preet Complex, 138/42, Malviya Nagar, Bhopal, M.P. <br><br>
and further I/We hereby agree confirm that the  powers and authorities conferred by this "Power of Attorney" shall continue until I/We have given an intimation in writing to the contrary to the DP at their registered address at Usha Preet Usha preet Complex, 138/42, Malviya Nagar, Bhopal,(M.P.). However such revocation shall not be applicable for any outstanding margin/delivery obligation arising out of the trades carried out prior to receiving request for revocation of POA<br/> (Signed and delivered - by the within named)   
  
</td>
</tr>
<tr>
</table>

 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:center">
	<tr>
    	<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;;padding:20px 5px; text-align:left; background:url(images/tick2.png)no-repeat right center;">Signature  </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:20px 5px; text-align:left;">(18)</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:20px 5px; text-align:left; width:100px;">First Holder <img src="<?php echo base_url(); ?>content/images/tick2.png" alt="" /></td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:20px 5px; text-align:left;"> <input type="text" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border:none; border-bottom:1px dashed #000; width:150px;"/></td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:20px 5px; text-align:left;">Second Holder</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:20px 5px; text-align:left;"> <input type="text" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border:none; border-bottom:1px dashed #000; width:150px;"/></td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:20px 5px; text-align:left;">Third Holder</td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:20px 5px; text-align:left;"> <input type="text" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;border:none; border-bottom:1px dashed #000; width:150px;"/></td>
    </tr>

</table>

 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:center">
	<tr>
    <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:20px 5px; text-align:left;">Witness :</td>
	</tr>
    <tr>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 5px; text-align:left;"><p>Signature :</p></td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px; text-align:left; float:left; width:200px; border-bottom:1px dotted #000;">&nbsp;
        </td>
    </tr>
    <tr>
<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 5px; text-align:left;"><p>Name :</p></td>
        <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px; text-align:left; float:left; width:200px; border-bottom:1px dotted #000;">&nbsp;
        </td>	</tr>
    
   <tr>
<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 5px; text-align:left;"><p>Address :</p></td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px; text-align:left; float:left; width:200px; border-bottom:1px dotted #000;">&nbsp;
        </td>	
        </tr>
    <tr>
<td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 5px; text-align:left;"><p>&nbsp;</p></td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px; text-align:left; float:left; width:200px; border-bottom:1px dotted #000;">&nbsp;
        </td>	
        </tr>
    <tr>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 5px; text-align:left;">Place-Bhopal<br> Date :<?php echo '<u>'.$regis_date.'</u>'?></td>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px;padding:3px 5px; text-align:right;">(Signed the Attorney)<br>For :<br> Astha Credit & Securities Pvt. Ltd</td>
	</tr>
    
</table>

</div>
    
</div>
<!-- page 20 end-->
<div style="height:3508px !important; width:100%; float:left;">
	<div style=" float:left; width:100%; height:100%; margin:0;">   
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:center">
 	<tr>
       	  <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:14px; padding:15px 10px;text-align:left;"> 
<B>To<br>
Astha Credit & Securitis Pvt Ltd<br>
F-01, Usha Preet - 138/42,<br>
Malviya Nagar, Bhopal ( M.P.) - 462003<br><br>
</B>
</td>

<tr>
       	  <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:15px 10px;text-align:left; line-height:16px;"> 
Dear Sir,<br><br>
I/We&nbsp;&nbsp;&nbsp;<?php echo '<u>'.$fullname.'</u>';?>, would like to inform you that I/We do not want to open Basic Service De-mat Account (BSDA) with DP. I would further like to inform you that though I am eligible for BSDA Account but still I would like to avail the facility of Normal Account.Kindly consider my request and open a normal Account with yourself.
</td>
</tr>
<tr>
       	  <td style="width:80%;font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:15px 10px;text-align:left; line-height:16px;"> 
			

        </td>
        <td style="font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:15px 10px;text-align:left; line-height:16px;"> 
			Thanking You, <br/><br/>


             Yours Faithfully <br/><br/>

              (19)<img src="<?php echo base_url(); ?>content/images/tick2.png" alt="" /><br/><br/>
              ________________________ 

        </td>

</tr>
</table>

 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:center">
 	<tr>
        <td colspan="10" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:15px 10px;text-align:center; line-height:16px;"> 
		Annexure 2.5 <br/>
                             <SPAN style="font-size:16px; font-weight:bold;"> OPTION FORM FOR ISSUE OF DIS BOOKLET </SPAN>
        </td>    
    </tr>
    <tr>
        <td style="width:60%;font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:15px 10px;text-align:center;"> 
        </td> 
        	
                	<td style="padding:5px 10px; border:1px solid #666;">Date</td>
                    <td style="padding:5px 10px;border:1px solid #666;">&nbsp;</td>
                    <td style="padding:5px 10px;border:1px solid #666;">&nbsp;</td>
                    <td style="padding:5px 10px;border:1px solid #666;">&nbsp;</td>
                    <td style="padding:5px 10px;border:1px solid #666;">&nbsp;</td>
                    <td style="padding:5px 10px;border:1px solid #666;">&nbsp;</td>
                    <td style="padding:5px 10px;border:1px solid #666;">&nbsp;</td>
                    <td style="padding:5px 10px;border:1px solid #666;">&nbsp;</td>
                    <td style="padding:5px 10px;border:1px solid #666;">&nbsp;</td>
                
    </tr>
    
</table>    
    
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:center; margin:3px 0;">

    <tr>
        
        <td style="border:1px solid #666;">DP ID</td>
            <td style="padding:5px 10px;border:1px solid #666;">&nbsp;</td>
            <td style="padding:5px 10px;border:1px solid #666;">&nbsp;</td>
            <td style="padding:5px 10px;border:1px solid #666;">&nbsp;</td>
            <td style="padding:5px 10px;border:1px solid #666;">&nbsp;</td>
            <td style="padding:5px 10px;border:1px solid #666;">&nbsp;</td>
            <td style="padding:5px 10px;border:1px solid #666;">&nbsp;</td>
            <td style="padding:5px 10px;border:1px solid #666;">&nbsp;</td>
            <td style="padding:5px 10px;border:1px solid #666;">&nbsp;</td>
        
        </td> 
        
            <td style="padding:5px 10px;border:1px solid #666;">Client ID</td>
            <td style="padding:5px 10px;border:1px solid #666;">&nbsp;</td>
            <td style="padding:5px 10px;border:1px solid #666;">&nbsp;</td>
            <td style="padding:5px 10px;border:1px solid #666;">&nbsp;</td>
            <td style="padding:5px 10px;border:1px solid #666;">&nbsp;</td>
            <td style="padding:5px 10px;border:1px solid #666;">&nbsp;</td>
            <td style="padding:5px 10px;border:1px solid #666;">&nbsp;</td>
            <td style="padding:5px 10px;border:1px solid #666;">&nbsp;</td>
            <td style="padding:5px 10px;border:1px solid #666;">&nbsp;</td>
               
    </tr>
 </table>
 
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:center; margin:10px 0;">

     <tr>
       	  <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:15px 10px;text-align:left; line-height:16px;"> 
            Dear Sir  / Madam, <br><br>
            I / We hereby state that:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[Select one of the options given below]</td>
    </tr>
    <tr>
       	  <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; text-decoration:underline; font-weight:bold; padding:15px 10px;text-align:left; line-height:16px;"> 
            OPTION 1: 
			</td>
    </tr>
    <tr>
       	  <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:15px 10px;text-align:left; line-height:16px;"> 
I / We do not require the Delivery Instruction Slip (DIS) for the time being, since I / We have issued a 
   POA / executed agreement   in favour of / with  Astha Credit & Securities (P.) Ltd.  (name of the 
   attorney / Clearing Member for executing delivery instructions for setting stock exchange trades 
   [settlement related transactions] effected through such Clearing Member.  However, the Delivery 
   Instruction Slip (DIS) booklet should be issued to me / us immediately on my  / our request at any later 
   date.     </tr>
   
   <tr>
       	  <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; text-decoration:underline; font-weight:bold; padding:10px 10px;text-align:ccenter; line-height:16px;"> 
            OR 
			</td>
    </tr>
   <tr>
       	  <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; text-decoration:underline; font-weight:bold; padding:15px 10px;text-align:left; line-height:16px;"> 
            OPTION 2: 
			</td>
    </tr>
   
   <tr>
       	  <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:15px 10px;text-align:left; line-height:16px;"> 
I / We require you to issue Delivery Instruction Slip (DIS)  booklet to me / us immediately on opening 
   my / our NDSL account though I / we have  issued a Power of Attorney  (POA)  executed agreement 
   in favour of / with  <b style="text-decoration:underline;">Astha Credit & Securities (P.) Ltd </b>
                                                              (name of the attorney / Clearing Member for 
   executing delivery instructions for setting stock exchange trades [settlement related transactions] effected 
   through such Clearing Member. 
    </tr>
    
    <tr>
       	  <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:15px 10px;text-align:left; line-height:16px;"> 
Yours faithfully
    </tr>
   
</table>
 <table cellpadding="0" cellspacing="0" width="100%" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;text-align:center; margin:10px 0;">
     <tr>
		<td style=" border:1px solid #000;font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px 10px;text-align:center; line-height:16px;">&nbsp; 
        
        </td>
        <td style=" border:1px solid #000;font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px 10px;text-align:center; line-height:16px;"> 
        First/Sole Holder
        </td>
        <td style=" border:1px solid #000;font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px 10px;text-align:center; line-height:16px;"> 
        Second Joint Holder
        </td>
        <td style=" border:1px solid #000;font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px 10px;text-align:center; line-height:16px;"> 
        Third Joint Holder 
        </td>
    </tr>
    
    <tr>
		<td style=" border:1px solid #000;font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px 10px;text-align:left; line-height:16px;"> 
        Name
        </td>
        <td style=" border:1px solid #000;font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px 10px;text-align:center; line-height:16px;"> 
        <?php echo $fullname;?>
        </td>
        <td style=" border:1px solid #000;font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px 10px;text-align:center; line-height:16px;">&nbsp; 
        
        </td>
        <td style=" border:1px solid #000;font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px 10px;text-align:center; line-height:16px;">&nbsp; 
         
        </td>
    </tr>
    
    <tr>
		<td style=" border:1px solid #000;font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px 10px;text-align:left; line-height:16px;"> 
        Signatures
        </td>
        <td style=" border:1px solid #000;font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px 10px;text-align:left; line-height:16px;"> 
        (20)<img src="<?php echo base_url(); ?>content/images/tick2.png" alt="" />
        </td>
        <td style=" border:1px solid #000;font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px 10px;text-align:center; line-height:16px;">&nbsp; 
        
        </td>
        <td style=" border:1px solid #000;font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px 10px;text-align:center; line-height:16px;">&nbsp; 
         
        </td>
    </tr>
</table>
 

</div>
    
</div>
<!-- page 21 end-->
 <div style="height:3508px !important; width:100%; float:left;">
	<div style=" float:left; width:100%; height:100%; margin:0;"> 

 <table style="height: 800px; margin-left: auto; margin-right: auto;" border="1" width="700" cellspacing="0" cellpadding="0">
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

</body>
</html>
