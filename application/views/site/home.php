<?php 


    switch (ENVIRONMENT) {
      case 'development':
          $data['account_open_link']= "http://[::1]/cdsl/account/openAnAccount";
          $data['referral_link']= "http://[::1]/cdsl/site/getReferral";
        break;
      case 'production':        
          $data['account_open_link']= "https://accounts.".str_replace('https://','',base_url())."account/openAnAccount";
          $data['referral_link']= "https://accounts.".str_replace('https://','',base_url())."site/getReferral";

        break;
      case 'testing':
          $account_open_link= "http://stagingc.asthatrade.com/account/openAnAccount";
          $data['referral_link']= "https://stagingc.".str_replace('https://','',base_url())."site/getReferral";
        break;
      default:
            $data['account_open_link']= "https://accounts.".str_replace('https://','',base_url())."account/openAnAccount";
            $data['referral_link']= "https://asthatrade.com/site/getReferral";
        break;
    }

?>
<!--
<script>
    alert("Office will remain close from 13th July to 14th July . !");
</script>
-->

    
    <div class="container">
        <div class="banner">
            <img src="<?php echo base_url();?>content/images/banner.jpg" alt="" title="" />
           </br>
            <a href="<?php echo $account_open_link;?>">Open a Paperless account</a>   
        </div>
        
    </div>
</section>
    
<!-- <section class="trading">
    <div class="container">
    <h2>Start Trading Now</h2> 
           <form>
           <input type="text" id="client_id" name="client_id" value="<?php echo $something = $this->input->get('c'); ?>"  style="display:none;"/>
                <input type="text" id="name" name="name" placeholder="Name" value="" />
                <input type="text" id="email" name="email" placeholder="E-mail" value="" />
                <input type="text" id="phon_no" name="phon_no" placeholder="Phone Number" value="" onkeypress='return isNumberKey(this,event);' />
                <input class="contact_us_btn" type="button" placeholder="" value="Request Call Back" onClick="validation();" />
                <!--<label>OR</label>
                <a href="<?php //echo base_url();?>Account/openAnAccount">Open Account</a>
           </form>
     </div>
</section> -->
    
<section>
    <div class="container only_span">
        <div class="span_box">
            <h2>40 X<br>
<span>Margin</span></h2>
            <h3>NSE Cash
Intraday (MIS)</h3>
        </div>
        
        <div class="span_box">
            <h2>66 X<br>
<span>Margin</span></h2>
            <h3>NSE Futures<br>
&amp;</br>
MCX Futures
Intraday (MIS)</h3>
        </div>
        
        <div class="span_box">
            <h2>5 X<br>
<span>Margin</span></h2>
            <h3>NSE Cash
Delivery (CNC)</h3>
        </div>
        
        <div class="span_box">
            <h2>20 X<br>
<span>Margin</span></h2>
            <h3>NSE Index Options
(Selling)
Intraday (MIS)</h3>
        </div>
        
    
</section>  
    
<section class="company">
    <div class="container">
        <div class="overview">
            <h2>Company Overview</h2>
            
<p>For 20 years, we’ve been empowering clients by helping them take control of their financial lives. Today, we’re proud to continuously deliver exceptional service across exchange traded derivatives , cash market and 
commodity products to help you pursue your goals with confidence. With our services in Investment 
Consultancy, Equity and Commodities trading, your search for investing avenues stops right here.</p>

<a href="<?php echo base_url();?>Site/about" target="_blank">Read More</a>
</div>  
    <a href="<?php echo $account_open_link;?>" target="_blank"><div class="overview_box1">
        <img src="<?php echo base_url();?>content/images/view1.png" alt="" />
        <h3>Open An Account</h3>
        <h4>Click Here</h4>
        <!--<h4>NSE(Cash+F&amp;O)</h4>
        <h5> MCX</h5>-->
    </div>
    </a>
    <a href="<?php echo base_url().'site/getReferral';?>" target="_blank">
    <div class="overview_box2">
        <img src="<?php echo base_url();?>content/images/view2.png" alt="" />
        <h3>Get Referral Benefit</h3>
        <h4>A lot more Money........</h4>
    </div> </a>   
    </div>
    <div class="clear"></div>
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
    var ci = $('#client_id').val();
    var fname= $('#name').val();
    var lname=$('#lname').val();
    var email=$('#email').val();
    var phone=$('#phon_no').val();
    var dataValue='&fname='+fname+'&lname='+lname+'&mob_no='+phone+'&email='+email+'&ci='+ci;
    
    if(!fname){
        $('#name').val('');
        $('#name').css({'border-color' : '#FF0000'});
        $('#name').attr("placeholder", "Please Enter Name");
        err=0;  
    }
    else if (!email) {
        $('#email').val('');
        $('#email').css({'border-color' : '#FF0000'});
        $('#email').attr("placeholder", "Please Enter Email");
        err=0;    
    }
    else if(validateEmail(email)==2){
        $('#email').val('');
        $('#email').css({'border-color' : '#FF0000'});
        $('#email').attr("placeholder", "Please Enter Valid Email");
        err=0;    
    }
        
    else if(!phone){
        $('#phon_no').val('');
        $('#phon_no').css({'border-color' : '#FF0000'});
        $('#phon_no').attr("placeholder", "Please Enter Phone Number");
        err=0;    
    }
    else {
        err=1;
    }

    if(err==1){
        dataLayer.push({'event':'contact-us-submit'});
        $.ajax({
            type: "POST",
            //cache: false,
            url: "<?php echo base_url(); ?>account/callMeBack",
            //dataType:"JSON",
            data:dataValue,
            //data:dataValue,
            success: function(data) {
                            if(data==1){
                                alert('Thank you for showing your interest. Our Executive will contact you shortly');  
                                                $('#client_id').val('');  
                                $('#name').val('');
                                $('#email').val('');
                                $('#phon_no').val('');
                            }
                           },
                        error: function() {
                            $("#response").html("AJAX request failed.");
                        }
          
          
      });
      }
}
</script>
