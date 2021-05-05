<section>
    <div class="container">
        <div class="about">
            <img src="<?php echo base_url(); ?>content/images/banner.jpg" alt="" />
            <h2>OTP Not Matched</h2>
            <input type="hidden" id="userId" value="<?php echo $this->uri->segment(3);?>" />
             <input type="hidden" id="mobile_no_otp" value="<?php echo $this->uri->segment(4);?>" />
            <p>To regenerate OTP, please click <u>here</u> <a href="javascript:void(0);" onclick="regenerateOtp();">Here</a></p>
        </div>
        
        
       <div class="clear"></div> 
    </div>
</section>

<script>
function regenerateOtp(){
     var user_id=$('#userId').val();
     var mob_no=$('#mobile_no_otp').val();
      $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>account/generateOtp",
            dataType:"JSON",
            data:{user_id:user_id,mob_no:mob_no},
            success: function(data) 
			{
				var mobileNo=String($('#mobile_no_otp').val());
				var res = mobileNo.substr(mobileNo.length -4);
                $('#showMobileNo').html(res);
				$('#userid').val(data.userid);
				window.location.href='#popup1';
			},
			
			error: function()
			{
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
        <p style="float:left;">Please Enter Your OTP here sent onclick mobile no.******<div id="showMobileNo" style="float:left; padding:20px 2px;">8467</div></p>
            
                <input type="hidden" name="userId" id='userid' value="" placeholder="userId"/>
                <input type="hidden" name="mobile_no_otp" id='mobile_no_otp' value=""/>
            
                <input type="text" placeholder=" Enter Your OTP here " name="otpVerification" id="otpVerification" maxlength="6"  />
                <input class="otp-submit-button" type="button" placeholder="" Value="Submit" onClick="emptyOTP()"/>
            </form>
        <p>To regenerate otp Please click <a href="javascript:void(0);" onclick="regenerateOtp();">Here</a></p>    
        </div>
    </div>
</div>
<!--popup-->  
