<section>
  <div class="container">
    
      <div id="login" style="margin: 0 auto; width: 280px;">

        <form id="reset_pwd" style="margin: 0 auto; width: 280px; margin-bottom:200px">

          <fieldset class="clearfix">
			      <label style="margin-top:100px">New Password</label>
            <p><span class="fontawesome-user"></span><input type="password" name="new_pass" id="new_pass" value="" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Username') this.value = ''" required></p>
            <label>Confirm New Password</label>
            <p><span class="fontawesome-lock"></span>
            <input type="password" name="conf_pass"  id="conf_pass" value="" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'ResetPassword') this.value = ''" required></p> 
            
            <p><input type="button" value="Sign In" onclick="saveNewPassword();"></p>
            <p id="err_msg"></p>
          </fieldset>

        </form>

        <!--<p>Forget Password? <a href="#">Reset now</a><span class="fontawesome-arrow-right"></span></p>-->

      </div> <!-- Reset Password End -->

    </div>
</section>

<script type="text/javascript">
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
        $('#err_msg').val('Password should be more than 8 characters');
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
       $('#err_msg').html("Passwords dont match");
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
    data:{'newpassword':new_pass, 'token': "<?php echo $reset_token ; ?>"},
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

</script>