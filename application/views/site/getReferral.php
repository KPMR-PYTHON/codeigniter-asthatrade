<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-e35f627d-c873-4403-b4f9-01718911f7c9"></div>
<section>
    <div class="container ">
        <div class="banner_account">
            <div class="right_part" style="float:left !important;">
            <h1>Get Referral Benefits</h1>
            
            <center><?php echo  $this->session->flashdata('msg'); ?></center>
                <form id="get_feferral_form" name="get_feferral_form" action="<?php echo base_url()?>Account/getRefferalBenifits" method="post">
                    <input type="text" id="client_id" name="client_id" placeholder="Your Client ID" />
                    <!-- <input type="text" id="user_ph" name="user_ph" placeholder="Your Phone No." onkeypress='return isNumberKey(this,event);'/> -->
                    <input type="text" id="friend_name" name="friend_name" placeholder="Friend's Name" class="alphaonly" />
                    <input type="text" id="friend_ph" name="friend_ph" placeholder="Friend's Phone No." onkeypress='return isNumberKey(this,event);' />
                    <input type="text" id="friend_email" name="friend_email" placeholder="Friend's E-mail ID" />
               
                    <div class="open-account-submit-container">
                        <input id="referral-button" value="SUBMIT" type="button" onClick="validation();">
                    </div>
                </form>
            </div>
            
            <div class="right_part">
            
                <div>
                <h3 style="font-size: 36px;
    color: #989696;
    text-align: left;
    font-weight: 300;
    margin: 20px 0 20px 0;
    letter-spacing: 1px;">Referral Link </h3>
                    <input type="text" name="txt" id = "txt" value="" placeholder="Please enter your email Id"
                           style="display: block;
                           width: 40%;
                           margin-left: 0;
                           font-size: 1rem;
                           font-weight: 300;
                           border: 1px solid #e1e1e1;
                           height: 38px;
                           padding: 6px 10px;
                           background-color: #fff;
                           border: 1px solid #D1D1D1;
                           border-radius: 2px;
                           box-shadow: none;
                           box-sizing: border-box;">
                    <select style="    font-size: 0.875rem;
                            font-weight: 100;
                            color: #4a4a4a;
                            height: 38px;
                            padding: 6px 10px;
                            background-color: #fff;
                            border: 1px solid #D1D1D1;
                            border-radius: 2px;
                            box-shadow: none;
                            box-sizing: border-box;display: none;" name="select" id="select">
                        <option value="">Home</option>
                        <option value="account/openAnAccount">Open An Account</option>
                        <option value="site/about">About Us</option>
                        <option value="site/product">Product</option>
                        <option value="site/pricing">Pricing</option>
                        <option value="brokeragecalculator">Brokerage Calculator</option>
                        <option value="site/margin">Margin calculator</option>
                    </select>
                    <span id="response" hidden> Please Wait</br></span>
                    <input style="background-color: #387ed1;
                           color: #fff;
                           border: 1px solid transparent;
                           border-radius: 2px !important;
                           text-align: center;
                           font-size: 11px;
                           font-weight: 600;
                           line-height: 38px;
                           letter-spacing: .1rem;
                           text-transform: uppercase;
                           text-decoration: none;
                           white-space: nowrap;
                           height: 38px;
                           padding: 0 30px;" type="submit" value="Generate Link" onclick="copyIt()"><br>
                    <input type="text" name="txt1" id = "txt1"  value="" style="display: block;
                           width: 60%;
                           margin-left: 0;
                           font-size: 1rem;
                           font-weight: 300;
                           border: 1px solid #e1e1e1;
                           height: 38px;
                           padding: 6px 10px;
                           background-color: #fff;
                           border: 1px solid #D1D1D1;
                           border-radius: 2px;
                           box-shadow: none;
                           box-sizing: border-box;"><br>

                    <script type = "text/javascript">
                        function copyIt() {
                            document.getElementById("txt1").value = '';
                            document.getElementById("response").style.display = 'block';
                            var x = document.getElementById("txt").value;
                            // var z = document.getElementById("select").value;
                            var y = "<?php echo base_url() ?>"
                            var v = "?c=";
                            $.ajax({
                                  type: "POST",
                                  url: "<?php echo base_url() ?>site/getReferralCode",
                                  data: {"email": x},
                                  success: function(data) {
                                    if(data == 0){
                                      $("#response").html("This email address is not registered with us.");
                                    }
                                    else{
                                      var result = JSON.parse(data);
                                      $('#response').hide();
                                      document.getElementById("txt1").value = y + v + result['referral_id'];
                                    }
                                  },
                                  error: function() {
                                    $("#response").html("AJAX request failed.");
                                  }
                                
                                
                            });
                            
                        }

                    </script>  
                   
                    <div class="social row"> 
                      
                            <a id="tweetShare" class="twitter-share-button">
                                <img src="https://zerodha.com/static/images/twitter-share.svg" style="transition: 0.2s all;
                                     opacity: 0.8;
                                     max-width: 5%;">
                            </a>
                        
                        <script>
                            var link = document.getElementById('tweetShare');
                            // var urls = q1;
                            link.addEventListener('click', function (event) {
                                event.preventDefault();

                                window.open("https://twitter.com/share?url='none'&text=" + document.getElementById("txt1").value);
                                //alert(document.getElementById("txt1").value)
                            }, false);
                        </script>
                      
                            <div class="fb-share-button"  data-layout="button_count" data-size="small" data-mobile-iframe="true">
                                <a style="margin-top: -32px;
    margin-left: 35px;" id="fbshare" class="fb-xfbml-parse-ignore" target="_blank" >
                                    <img src="https://zerodha.com/static/images/facebook-share.svg" style="transition: 0.2s all;
                                         opacity: 0.8;
                                         max-width: 5%;">
                                </a>
                            </div>
                            <script>
                            var link = document.getElementById('fbshare');
                            // var urls = q1;
                            link.addEventListener('click', function (event) {
                                event.preventDefault();

                                window.open("https://www.facebook.com/sharer/sharer.php?u=" + document.getElementById("txt1").value);
                               // alert(document.getElementById("txt1").value)
                            }, false);
                        </script>
                            <a style="    margin-top: -32px;
    margin-left: 70px;" id="linkshare" target="_new">
                                <img src="https://zerodha.com/static/images/linkedin-share.svg" alt="linkedin share button" style="transition: 0.2s all;
                                     opacity: 0.8;
                                     max-width: 5%;" />
                            </a>
                       
                        <script>
                                var link = document.getElementById('linkshare');
                                // var urls = q1;
                                link.addEventListener('click', function (event) {
                                    event.preventDefault();

                                    window.open("http://www.linkedin.com/shareArticle?mini=true&url=" + document.getElementById("txt1").value);
                                   // alert(document.getElementById("txt1").value)
                                }, false);
                            </script>
                        
                    </div>
                </div>
            </div>
        </div>
        
    </div>

</section>


 <section>
    <div class="container ">
        <div class="benifit">
            
            

           
                    <div class="benifit_left">
                        <ul>
<li>Contact us - Harsha Shrivastava- 07554268562 </li>
<!-- <li> 10% sharing  per month</li>


<li>You have to Registered referral details on website before a/c opening </li>
                        </ul>
                    </div>
                    
                    <div class="benifit_ryt">
                        <ul>
                            <li>Refer & Earn Earn Rs.250 when your friend and family opens an account & get 10% brokerage every time they trade </li>
<li>All Earnings will be paid from Alliance Astha,Authorised Person of Astha Credit & Securities Pvt. Ltd. and Marketing Partner.</li>-->

                        </ul>
                    </div>

        </div>
        
    </div>
</section> 





<!--
<section>
    <div class="container ">
        <div class="benifit">
            
            
            <h2>Terms & Condition :</h2>
            <p>Astha Trade brings Referral Program, Now Refer a friend and earn benefit. Terms & Condition : </p>
                    <div class="benifit_left">
                        <ul>
                            <li>25% sharing </li>


<li>You have to Registered referral details on website before a/c opening.</li>
                        </ul>
                    </div>
                    
                    <div class="benifit_ryt">
                        <ul>
                            <li>Minimum payout will be Rs. 2000.</li>
<li>All Earnings will be paid from Alliance Astha,Authorised Person of Astha Credit & Securities Pvt. Ltd. and Marketing Partner.</li>

                        </ul>
                    </div>

        </div>
        
    </div>
</section>

-->


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
    var client_id,user_ph,friend_name,friend_ph,friend_email;
    client_id = $('#client_id').val(); 
    // user_ph = $('#user_ph').val();
    friend_name = $('#friend_name').val();
    friend_ph =  $('#friend_ph').val();
    friend_email = $('#friend_email').val();
    if(user_ph==''){
        $('#user_ph').val('');
        $('#user_ph').css({'border-color' : '#FF0000'});
        $('#user_ph').attr("placeholder", "Please Enter Your Phone Number");
        err=0;    
      } else if(friend_name==''){
        $('#friend_name').val('');
        $('#friend_name').css({'border-color' : '#FF0000'});
        $('#friend_name').attr("placeholder", "Please Enter Your Friend's Name");
        err=0;  
      }
     else if(friend_ph==''){
        $('#friend_ph').val('');
        $('#friend_ph').css({'border-color' : '#FF0000'});
        $('#friend_ph').attr("placeholder", "Please Enter Your Friend Phone Number");
        err=0;    
      }
      else if(friend_email == ''){
        $('#friend_email').val('');
        $('#friend_email').css({'border-color' : '#FF0000'});
        $('#friend_email').attr("placeholder", "Please Enter Your Friend's Email");
        err=0;
      } else if(validateEmail(friend_email)==2){
        $('#friend_email').val('');
        $('#friend_email').css({'border-color' : '#FF0000'});
        $('#friend_email').attr("placeholder", "Please Enter Email Properly");
        err=0;
      }
      else{document.getElementById("get_feferral_form").submit();}
}
</script>
