<!doctype html>
<html>
<head>
	<?php include_once(APPPATH."libraries/tagmanagerheader.php") ?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Asthatrade</title>
<link href="<?php echo base_url(); ?>content/css/style.css" rel="stylesheet" type="text/css">
<link rel="icon" href="<?php echo base_url(); ?>content/images/favicon.png" type="image/png" sizes="16x16">
<script src="<?php echo base_url(); ?>content/js/jquery-1.9.1.min.js"></script>
</head>

<body>
	<?php include_once(APPPATH."libraries/tagmanagerbody.php") ?>
    <div class="container_login">
	<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>content/images/logo.png" alt="" /></a>
    <div id="login">

        <form>

          <fieldset class="clearfix">

            <p><span class="fontawesome-user"></span><input type="text" value="Username" name="email" id="email" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required></p> 
            <p><input type="button" value="Check Email" onclick="checkEmail();"></p>

          </fieldset>

        </form>
	</div>

	<p id="err_msg"></p>

    <div class="resetPassword" id="login"> <!-- Reset Password Div Start -->

        <form>
		<input type="hidden" value="" id="user_id" name="user_id">	
          <fieldset class="clearfix">
            <label>New Password</label>
			
            <p><span class="fontawesome-user"></span><input type="password" name="new_pass" id="new_pass" value="" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Username') this.value = ''" required></p>
            <label>Confirm New Password</label>
            <p><span class="fontawesome-lock"></span>
            <input type="password" name="conf_pass"  id="conf_pass" value="" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'ResetPassword') this.value = ''" required></p> 
            
            <p><input type="button" value="Sign In" onclick="saveNewPassword();"></p>

          </fieldset>

        </form>

    </div> <!-- Reset Password Div End -->

    </div>
	
	
  </body>
</html>

<script>
$(document).ready(function(){
   $(".resetPassword").hide();
   $('#err_msg').hide();
});
</script>
<script>
/*$(document).ready(function() {
    $(".resetPassword").hide();

});*/

function validateEmail(email)
{
        var emailReg = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
        var valid = emailReg.test(email);

        if(!valid) {
            return 2;
        } else {
            return 1;
        }
}

function checkEmail() // Email check function
{
var email = $('#email').val();
var err=0;
//alert(email);
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
else
{
	err=1
}
if(err==1)
{
$.ajax({
	url: '<?php echo base_url(); ?>site/checkEmail',
	type: 'POST',
	datatype:'JSON',
	data:{'email':email},
	success: function(data)
	{
		 var data_obj = jQuery.parseJSON(data);
		 
		 //alert(data_obj.user_id);
		 //window.location.reload();
		if(data_obj.success==1)
		{
			//alert('Hi!');
			$(".resetPassword").show();
			$("#login").hide();
			$("#user_id").val(data_obj.user_id);
				
		}
		else
		{
			alert(data_obj);
			window.location.reload();
		}
	},
	error: function(data)
	{  alert('error occured.');}
	
});
}
}


	
function saveNewPassword() //password reset function 
{
	var user_id = $('#user_id').val();
	//alert(user_id);
	var new_pass = $('#new_pass').val();
	var conf_pass = $('#conf_pass').val();
	//alert(new_pass);
	var err=0;

	if(new_pass==''){
        $('#new_pass').val('');
        $('#new_pass').css({'border-color' : '#FF0000'});
        $('#new_pass').attr("placeholder", "Please Enter Password");
        err=0;  
      } else if(new_pass.length<8){
        $('#new_pass').val('');
		$('#err_msg').show();
        $('#err_msg').css({'color' : '#FF0000','font-size':'small'});
        $('#err_msg').html("Password Length is Minimum 8 Character");
        err=0;  
      } else if(conf_pass==''){
        $('#conf_pass').val('');
        $('#conf_pass').css({'border-color' : '#FF0000'});
        $('#conf_pass').attr("placeholder", "Please Retype Password");
        err=0;  
      } else if(new_pass != conf_pass){
        $('#conf_pass').val('');
        $('#err_msg').css({'color' : '#FF0000','font-size':'small'});
       $('#err_msg').html("Password and Confirm Password does not matched");
        err=0;  
      }
	  else
	  {
		  err=1 ;
	  }
	  
	  if(err==1)
	  {
		$.ajax({
		url: '<?php echo base_url(); ?>site/saveNewPassword',
		type: 'POST',
		data:{'user_id':user_id,'newpassword':new_pass},
		success: function(data)
		{
			alert(data);
			window.location.href = "<?php echo base_url(); ?>site/login";
		},
		error: function(data)
		{  alert('error occured.');}	
			
		});
	  }
}
</script>
