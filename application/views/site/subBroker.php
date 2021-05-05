<section>
	<div class="container ">
    	<div class="banner_account">
        	  <div class="left_part">
           <img src="<?php echo base_url();?>content/images/about_2.jpg" alt="" title="" /> 
            </div> 
            
        <div class="right_part">
           <!--  <h1>Astha Associate programme</h1>
		    <p> Generate brokerage income from your referred clients by partnering us as part of our Authorized Person programme. </p> -->
		    
		   <p style="text-align: center;"><strong>Become our Associate and earn profits!</strong></p>
<p style="text-align: center;"><br /> <font size="3">Any finance enthusiast, active investor, stock market expert, active trader or any ordinary person can become our associate. Get authorised person registration from exchange within a day.</font> </p> </br>
<table style="height: 369px; width: 647px;">
<tbody>

<tr style="height: 40px;">
<td style="width: 287px; height: 25px; text-align: left;"> <h4>Active Trader</h4> </br><font size="2"> Do you trade actively? Help yourself and your friends with trading and get on board with our quick trading solutions </font> </td>
<td style="width: 49px; height: 25px; text-align: left;">&nbsp;</td>
<td style="width: 287px; height: 25px; text-align: left;"> <h4>Educator</h4> </br><font size="2"> If you teach about Stock Markets refer and help your students and colleagues to start trading on our easy platform </font> </td>
</tr>

<tr style="height: 40px;">
<td style="width: 287px; height: 25px; text-align: left;"> <h4>Social Influencer</h4></br> <font size="2"> Your social presence on facebook, whatsapp, instagram and twitter can make you easy money by referring your followers our platform </font> </td>
<td style="width: 49px; height: 25px; text-align: left;">&nbsp;</td>
	<td style="width: 287px; height: 25px; text-align: left;"><h4>Youtuber</h4> </br> <font size="2"> Review our apps and platform on youtube and share account opening links with your viewers.More shares, more profits.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td>
</tr>
<tr style="height: 12.1945px;">
<td style="width: 287.153px; height: 12.1945px; text-align: left;">&nbsp;</td>
<td style="width: 49.375px; height: 12.1945px; text-align: left;">&nbsp;</td>

</tr>
</tbody>
</table>
<h3 style="text-align: left;"><strong>Profit Sharing</strong></h3>
<p style="text-align: left;"><br /> <font size="3"> Simple profit per trade model. You&rsquo;ll get a fixed percentage of brokerage your clients make plus variable handsome performance bonuses </font> </p> </br>
		    
		    
				<center><?php if($this->session->flashdata('success')){echo $this->session->flashdata('success');}else{ echo $this->session->flashdata('err');}?></center>
				<form id="sub_broker_request" name="sub_broker_request" action="<?php echo base_url();?>Site/subBrokerRequest" method="post">
					<input type="text" id="sb_name" name="sb_name" placeholder="Full name" class="alphaonly" />
                    <!--<input type="text" id="name" name="name" placeholder="Your Name"/>-->
                    <!-- Changed Dated on 17/12/2016 --> 
                    <input type="text" placeholder="E-mail" name="email_id" id="email_id" />
                    <!-- Changed Dated on 17/12/2016 --> 
                    <input type="text" id="phone" name="phone" placeholder="Mobile No" onkeypress='return isNumberKey(this,event);'/>
                    <input type="text" id="city" name="city" placeholder="City" class="alphaonly" />
                 <font size="1">   Location Education, Stock market knowledge, Current job, Past experience in Broking services.</font>
                    <textarea id="msg" name="msg" placeholder="Short Introduction"></textarea>
                <div class="g-recaptcha" data-sitekey="6LeDaxcUAAAAADakMBKVFxbge8J0w-0uCFgbiqUE"></div>
                <div class="open-account-submit-container">
					<input class="submit_message" id="submit_message" name="submit_message" value="Submit Message" type="button" onClick="validation();">
				</div>
            </form>
            </div>
        </div>
        	<h3 style="text-align: left;"><br /> <center> Made up your mind? </center> </h3>
<p style="text-align: left;"><br /> <center> Help your friends and family to trade in stock markets<br /><br /> Get in touch with us<br />Email id:- <span style="color: #3366ff;">allianceastha@asthatrade.com</span> <br />Contact Person (Harsha Shrivastava) : - 0755-4268562</p> </center>

	</div> 

</section>

 <section>
	<div class="container ">
    	<div class="benifit">
        	
            
            
                    <div class="benifit_left">
                    	<ul>

				
           <!--             	<li>50000 Rs  Security Deposit (Refundable) </li>
                             <li>   6000 Rs Registration fees for all segments (included 18% GST)</li>
                              <li>  Upto 50K - 50% Sharing</li>
                              <li>  From 50K to 1 Lakh - 70% Sharing</li>
                              <li>Above 1 lakh - 90% Sharing</li>
                              <li>Mutual Fund - 100% Sharing</li>
                              <li>  Marketing & Branding Support.</li>
                              <li>For more details Please call 9826329991- FIZA KHAN</li> -->
                        </ul>
                    </div>
                    
                  
        </div>
        
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
	var sb_name,name,phone,city,msg;
	sb_name = $('#sb_name').val();
	email_id = $('#email_id').val();
	phone = $('#phone').val();
	city = $('#city').val();
	msg = $('#msg').val();
	
	if(!sb_name){
        $('#sb_name').val('');
        $('#sb_name').css({'border-color' : '#FF0000'});
        $('#sb_name').attr("placeholder", "Please Enter Sub-Broker Name");
        $('#sb_name').focus();
        err=0;    
        
	}  else if(!email_id){
        $('#email_id').val('');
        $('#email_id').css({'border-color' : '#FF0000'});
        $('#email_id').attr("placeholder", "Please Enter Your Email");
        $('#email_id').focus();
        err=0;
      } else if(validateEmail(email_id)==2){
        $('#email_id').val('');
        $('#email_id').css({'border-color' : '#FF0000'});
        $('#email_id').attr("placeholder", "Please Enter Email Properly");
        $('#email_id').focus();
        err=0;
      }else if(!phone){
		$('#phone').val('');
        $('#phone').css({'border-color' : '#FF0000'});
        $('#phone').attr("placeholder", "Please Enter Phone Number"); 
        $('#phone').focus();
		err=0;	
	} else if(!city){
		$('#city').val('');
        $('#city').css({'border-color' : '#FF0000'});
        $('#city').attr("placeholder", "Please Enter City");   
        $('#city').focus();
		err=0;	
	} else if(!msg){
		$('#msg').val('');
        $('#msg').css({'border-color' : '#FF0000'});
        $('#msg').attr("placeholder", "Please Type Some Message...."); 
        $('#msg').focus();
		err=0;	
	}
	else{
        dataLayer.push({'event':'sub-broker-submit'})
        document.getElementById("sub_broker_request").submit();
    }
}


</script>
