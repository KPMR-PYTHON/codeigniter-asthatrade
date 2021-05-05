<section>
    <div class="container">
        <div class="about">
        
        </div>
    </div>
    <div class="clear"></div>
</section>

<!-- <section class="open_account">
<div class="container">
<h2>Account Opening Charges Rs 500 Payin by PayTM </h2>
    

        
   <div class="product_part2" >
              <img src="<?php echo base_url();?>content/images/paytm_500.jpg" alt="" />
        </div>

</div>
</section> -->


<div class="clear"></div>
<section class="open_account">
<div class="container">
<h2>PAYTM / NEFT /CHEQ Request </h2>
    <form id="fund_status" name="fund_status" class="pay_form" action="<?php echo base_url(); ?>account/fundStatus" method="post">
    <p>Fill in this form for Pay Out Request.</p>
        
        <label>Client Code:</label>
        <input type="text"  placeholder="Client Code / Name" name="client_code" id="client_code" />
        <label>E-mail Id:</label>
        <input type="text" placeholder="Email Id" name="email_id" id="email_id" />
        <label>Pay In Amount:</label>
        <input type="text" placeholder="Pay In Amount" name="pay_out_amt" id="pay_out_amt" onkeypress='return isNumberKey(this,event);' />
        <label>Segment:</label>
        <select name="exchange_value" id="exchange_value">
            <option value="MCX">MCX</option>
            <option value="NSE">NSE</option>
        </select>
        <label>Type of Fund transfer:</label>
        <select name="fund_transfer_bank" id="fund_transfer_bank">
            <option value="PAYTM">Payin Rs.500 by PAYTM</option>
            <option value="NEFT In SBI A/C">NEFT In SBI A/C</option>
            <option value="NEFT In HDFC A/C">NEFT In HDFC A/C</option>
            <option value="Cheq Deposit SBI A/C">Cheq Deposit SBI A/C</option>
            <option value="Cheq Deposit HDFC A/C">UPI (FUND DEPOSIT)</option>
        </select>
        <label>NEFT Reference No./ Cheq No :</label>
        <input type="text" placeholder="UPI Transection ID / NEFT Reference No./ Cheq No." name="neft_ref_no" id="neft_ref_no" onkeypress='return isNumberKey(this,event);' />
        <label>&nbsp;</label>
        <div class="g-recaptcha" data-sitekey="6LeDaxcUAAAAADakMBKVFxbge8J0w-0uCFgbiqUE"></div> 
        <label>&nbsp;</label>
        <input type="button" placeholder="" value="Submit" onClick="validation();"/>
    </form>


</div>
</section>






<script>
function validateEmail(email){
        var emailReg = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
        var valid = emailReg.test(email);

        if(!valid) {
            return 2;
        } else {
            return 1;
        }
}

function isNumberKey(txt, evt) {
    //alert(evt.keyCode);
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    var len = $(txt).val().length;
    var index = $(txt).val().indexOf('.');
    var str = $(txt).val();
    var res = str.split(".");
    var charAfterdot = (len+1) - index;
    if(charCode == 9){
            return true;
    } else {
        
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        
        
        
    }
    
    if (index>=0){
           if(charAfterdot <= 3 || charCode == 8){
                return true;
            } else {
                return false;
            } 
        }
        
    if(res[0].length<11 || charCode == 8){
        return true;    
    } else {
        return false;
    }
        
         
    return true;
}

function validation()
{
    var client_code,email_id,pay_out_amt,exchange_value,fund_transfer_bank,neft_ref_no;
    //client_code = $('#client_code').val(); 
    email_id = $('#email_id').val();
    pay_out_amt = $('#pay_out_amt').val();
    exchange_value =  $('#exchange_value').val();
    fund_transfer_bank = $('#fund_transfer_bank').val();
    neft_ref_no = $('#neft_ref_no').val();
    if(email_id==''){
        $('#email_id').val('');
        $('#email_id').css({'border-color' : '#FF0000'});
        $('#email_id').attr("placeholder", "Please Enter Email");
        err=0;    
      } else if(validateEmail(email_id)==2){
        $('#email_id').val('');
        $('#email_id').css({'border-color' : '#FF0000'});
        $('#email_id').attr("placeholder", "Please Enter Email Properly");
        err=0;
      }
      else if(pay_out_amt==''){
        $('#pay_out_amt').val('');
        $('#pay_out_amt').css({'border-color' : '#FF0000'});
        $('#pay_out_amt').attr("placeholder", "Please Enter Payout Amount");
        err=0;  
      }
      else if(exchange_value==''){
        alert("Please Choose Segment");
        err=0;  
      }
     else if(fund_transfer_bank==''){
        alert("Please Choose Yuor Bank");
        err=0;    
      }
      else if(neft_ref_no == ''){
        $('#neft_ref_no').val('');
        $('#neft_ref_no').css({'border-color' : '#FF0000'});
        $('#neft_ref_no').attr("placeholder", "Please Enter Cheque Number");
        err=0;
      } 
      else{document.getElementById("fund_status").submit();}
}

</script>
