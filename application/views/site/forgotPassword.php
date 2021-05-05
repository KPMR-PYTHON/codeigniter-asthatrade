<section>
	<div class="container">
		
	    <div id="login" style="margin: 0 auto; width: 280px;">

	        <form id="reset_pwd" style="margin: 0 auto; width: 280px; margin-bottom:200px">

	          <fieldset class="clearfix">

	            <p style="margin-top:100px"><span class="fontawesome-user"></span><input type="text" value="Username" name="email" id="email" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required></p> 
	            <p><input id="email" name="email" type="button" value="Check Email" onclick="checkEmail();"></p>

	          </fieldset>
	          <p id="err_msg"></p>
	        </form>
			
		</div>
		
	</div>
		
</section>

<script type="text/javascript">
function validateEmail(email){
    var emailReg = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
    var valid = emailReg.test(email);
    if(!valid) {
        return 2;
    } 
    else{
        return 1;
    }
}

function checkEmail(){
	var email = $('#email').val();
	var err=0;
	if(email == ''){
		$('#email').val('');
		$('#email').css({'border-color' : '#FF0000'});
		$('#email').attr("placeholder", "Please Enter Email");
		err=0;
	} 
	else if(validateEmail(email)==2){
		$('#email').val('');
		$('#email').css({'border-color' : '#FF0000'});
		$('#email').attr("placeholder", "Please Enter Email Properly");
		err=0;
	}
	else{
		err=1;
	}

	if(err==1){
		document.getElementById('err_msg').innerHTML = "Please wait a moment . . . ";
		$.ajax({
			url: '<?php echo base_url(); ?>site/sendResetPwdToken',
			type: 'POST',
			datatype:'JSON',
			data:{'email':email},
			success: function(data){
				var data_obj = jQuery.parseJSON(data);
				if(data_obj.success==1){
					$("#user_id").val(data_obj.user_id);
					document.getElementById('err_msg').innerHTML = "Password reset link sent to your email";
				}
				else{
					$("#user_id").val(data_obj.user_id);
					document.getElementById('err_msg').innerHTML = "Email not registered";
				}
			},
			error: function(data){
				alert('error occured.');
			}		
		});
	} 
}

</script>