<section class="open_account">
<div class="container">
<div class="clear"></div>
<h2>Pay Out Request</h2>
    <center>
            <?php if($this->session->flashdata('status')=='success'){ ?>
                <div style="border:1px;border-style:solid;border-color:green;width:400px;color:green">
                    <p><?php echo $this->session->flashdata('message'); ?></p>
                </div>
                
                <?php }elseif($this->session->flashdata('status')=='error') { ?>
                <div style="border:1px;border-style:solid;border-color:red;width:400px;color:red">
                    <p><?php echo $this->session->flashdata('message'); ?>
                    </p>
                </div>
                
               <?php } ?>
    </center>
    <br/>
    
	<form class="pay_form" name="pay_form" id="pay_form" action="<?php echo base_url(); ?>account/payOutSave" method="post">
   
    <p>Fill in this form for Pay Out Request.</p>
        <label>Exchange:</label>
        <select name="exchange_value" id="exchange_value" required>
            <option value="" selected>Please Select Exchange</option>
            <option value="MCX">MCX</option>
            <option value="NSE">NSE</option>
        </select>
        <label>Client Code:</label>
        <input type="text" placeholder="Client Code" name="client_code" id="client_code" />
        <!-- <label>Name:</label>
        <input type="text" placeholder="Name" name="pay_name" id="pay_name" class="alphaonly" /> -->
        <label>Mobile No:</label>
        <input type="text" placeholder="Mobile Number" name="mob_no" id="mob_no" onkeypress='return isNumberKey(this,event);' />
        <!-- <label>E-mail Id:</label>
        <input type="text" placeholder="Email Id" name="email_id" id="email_id" /> -->
        <label>Pay Out Amount:</label>
        <input type="number" placeholder="Pay Out Amount" name="pay_out_amt" id="pay_out_amt" onkeypress='return isNumberKey(this,event);' />
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

function validation(){
	var exchange_value,client_code,pay_name,mob_no,email_id,pay_out_amt;
	exchange_value = $('#exchange_value').val();
	client_code = $('#client_code').val();
	mob_no = $('#mob_no').val();
	// email_id = $('#email_id').val();
	pay_out_amt = $('#pay_out_amt').val();
	
	if(exchange_value==''){
        alert("Please select an exchange before submitting");
        err=0;    
	  }else if(mob_no==''){
        $('#mob_no').val('');
        $('#mob_no').css({'border-color' : '#FF0000'});
        $('#mob_no').attr("placeholder", "Please Enter Your Mobile Number");
        err=0;  
	  }else if(client_code == ''){
        $('#client_code').val('');
        $('#client_code').css({'border-color' : '#FF0000'});
        $('#client_code').attr("placeholder", "Please Enter Client Code");
        err=0;
      } 
	  else if(pay_out_amt==''){
        $('#pay_out_amt').val('');
        $('#pay_out_amt').css({'border-color' : '#FF0000'});
        $('#pay_out_amt').attr("placeholder", "Please Enter Your Name");
        err=0;  
	  }
	  
	  else{
        document.getElementById("pay_form").submit();}
	
	
}
</script>
