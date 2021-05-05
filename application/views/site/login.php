<!-- start login -->
<!doctype html>
<html>
<head>
    <?php include_once(APPPATH."libraries/tagmanagerheader.php") ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Asthatrade</title>
	<link href="<?php echo base_url();?>content/css/style.css" rel="stylesheet" type="text/css">
	<script src="<?php echo base_url(); ?>content/js/jquery-1.9.1.min.js"></script>

</head>
<body>
    <?php include_once(APPPATH."libraries/tagmanagerbody.php") ?>
<div class="container_login"> 
	<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>content/images/logo.png" alt="" style="width:100%; float:left;"/></a>
      <div id="login">

        <form action="javascript:void(0);" method="get">

          <fieldset class="clearfix">

            <p><span class="fontawesome-user"></span><input type="text" value="Username" name="email" id="email" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required></p> 
            <p><span class="fontawesome-lock"></span><input type="password"  value="Password" name="password" id="password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p>
            <p><input type="submit" value="Sign In" onClick="login();"></p>

          </fieldset>
		<input type="hidden" name="fname" id="fname" value="">
		<input type="hidden" name="lname" id="lname" value="">
		<input type="hidden" name="mobile" id="mobile" value="">
        </form>

        <p>Forget Password? <a href="<?php echo base_url();?>site/forgotPassword" target="_blank">Reset now</a><span class="fontawesome-arrow-right"></span></p>
	  </div>
</div>
</body>
</html>

<!-- end login -->


<script>
function login(){
//	alert('Manish');	
	//alert($('#email').val());
            var email = $('#email').val();
            var password = $('#password').val();
		//	alert(email+' pass:'+password);	
            $.ajax({
                url:'<?php echo base_url(); ?>site/loginUser',
                data:{'email':email,'password':password},
                type:'POST',
                dataType: 'html',
                //processData: false,
                //contentType: false,
                cache: false,
                async : true,
                success : function(data){
                    dataLayer.push({'event':'login'});
					var data1 = JSON.parse(data);
					$('#fname').val(data1.fname);
					$('#lname').val(data1.lname);
					$('#mobile').val(data1.ph);

                    if(data1.succ==1){
						if(data1.reg_status==1){
							window.location.href = "<?php echo base_url(); ?>site/openAnAccount";    
						}
                        else if(data1.reg_status==4){
                            window.location.href = "<?php echo base_url(); ?>site/tracker";   
                        }
                        else if(data1.reg_status==2 || data1.reg_status==3){
                            window.location.href = "<?php echo base_url(); ?>site/payment";   
                        }
                        else{
							window.location.href = "<?php echo base_url(); ?>site/profile"; 
						}
						
                           
                    } else if(data==3){
                        $('#email').val('');
                        $('#email').attr("placeholder", "Email Mismatched");
                    } else if(data==2){
                        $('#password').val('');
                        $('#password').attr("placeholder", "Password Mismatched");
                    }
                
                },
                error : function(data){
                    alert('error occured.');
                }
            });
        }
</script>
