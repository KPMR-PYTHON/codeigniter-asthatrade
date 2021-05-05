<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-0ac9571b-5b66-4a58-bf6d-e7a6a90ec970"></div>  
<section>
	<div class="container">
    	<div class="banner">
            <img src="<?php echo base_url();?>content/images/banner.jpg" alt="" title="" />
            
        </div>
        
    </div>
</section>

<section>
	<div class="container">
    	<div class="about_part1">
        <blockquote>

<table style="height: 1185px;" width="331">
<tbody>
<tr>
<td style="width: 321px;">
<p><em>Dept&nbsp; &amp;&nbsp; Mobile No</em></p>
</td>
</tr>
	
	
<tr>
<td style="width: 321px;">
<p><strong>New account Opening</strong><br />0755-4268500, 0755-6693399, 8435001551<br />sales@asthatrade.com</p>
</td>
</tr>
<tr>
<td style="width: 321px;">
	<p><strong>Support</strong> </br>
	 0755-4268599 , 0755-6693302 <br />contact@asthatrade.com</p>
</td>
</tr>
<tr>
<td style="width: 321px;">
<p><strong>Refer &amp; Partnership</strong><br />07554268562, 0755-6693308, 9826329991<br />allianceastha@asthatrade.com</p>
</td>
</tr>
<!-- <tr>
<td style="width: 321px;">
<p><strong>Tamil, Telugu &amp; Kannada Languages</strong><br />080-41469300 <br />bengaluru@asthatrade.com</p>
</td>
</tr> -->
<tr>
<td style="width: 321px;">
<p><strong>Trading /Dealing</strong><br />0755-4268556,0755-6693301 <br />contact@asthatrade.com</p>
</td>
</tr>

<tr>
<td style="width: 321px;">
<p><strong>RMS for&nbsp;Odin&nbsp;</strong><br />0755-4268557,9977886572<br />0755-6693303<br />contact@asthatrade.com</p>
</td>
</tr>
<!-- <tr>
<td style="width: 321px;">
<p><strong>RMS for Bazar</strong><br />0755-4268563 <br />contact@asthatrade.com</p>
</td>
</tr> -->
<tr>
<td style="width: 321px;">
<p><strong>Accounts Dept</strong><br />0755-4268558,8889484455<br />0755-6693304<br />accounts@asthatrade.com</p>
</td>
</tr>
<tr>
<td style="width: 321px;">
<p><strong>KYC Dept</strong><br />0755-4268559 ,0755-6693305, 9669695613<br />kyc@asthatrade.com</p>
</td>
</tr>
<tr>
<td style="width: 321px;">
<p><strong>Demat&nbsp;Dept</strong><br />0755-4268560, 0755-6693306 ,9669695611<br />dp@asthatrade.com</p>
</td>
</tr>
<tr>
<td style="width: 321px;">
<p><strong>Bangalore office</strong><br />080-41469300,9977700239 <br />bengaluru@asthatrade.com</p>
</td>
</tr>
<tr>
<td style="width: 321px;">
<p><strong>Mumbai office</strong><br />8655129555 , 8655622119<br />ashwingohil55@gmail.com</p>
</td>
</tr>
</tbody>
</table>
</blockquote>
        
         
        </div>
        
        <div class="about_part2">
         
        
         
        


<div class="clear"> </div>
            
            
            <h4>

CORPORATE OFFICE 
</h4>
<p class="address2">
Astha Credit & Securities Pvt Ltd  
<br>
F-01,138/42, UshaPreetMalviya Nagar, Bhopal (MP) 462003
</p>
<p class="mail2">
contact@asthatrade.com
<br>
kyc@asthatrade.com
</p>
         </p>

<div class="clear"> </div>
            
            
            <h4>

MUMBAI OFFICE 
</h4>
<p class="address2">
Astha Credit & Securities Pvt Ltd  
<br>
Office No-603,6th Floor,</br> 
                  Reena Complex, Ramdev Nagar Road, Vidhya Vihar(W),</br> 
                                    Mumbai, (Maharashtra)-400086 
</p>
<!-- <p class="phn">   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8655129555</p> </br> -->
                    <p class="phn">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +91-8655129555
</p>

<div class="clear"> </div>
            
            
            <h4>

BANGLORE OFFICE 
</h4>
<p class="address2">
Astha Credit & Securities Pvt Ltd  
<br>
1723/D,K.B.Complex,1st Floor,Near Navarang Circle,</br> 
                  MKK Road 2nd Stage, 2nd Block, Rajaji Nagar  </br> 
Bangalore (Karnataka) - 560010   </br>

                     080-41469300 , 9977700239 </p>


       


        
     <!--    <img src="<?php echo base_url();?>content/images/map.jpg" alt="" class="map"/>    -->
        </div>
    </div>
</section>	






<script>

function validateEmail(email)
{
	var emailReg = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
	var valid = emailReg.test(email);

	if(!valid) 
	{
		return 2;
	} 
	else
	{
		return 1;
	}
}

function isNumberKey(txt, evt) 
{
    //alert(evt.keyCode);
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    var len = $(txt).val().length;
    var index = $(txt).val().indexOf('.');
    var str = $(txt).val();
    var res = str.split(".");
    var charAfterdot = (len+1) - index;
    if(charCode == 9){
            return true;
    } 
	else 
	{
        if (charCode > 31 && (charCode < 48 || charCode > 57)) 
		{
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

function validate_contactUs(){
    //alert('bbbb');
    var err=0;
      var name,email,mob_no,msg;
      name=$('#name').val();
      email=$('#email').val();
	  mob_no=$('#ph_no').val();
	  msg=$('#msg').val();
      
      
      if(name==''){
        $('#name').val('');
        $('#name').css({'border-color' : '#FF0000'});
        $('#name').attr("placeholder", "Please Enter Your Name");
		$('#name').focus();
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
        $('#ph_no').val('');
        $('#ph_no').css({'border-color' : '#FF0000'});
        $('#ph_no').attr("placeholder", "Please Enter Mobile Number");
		$('#ph_no').focus();
        err=0;  
      } else if(msg==''){
        $('#msg').val('');
        $('#msg').css({'border-color' : '#FF0000'});
        $('#msg').attr("placeholder", "Type Your Message Here.....");
		$('#msg').focus();
        err=0;  
      } else {
        err=1;  
      }
      
     
}


</script>

