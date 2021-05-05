<section class="open_account">
<div class="container">

<div class="clear"></div>
<main class="o-main">
  <div class="o-container">

    <div class="o-section">
      <div id="tabs" class="c-tabs no-js">
        <div class="c-tabs-nav">
          <a href="#" class="c-tabs-nav__link is-active">
            <span>Open New Ticket</span>
          </a>
          <a href="#" class="c-tabs-nav__link">
            <span>Check Ticket Status</span>
          </a>
    
        </div>
        <div class="c-tab is-active">
          <div class="c-tab__content">
          <p><?php echo $this->session->flashdata('statusMsg'); ?></p>
    <form class="ticket_form"  method="post" action="<?php echo base_url(); ?>support/addTicket" enctype="multipart/form-data" onsubmit="return validation();" >
        <p>Please fill in the form below to open a new ticket.</p>
        <label>Help Topic:</label>
        <select id="issue_category" name="issue_category">
            <option value="" selected="selected">- Select a Help Topic -</option>
            <?php
            for($i=0;$i<$totGetCategory;$i++){
               
            ?>
                <optgroup label="<?php echo $getCategory[$i]['issue_category']; ?>" >
                <?php
                for($j=0;$j<$totGetSubCategory[$i];$j++){
                ?>
                    <option value="<?php echo $getSubCategory[$i][$j]['id']; ?>"><?php echo $getSubCategory[$i][$j]['issue_category']; ?></option>
                <?php
                }
                ?>    
                </optgroup>
                
             <?php
                
            }
             ?>        
        </select>
        <div class="clear"></div>
      <!--  <p>Your Information</p> -->
        <label>Client Code:</label>
        <input type="text" placeholder="Client Code ( If Available )" id="support_client_code" name="support_client_code" /><input type="button" class="reset" placeholder="" value="View" onclick="getName();"/>
        <label>Name:</label>
        <input type="text" placeholder="Name" id="support_name" name="support_name" />
        <label>E-mail Id:</label>
        <input type="text" placeholder="E-mail" id="support_email" name="support_email"/>
        <label>Mobile No:</label>
        <input type="text" placeholder="Mobile No" id="mobile_no" name="mobile_no"  onkeypress='return isNumberKey(this,event);'  />
      
    <!--  <label>Registered Mobile No:</label>
        <input type="text" placeholder=""/>  -->
        <div class="clear"></div>
    <!--   <p>Ticket details</p> -->
        <label>Subject :</label>
        <input type="text" placeholder="Subject" id="subject" name="subject" /> 
        <label>Details :</label>
        <textarea  placeholder="Details on the reason(s) for opening the ticket." id="details" name="details"></textarea>
        <label>Attachments :</label>
        <input type="file" id="userFiles" name="userFiles" id="uploader">
       <label>&nbsp;</label>
        <input type="submit" class="create" placeholder="" value="Create" name="fileSubmit"/>
        <input type="reset" class="reset" placeholder="" value="Reset"/>
    </form>
          </div>
        </div>
        <div class="c-tab">
          <div class="c-tab__content">
    <form class="ticket_form" action="<?php echo base_url(); ?>support/checkStatus" method="post" onsubmit="return chkTicket();">
    <p>To view the status of a ticket, provide us with the login details below.</p>
        <label>E-mail Id:</label>
        <input type="text" placeholder="Email-id" id="email_id_search" name="email_id_search"/>
        <label>Ticket Id:</label>
        <input type="text" placeholder="Ticket Id" id="ticket_id_search" name="ticket_id_search" />
        <label>&nbsp;</label>
        <input type="submit" placeholder="" value="View Status" />
    </form>
    <div class="clear"></div>
        <span>If this is your first time contacting us or you've lost the ticket ID, please open a new ticket. </span>
          </div>
        </div>
      </div>
    </div>

   
  </div>
</div>
</section>
<script src="<?php echo base_url(); ?>/content/js/tabs.js"></script>
<script>
  var myTabs = tabs({
    el: '#tabs',
    tabNavigationLinks: '.c-tabs-nav__link',
    tabContentContainers: '.c-tab'
  });
  myTabs.init();
  
  
  function getName(){
      
      var code=$('#support_client_code').val();
      
      $.ajax({
            type: "POST",
            //cache: false,
            url: "<?php echo base_url(); ?>support/getName",
            dataType:"JSON",
            data:{code:code},

            //data:dataValue,
            success: function(data) {
                if(data==0){
                    alert('Code not matched')    
                } else {
                    $('#support_name').val(data.fname);
                    $('#support_email').val(data.emailaddress);
                    $('#mobile_no').val(data.ph);
                }
                                
            },
                        
          
          
      });
}
  
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

function validation(){
    var support_name=$('#support_name').val();
    var support_email=$('#support_email').val();
    var mobile_no=$('#mobile_no').val();
    var subject=$('#subject').val();
    var details=$('#details').val();
    
        if(support_name == ''){
        $('#support_name').val('');
        $('#support_name').css({'border-color' : '#FF0000'});
        $('#support_name').attr("placeholder", "Please Enter Your Name");
        $('#support_name').focus();
        return false;
        }
        else if(support_email == ''){
        $('#support_email').val('');
        $('#support_email').css({'border-color' : '#FF0000'});
        $('#support_email').attr("placeholder", "Please Enter Your Email");
        $('#support_email').focus();
        return false;
         } else if(validateEmail(support_email)==2){
        $('#support_email').val('');
        $('#support_email').css({'border-color' : '#FF0000'});
        $('#support_email').attr("placeholder", "Please Enter Email Properly");
        $('#support_email').focus();
        return false;
         } else if(mobile_no==''){
        $('#mobile_no').val('');
        $('#mobile_no').css({'border-color' : '#FF0000'});
        $('#mobile_no').attr("placeholder", "Please Enter Your Mobile Number");
        $('#mobile_no').focus();
        return false;  
         } else if(subject==''){
        $('#subject').val('');
        $('#subject').css({'border-color' : '#FF0000'});
        $('#subject').attr("placeholder", "Please Give A Subject Name");
         $('#subject').focus();
        return false;  
          } else if(details==''){
        $('#details').val('');
        $('#details').css({'border-color' : '#FF0000'});
        $('#details').attr("placeholder", "Please Free to Fill Here");
        $('#details').focus();
        return false;  
        }
       else {return true;} 
      
       
}

function chkTicket(){
    var email_id_search=$('#email_id_search').val();
    var ticket_id_search=$('#ticket_id_search').val();
    if(email_id_search == ''){
        $('#email_id_search').val('');
        $('#email_id_search').css({'border-color' : '#FF0000'});
        $('#email_id_search').attr("placeholder", "Please Enter Your Email");
        $('#email_id_search').focus();
        return false;
         } else if(validateEmail(email_id_search)==2){
        $('#email_id_search').val('');
        $('#email_id_search').css({'border-color' : '#FF0000'});
        $('#email_id_search').attr("placeholder", "Please Enter Email Properly");
        $('#email_id_search').focus();
        return false;
         } else if(ticket_id_search==''){
        $('#ticket_id_search').val('');
        $('#ticket_id_search').css({'border-color' : '#FF0000'});
        $('#ticket_id_search').attr("placeholder", "Please Enter YourTicket Id");
        $('#ticket_id_search').focus();
        return false;  
        }
        else {return true;}
}
</script>
