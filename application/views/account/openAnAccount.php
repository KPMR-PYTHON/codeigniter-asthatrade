<section>
    <div class="container">
        <div class="about">
        
        </div>
    </div>
    <div class="clear"></div>
</section>

<section>
    <div class="container ">
        <div class="banner_account">
            <div class="left_part">
            <img src="<?php echo base_url(); ?>content/images/banner_faq.jpg" alt="" title="" />
            </div>
            
            <div class="right_part">
            <h1>Open your account now</h1>
            
                <!--<form name="introducing" action="<?php //echo base_url(); ?>account/call_me" method="post" enctype="application/form-data"/>-->
                
                    <input type="text" placeholder="Your First Name"  name="fname" id="fname" value="" class="alphaonly"/>
                    <input type="text" placeholder="Your Last Name" name="lname" id="lname" value="" class="alphaonly" />
                
                
                    <input type="text" placeholder="Your Email" class="email" name="email" id="email" value="" onchange="checkEmail();"/>
                    <div class="clear"></div>
					<span id="chkEmail" style="float:left;"></span>
                 
					<input type="hidden" name="user_id" id="user_id" value="" />
                    <input type="hidden" name="emailChk" id="emailChk" value="" />
                    <input type="text" placeholder="Your Mobile Number" class="email" name="mobile_ph" id="mobile_ph" value="" onkeypress='return isNumberKey(this,event);'/>
                    
                    <input type="password" placeholder="Your Password" class="email" name="password" id="password" value=""/>
                    <input type="password" placeholder="Please Retype Your Password" class="email" name="rePassword" id="rePassword" value=""/>
                   
               
                <div class="open-account-submit-container">
                       <!-- <input class="register-user" id="open_account_proceed_form" name="open_account_submit_1" value="Continue to signup" type="submit" onclick="window.location.href='#popup1'">-->
                        
                        <input type="submit" class="register-user" id="open_account_proceed_form" name="open_account_submit_1" value="Continue to signup" onclick="ajax_continue_signup();">
                        <label>Or</label>
                        <input class="register-user button-outlined button" id="open_account_callback" name="open_account_submit_2" value="Call me back" type="submit" onclick="callMeBack();"><br>
                        <a href="<?php echo base_url(); ?>Site/login" class="text-tiny">Already started your application? Login here</a>
                    </div>
                 <!--</form>-->
            
            </div>
        </div>
        
    </div>
</section>    

 <script>
    var modalEl = document.getElementById('modal');
    var modalInst = new Modal(modalEl, {
      openCallback: function() {
        console.log('Callback for when Modal is open.');
      },
      closeCallback: function() {
        console.log('Callback for when Modal is closed.');
      }
    });
    modalInst.init();
  </script>
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
    
function validateForm(){
    var req_name=$('#req_name').val();
    var req_email=$('#req_email').val();
    var req_mobile=$('#req_mobile').val();
    if(req_name == ''){
        alert('Please enter Name');
        return false;    
    } else if(req_email == ''){
        alert('Please enter Email');
        return false;    
    } else if(validateEmail(req_email)==2){
        alert('Please enter Email properly');
        return false;
    } else if(req_mobile == ''){
        alert('Please enter Mobile Number');
        return false;    
    } else {
        return true;
    }
}

function validateForm2(){
    var req_name=$('#req_name2').val();
    var req_email=$('#req_email2').val();
    var req_mobile=$('#req_mobile2').val();
    if(req_name == ''){
        alert('Please enter Name');
        return false;    
    } else if(req_email == ''){
        alert('Please enter Email');
        return false;    
    } else if(validateEmail(req_email)==2){
        alert('Please enter Email properly');
        return false;
    } else if(req_mobile == ''){
        alert('Please enter Mobile Number');
        return false;    
    } else {
        return true;
    }
}

function ajax_continue_signup(){
    //alert('bbbb');
    var err=0;
      var fname,lname,mob_no,email,password,rePassword,emailChk;
      fname=$('#fname').val();
      lname=$('#lname').val();
      email=$('#email').val();
      mob_no=$('#mobile_ph').val();
      password=$('#password').val();
      rePassword=$('#rePassword').val();
      emailChk=$('#emailChk').val();
	  user_id=$('#user_id').val();
      
      if(fname==''){
        $('#fname').val('');
        $('#fname').css({'border-color' : '#FF0000'});
        $('#fname').attr("placeholder", "Please Enter First Name");
		$('#fname').focus();
        err=0;    
      } else if(lname==''){
        $('#lname').val('');
        $('#lname').css({'border-color' : '#FF0000'});
        $('#lname').attr("placeholder", "Please Enter Last Name");
		$('#lname').focus();
        err=0;  
      } else if(email == ''){
        $('#email').val('');
        $('#email').css({'border-color' : '#FF0000'});
        $('#email').attr("placeholder", "Please Enter Email");
		$('#email').focus();
        err=0;
      } else if(validateEmail(email)==2){
        $('#email').val('');
        $('#email').css({'border-color' : '#FF0000'});
        $('#email').attr("placeholder", "Please Enter Email Properly");
		$('#email').focus();
        err=0;
      } else if(mob_no==''){
        $('#mobile_ph').val('');
        $('#mobile_ph').css({'border-color' : '#FF0000'});
        $('#mobile_ph').attr("placeholder", "Please Enter Mobile Number");
		$('#mobile_ph').focus();
        err=0;  
      } else if(password==''){
        $('#password').val('');
        $('#password').css({'border-color' : '#FF0000'});
        $('#password').attr("placeholder", "Please Enter Password");
		$('#password').focus();
        err=0;  
      } else if(password.length<8){
        $('#password').val('');
        $('#password').css({'border-color' : '#FF0000'});
        $('#password').attr("placeholder", "Password Length is Minimum 8 Character");
		$('#password').focus();
        err=0;  
      } else if(rePassword==''){
        $('#rePassword').val('');
        $('#rePassword').css({'border-color' : '#FF0000'});
        $('#rePassword').attr("placeholder", "Please Retype Password");
		$('#rePassword').focus();
        err=0;  
      } else if(password != rePassword){
        $('#rePassword').val('');
        $('#rePassword').css({'border-color' : '#FF0000'});
        $('#rePassword').attr("placeholder", "Password and Retype Password does not matched");
		$('#rePassword').focus();
		err=0;  
      } else {
        err=1;  
      }
      
      //var dataValue='&fname='+fname+'&lname='+lname+'&mob_no='+mob_no+'&email='+email+'&password='+password;
		if(err==1 && (emailChk==0 || emailChk==2)){
		$.ajax({
            type: "POST",
            //cache: false,
            url: "<?php echo base_url(); ?>account/generateValidation",
            dataType:"JSON",
            data:{user_id:user_id, fname:fname, lname:lname, mob_no:mob_no, email:email,password:password},

            //data:dataValue,
            success: function(data) {
				
                                //alert('AAA');
                                //alert(data.userid);
                                var mobileNo=String(data.mob_no);
                                //var res = mobileNo.substring(10,4);
                                var res = mobileNo.substr(mobileNo.length -4);
                               // alert(data.userid);
                                //alert(res); id.substr(id.length - 5)
                            $('#showMobileNo').html(res);
                            $('#userId').val(data.userid);
                            $('#mobile_no_otp').val(data.mob_no);
                            window.location.href='#popup1';
							console.clear();
                           },
                        error: function() {
                            $("#response").html("AJAX request failed.");
                        }
          
          
      });
      }
}

function regenerateOtp(){
      //alert('bbbb');
     var user_id=$('#userId').val();
     var mob_no=$('#mobile_no_otp').val();
      $.ajax({
            type: "POST",
            //cache: false,
            url: "<?php echo base_url(); ?>account/generateOtp",
            dataType:"JSON",
            data:{user_id:user_id,mob_no:mob_no},

            //data:dataValue,
            success: function(data) {
                                //alert('AAA');
                                //alert(data.userid);
                                var mobileNo=String($('#mobile_no_otp').val());
                                //var res = mobileNo.substring(10,4);
                                var res = mobileNo.substr(mobileNo.length -4);
                               // alert(data.userid);
                                //alert(res); id.substr(id.length - 5)
                            $('#showMobileNo').html(res);
                            //$('#userId').val(data.userid);
                            //$('#mobile_no_otp').val(data.mob_no);
                            window.location.href='#popup1';
							console.clear();
                           },
                        error: function() {
                            $("#response").html("AJAX request failed.");
                        }
          
          
      });
      
}

function callMeBack(){
      var fname,lname,mob_no,email,emailChk;
		  fname=$('#fname').val();
		  lname=$('#lname').val();
		  email=$('#email').val();
		  mob_no=$('#mobile_ph').val();
		  emailChk=$('#emailChk').val();
	  var regex =/^[a-zA-Z ]*$/;
      
      if(fname==''){
        $('#fname').val('');
        $('#fname').css({'border-color' : '#FF0000'});
        $('#fname').attr("placeholder", "Please Enter First Name");
		$('#fname').focus();
        err=0; 
	  } else if(!regex.test(fname)){
		$('#fname').css({'border-color' : '#FF0000'});
		$('#fname').attr("placeholder", "Please Enter Correct Format");
		$('#fname').val('');
		$('#fname').focus();
		alert('not matched');
		err=0; 
	 } else if(lname==''){
        $('#lname').val('');
        $('#lname').css({'border-color' : '#FF0000'});
        $('#lname').attr("placeholder", "Please Enter Last Name");
		$('#lname').focus();
        err=0;  
      } else if(email == ''){
        $('#email').val('');
        $('#email').css({'border-color' : '#FF0000'});
        $('#email').attr("placeholder", "Please Enter Email");
		$('#email').focus();
        err=0;
      } else if(validateEmail(email)==2){
        $('#email').val('');
        $('#email').css({'border-color' : '#FF0000'});
        $('#email').attr("placeholder", "Please Enter Email Properly");
		$('#email').focus();
        err=0;
      } else if(mob_no==''){
        $('#mobile_ph').val('');
        $('#mobile_ph').css({'border-color' : '#FF0000'});
        $('#mobile_ph').attr("placeholder", "Please Enter Mobile Number");
		$('#mobile_ph').focus();
        err=0;  
      } else {
        err=1;  
      }
      
      if(err==1 && (emailChk==0 || emailChk==2)){
      var dataValue='&fname='+fname+'&lname='+lname+'&mob_no='+mob_no+'&email='+email;
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
                            }
                           },
                        error: function() {
                            $("#response").html("AJAX request failed.");
                        }
          
          
      });
      }
}

function checkEmail(){
	base_url = "<?php echo base_url();?>";
	//alert(base_url);	
      email=$('#email').val();
      var dataValue='&email='+email;
      $.ajax({
            type: "POST",
            //cache: false,
            url: "<?php echo base_url(); ?>account/checkEmail",
            //dataType:"JSON",
            data:dataValue,
            //data:dataValue,
            success: function(data) {
				var data1 = JSON.parse(data);
							$('#user_id').val(data1.user_id);
                            $('#emailChk').val(data1.isotpvalid);
                            if(data1.isotpvalid==0){
								$('#chkEmail').css({
													   'font-size' : '12px',
													   'font-weight' : '400',
													   'color' : 'red'
													   
												   });
                               // $('#chkEmail').html('Already Exists');    
								$('#chkEmail').html('Please &nbsp;&nbsp;"Continue to Signup"&nbsp;&nbsp; to valid your OTP');    
                            } else if(data1.isotpvalid==1){
								$('#chkEmail').css({
													   'font-size' : '12px',
													   'font-weight' : '400',
													   'color' : 'red'
												   });
												   //alert(<?php base_url();?>);
                                //$('#chkEmail').html('Available');
								$('#chkEmail').html('\n This email is already registered. To <a href="' + base_url + 'site/login">Login here</a>');
                            }
							else if(data==2){
								$('#chkEmail').css({
													   'font-size' : '12px',
													   'font-weight' : '400',
													   'color' : 'green'
												   });
                                //$('#chkEmail').html('Available');
								$('#chkEmail').html('This Email is Available for Sign Up');
                            }
                           },
                        error: function() {
                            $("#response").html("AJAX request failed.");
                        }
          
          
      });
}


function emptyOTP()
{
	var otp = $('#otpVerification').val();
	if(!otp)
	{
		alert('Please Enter OTP.');
	}
	else
	{
    dataLayer.push({'event':'signup'});
		document.getElementById("otp_validation").submit();
	}
}

</script>

<!--popup-->
<div id="popup1" class="overlay">
    <div class="popup">
    
        
        <a class="close" href="#">&times;</a>
        <div class="clear"></div>
        <div class="content">
        <form id="otp_validation" name="otp_validation" action="<?php echo base_url(); ?>Account/otpValidation" method="post" enctype="application/form-data">
        <p style="float:left;">Please Enter Your OTP here against your mobile no.******<div id="showMobileNo" style="float:left; padding:20px 2px;">8467</div></p>
            
                <input type="hidden" name="userId" id='userId' value=""/>
                <input type="hidden" name="mobile_no_otp" id='mobile_no_otp' value=""/>
            
                <input type="text" placeholder=" Enter Your OTP here " name="otpVerification" id="otpVerification" maxlength="6"  />
                <input type="button" placeholder="" Value="Submit" onClick="emptyOTP()"/>
            </form>
        <p>To regenerate otp Please click <a href="javascript:void(0);" onclick="regenerateOtp();">Here</a></p>    
        </div>
    </div>
</div>
<!--popup-->