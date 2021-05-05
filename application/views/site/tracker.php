<script>
  <?php
  if($this->session->userdata('acc_type') == 1){
    echo "dataLayer.push({'nse_paid': 1});";
  }
  else if($this->session->userdata('acc_type') == 2)
    echo "dataLayer.push({'mcx_paid': 1});";  
   ?>
</script>
<section>

	<?php

  if($totCountOfAccountPay==0) {
   header("Location: payment");
   exit;
 }
if($totCountOfAccountPay==1) {
  if($getAccountPayDetails[0]['account_type']=='1'){
    if($getAccountPayDetails[0]['payment_type']=='1'){  // Payment Type 1 for Online
      if($getAccountPayDetails[0]['payment_status']=='0' || $getAccountPayDetails[0]['payment_status']== null){ // Payment Status 0 for Not Paid Yey
        $nsepaid = 0;
        $commoditypaid = 1;
        
        }
      else{
        $nsepaid = 1;
        $commoditypaid = 0;
        
        }
    }

  }
  else{
    if($getAccountPayDetails[0]['payment_type']=='1'){  // Payment Type 1 for Online
      if($getAccountPayDetails[0]['payment_status']=='0' || $getAccountPayDetails[0]['payment_status']== null ){ // Payment Status 0 for Not Paid Yey
        $commoditypaid = 0;
        $nsepaid =1;
        
      }
      else{
        $commoditypaid = 1;
        $nsepaid = 0;
        
      }
    }
  }
}

if($totCountOfAccountPay>=2) {
  $nsepaid = 1;
  $commoditypaid = 1;
  
}


?>
  <div class="container4">
    <div class="banner">
      <h1>Welcome <?php echo $this->session->userdata('name');?></h1>
    </div>
  </div>
  <div class="container4" style="padding-bottom:0px">
    <div style="margin-left:10px;width:150px;cursor: pointer;" onclick="window.location='<?php echo base_url()?>/site/profile'">
      <img src="<?php echo base_url()?>/content/images/back_arrow.svg" style="float:left;height:25px;width:25px"><span style="display:inline-block; width: 5px;"></span>
  Profile
    </div>
  </div>
  <div class="container4">
    <div class="payment-main">
      <div class="payment-half" style="width:280px;border: 2px solid black;">
        <h4 style="text-align:center"> Account Status </h4>
        <table>
          <tr>
            <td style="width:140px;padding-top:20px">
              Equity
            </td>
            <td style="width:140px;padding-top:20px">
              <?php 
                if($nsepaid ==0){
                  echo "&#8377 500/-, <a class=\"none\" href=\"".base_url()."account/payForEquity\">Pay Now</a>";
                  }
                else{
                  if($getAccountStatusDetails[0]['form_receive_status']=='1' || $getAccountStatusDetails[0]['form_receive_status']=='3'){echo "Received";} else {echo "Pending";}
                    }
                    ?>
            </td>
          </tr>
          <tr>
            <td style="width:140px;padding-top:20px">
              Commodity
            </td>
            <td style="width:140px;padding-top:20px">
              <?php 
                    if($commoditypaid ==0){
                      echo "&#8377 500/-, <a class=\"none\" href=\"".base_url()."account/payForCommodity\"><u>Pay Now</u></a>";
                    }
                    else{
                      if ($getAccountStatusDetails[0]['form_receive_status']=='2' || $getAccountStatusDetails[0]['form_receive_status']=='3'){echo "Received";} else {echo "Pending";}
                    }
                    ?>
            </td>
          </tr>
          <tr>
            <td style="width:140px;padding-top:20px">
              KYC
            </td>
            <td style="width:140px;padding-top:20px">
              <?php if ($getAccountStatusDetails[0]['kyc_status']=='1'){echo "Completed";} else {echo "Pending";} ?>
            </td>
          </tr>
          <tr>
            <td style="width:140px;padding-top:20px">
              IPV
            </td>
            <td style="width:140px;padding-top:20px">
              <?php if ($getAccountStatusDetails[0]['ipv_status']=='2'){
                     echo "Completed";
                   } 
                   else if($getAccountStatusDetails[0]['ipv_status']=='1'){
                     echo "Pending, <a class=\"none\" href=\"".base_url()."site/ipv\" style=\"color:blue;\"> <u>Re-Do</u>";
                   }
                   else if($getAccountStatusDetails[0]['ipv_status']=='0'){ 
                     echo "Pending, <a class=\"none\" href=\"".base_url()."site/ipv\" style=\"color:blue;\"> Click Here";
                   }
                   ?>
              </td>
            </tr> 

        </table>
      </div>
      <div class="payment-half" style="width:280px;border: 2px solid black;">
        <h4 style="text-align:center"> Download Form </h4>
        <table>
          <tr>
            <td style="width:140px">
                  <?php
                  if ($nsepaid > 0){
                   echo "<a class=\"none\" href=\"".base_url()."account/save_download/".$this->session->userdata('id')."/1\""." style=\"color:#325170;\"> Download Equity Form</a>";
                 }
                 ?>
            </td>
          </tr>
          <br>
          <tr>
            <td style="width:200px">
               <?php
               if ($commoditypaid > 0){
                 echo "<a class=\"none\" href=\"".base_url()."account/save_download/".$this->session->userdata('id')."/2\""." style=\"color:#325170;\">Download Commodity Form</a>";
               }
               ?>
             </td>
           </tr>
         </table>
       </div>

       <div class="payment-half" style="width:280px;border: 2px solid black;">

        <h4 style="text-align:center"> Required Documents (Self attested) </h4>

        <h4 style="text-align:center"> Attach these with the form </h4>

        <table>
          <tr>
            <td style="width:280px">
                1. Pan Card - Self Attested
            </td>
          </tr>
          <br>
          <tr>
            <td style="width:200px">
               2. Any one address proof <br> 
               <li style="margin-left:30px">Voter Id-Card 
                <li style="margin-left:30px">Driving Licence
                <li style="margin-left:30px">Passport
                <li style="margin-left:30px">Aadhar Card
             </td>
           </tr>
           <tr>
            <td style="width:280px">
                3. Two photos 
            </td>
          </tr>
          <tr>
            <td style="width:280px">
                4. Cancelled Cheque 
            </td>
          </tr>
          <tr>
            <td style="width:280px">
                5. Bank Statement   
            </td>
          </tr>
         </table>
       </div>





       

       <div class="banner">
        <h4> Courier your form to our nearest branch<h4>
       </div>
       <div class="payment-half" style="width:280px;border: 2px solid black;">
        <h4 style="text-align:center"> Bhopal </h4><br><br>
        <p class="address2">
        Astha Credit & Securities Pvt Ltd <br>
        F-01, Usha Preet,<br> 
        138/42, Malviya Nagar,<br>
        Bhopal, Madhya Pradesh - 462003</p>
        <br>
        <br>
        <p class="phn">
          0755-4268555 , 8435001551
        </p>
       </div>
       <div class="payment-half" style="width:280px;border: 2px solid black;">
        <h4 style="text-align:center"> Mumbai </h4><br><br>
        <p class="address2">
        Astha Credit & Securities Pvt Ltd <br>
        Office No-603,6th Floor,<br>
        Reena Complex, Ramdev Nagar Road, Vidhya Vihar(W),<br>
        Mumbai, Maharashtra-400086</p>
        <br>
        <p class="phn">
          +91-8655129555
        </p>
       </div>
       <div class="payment-half" style="width:280px;border: 2px solid black;">
        <h4 style="text-align:center"> Bengaluru </h4><br><br>
        <p class="address2">
        Astha Credit & Securities Pvt Ltd <br>
        1723/D,K.B.Complex,1st Floor,Near Navarang Circle,<br>
        MKK Road 2nd Stage, 2nd Block, Rajaji Nagar <br>
        Bangalore, Karnataka - 560010 <p>
        <p class="phn">
          080-41469300, +91-9986388568
        </p>
       </div>

     </div>	
   </div>
 </section>

<!-- <section>
    <div class="payment-half" style="width:280px;border: 2px solid black;">
        <h4 style="text-align:center"> Required Document </h4>
        <table>
          <tr>
            <td style="width:140px">
                 <ul><li>1.- Pan Card Copy </li>
<li> 2.-Address Proof any one ( Voter id Card, Driving Licence ,
Passport & Adhar Card)</li>
<li> 3.-Two Photo </li>
<li>4.- Canceled Cheq </li>

<li>5.-Bank statement (latest six months) </li>
</ul>

            </td>
          </tr>
          <br>
          <tr>
            <td style="width:200px">
               
             </td>
           </tr>
         </table>
       </div>  
	   
	      
 
 </section> -->