<div class="container2">

  <form id = "upiForm" action="javascript:void(0);" method="post">
    <table width="100%" cellpadding="0" cellspacing="0" style=" margin:3% 0; float:left;">
      <tr>
        <td width="30%" style="padding:8px 10px; border-top:1px solid #ccc; border-left:1px solid #ccc;border-right:1px solid #ccc;">Client Code</td>
        <td width="70%" style="padding:8px 10px; border-top:1px solid #ccc; border-right:1px solid #ccc;">
          <input  type="text" value="" id="client_code" name="client_code" placeholder="Enter Client Code" class="form-control" required="required"/>
        </td>
      </tr>
      <tr>
        <td width="30%" style="padding:8px 10px; border-top:1px solid #ccc; border-left:1px solid #ccc;border-right:1px solid #ccc;">Account Type</td>
        <td width="100%" style="padding:8px 10px; border-top:1px solid #ccc; border-right:1px solid #ccc;">
          <select form="upiForm" name="Account_Type" class="form-control" required="required" id="account_type">
            <option value="NSE" selected>NSE</option>
            <!-- <option value="MCX" >MCX</option> -->
          </select>
        </td>
      </tr>
      <tr>
        <td width="30%" style="padding:8px 10px; border-top:1px solid #ccc; border-left:1px solid #ccc;border-right:1px solid #ccc;">Pay Ammount</td>
        <td width="70%" style="padding:8px 10px; border-top:1px solid #ccc; border-right:1px solid #ccc;"><input  type="number" value="" id="amount" name="amount" placeholder="Enter Amount" class="form-control" required="required" class="alphaonly"/></td>
      </tr>
      <tr>
        <td width="30%" style="padding:8px 10px; border-top:1px solid #ccc; border-left:1px solid #ccc;border-right:1px solid #ccc;">VPA</td>
        <td width="70%" style="padding:8px 10px; border-top:1px solid #ccc; border-right:1px solid #ccc;"><input  type="text" value="" id="vpa" name="vpa" placeholder="Enter your UPI Id" class="form-control" required="required"/></td>
      </tr>
      <tr>
        <td id="status_box" colspan="2" style="padding:8px 10px; border-top:1px solid #ccc;color:red;font-size: 20px"></td>
      </tr>
      
      <tr>
        <td colspan="2" style="padding:8px 10px; border-top:1px solid #ccc;">
          <div class="g-recaptcha" data-sitekey="6LeDaxcUAAAAADakMBKVFxbge8J0w-0uCFgbiqUE"></div> 
          <input type="submit" id="submit" onClick="pay();" value="Pay Now" style="width:28%; padding:10px 10px; background:#325170; color:#fff; text-transform:uppercase; border:none; font-weight:400; font-size:16px; display:block; text-align:center; margin:0 auto;"/>
        </td>

      </tr>
      
      <tr>

      </tr>
    </table>
    * Note :- Maximum single transaction limit Rs. 100000 
  </form>
</div>
<script>
window.onbeforeunload = closingCode;
function closingCode(){

   window.clearInterval(window.timer_1);
   window.clearInterval(window.timer);
}
function disableForm(toggle){
  var form = document.getElementById("upiForm");
  var elements = form.elements;
  for (var i = 0, len = elements.length; i < len; ++i) {
      elements[i].readOnly = toggle;
  }
  $("#submit").attr("disabled", toggle);
  document.getElementById("account_type").disabled=toggle;
}
function startTimer(data){
  var account_type = $('#account_type').val();
  window.timer = window.setInterval(function(){
    $.ajax({
      url: '<?php echo base_url(); ?>UpiPayment/checkUpiStatus',
      data:{'txnId': data[0], 'upiTxnId': data[1],'account_type': account_type},
      type: 'POST',
      dataType: 'json',
      success : function(respdata){
        if(respdata[4]=='FAILURE'){
          clearInterval(window.timer);
          clearInterval(window.timer_1);
          disableForm(false);
          $('#status_box').html('Payment failed. Kindly retry.');
        }else if(respdata[4]=='SUCCESS'){
          $('#status_box').html('Payment Successful.');
          clearInterval(window.timer) ;
          clearInterval(window.timer_1);
        }else if(respdata[4]=='PENDING'){

        }else if(respdata[4]=='EXPIRED'){
          disableForm(false);
          clearInterval(window.timer);
          clearInterval(window.timer_1);
          $('#status_box').html('Transaction Timed out. Please confirm the payment through your UPI App');
        }else if(respdata[4]=='REJECTED'){
          disableForm(false);
          clearInterval(window.timer);
          clearInterval(window.timer_1);
          $('#status_box').html('Payment was rejected. Please make sure your UPI Id is linked to your registered accounts');
        }else if(respdata[4]=='SPAM'){
          disableForm(false);
          clearInterval(window.timer) ;
          clearInterval(window.timer_1);
          $('#status_box').html('Payment was marked as spam by the provider. Please try again.');
        }else if(respdata[4]=='FAILED'){
          disableForm(false);
          clearInterval(window.timer) ;
          clearInterval(window.timer_1);
          if(respdata[6]=="B3"){
            $('#status_box').html('Your UPI Id is not linked to the accounts registered with us. ');  
            disableForm(false);
          }else{
            $('#status_box').html('Transaction failed. Please try again or contact support');  
            disableForm(false);
          }
          
        }
        console.log(respdata);
      },
      error: function(data){
        alert('error occured.');
      }
    })
  }, 5000);
  var i =7*60*1000;
    window.timer_1 = window.setInterval(function(){
      minutes = Math.floor(i/60/1000);
      seconds = Math.floor(i%60000)/1000
      if(seconds.toString().length==1){
        seconds = "0"+seconds;
      }
      $('#status_box').html("Time left: "+minutes+":"+seconds+"\nPlease confirm the payment through your mobile app.");
      i = i-1000;
    if(i<=0){
      clearInterval(window.timer);
      $('#status_box').html('Request Timed Out. Please Try Again');
      disableForm(false);
    }
  },1000);

}
function capturePayment(data){
  console.log(data);
  $.ajax({
        url:'<?php echo base_url(); ?>UpiPayment/transferwithUpi',
        data:data,
        type:'POST',
        dataType: 'json',
                  success : function(respdata){
                    if(respdata["status"] == "success"){
                      console.log(respdata["string"]);
                      console.log(respdata["response"]);
                      startTimer(respdata["response"]);  
                    }else if(respdata["status"] == "error") {
                      $('#status_box').html(respdata['error_message']);
                      disableForm(false);
                    }
                    else{
                      $('#status_box').html('Unable to fetch your account details. Please contact support');
                      disableForm(false);
                    }
                    
                  },
                  error : function(respdata){
                    $('#status_box').html(respdata['error_message']);
                    disableForm(false);
                  }
                });
}

function checkVPA(data){
  $('#status_box').html('Checking if UPI Id is valid ..');
  $.ajax({
      url:'<?php echo base_url(); ?>UpiPayment/checkVPA',
      data:data,
      type:'POST',
      dataType: 'json',
                cache: false,
                async : true,
                success : function(respdata){
                  if (respdata[3]=='VE'){
                    capturePayment(data);  
                  }else{
                    console.log(respdata)
                    $('#status_box').html('Invalid VPA Id');
                    disableForm(false);
                  }
                  
                },
                error : function(respdata){
                  alert('Error occured while checking VPA Id. Please try again.');
                  disableForm(false);
                }
              });
}
function pay(){
  disableForm(true);
  var client_code = $('#client_code').val();
  var account_type = $('#account_type').val();
  var amount = $('#amount').val();
  var vpa = $('#vpa').val();
  var data = {'client_code':client_code,'account_type':account_type, 'amount': amount,'vpa': vpa}
  if(vpa != '8451800511@upi'){
    if(amount <500){
     alert('Minimum Rs 500 need to be deposited.'); 
     disableForm(false);
    }else{
      
    vpaStatus = checkVPA(data);      
    }
  }else{
    vpaStatus = checkVPA(data);    
  }
  
}

</script>

